<?php

class Formulaire {

    public function __construct(string $pseudo, string $email) { 
        $this->pseudo = $pseudo;
        $this->email = $email;
    }

    function verificationPseudo($pseudo){
        switch(false){

        case (preg_match('{3,12}',$pseudo)):

            echo "Votre pseudo doit avoir entre 3 et 12 caractères";

        case (preg_match('[a-zA-Z]',$pseudo)):

            echo "Votre pseudo doit avoir au moins une lettre";

        case (preg_match('[0-9]',$pseudo)):
            
            echo "Votre pseudo doit avoir au moins un chiffre";
            return 0;

        default : 

            echo "";
            return 1;
        }
    }

    function verificationEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        }else{

        }
    }
}
?>
