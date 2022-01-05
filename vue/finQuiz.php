<?php
include_once "../controleur/session.php";
include_once "../controleur/reponseQuiz.php";
$reponse = new reponse();
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
        <h1></h1>
        <h2>Votre quiz est terminé avec le score de <?php echo $_SESSION["score"]; ?> / <?php echo $_SESSION["max_quest"]; ?><br></h2>
        <?php
        $i = 0;
        while ($i < 10) {
            $resultat = $reponse->reponseQuiz($i);
        ?>
            <table>
                <tr>
                    <td><?php echo $i + 1; ?>. <?php echo  $_SESSION['questionResultat'][$i]; ?><br>
                        <?php echo $resultat['resultat']; ?> "<?php echo $resultat["utilisateur"]; ?>"<?php echo $resultat['correct']; ?></td>
                </tr>
            </table>
        <?php
            $i++;
        }
        ?>

        <a href="../controleur/reset.php"> Je voudrais refaire un autre quiz </a>
    </div>
</body>

</html>