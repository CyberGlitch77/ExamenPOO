<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="./style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./menu.php";
    include_once "../controleur/quiz.php";
    $quiz = new quiz();
    $resultat = $quiz->jeu();
    ?>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>Question n° <B>"<?php echo $resultat['rep']; ?>"</b> - Votre score actuel : <b>"<?php echo $score ?>" / "<?php echo ($nq - 1) ?>"</B></legend>
            <table>
                <tr>
                    <th>"<?php echo $resultat['question']; ?>"</th>
                </tr>
                <tr>
                    <td><input type="radio" name="rep" value="1" checked="checked">"<?php echo $resultat['r1']; ?>"</td>
                </tr>
                <tr>
                    <td><input type="radio" name="rep" value="2">"<?php echo $resultat['r2']; ?>"</td>
                </tr>
                <tr>
                    <td><input type="radio" name="rep" value="3">"<?php echo $resultat['r3']; ?>"</td>
                </tr>
                <tr>
                    <td><input type="radio" name="rep" value="4">"<?php echo $resultat['r4']; ?>"</td>
                </tr>
                <tr>
                    <td><input type="submit" Value="GO"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
    $_SESSION["ok"] = $resultat['reponse']; //memo de la bonne réponse
    ?>
</body>

</html>