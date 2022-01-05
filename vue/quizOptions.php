<?php
include_once "../controleur/session.php";
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <?php
    if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
    ?>
        <script type="module" src="../controleur/timer.js" async></script>
    <?php } else { ?>
        <script type="module" src="../controleur/eventRedirection.js" async></script>
    <?php } ?>
    <title>Options du Quiz</title>
</head>

<body>
    <?php
    include_once "./menu.php";
    ?>
    <div id="bords">

        <h1 class="titre">Options du quiz</h1>
        <hr>
        <h2 class="titre">Cette page permet de choisir les options de votre quiz!!!</h2>
        <?php
        if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
        ?>
            <form action="quizOptions.php" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h3 class="titre">Vous devez choisir un type de quiz :<br></h3>

                <h3><input type="radio" name="quiz" value="1" checked="checked">À questions<br>
                    Vous avez peu de temps mais vous avez une question à la fois</h3>

                <h3><input type="radio" name="quiz" value="2">Entier<br>
                    Vous avez beaucoup de temps mais vous avez aussi toutes les question à la fois</h3>

                <h3 class="titre">Vous devez choisir un chronomètre :<br></h3>

                <h3><input type="radio" name="chrono" value="1" checked="checked">Fixe<br>
                    Vous avez 15 secondes si vous prenez le quiz à questions ou 1minute30 pour le quiz entier</h3>

                <h3><input type="radio" name="chrono" value="2">Variable<br>
                    Si vous prenez le quiz à questions vous aurez un chronomètre aléatoire se situant entre 10 secondes et 45 secondes ou 1minute à 2minutes pour le quiz entier</h3>
                <input type="submit" id='button' value="C'est parti">
            </form>
        <?php
            if(isset($_POST['quiz']) && isset($_POST['chrono'])){
                $_SESSION['quiz'] = $_POST['quiz'];
                $_SESSION['chrono'] = $_POST['chrono'];
                header("Location: ./quiz.php");
            }
        } else { ?>
            <h2 class="titre">Pour pouvoir jouer vous devez vous inscrire ou vous connecter!!!</h2>
            <div class="centrer">
                <button id="inscription" class="leftbutton">Inscription</button>
                <button id="connection" class="rightbutton">Connection</button>
            </div>
        <?php } ?>
    </div>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>