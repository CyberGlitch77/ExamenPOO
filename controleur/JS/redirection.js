export class redirection {
  constructor() {}

  inscription() {
    window.location.href = "../../../ExamenPOO/vue/connection/inscription.php";
  }

  connection() {
    window.location.href = "../../../ExamenPOO/vue/connection/connection.php";
  }

  reset() {
    window.location.href =
      "../../../ExamenPOO/controleur/utilitaires/reset.php";
  }

  classement() {
    window.location.href = "../../../ExamenPOO/vue/quiz/classement.php";
  }

  joueurAd() {
    window.location.href = "./joueurAdmin.php";
  }

  quizAd() {
    window.location.href = "./quizAdmin.php";
  }
}