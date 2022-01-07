<?php
include_once "../../controleur/utilitaires/session.php";
include_once "../../controleur/quiz/quiz.php";
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../../vue/design/style.css">
    <?php
    if ($_SESSION['type'] == 1) { ?>
        <script src="../../controleur/JS/timer.js" async></script>
    <?php } else if ($_SESSION['type'] == 2) { ?>
        <script src="../../controleur/JS/timerEntier.js" async></script>
        <?php if ($_SESSION['reset'] == null) { ?>
            <script src="../../controleur/JS/timerEntier.js">
                onload = "stopTimerOnPageLoad(); "
            </script>
    <?php
        }
    }
    ?>
    <title>Quiz à questions</title>
</head>

<body <?php
        switch ($_SESSION["type"]) {
            case 1:
                switch ($_SESSION["prog"]) {
                    case 1:
                        echo 'onload="timedText(15)"';
                        break;
                    case 2:
                        echo 'onload="timedText(Math.floor(Math.random() * (45 - 10 + 1) + 10))"';
                        break;
                }
                break;

            case 2:
                switch ($_SESSION["prog"]) {
                    case 1:
                        if ($_SESSION['reset'] == null) {
                            echo 'onload="timedText(60);"';
                        } else {
                            echo 'onload="startTimerOnPageLoad()"';
                        }
                        $_SESSION['reset'] = 1;
                        break;
                    case 2:
                        if ($_SESSION['reset'] == null) {
                            echo 'onload="timedText(Math.floor(Math.random() * (120 - 60 + 1) + 60))"';
                        } else {
                            echo 'onload="startTimerOnPageLoad()"';
                        }
                        $_SESSION['reset'] = 1;
                        break;
                }
        }
        ?>>
    <?php
    include_once "../../vue/design/menu.php";
    $quiz = new quiz();
    ?>
    <div id="bords">

        <h1 class="titre">Quiz Fixe</h1>
        <hr>
        <?php
        if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
            $resultat = $quiz->jeu();
        ?>
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <legend class="titre">Question n° <B> <?php echo $_SESSION['nq']; ?> </b> - Votre score actuel : <b> <?php echo $_SESSION["score"] ?> / <?php echo $_SESSION["nq"] - 1 ?></B>
                        <p id="timer" name="timer"></p>
                    </legend>
                    <table>
                        <tr>
                            <th><?php echo $resultat['question']; ?>
                                <hr>
                            </th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="rep" value="1" checked="checked">1. <?php echo $resultat['r1']; ?></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="rep" value="2">2. <?php echo $resultat['r2']; ?></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="rep" value="3">3. <?php echo $resultat['r3']; ?></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="rep" value="4">4. <?php echo $resultat['r4']; ?></td>
                        </tr>
                        <tr>
                            <td><input type="submit" Value="GO"></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        <?php
            if (isset($_GET['rep'])) {
                $_SESSION['reponseUtilisateur'][$_SESSION['i'] - 1] = $_SESSION['rep'];
            }
            $_SESSION["ok"] = $resultat['reponse'];
            $_SESSION['i']++;
        } ?>
    </div>
    <footer id="footer"><?php include_once '../design/footer.php' ?></footer>
</body>

</html>