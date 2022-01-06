<?php
include_once "../../controleur/utilitaires/session.php";
include_once "../../controleur/quiz/reponseQuiz.php";
$reponse = new reponse();
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Fin du Quiz</title>
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <script type="module" src="../../controleur/JS/buttonQuiz.js" async></script>
</head>

<body>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">
        <h1 class="titre">Le résultat de votre quiz</h1><hr>
        <h2 class="titre">Le score de votre quiz est de <?php echo $_SESSION["score"]; ?> / <?php echo $_SESSION["max_quest"]; ?><br>
            <hr>
        </h2>
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
            <hr>
        <?php
            $i++;
        }
        ?>

        <button id="buttonQuiz">Je voudrais refaire un autre quiz</button>
        <button id="buttonClassement">Voir le classement</button>
    </div>

    <footer id="footer"><?php include_once '../design/footer.php' ?></footer>
</body>

</html>