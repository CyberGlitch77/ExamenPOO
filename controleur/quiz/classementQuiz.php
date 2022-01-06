<?php
include_once "../../controleur/acces/accesBDD.php";
class classement extends connectionBDD
{
    function __construct()
    {
        $this->bdd = new connectionBDD();
    }

    function classement(){
        return $this->bdd->selectUsers() ; 
    }
}
?>