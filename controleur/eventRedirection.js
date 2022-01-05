import { redirection } from "./redirection.js";

let redirect = new redirection();

document.getElementById("inscription").onclick = function () {
  redirect.inscription();
};

document.getElementById("connection").onclick = function () {
  redirect.connection();
};
