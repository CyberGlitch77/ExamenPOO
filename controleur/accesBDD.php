<?php

class connectionBDD
{

    // Initialisations générales
    private $max_quest = 10; // Nbre maximum de questions à poser par quiz
    private $nbr_rec = 0; // nombre de records dans la table (inconnu au départ)

    public function __construct()
    {
    }

    function infoBDD()
    {

        // Déterminer le nombre d'enregistrement dans la table
        $infos['serveur'] = "localhost";
        $infos['name'] = "quiz";
        $infos['login'] = "root";
        $infos['password'] = "";

        return ($infos);
    }

    function connection()
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
            $requete = $connexion->prepare("INSERT INTO utilisateurs (pseudo, email, password, admin) VALUES ($pseudo, $email, $password, 0)");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
