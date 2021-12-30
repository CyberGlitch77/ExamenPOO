<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Connection</title>
</head>

<body>
    <?php include_once "./menu.php" ?>
    <h1 class="titre">Connection</h1>

    <form action="connection" method="post" action="../controleur/formulaire.php">
        <table class="centrer">
            <tr>
                <td> <label for="pseudo">Pseudo :</label></td>
                <td> <input type="text" id="pseudo" name="pseudo" required></td>
            </tr>
            <tr>
                <td> <label for="email">e-mail :</label></td>
                <td> <input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td colspan="2" class="titre"> <input type="submit" value="Connection"></td>
            </tr>
        </table>
    </form>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>