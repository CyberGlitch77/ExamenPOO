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

    function selectAdmin($pseudo)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM utilisateurs WHERE pseudo = '$pseudo' || email = '$pseudo' ");
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

    function selectUsers()
    {
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

    function selectScore($pseudo)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM `utilisateurs` WHERE pseudo='$pseudo' || email='$pseudo'");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $resultat;
    }

    function updateScore($pseudo, $score,  $essai, $scorePond)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("UPDATE utilisateurs
                                            SET scoreTotal=$score,
                                                essais= $essai,
                                                scorePond=$scorePond
                                            WHERE pseudo='$pseudo' || email='$pseudo'");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function selectAdminJoueur()
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM `utilisateurs` ORDER BY `num_user` ASC");
            $requete->execute();
            $resultat = $requete->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultat;
    }

    function deleteNormalUsers($id)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("DELETE FROM `utilisateurs` WHERE num_user= '$id' ");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function selectUser($id)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM `utilisateurs` WHERE num_user= '$id' ");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return  $resultat;
    }

    function updateUser($id, $pseudo, $email, $password, $admin, $scoreTot, $essais, $scorePond)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("UPDATE 
                                                    `utilisateurs` 
                                                SET 
                                                    pseudo='$pseudo', 
                                                    email='$email', 
                                                    password='$password', 
                                                    admin=$admin, 
                                                    scoreTotal=$scoreTot,
                                                    essais=$essais,
                                                    scorePond=$scorePond
                                                WHERE 
                                                    num_user='$id'");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function selectAdminQuiz()
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM `quiz` ORDER BY `num_quest` ASC");
            $requete->execute();
            $resultat = $requete->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $resultat;
    }

    function insertQuizAnswer($question, $r1, $r2, $r3, $r4, $reponse)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("INSERT INTO `quiz`(`num_quest`, `question`, `r1`,`r2`,`r3`,`r4`, `reponse`) VALUES ('null', '$question', '$r1','$r2','$r3','$r4', '$reponse')");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function deleteAnswer($id)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("DELETE FROM `quiz` WHERE num_quest= '$id' ");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    function selectAnswer($id)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("SELECT * FROM `quiz` WHERE num_quest= '$id' ");
            $requete->execute();
            $resultat = $requete->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return  $resultat;
    }

    function updateAnswer($id, $question, $r1, $r2, $r3, $r4, $reponse)
    {
        try {
            $connexion = $this->connection();
            $requete = $connexion->prepare("UPDATE 
                                                    `quiz` 
                                                SET 
                                                question='$question', 
                                                r1='$r1',
                                                r2='$r2',
                                                r3='$r3',
                                                r4='$r4', 
                                                reponse='$reponse'
                                                WHERE 
                                                    num_quest='$id'");
            $requete->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
