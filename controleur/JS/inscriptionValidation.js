export class validationInscription {
  constructor() {}

  checkPseudo(pseudo) {
    var erreur = [];
    erreur[0] = pseudo.match(/^.*([\w\d ]){3,}.*$/);
    erreur[1] = pseudo.match(/^.*[a-zA-Z].*$/);
    erreur[2] = pseudo.match(/^.*\d.*$/);
    return erreur;
  }

  checkEmail(email) {
    console.log(email.match(/^\w+([\.-]?\w)*@\w+([\.-]?w+)*(\.\w{2,3})+$/));
    var erreur = "";
    var erreur = email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    return erreur;
  }

  checkPsw(psw) {
    var erreur = [];
    erreur[0] = psw.match(/^.*([\w\d ]){8,}.*$/);
    erreur[1] = psw.match(/^.*[a-zA-Z].*$/);
    erreur[2] = psw.match(/^.*\d.*$/);
    erreur[3] = psw.match(/^.*[\'^£$%&*()}{@#~?><>,!:;|=_+¬-].*$/);
    return erreur;
  }
}
