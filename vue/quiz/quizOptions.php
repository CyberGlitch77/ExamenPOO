<?php
include_once "../../controleur/utilitaires/session.php";
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <?php if (!isset($_SESSION["pseudo"]) && !isset($_SESSION["emailPseudo"])) { ?>
        <script type="module" src="../../controleur/JS/buttonConnection.js" async></script>
    <?php } ?>
    <title>Options du Quiz</title>
</head>

<body>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">

        <h1 class="titre">Options du quiz</h1>
        <hr>
        <h2 class="titre">Cette page permet de choisir les options de votre chrono qui sont indispensable avant le quiz!!!</h2>
        <hr>
        <?php
        if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
        ?>
            <form action="quizOptions.php" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h3 class="titre">Vous devez choisir un type de minuterie :<br></h3>

                <h3><input type="radio" name="type" value="1" checked="checked">À questions<br>
                    Une minuterie ayant un petit compteur qui se réactualise à chaque question</h3>

                <h3><input type="radio" name="type" value="2">Entier<br>
                    Une minuterie ayant un grand compteur qui ne se réactualise pas après chaque question</h3>

                <h3 class="titre">Vous devez choisir le programme qui va gérer compteur de la minuterie :<br></h3>

                <h3><input type="radio" name="prog" value="1" checked="checked">Fixe<br>
                    Vous avez 15 secondes si vous prenez la minuterie à questions ou 1minute30 pour la minuterie entière</h3>

                <h3><input type="radio" name="prog" value="2">Variable<br>
                    Si vous prenez la minuterie à questions vous aurez un compteur aléatoire se situant entre 10 secondes et 45 secondes ou 1minute à 2minutes pour la minuterie entière</h3>

                <input type="submit" id='button' value="C'est parti">
            </form>
            <?php
            if (isset($_POST['type']) && isset($_POST['prog'])) {
                $_SESSION['type'] = $_POST['type'];
                $_SESSION['prog'] = $_POST['prog'];
                $_SESSION['appele'] = false;
                header("Location: ./quiz.php");
            }
        } else { ?>
            <h2 class="titre">Pour pouvoir jouer au quiz vous devez vous connecter!!!</h2>
            <div class="centrer">
                <button id="inscription" class="leftbutton">Inscription</button>
                <button id="connection" class="rightbutton">Connection</button>
            </div>
        <?php } ?>
    </div>
    <footer id="footer"><?php include_once '../design/footer.php' ?></footer>
</body>

</html>