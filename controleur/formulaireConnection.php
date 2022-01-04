<?php

include_once "../controleur/accesBDD.php";

class formulaireConnection extends connectionBDD
{

    public function __construct()
    {
        $this->bdd = new connectionBDD();
    }

    function checkEmailPseudo($emailPseudo)
    {

        $count = $this->bdd->selectUsersPseudo($emailPseudo);

        switch ($count) {
            case 1:
                echo "✅ Ce pseudo a été trouvé";
                $resultat = 1;
                break;
            case 0:
                $count = $this->bdd->selectUsersEmail($emailPseudo);
                switch ($count) {
                    case 1:
                        echo "✅ Cet email a été trouvé";
                        $resultat = 2;
                        break;
                    case 0:
                        echo "❌ Pseudo ou email introuvable";
                        $resultat = 0;
                        break;
                }
        }

        return $resultat;
    }

    function checkPasswordPseudo($pseudo, $password)
    {

        $psw = $this->bdd->selectUsersPseudoPsw($pseudo);

        if (password_verify($password, $psw)) {
            $resultat =  1;
        } else {
            echo "❌ Mot de passe incorrect";
            $resultat = 0;
        }

        return $resultat;
    }

    function checkPasswordEmail($email, $password)
    {

        $psw = $this->bdd->selectUsersEmailPsw($email);
        if (is_array($psw)) {
            if (password_verify($password, $psw['password'])) {
                $resultat =  1;
            } else {
                echo "❌ Mot de passe incorrect";
                $resultat = 0;
            }
        }

        return $resultat;
    }
}
