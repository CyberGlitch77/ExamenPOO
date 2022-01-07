<?php
include_once "../../controleur/admin/quiz.php";
$connection = new quizAdmin();
$connection->deleteReponse($_GET['num_quest']);
header('location: ./quizAdmin.php');
?>