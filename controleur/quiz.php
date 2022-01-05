<?php
include_once "../controleur/accesBDD.php";
class quiz extends connectionBDD
{

   function __construct()
   {
      // Initialisations générales
      $this->max_quest = 10; // Nbre maximum de questions à poser par quiz
      $this->nbr_rec = null; // nombre de records dans la table (inconnu au départ)
      $this->resultat = [];
      $this->bdd = new connectionBDD();
   }

   function jeuFixe()
   {
      $this->nbr_rec = $this->bdd->numQuestions();

      if ($this->nbr_rec != null) {
         if (!isset($_SESSION["nq"]))  // La toute première fois
         {
            $nq = 1;  // nombre de questions posées
            $score = 0;
            $tab_tir = [];
            $_SESSION["nq"] = $nq;
            $_SESSION["tab_tir"] = $tab_tir;
            $_SESSION["score"] = $score;
         } else { // Toutes les autres fois
            if (isset($_GET['rep'])) {
               $_SESSION["rep"] = $_GET['rep'];
               if ($_SESSION["rep"] == $_SESSION["ok"]) {
                  $_SESSION["score"]++;
               }
            }
            $_SESSION["nq"]++;
         }

         if (!isset($_SESSION['i']) || $_SESSION['i'] < 0 || $_SESSION['i'] > 10) {
            $_SESSION['i'] = 0;
         }
         // fin du quiz
         if ($_SESSION["nq"] > $this->max_quest) {
            $_SESSION['i']++;
            if (isset($_GET['rep'])) {
               $_SESSION['reponseUtilisateur'][$_SESSION['i'] - 1] = $_SESSION['rep'];
            }
            $_SESSION["nq"] = $_SESSION["tab_tir"] = $_SESSION["ok"] = null;
            $_SESSION['max_quest'] = $this->max_quest;
            header("Location: ./finQuiz.php");
         } else { // Pas la fin du quiz

            //Générer un nombre aléatoire de 0 à $nbr_rec - 1
            $tirage = TRUE;
            while ($tirage) {
               $x = rand(1, $this->nbr_rec);  // Générer un nombre aléatoire
               if (!in_array($x, $_SESSION["tab_tir"])) { //   Vérifier que le n° n'est pas déja sorti
                  $tab_tir[] = $x;
                  $_SESSION["tab_tir"] = $tab_tir;
                  $tirage = FALSE;
               }
            }
         }

         $resultat = $this->bdd->answers($x);

         $_SESSION['questionResultat'][$_SESSION['i']] = $resultat['question'];
         $_SESSION['reponseResultat'][$_SESSION['i']] = $resultat['reponse'];

         return $resultat;
      } else {
         echo "❌ Echec de la connection à la base de données";
      }
   }
}
?>