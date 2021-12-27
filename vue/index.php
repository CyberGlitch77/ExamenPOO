<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <?php include 'controleur/fonctions.php'; ?>
</head>
<body>
    <h1>Quiz</h1>
    <h2>Pour pouvoir jouer vous devez vous inscrire ou vous connecter</h2>
    <button href="<?php header('Location: inscription.php'); ?>">Inscription</button>
    <button href="<?php header('Location: connection.php'); ?>">Connection</button>
</body>
</html>