<nav>
  <ul>
    <li><a href="./index.php">Accueil</a></li>
    <?php
    switch (session_status()) {
      case !'':
        switch (true) {
          case ($_SESSION["admin"] == 1):
    ?>
            <li><a href="./admin.php">Menu admin</li>
          <?php
            break;
          case (isset($_SESSION["pseudo"]) || isset($_SESSION["email"])):
          ?>
            <li id="left"><a href="./deconnection.php">Se déconnecter</li>
        <?php
            break;
        }
        break;
      default:
        ?>
        <li id="left"><a href="./inscription.php">Inscription</a></li>
        <li id="left"><a href="./connection.php">Connection</a></li>
    <?php
        break;
    }
    ?>
  </ul>
</nav><br>