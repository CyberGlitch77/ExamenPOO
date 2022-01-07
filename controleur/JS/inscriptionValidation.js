export class validationInscription {
  constructor() {}

  checkPseudo(pseudo) {
    var erreur = [];
    erreur[0] = pseudo.match(/^[\w\d]{3,12}/);
    erreur[1] = pseudo.match(/^.*[a-zA-Z].*$/);
    erreur[2] = pseudo.match(/^.*\d.*$/);
    return erreur;
  }
}
