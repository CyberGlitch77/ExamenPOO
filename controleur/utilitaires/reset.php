<?php
include_once "./session.php";
$_SESSION['i'] = 0; $_SESSION["nq"]= null;
header("Location: ../../vue/quiz/quizOptions.php");
?>