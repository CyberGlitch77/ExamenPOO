<?php
include_once "../controleur/session.php";
include_once "../controleur/formulaireConnection.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Connection</title>
</head>

<body>
    <?php
    include_once "./menu.php";
    $valid1 = $valid2 = 0;
    if (isset($_POST["emailPseudo"]) && isset($_POST["pswConn"])) {
        try {
            $formConn = new formulaireConnection();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>
    <div id="bords">
        <h1 class="titre">Connection</h1>
        <hr>

        <form action="connection.php" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table class="centrer">
                <tr>
                    <td> <label for="emailPseudo">Pseudo ou e-mail :</label></td>
                    <td> <input type="text" id="emailPseudo" name="emailPseudo" required><br>
                        <?php
                        if (isset($_POST["emailPseudo"])) {
                            try {
                                $valid1 = $formConn->checkEmailPseudo($_POST["emailPseudo"]);
                            } catch (Exception $e) {
                                echo $e->getMessage();
                            }
                        }
                        ?></td>
                </tr>
                <tr>
                    <td> <label for="pswConn">Mot de passe :</label></td>
                    <td> <input type="password" id="pswConn" name="pswConn" required><br>
                        <?php
                        if ($valid1 == 1) {
                            $valid2 = $formConn->checkPasswordPseudo($_POST["emailPseudo"], $_POST["pswConn"]);
                        } else if ($valid1 == 2) {
                            $valid2 = $formConn->checkPasswordEmail($_POST["emailPseudo"], $_POST["pswConn"]);
                        }
                        ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="titre">
                        <hr> <input type="submit" id="button" value="Connection">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if (($valid1 == 1 || $valid1 == 2) && $valid2 == 1) {

        try {
            $_SESSION["emailPseudo"] = $_POST["emailPseudo"];
            $admin = $formConn->verificationAdmin($_SESSION["emailPseudo"]);
            $_SESSION["admin"] = $admin['admin'];
            header("Location: ./index.php");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        $_POST["confirmPseudo"] = $_POST["email"] = $_POST["confirmEmail"] = $_POST["psw"] = $_POST["confirmPsw"] = null;
    }
    ?>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>