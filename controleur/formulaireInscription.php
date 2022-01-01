<?php

class formulaireInscription {

    public function __construct(string $pseudo, string $email, string $password) { 
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
    }

    function verificationPseudo(string $pseudo){
        switch(false){

        case (preg_match('/^[\w\d]{3,12}$/',$pseudo)):

            echo "❌ Votre pseudo doit avoir entre 3 et 12 caractères<br>";

        case (preg_match('/^.*[a-zA-Z].*$/',$pseudo)):

            echo "❌ Votre pseudo doit avoir au moins une lettre<br>";

        case (preg_match('/^\d+\.?\d*$/',$pseudo)):
            
            echo "❌ Votre pseudo doit avoir au moins un chiffre";
            return 0;

        default : 

            echo "✅ Votre pseudo est correct";
            return 1;
        }
    }

    function confirmationPseudo(string $pseudo){
        if(strcmp($pseudo, $this->pseudo)){
            echo "✅ Les pseudos correspondent";
        }else{ 
            echo "❌ Les pseudos ne correspondent pas";
        }
    }

    function verificationEmail(string $email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "✅ Votre email est correct";
            return 1;
        }else{
            echo "❌ Votre email est incorrect";
        }
    }

    function confirmationEmail(string $email){
        if(strcmp($email, $this->email)){
            echo "✅ Les emails correspondent";
        }else{ 
            echo "❌ Les emails ne correspondent pas";
        }
    }
}
?>