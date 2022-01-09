<?php
include_once "../controleur/utilitaires/session.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <script type="module" src="../controleur/JS/buttonConnection.js" async></script>
    <link rel="stylesheet" href="../vue/design/style.css">
    <title>Quiz</title>
</head>

<body>
    <?php
    include_once "./design/menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])) {
        ?>
            <h1 class="titre">Bienvenu à toi
                <?php if (isset($_SESSION["pseudo"])) {
                    echo $_SESSION["pseudo"];
                } else {
                    echo $_SESSION["emailPseudo"];
                } ?></h1>
        <?php
        } else {
        ?>
            <h1 class="titre">Bienvenu sur le quiz de Tintin</h1>
            <hr>

            <h2 class="titre">Si vous voulez avoir accès à tous les salons vous devez vous connecter</h2>
            <div class="centrer">
                <button id="inscription" class="leftbutton">Inscription</button>
                <button id="connection" class="rightbutton">Connection</button>
            </div>
        <?php
        }
        ?>
    </div>
    <footer id="footer"><?php include_once './design/footer.php' ?></footer>
</body>

</html>