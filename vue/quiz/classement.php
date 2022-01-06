<?php
include_once "../../controleur/utilitaires/session.php";
include_once "../../controleur/quiz/classementQuiz.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <title>Classement</title>
</head>

<body>
    <?php
    include_once "../../vue/design/menu.php";
    $classement = new classement();
    ?>
    <div id="bords">
        <h1 class="titre">Le classement du quiz</h1>
        <hr>
        <?php
        if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
            $resultat = $classement->classement();
            $i = 1;
            if (!empty($resultat)) {
                foreach ($resultat as $row) { ?>
                    <table>
                        <tr>
                            <td><?php echo $i; ?>. <?php echo $row["pseudo"] ?> a obtenu <?php echo $row["scorePond"]; ?> points en <?php echo $row["essais"] ?> parties</td><br>
                        </tr>
                    </table>
            <?php
                    $i++;
                }
            }
            ?>
        <?php
        } else {
        ?>
            <h2 class="titre">Pour pouvoir jouer au quiz vous devez vous connecter!!!</h2>
            <div class="centrer">
                <button id="inscription" class="leftbutton">Inscription</button>
                <button id="connection" class="rightbutton">Connection</button>
            </div>
        <?php
        }
        ?>
    </div>
    <footer id="footer"><?php include_once '../design/footer.php' ?></footer>
</body>

</html>