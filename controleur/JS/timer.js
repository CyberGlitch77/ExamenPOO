function timedText(temps) {
  var div = document.getElementById("timer"),
    counter = temps;
  var timer = setInterval(function () {
    div.innerHTML = "Temps restant:"+ counter + " seconde(s)";
    if (counter === 0){
      location.reload(true);
      return clearInterval(timer);
    }
    counter--;
  }, 1000);
}
