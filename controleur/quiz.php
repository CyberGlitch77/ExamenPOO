<?php
session_set_cookie_params(600);
session_start();
class quiz extends connectionBDD
{

   function __construct()
   {
      // Initialisations générales
      $this->max_quest = 10; // Nbre maximum de questions à poser par quiz
      $this->nbr_rec = 0; // nombre de records dans la table (inconnu au départ)
      $this->bdd = new connectionBDD();
   }

   function jeu()
   {
      $this->nbr_rec = $this->bdd->numQuestions();

      if ($this->nbr_rec == null) {
         if (!isset($_SESSION["nq"]))  // La toute première fois
         {
            $nq = 1;  // nombre de questions posées
            $score = 0;
            $tab_tir = [];
            $_SESSION["nq"] = $nq;
            $_SESSION["tab_tir"] = $tab_tir;
            $_SESSION["score"] = $score;
         } else { // Toutes les autres fois

            $nq = $_SESSION["nq"];
            $tab_tir = $_SESSION["tab_tir"];
            $score = $_SESSION["score"];
            $ok = $_SESSION["ok"];
            $rep = $_GET["rep"];
            if ($rep == $ok) {
               $score++;
            }
            $nq++;
            $_SESSION["nq"] = $nq;
            $_SESSION["score"] = $score;
         }

         // fin du quiz
         if ($nq > $this->max_quest) {

            echo "Votre quiz est terminé avec le score de <b>" . $score . " / " . $this->max_quest . "</B><br>";
            echo "<a href=\"" . $_SERVER["PHP_SELF"] . "\"> Je voudrais refaire un autre quiz </a>";
            session_destroy();
         } else { // Pas la fin du quiz

            //Générer un nombre aléatoire de 0 à $nbr_rec - 1
            $tirage = TRUE;
            while ($tirage) {
               $x = rand(1, $this->nbr_rec);  // Générer un nombre aléatoire
               if (!in_array($x, $tab_tir)) { //   Vérifier que le n° n'est pas déja sorti
                  $tab_tir[] = $x;
                  $_SESSION["tab_tir"] = $tab_tir;
                  $tirage = FALSE;
               }
            }
         }

         $resultat = $this->bdd->answers($x);

         return $resultat;
      } else {
         echo "❌ Echec de la connection à la base de données";
      }
   }
}
