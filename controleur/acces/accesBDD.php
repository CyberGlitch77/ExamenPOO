<?php

class connectionBDD
{

    public function __construct()
    {
    }

    private function infoBDD()
    {
        $infos['serveur'] = "localhost";
        $infos['name'] = "quiz";
        $infos['login'] = "root";
        $infos['password'] = "";

        return ($infos);
    }

    private function connection()
    {

        $infos = $this->infoBDD();
        if ($connexion = new PDO("mysql:host=$infos[serveur];dbname=$infos[name];charset=utf8", $infos['login'], $infos['password'])) {
            return $connexion;
        } else {
            echo "Echec de la connection à la base de données";
        }
    }

    function numQuestions()
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT COUNT(*) FROM quiz");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat[0];
    }

    function answers($x)
    {

        // Aller chercher la question correspondante au numéro tiré   
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM quiz WHERE num_quest = $x");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat;
    }

    function insertNormalUsers($pseudo, $email, $password)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("INSERT INTO `utilisateurs`(`num_user`, `pseudo`, `email`, `password`, `admin`) VALUES ('null', '$pseudo', '$email', '$password', '0')");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function selectUsersPseudo($pseudo)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM utilisateurs where pseudo = '$pseudo'");
            $requete->execute();
            $requete = $connexion->prepare("SELECT FOUND_ROWS()");
            $requete->execute();
            $row_count = $requete->fetchColumn();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $row_count;
    }

    function selectUsersEmail($email)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM utilisateurs where email = '$email'");
            $requete->execute();
            $requete = $connexion->prepare("SELECT FOUND_ROWS()");
            $requete->execute();
            $row_count = $requete->fetchColumn();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $row_count;
    }

    function selectUsersPseudoPsw($pseudo)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM utilisateurs where pseudo = '$pseudo'");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultat;
    }

    function selectUsersEmailPsw($email)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM utilisateurs where email = '$email'");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat;
    }

    function selectAdminPseudo($pseudo)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM utilisateurs where pseudo = '$pseudo'");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat;
    }

    function selectAdminEmail($email)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM utilisateurs where email = '$email'");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat;
    }

    function selectQuestion($qst)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * 
            FROM quiz
            WHERE question 
            = \"$qst\"");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat;
    }

    function selectUsers(){
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM `utilisateurs` ORDER BY `utilisateurs`.`scorePond` DESC");
            $requete->execute();
            $resultat = $requete->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat;
    }
}
