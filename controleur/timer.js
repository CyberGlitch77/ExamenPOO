window.onload = timedText;
function timedText() {
  var div = document.getElementById("timer"),
    counter = 15;
  var timer = setInterval(function () {
    div.innerHTML = "Temps restant:"+ counter + " seconde(s)";
    if (counter === 0) return clearInterval(timer);
    counter--;
  }, 1000);
}
