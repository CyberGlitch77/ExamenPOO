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
    $connection = new quizAdmin();
    $result = $connection->selectionQuiz($_GET['num_quest']);
    ?>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)) {
        ?>
            <h1 class="titre">Admin Quiz</h1>
            <hr>
            <div class="titre"><a href="./quizAdmin.php">Back to List</a></div>
            <h2>Modifier une question</h2>
            <form action="" method="POST">
                <div>
                    <label>Question: </label><br>
                    <textarea type="text" name="question" required ><?php echo $result['question']; ?></textarea>
                </div>
                <div>
                    <label>Réponse1: </label><br>
                    <textarea type="text" name="r1" required><?php echo $result['r1']; ?></textarea>
                </div>
                <div>
                    <label>Réponse2: </label><br>
                    <textarea type="text" name="r2" required><?php echo $result['r2']; ?></textarea>
                </div>
                <div>
                    <label>Réponse3: </label><br>
                    <textarea type="text" name="r3" required><?php echo $result['r3']; ?></textarea>
                </div>
                <div>
                    <label>Réponse4: </label><br>
                    <textarea type="text" name="r4" required><?php echo $result['r4']; ?></textarea>
                </div>

                <div>
                    <label>Bonne reponse: </label><br>
                    <input type="text" name="reponse" value=<?php echo $result['reponse']; ?> required>
                </div>
                <div>
                    <input name="envoyer" type="submit" value="Modifier">
                </div>
            </form>
        <?php
            if (!empty($_POST['envoyer'])) {
                try {
                    $connection->modificationAnswer($_GET['num_quest'], $_POST['question'], $_POST['r1'], $_POST['r2'], $_POST['r3'], $_POST['r4'], $_POST['reponse']);
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