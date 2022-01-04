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
    include_once "../controleur/formulaireConnection.php";
    $valid1 = $valid2 = 0;
    print(1);
    if (isset($_POST["emailPsw"]) && isset($_POST["pswConn"])) {
        print(1);
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
                    <td> <label for="emailPsw">Pseudo ou e-mail :</label></td>
                    <td> <input type="text" id="emailPsw" name="emailPsw" required><br>
                        <?php
                        if (isset($_POST["emailPsw"])) {
                            try {
                                $valid1 = $formConn->checkEmailPseudo($_POST["emailPsw"]);
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
                            $valid2 = $formConn->checkPasswordPseudo($_POST["emailPsw"], $_POST["pswConn"]);
                        } else if($valid1 == 2){
                            $valid2 = $formConn->checkPasswordEmail($_POST["emailPsw"], $_POST["pswConn"]);
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
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>