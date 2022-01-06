<?php
include_once "../../controleur/acces/accesBDD.php";
class reponse extends connectionBDD
{
    function __construct()
    {
        $this->bdd = new connectionBDD();
    }

    function reponseQuiz($i)
    {
        $question = (string)$_SESSION['questionResultat'][$i];

        $resultat = $this->bdd->selectQuestion($question);
        switch ($_SESSION['reponseUtilisateur'][$i]) {
            case 1:
                $reponse['utilisateur'] = $resultat['r1'];
                break;
            case 2:
                $reponse['utilisateur'] = $resultat['r2'];
                break;
            case 3:
                $reponse['utilisateur'] = $resultat['r3'];
                break;
            case 4:
                $reponse['utilisateur'] = $resultat['r4'];
                break;
        }

        switch ($_SESSION['reponseResultat'][$i]) {
            case 1:
                $reponse['resultat'] = $resultat['r1'];
                break;
            case 2:
                $reponse['resultat'] = $resultat['r2'];
                break;
            case 3:
                $reponse['resultat'] = $resultat['r3'];
                break;
            case 4:
                $reponse['resultat'] = $resultat['r4'];
                break;
        }

        if ($reponse['resultat'] == $reponse['utilisateur']) {
            $reponse['correct'] = "✅";
        } else {
            $reponse['correct'] = "❌";
        }
        switch ($_SESSION['reponseUtilisateur'][$i]) {
            case 1:
            case 2:
            case 3:
            case 4:
                $reponse['utilisateur'] = "et vous avez répondu : " . $reponse['utilisateur'];
                break;
            default;
                $reponse['utilisateur'] = "et vous n'avez rien répondu";
                break;
        }
        $reponse['resultat'] = "La réponse est : " . $reponse['resultat'];

        return $reponse;
    }
}
?>