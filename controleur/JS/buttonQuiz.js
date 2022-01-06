import { redirection } from "./redirection.js";

let redirect = new redirection();

document.getElementById("buttonQuiz").onclick = function () {
    redirect.reset();
  };
  
  document.getElementById("buttonClassement").onclick = function () {
    redirect.reset();
  };
  