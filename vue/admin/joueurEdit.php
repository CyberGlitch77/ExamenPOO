<?php
include_once "../../controleur/utilitaires/session.php";
include_once "../../controleur/admin/joueur.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <title>Nouveau enregistrement</title>
</head>

<body>
    <?php
    $connection = new joueurAdmin();
    $result = $connection->selectionUser($_GET['num_user']);
    ?>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)) {
        ?>
            <h1 class="titre">Admin joueur</h1>
            <hr>
            <div class="titre"><a href="./joueurAdmin.php">Back to List</a></div>
            <h2>Modifier un enregistrement</h2>
            <form action="" method="POST">
                <div>
                    <label>Pseudo: </label><br>
                    <input type="text" name="pseudo" value="<?php echo $result['pseudo']; ?>" required />
                </div>
                <div>
                    <label>Email: </label><br>
                    <input type="text" name="email" value=<?php echo $result['email']; ?> required>
                </div>
                <div>
                    <label>Mot de passe: </label><br>
                    <input type="text" name="psw" value=<?php echo $result['password']; ?> required>
                </div>
                <div>
                    <label>Admin: </label><br>
                    <input type="text" name="admin" value=<?php echo $result['admin']; ?> required>
                </div>
                <div>
                    <label>Score totale: </label><br>
                    <input type="text" name="scoreTotal" value=<?php echo $result['scoreTotal']; ?> required>
                </div>
                <div>
                    <label>Essais: </label><br>
                    <input type="text" name="essais" value=<?php echo $result['essais']; ?> required>
                </div>
                <div>
                    <label>Score pondéré: </label><br>
                    <input type="text" name="scorePond" value=<?php echo $result['scorePond']; ?> required>
                </div>
                <div>
                    <input name="envoyer" type="submit" value="Modifier">
                </div>
            </form>
        <?php
            if (!empty($_POST['envoyer'])) {
                try {
                    if ($_POST['psw'] == $result['password']) {
                        $psw = $_POST['psw'];
                    } else {
                        $psw = password_hash($_POST["psw"], PASSWORD_DEFAULT);
                    }
                    $connection->modificationUser($_GET['num_user'], $_POST['pseudo'], $_POST['email'], $psw, $_POST['admin'], $_POST['scoreTotal'], $_POST['essais'], $_POST['scorePond']);
                    header("Location: ./joueurAdmin.php");
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        }
        ?>
    </div>
</body>

</html>