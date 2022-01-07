<?php
include_once "../../controleur/utilitaires/session.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <script type="module" src="../../controleur/JS/buttonValidation.js" async></script>
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <title>Menu admin</title>
</head>

<body>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)) {
        ?>
            <h1 class="titre">Administration</h1>
            <hr>
            <button id="buttonleft">Administration joueur</button>
            <button id="buttonright">Administration quiz</button>
        <?php
        } else { ?>
            <h2 class="titre">Vous n'avez pas accès à cette ressource</h2>
        <?php
        }
        ?>
    </div>
</body>

</html>