import { validationInscription } from "./inscriptionValidation.js";

let erreur = new validationInscription();

document.getElementById("pseudo").oninput = function () {

  var erreurTab = erreur.checkPseudo(this.value);

  console.log(erreurTab[0], erreurTab[1], erreurTab[2]);

  if (erreurTab[0] == null) {
    document.getElementById("erreur1").innerHTML =
      "❌ Votre pseudo doit avoir entre 3 et 12 caractères<br>";
  } else {
    document.getElementById("erreur1").innerHTML = "";
  }

  
};
