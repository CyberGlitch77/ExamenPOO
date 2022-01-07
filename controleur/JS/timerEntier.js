function timedText(temps) {
  try {
    console.log(typeof sessionStorage);
    if (typeof sessionStorage == "object") {
      var secondsLeft = parseInt(temps);
    } else {
      var secondsLeft = sessionStorage.getItem("counter");
    }
    const timer = setInterval(() => {
      if (secondsLeft <= 0) {
        clearInterval(timer);
        sessionStorage.clear();
        location.assign("../../../ExamenPOO/vue/quiz/finQuiz.php");
        return;
      } else {
        document.getElementById("timer").innerHTML =
          "Temps restant:" + secondsLeft + " seconde(s)";
        sessionStorage.setItem("counter", secondsLeft);
        secondsLeft--;
      }
    }, 1000);
  } catch (err) {
    console.log(err);
  }
}

function startTimerOnPageLoad() {
  var x = parseInt(sessionStorage.getItem("counter"));
  timedText(x - 1);
}

function stopTimerOnPageLoad() {
  sessionStorage.setItem("counter", 0);
  sessionStorage.removeItem("counter");
}
