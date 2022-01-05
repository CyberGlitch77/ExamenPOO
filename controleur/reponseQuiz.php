<?php
include_once "../controleur/accesBDD.php";
class reponse extends connectionBDD
{
    function __construct()
    {
        $this->bdd = new connectionBDD();
    }

    function reponseQuiz($question, $reponse){
        return $this->bdd->selectReponse($question, $reponse);
    }
}
