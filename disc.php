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
    <div class="container ">      
        <div class="row p-3">
            <h1 class="col-sm">Liste des disques (15)</h1>
            
            <a href="disc_new.php" class="btn btn-outline-primary  col-2"> Ajouter un  disque</a>
        </div>
        <table class="table table-success table-striped"> 
        <?php foreach ($tableau as $disc):?>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="jacquette/<?= $disc->disc_picture?>" width= 200 alt="" class="img-thumbnail" alt="Cinque Terre" class="img-fluid rounded-start" >
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">titre : <?=$disc->disc_title?></h5>
        <p class="card-text">artiste :<?=$disc->artist_name?>
        <p class="card-text">Label : <?=$disc->disc_label?>              
        <p class="card-text">année : <?=$disc->disc_year?><br>               
        <p class="card-text">Genre :<?=$disc->disc_genre?><br>
        <p class="card-text">prix :<?=$disc->disc_price?>€<br>
    <a href="disc_detail.php?id=<?= $disc->disc_id?>" class="btn btn-outline-primary   text-center">Détails</a></td>
      </div>
    </div>
  </div>
</div>
            <?php endforeach; ?>
        
        </table>           
   

</body>
</html>