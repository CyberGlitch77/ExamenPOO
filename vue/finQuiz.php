<?php
include_once "../controleur/session.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Fin du Quiz</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <?php
    include_once "./menu.php";
    ?>
    <div id="bords">
        <h2>Votre quiz est terminé avec le score de <?php echo $_SESSION["score"]; ?> / <?php echo $_SESSION["max_quest"]; ?><br></h2>
        <a href="./quiz.php"> Je voudrais refaire un autre quiz </a>
    </div>
</body>

</html>