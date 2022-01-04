<nav>
  <ul>
    <li><a href="./index.php">Accueil</a></li>
    <?php
    switch (true) {
      case (session_status() == 2):
    ?>
        <li><a href="./quiz.php">Quiz</a></li>
        <?php
        switch (true) {
          case (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])):
        ?>
            <li id="left"><a href="../controleur/deconnection.php">Se déconnecter</a></li>
          <?php
          case (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)):
          ?>
            <li id="left"><a href="./admin.php">Menu admin</a></li>
          <?php
            break;

          default:
          ?>
            <li id="left"><a href="./inscription.php">Inscription</a></li>
            <li id="left"><a href="./connection.php">Connection</a></li>
        <?php
        }
        break; ?>
    <?php
        break;
    }
    ?>
  </ul>
</nav><br>