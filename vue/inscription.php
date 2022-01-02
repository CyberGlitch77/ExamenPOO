<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Inscription</title>
</head>

<body>
    <?php
    include_once "./menu.php";
    include_once "../controleur/formulaireInscription.php";
    if (isset($_POST["pseudo"]) && isset($_POST["email"]) && isset($_POST["psw"])) {
        $form = new formulaireInscription($_POST["pseudo"], $_POST["email"], $_POST["psw"]);
    }
    ?>
    <h1 id="centrer">Inscription</h1>

    <form action="Inscription.php" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table class="centrer">
            <tr>
                <td> <label for="pseudo">Pseudo :</label></td>
                <td> <input type="text" id="pseudo" name="pseudo" value="
                <?php
                if (isset($_POST["pseudo"])) {
                    echo $_POST["pseudo"];
                } else {
                    echo "";
                }
                ?>>" required><br>
                    <?php
                    if (isset($_POST["pseudo"])) {
                        $valid1 = $form->verificationPseudo($_POST["pseudo"]);
                    } ?></td>
            </tr>
            <tr>
                <td> <label for="confirmPseudo">Confirmation du pseudo :</label></td>
                <td> <input type="text" id="confirmPseudo" name="confirmPseudo" required><br>
                    <?php
                    if (isset($_POST["confirmPseudo"]) && $valid1 == 1) {
                        $valid2 = $form->confirmationPseudo($_POST["confirmPseudo"]);
                    } ?>
                </td>
            </tr>
            <tr>
                <td> <label for="email">e-mail :</label></td>
                <td> <input type="email" id="email" name="email" required><br>
                    <?php
                    if (isset($_POST("email"))) {
                        $valid3 = $form->verificationEmail($_POST("email"));
                    } ?></td>
            </tr>
            <tr>
                <td> <label for="confirmEmail">confirmation de l'e-mail :</label></td>
                <td> <input type="email" id="confirmEmail" name="confirmEmail" required><br>
                    <?php if (isset($_POST["confirmEmail"]) && $valid3 == 1) {
                        $valid4 = $form->verificationEmail($_POST["confirmEmail"]);
                    } ?></td>
            </tr>
            <tr>
                <td> <label for="psw">Mot de passe :</label></td>
                <td> <input type="password" id="psw" name="psw" required><br>
                    <?php if (isset($_POST["psw"])) {
                        $valid5 = $form->verificationPassword($_POST["psw"]);
                    } ?></td>
            </tr>
            <tr>
                <td> <label for="confirmPsw">confirmation du mot de passe :</label></td>
                <td> <input type="password" id="confirmPsw" name="confirmPsw" required><br>
                    <?php if (isset($_POST["confirmPsw"]) && $valid5 == 1) {
                        $valid6 = $form->confirmationPassword($_POST["confirmPsw"]);
                    } ?></td>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="titre"> <input type="submit" value="Inscription"></td>
            </tr>
        </table>
    </form>
    <?php
    if ($valid1 == $valid2 == $valid3 == $valid4 == $valid5 == $valid6 == 1) {

        try {
            session_set_cookie_params(600);
            session_start();

            $_SESSION["pseudo"] = $_POST["pseudo"];
            $_SESSION["email"] = $_POST["email"];
            $psw = password_hash($_POST["psw"], PASSWORD_DEFAULT);
            $form->insertionInscription($_POST["pseudo"], $_POST["email"], $psw);
            header("Location:./quiz.php");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }else{

    } 
    ?>
    <footer id="footer"><?php include_once './footer.php' ?></footer>
</body>

</html>