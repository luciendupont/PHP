<?php
    require "db.php";
    $db = connexionBase();

    $id = $_GET["id"];

    $requete = $db->prepare("SELECT * FROM disc join artist on artist.artist_id = disc.artist_id WHERE disc_id=?");
    $requete->execute(array($id));

    $disc = $requete->fetch(PDO::FETCH_OBJ);

    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Velvet Record</title>
        <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid">      
        <div class="row p-3">
            <h1 class="col-10">Détails</h1>
        </div>
        <div class="card col-lg-5 col-12 m-4" style="width:18rem;"id="card">
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
                
    </div>
    </div>
    </div>
    </div>
<br>

        <a href="disc_from.php?id=<?= $disc->disc_id ?>" class="btn btn-outline-primary   "> Modifier </a>
        <a href="script_disc_delete.php?id=<?= $disc->disc_id ?>" class="btn btn-outline-primary  confirmation"> Supprimer </a>
        <a href="disc.php" class="btn btn-outline-primary ">Retour</a>
    </body>
</html>