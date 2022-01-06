<nav>
  <ul>
    <li><a href="../../../ExamenPOO/vue/index.php">Accueil</a></li>
    <?php
    switch (true) {
      case (session_status() == 2):
    ?>
        <li><a href="../../../ExamenPOO/controleur/utilitaires/reset.php">Quiz</a></li>
        <li><a href="../../../ExamenPOO/vue/quiz/classement.php">Classement</a></li>
        <?php
        switch (true) {
          case (isset($_SESSION["pseudo"]) || isset($_SESSION["emailPseudo"])):
        ?>
            <li id="left"><a href="../../../ExamenPOO/controleur/utilitaires/deconnection.php">Se déconnecter</a></li>
            <?php
            if ($_SESSION["admin"] == 1) {
            ?>
              <li id="left"><a href="../../../ExamenPOO/vue/admin/admin.php">Menu admin</a></li>
            <?php
            }
            break;

          default:
            ?>
            <li id="left"><a href="../../../ExamenPOO/vue/connection/inscription.php">Inscription</a></li>
            <li id="left"><a href="../../../ExamenPOO/vue/connection/connection.php">Connection</a></li>
        <?php
        }
        break; ?>
    <?php
        break;
    }
    ?>
  </ul>
</nav><br>