<?php
include_once "../../controleur/utilitaires/session.php";
include_once "../../controleur/admin/joueur.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <title>Liste joueurs</title>
</head>

<body>
    <?php
    $connection = new joueurAdmin();
    $result = $connection->selectAllUsers();
    ?>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)) {
        ?>
            <h1 class="titre">Admin joueur</h1>
            <hr>
            <h2 class="titre">Liste des joueurs</h2>
            <div><a class="titre" href="joueurAdd.php" class="button_link"><img src="../images/crud/add.png" title="Ajouter un nouvel enregistrement" />Créer</a></div>
            <table>
                <thead>
                    <tr>
                        <th width="15%">Pseudo</th>
                        <th width="25%">Email</th>
                        <th width="5%">Admin</th>
                        <th width="5%">Score</th>
                        <th width="5%">Essais</th>
                        <th width="5%">ScoreP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($result)) {
                        foreach ($result as $row) {
                    ?>
                            <tr>
                                <td><?php echo $row["pseudo"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["admin"]; ?></td>
                                <td><?php echo $row["scoreTotal"]; ?></td>
                                <td><?php echo $row["essais"]; ?></td>
                                <td><?php echo $row["scorePond"]; ?></td>
                                <td><a href='joueurEdit.php?num_user=<?php echo $row['num_user']; ?>'><img src="../images/crud/edit.png" title="Editer" /></a>
                                    <a href='joueurDelete.php?num_user=<?php echo $row['num_user']; ?>'><img src="../images/crud/delete.png" title="Supprimer" /></a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>

</body>

</html>