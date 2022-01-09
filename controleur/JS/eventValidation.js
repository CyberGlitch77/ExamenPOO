import { validationInscription } from "./inscriptionValidation.js";

let erreur = new validationInscription();

document.getElementById("pseudo").oninput = function () {
  var erreurTab = erreur.checkPseudo(this.value);

  if (erreurTab[0] == null) {
    document.getElementById("erreur1").innerHTML =
      "❌ Votre pseudo doit avoir entre 3 et 12 caractères<br>";
  } else {
    document.getElementById("erreur1").innerHTML = "";
  }

  if (erreurTab[1] == null) {
    document.getElementById("erreur2").innerHTML =
      "❌ Votre pseudo doit avoir au moins une lettre<br>";
  } else {
    document.getElementById("erreur2").innerHTML = "";
  }

  if (erreurTab[2] == null) {
    document.getElementById("erreur3").innerHTML =
      "❌ Votre pseudo doit avoir au moins un chiffre";
  } else {
    document.getElementById("erreur3").innerHTML = "";
  }
};

document.getElementById("email").oninput = function () {
  console.log(this.value);
  err="";
  var valeur = document.getElementById("email").value;
  var err = erreur.checkEmail(valeur);
  if (err == null) {
    document.getElementById("erreur4").innerHTML =
      "❌ Votre email est incorrect";
  } else {
    document.getElementById("erreur4").innerHTML = "";
  }
};

document.getElementById("psw").oninput = function () {
  var erreurTab = erreur.checkPsw(this.value);

  if (erreurTab[0] == null) {
    document.getElementById("erreur5").innerHTML =
      "❌ Votre mot de passe doit avoir entre 8 et 20 caractères<br>";
  } else {
    document.getElementById("erreur5").innerHTML = "";
  }

  if (erreurTab[1] == null) {
    document.getElementById("erreur6").innerHTML =
      "❌ Votre mot de passe doit avoir au moins une lettre<br>";
  } else {
    document.getElementById("erreur6").innerHTML = "";
  }

  if (erreurTab[2] == null) {
    document.getElementById("erreur7").innerHTML =
      "❌ Votre mot de passe doit avoir au moins un chiffre<br>";
  } else {
    document.getElementById("erreur7").innerHTML = "";
  }

  if (erreurTab[3] == null) {
    document.getElementById("erreur8").innerHTML =
      "❌ Votre mot de passe doit avoir au moins un caractère spécial";
  } else {
    document.getElementById("erreur8").innerHTML = "";
  }
};
