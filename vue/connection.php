<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Connection</title>
</head>

<body>
    <?php include_once "./menu.php" ?>
    <h1 class="titre">Connection</h1>

    <form action="connection" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table class="centrer">
            <tr>
                <td> <label for="emailPsw">Pseudo ou e-mail :</label></td>
                <td> <input type="text" id="emailPsw" name="emailPsw" required></td>
            </tr>
            <tr>
                <td> <label for="pswConn">e-mail :</label></td>
                <td> <input type="password" id="pswConn" name="pswConn" required></td>
            </tr>
            <tr>
                <td colspan="2" class="titre"> <input type="submit" value="Connection"></td>
            </tr>
        </table>
    </form>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>