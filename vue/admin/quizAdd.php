<?php
include_once "../../controleur/utilitaires/session.php";
include_once "../../controleur/admin/quiz.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <title>Nouveau enregistrement</title>
</head>

<body>
    <?php
    $connect = new quizAdmin();
    ?>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)) {
        ?>
            <h1 class="titre">Admin quiz</h1>
            <hr>
            <div class="titre"><a href="./quizAdmin.php">Revenir en arrière</a></div>
            <h2>Ajouter une nouvelle question</h2>
            <form action="" method="POST">
                <div>
                    <label>Question: </label><br>
                    <input type="text" name="question" required />
                </div>
                <div>
                    <label>Réponse1: </label><br>
                    <input type="text" name="r1" required></textarea>
                </div>
                <div>
                    <label>Réponse2: </label><br>
                    <input type="text" name="r2" required></textarea>
                </div>
                <div>
                    <label>Réponse3: </label><br>
                    <input type="text" name="r3" required></textarea>
                </div>
                <div>
                    <label>Réponse4: </label><br>
                    <input type="text" name="r4" required></textarea>
                </div>
                <div>
                    <label>Bonne réponse: </label><br>
                    <input type="text" name="reponse" required></textarea>
                </div>
                <div>
                    <input name="envoyer" type="submit" value="Ajouter">
                </div>
            </form>
        <?php
            if (!empty($_POST['envoyer'])) {
                try {
                        $connect->insertReponse($_POST['question'], $_POST['r1'], $_POST['r2'], $_POST['r3'], $_POST['r4'], $_POST['reponse']);
                        header("Location: ./quizAdmin.php");
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        }
        ?>
    </div>
</body>

</html>