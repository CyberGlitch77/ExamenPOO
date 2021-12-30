<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Connection</title>
</head>

<body>
    <?php include_once "./menu.php" ?>
    <h1 id="centrer">Inscription</h1>
    <form id="centrer" action="inscription" method="post">
        <div>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" required>
        </div>
        <div>
            <label for="confirmPseudo">Confirmation du pseudo :</label>
            <input type="text" id="confirmPseudo" name="confirmPseudo" required>
        </div>
        <div>
            <label for="email">e-mail :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="confirmEmail">confirmation de l'e-mail :</label>
            <input type="email" id="confirmEmail" name="confirmEmail" required>
        </div>
        <input type="submit" value="Envoyer votre inscription">
    </form>

    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>