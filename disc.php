<?php
include "db.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM `disc` JOIN `artist` ON disc.artist_id = artist.artist_id;");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Velvet disque</title>
</head>
<body>
<div class="container">

        
<h1>Liste des disque <?php echo count($tableau) ?></h1>
         <a href="disc_new.php" class="btn btn-outline-primary  col-8"> Ajouter un  disque</a>  
    <div class="row">
        <?php foreach ($tableau as $disc): ?>
        <div class="card col-lg-5 col-12 m-4" style="width:30rem;"id="card">
            <div class="row">
                <img src="jacquette/<?= $disc->disc_picture ?>" style="max-width:100%;height:auto" class="card-img-top  col-6 " id="imgcard" alt="mage">
                    <div class="card-body col-6">
                    <p class="text-right font-weight-bold">titre :<?= $disc->disc_title ?>
                    <p class="text-right font-weight-bold">artiste :<?= $disc->artist_name ?>
                    <p class="text-right">Label : <?= $disc->disc_label ?>
                    <p class="text-right">Year : <?= $disc->disc_year ?>
                    <p class="text-right">Genre :<?= $disc->disc_genre ?>
                    <p class="text-right">prix :<?= $disc->disc_price ?>€
                    <p class="text-right"><a href="disc_detail.php?id=<?= $disc->disc_id ?>" class="btn btn-outline-primary">Détails</a>
                    </div>
            </div>
                
        </div>
        <?php endforeach; ?>
    </div>
</div> 
</body>
</html>