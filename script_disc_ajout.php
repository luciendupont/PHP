<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout</title>
</head>
<body>

    <h1>disque  n°<?= $resultat->disc_id; ?></h1>

    <a href="disc.php">Retour à la liste des disques</a>

    <br>
    <br>

    <form action ="script_disc_modif.php" method="post">

    <label for="url_for_label">titre de l album :</label><br>
<input type="e" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>"><br>

<label for="url_for_label">nom de l artiste :</label><br>
<input type="e" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>"><br>

<label for="url_for_label">année du titre :</label><br>
<input type="e" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>"><br>

<label for="url_for_label"> genre :</label><br>
<input type="e" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>"><br>

<label for="url_for_label"> label :</label><br>
<input type="e" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>"><br>

<label for="url_for_label"> prix :</label><br>
<input type="e" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>"><br>












        <input type="reset" value="Annuler">
        <input type="submit" value="Modifier">

    </form>
</body>
</html>