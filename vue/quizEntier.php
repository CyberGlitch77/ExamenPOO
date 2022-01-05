<?php
include_once "../controleur/session.php";
include_once "../controleur/quiz.php";
$page = $_SERVER['PHP_SELF'];
$sec = "16";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" http-equiv="refresh" content="<?php echo $sec; ?>;URL='<?php echo $page; ?>'">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script type="module" src="../controleur/timer.js" async></script>
    <title>Document</title>
</head>

<body onload="timedText()">
    <?php
    include_once "./menu.php";

    $quiz = new quiz();
    if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
        $i = 0;
        $resultat = $quiz->jeu();
        $_SESSION['questionResultat'][$i] = $resultat['question'];
        echo $_SESSION['questionResultat'][$i];
        if (isset($_GET['rep'])) {
            $_SESSION['reponseUtilisateur'][$i-1] = $_SESSION['rep'];
        } else if($i-1 >-1) {
            $_SESSION['reponseUtilisateur'][$i-1] = 0;
        }
        echo $_SESSION['reponseUtilisateur'][$i];
        $_SESSION['reponseResultat'][$i] = $resultat['reponse'];
        echo $_SESSION['reponseResultat'][$i];
        $i++;
    }
    ?>
    <div id="bords">

        <h1 class="titre">Quiz Variable</h1>
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
            $_SESSION["ok"] = $resultat['reponse'];
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