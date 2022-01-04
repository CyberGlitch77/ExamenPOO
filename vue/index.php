<?php
include_once "../controleur/session.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <script type="module" src="../controleur/event.js" async></script>
    <link rel="stylesheet" href="./style.css">
    <title>Quizz</title>
</head>

<body>
    <?php
    include_once "./menu.php";
    ?>
    <div id="bords">
        <h1 class="titre">Quiz</h1>

        <h2 class="titre">Pour pouvoir jouer vous devez vous inscrire ou vous connecter</h2>
        <div class="centrer">
            <button id="inscription" class="leftbutton">Inscription</button>
            <button id="connection" class="rightbutton">Connection</button>
        </div>
    </div>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>