<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>

<body>
    <h1>Inscription</h1>
    <form action="inscription" method="post">
        <div>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo">
        </div>
        <div>
            <label for="confirmPseudo">Confirmation du pseudo :</label>
            <input type="text" id="confirmPseudo" name="confirmPseudo">
        </div>
        <div>
            <label for="email">e-mail :</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="confirmEmail">confirmation de l'e-mail :</label>
            <input type="email" id="confirmEmail" name="confirmEmail">
        </div>
        <input type="submit" value="Envoyer votre inscription">
    </form>

</body>

</html>