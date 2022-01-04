<?php
include_once "../controleur/session.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <script type="module" src="../controleur/event.js" async></script>
    <link rel="stylesheet" href="./style.css">
    <title>Quiz</title>
</head>

<body>
    <?php
    include_once "./menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
        ?>
                    <h1 class="titre">Bienvenu à toi <?php  if (isset($_SESSION["pseudo"])){
                echo $_SESSION["pseudo"];
            } else {
                echo $_SESSION["emailPseudo"];
            }?></h1>
        <?php
        } else {
        ?>
            <h1 class="titre">Bienvenu sur le quiz de Tintin</h1>
            <hr>

            <h2 class="titre">Pour pouvoir jouer vous devez vous inscrire ou vous connecter</h2>
            <div class="centrer">
                <button id="inscription" class="leftbutton">Inscription</button>
                <button id="connection" class="rightbutton">Connection</button>
            </div>
        <?php
        }
        ?>
    </div>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>