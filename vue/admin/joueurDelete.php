<?php
include_once "../../controleur/admin/joueur.php";
$connection = new joueurAdmin();
$connection->deleteUser($_GET['num_user']);
header('location: ./joueurAdmin.php');
?>