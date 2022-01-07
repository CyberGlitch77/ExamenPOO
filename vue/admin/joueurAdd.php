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
            <h2>Ajouter un nouveau enregistrement</h2>
            <form action="" method="POST">
                <div>
                    <label>Pseudo: </label><br>
                    <input type="text" name="pseudo" required />
                </div>
                <div>
                    <label>Email: </label><br>
                    <input type="text" name="email" required></textarea>
                </div>
                <div>
                    <label>Mot de passe: </label><br>
                    <input type="text" name="psw" required></textarea>
                </div>
                <div>
                    <input name="envoyer" type="submit" value="Ajouter">
                </div>
            </form>
        <?php
            if (!empty($_POST['envoyer'])) {
                try {
                    $psw = password_hash($_POST["psw"], PASSWORD_DEFAULT);
                    $connection->insertionUser($_POST["pseudo"], $_POST["email"], $psw);
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