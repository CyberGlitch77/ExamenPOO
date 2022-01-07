<?php
include_once "./session.php";
$_SESSION['i'] = 0;
$_SESSION["nq"] = $_SESSION['reset'] = null;
header("Location: ../../vue/quiz/quizOptions.php");
?>