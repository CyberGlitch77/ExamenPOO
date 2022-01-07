<?php

include_once "../../controleur/acces/accesBDD.php";

class joueurAdmin extends connectionBDD
{
    public function __construct()
    {
        $this->bdd = new connectionBDD();
    }

    function selectAllUsers()
    {
        return $this->bdd->selectAdminJoueur();
    }

    function insertionUser($pseudo, $email, $psw)
    {
        $this->bdd->insertNormalUsers($pseudo, $email, $psw);
    }

    function deleteUser($id)
    {
        $this->bdd->deleteNormalUsers($id);
    }

    function modificationUser($id, $pseudo, $email, $password, $admin, $scoreTot, $essais, $scorePond)
    {
        $this->bdd->updateUser($id, $pseudo, $email, $password, $admin, $scoreTot, $essais, $scorePond);
    }

    function selectionUser($id)
    {
        return $this->bdd->selectUser($id);
    }
}
