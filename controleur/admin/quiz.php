<?php

include_once "../../controleur/acces/accesBDD.php";

class quizAdmin extends connectionBDD
{
    public function __construct()
    {
        $this->bdd = new connectionBDD();
    }

    function selectAllQuiz()
    {
        return $this->bdd->selectAdminQuiz();
    }

    function insertReponse($question, $r1, $r2, $r3, $r4, $reponse)
    {
        $this->bdd->insertQuizAnswer($question, $r1, $r2, $r3, $r4, $reponse);
    }

    function deleteReponse($id)
    {
        $this->bdd->deleteAnswer($id);
    }

    function modificationAnswer($id, $question, $r1, $r2, $r3, $r4, $reponse)
    {
        $this->bdd->updateAnswer($id, $question, $r1, $r2, $r3, $r4, $reponse);
    }

    function selectionQuiz($id)
    {
        return $this->bdd->selectAnswer($id);
    }
}
