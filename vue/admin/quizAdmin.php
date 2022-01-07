<?php
include_once "../../controleur/utilitaires/session.php";
include_once "../../controleur/admin/quiz.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../design/style.css">
    <title>Liste joueurs</title>
</head>

<body>
    <?php
    $connection = new quizAdmin();
    $result = $connection->selectAllQuiz();
    ?>
    <?php
    include_once "../design/menu.php";
    ?>
    <div id="bords">
        <?php
        if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)) {
        ?>
            <h1 class="titre">Admin quiz</h1>
            <hr>
            <h2 class="titre">Liste du quiz</h2>
            <div><a class="titre" href="quizAdd.php" class="button_link"><img src="../images/crud/add.png" title="Ajouter une nouvelle question" />Créer</a></div>
            <table>
                <thead>
                    <tr>
                        <th width="35%">Question</th>
                        <th width="15%">Réponse N1</th>
                        <th width="15%">Réponse N2</th>
                        <th width="15%">Réponse N3</th>
                        <th width="15%">Réponse N4</th>
                        <th width="5%">Reponse</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($result)) {
                        foreach ($result as $row) {
                    ?>
                            <tr>
                                <td><?php echo $row["question"]; ?></td>
                                <td><?php echo $row["r1"]; ?></td>
                                <td><?php echo $row["r2"]; ?></td>
                                <td><?php echo $row["r3"]; ?></td>
                                <td><?php echo $row["r4"]; ?></td>
                                <td><?php echo $row["reponse"]; ?></td>
                                <td><a href='quizEdit.php?num_quest=<?php echo $row['num_quest']; ?>'><img src="../images/crud/edit.png" title="Editer" /></a>
                                    <a href='quizDelete.php?num_quest=<?php echo $row['num_quest']; ?>'><img src="../images/crud/delete.png" title="Supprimer" /></a>
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