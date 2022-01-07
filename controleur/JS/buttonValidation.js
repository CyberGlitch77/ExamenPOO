import { redirection } from "./redirection.js";

let ad = new redirection();

document.getElementById("buttonleft").onclick = function () {
  ad.joueurAd();
};

document.getElementById("buttonright").onclick = function () {
  ad.quizAd();
};
