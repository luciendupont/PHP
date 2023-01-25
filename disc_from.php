<?php
    require "db.php";
    $db = connexionBase();
    $requete = $db->prepare("SELECT * FROM disc join artist on artist.artist_id = disc.artist_id WHERE disc_id=?");
    $requete->execute(array($_GET["id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
    $requete = $db->query("SELECT * FROM artist join disc ");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajout de vinyle</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="p-2">
        <h1>Le formulaire de modification</h1>
        <h2>Modifier un vinyle </h2>
    </div>

    <br>
    <br>

    <div class="p-3">
        <form action ="script_ajout_disc.php" method="post">

            <input type="hidden" name="id" value="<?= $disc->disc_id ?>">

            <label for="titre" class="form-label"> titre</label><br>
            <select class="form-select" name="nom">
                    <option selected value="<?= $disc->disc_title?>"> <?= $disc->disc_title ?> </option>
                    <?php foreach($tableau as $disc):?>

                    <option value="<?= $disc->disc_title ?>"> <?= $disc-> disc_title ?> </option>
                    
                    <?php endforeach; ?>
            </select>
            <br><br>

            <label for="nom" class="form-label">artiste</label><br>
            <select class="form-select" name="nom">
                    <option selected value="<?= $disc->artist_id ?>"> <?= $disc->artist_name ?> </option>
                    <?php foreach($tableau as $artist):?>

                    <option value="<?= $artist->artist_id ?>"> <?= $artist-> artist_name ?> </option>
                    
                    <?php endforeach; ?>
            </select>
            <br><br>

            <label for="annee" class="form-label"> année</label><br>
            <select class="form-select" name="nom">
                    <option selected value="<?= $disc->disc_year?>"> <?= $disc->disc_year?> </option>
                    <?php foreach($tableau as $disc):?>

                    <option value="<?= $disc->disc_year ?>"> <?= $disc-> disc_year ?> </option>
                    
                    <?php endforeach; ?>
            </select>
            <br><br>
            <label for="genre" class="form-label"> Genre</label><br>
            <select class="form-select" name="nom">
                    <option selected value="<?= $disc->disc_genre?>"> <?= $disc->disc_genre?> </option>
                    <?php foreach($tableau as $disc):?>

                    <option value="<?= $disc->disc_genre ?>"> <?= $disc-> disc_genre ?> </option>
                    
                    <?php endforeach; ?>
            </select>
            <br><br>

            <label for="label" class="form-label"> Label</label><br>
            <select class="form-select" name="nom">
                    <option selected value="<?= $disc->disc_label?>"> <?= $disc->disc_label?> </option>
                    <?php foreach($tableau as $disc):?>

                    <option value="<?= $disc->disc_label ?>"> <?= $disc-> disc_label ?> </option>
                    
                    <?php endforeach; ?>
            </select>            <br><br>

            <label for="price" class="form-label"> prix</label><br>
            <select class="form-select" name="nom">
                    <option selected value="<?= $disc->disc_price?>"><?= $disc->disc_price?> €</option>
                    <?php foreach($tableau as $disc):?>

                    <option value="<?= $disc->disc_price?>"> <?= $disc-> disc_price ?> €</option>
                    
                    <?php endforeach; ?>
            </select>

            <label for="image" class="form-label"></label><br>
            <input type="file" name="image"><br>    
            <img src="jacquette/<?= $disc->disc_picture?>" width= 200 alt="" class="img-thumbnail" alt="Cinque Terre">
            <br><br>

            <input type="submit" value="Modifier" class="btn btn-outline-primary ">
            <a href="disc_detail.php?id=<?= $disc->disc_id ?>"><button type="button" class="btn btn-outline-primary ">Retour</button></a>

        </form>
    </div>
</body>
</html>