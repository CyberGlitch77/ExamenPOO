<?php
include_once "../controleur/session.php";
include_once "../controleur/quiz.php";
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="../controleur/timer.js" async></script>
    <title>Quiz à questions</title>
</head>

<body onload="timedText(15)">
    <?php
    include_once "./menu.php";
    $quiz = new quiz();
    if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
        $resultat = $quiz->jeuFixe();
    }
    ?>
    <div id="bords">

        <h1 class="titre">Quiz Fixe</h1>
        <hr>
        <?php
        if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
        ?>
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <legend class="titre">Question n° <B> <?php echo $_SESSION['nq']; ?> </b> - Votre score actuel : <b> <?php echo $_SESSION["score"] ?> / <?php echo $_SESSION["nq"] - 1 ?></B>
                        <p id="timer"></p>
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

                $_SESSION['reponseUtilisateur'][$_SESSION['i']-1] = $_SESSION['rep'];
            }
            $_SESSION["ok"] = $resultat['reponse'];
            $_SESSION['i']++;
        } else { ?>
            <h2 class="titre">Pour pouvoir jouer vous devez vous inscrire ou vous connecter</h2>
            <div class="centrer">
                <button id="inscription" class="leftbutton">Inscription</button>
                <button id="connection" class="rightbutton">Connection</button>
            </div>
        <?php } ?>
    </div>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>