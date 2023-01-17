<?php

    // on importe le contenu du fichier "db.php"
    include "db.php";
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM disc");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Liste</title>
</head>
<body>


    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            
            <th></th>
        </tr>

        <?php foreach ($tableau as $disc): ?>
        <tr>
            <td><img src="jacquette/<?= $disc->disc_picture?>" alt=""></td>
            <td><?= $disc->disc_id ?></td>
            <td><?= $disc->disc_title?></td>
            
            <td><?= $disc->disc_year ?></td>
            <td><?= $disc->disc_label?></td>
            <td><?= $disc->disc_genre ?></td>
            <td><?= $disc->disc_price?></td>

            <td><a href="disc_detail.php?id=<?= $disc->disc_id ?>">Détail</a></td>
        </tr>
        <?php endforeach; ?>

    </table>


</body>
</html>