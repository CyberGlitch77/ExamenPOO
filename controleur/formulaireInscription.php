<?php

include_once "../controleur/accesBDD.php";

class formulaireInscription extends connectionBDD
{

    public function __construct(string $pseudo, string $email, string $password)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->bdd = new connectionBDD();
    }

    function verificationPseudo(string $pseudo)
    {
        switch (true) {

            case (!preg_match('/^[\w\d]{3,12}/', $pseudo)):
                echo preg_match('/^[\w\d]{3,12}/', $pseudo);
                echo "❌ Votre pseudo doit avoir entre 3 et 12 caractères<br>";

            case (!preg_match('/^.*[a-zA-Z].*$/', $pseudo)):
                echo preg_match('/^.*[a-zA-Z].*$/', $pseudo);
                echo "❌ Votre pseudo doit avoir au moins une lettre<br>";

            case (!preg_match('/^.*\d.*$/', $pseudo)):

                echo "❌ Votre pseudo doit avoir au moins un chiffre";
                return 0;

            default:

                echo "✅ Votre pseudo est correct";
                return 1;
        }
    }

    function confirmationPseudo(string $pseudo)
    {
        if (!strcmp($pseudo, $this->pseudo)) {
            echo "✅ Les pseudos correspondent";
            return 1;
        } else {
            echo "❌ Les pseudos ne correspondent pas";
            return 0;
        }
    }

    function verificationEmail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "✅ Votre email est correct";
            $resultat = 1;
        } else {
            echo "❌ Votre email est incorrect";
            $resultat = 0;
        }
        return $resultat;
    }

    function confirmationEmail(string $email)
    {
        if (!strcmp($email, $this->email)) {
            echo "✅ Les emails correspondent";
            $resultat = 1;
        } else {
            echo "❌ Les emails ne correspondent pas";
            $resultat = 0;
        }

        return $resultat;
    }

    function verificationPassword(string $password)
    {
        switch (true) {

            case (!preg_match('/^[\w\d]{8,20}/', $password)):
                echo preg_match('/^[\w\d]{8,20}/', $password);
                echo "❌ Votre mot de passe doit avoir entre 8 et 20 caractères<br>";

            case (!preg_match('/^.*[a-zA-Z].*$/', $password)):

                echo "❌ Votre mot de passe doit avoir au moins une lettre<br>";

            case (!preg_match('/^.*\d.*$/', $password)):

                echo "❌ Votre mot de passe doit avoir au moins un chiffre<br>";

            case (!preg_match('/^.*[\'^£$%&*()}{@#~?><>,!:;|=_+¬-].*$/', $password)):

                echo "❌ Votre mot de passe doit avoir au moins un caractère spécial";
                return 0;

            default:

                echo "✅ Votre pseudo est correct";
                return 1;
        }
    }

    function confirmationPassword(string $password)
    {
        if (!strcmp($password, $this->password)) {
            echo "✅ Les mots de passe correspondent";
            $resultat = 1;
        } else {
            echo "❌ Les mots de passe ne correspondent pas";
            $resultat = 0;
        }
        return $resultat;
    }

    function insertionInscription($pseudo, $email, $password){
        $this->bdd->insertNormalUsers($pseudo, $email, $password);
    }
}
?>