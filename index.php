<?php 
/*for ($a = 1 ; $a<151;  $a ++)
{
    if($a % 2 ==0 )
    {
        echo $a-1 . "<br></br>";
    }
}*/



 
/* 
while ($lines <= 5000) {
    echo 'je  dois  faire des  sauvegardes régulières de mes fichiers .<br />';
    $lines++; // $lines = $lines + 1
}






/*
// $NbrCol : le nombre de colonnes
// $NbrLigne : le nombre de lignes
$NbrCol = 10;
$NbrLigne = 10;
// --------------------------------------------------------
// on affiche en plus sur les 1ere ligne et 1ere colonne
// les valeurs a multiplier (dans des cases en couleur)
// le tableau final fera donc 10 x 10
// --------------------------------------------------------
echo '<center> <table border="1" width="400">';
// 1ere ligne (ligne 0)
echo '<tr>';
echo '<td bgcolor="#CCCCCC"  ></td>';  // le petit carré de la ligne
for ($j=0; $j<=$NbrCol; $j++) {
echo '<td style= "background-color:#CCCCCC ; font-weight:bold ; color : red" >'.$j.'</td>';
}
echo '</tr>';
// -------------------------------------------------------
// lignes suivantes
for ($i=0; $i<=$NbrLigne; $i++) {
echo '<tr>';
for ($j=0; $j<=$NbrCol; $j++) {
// 1ere colonne (colonne 0)
if ($j==0) {
echo '<td style= "background-color:#CCCCCC ; font-weight:bold ; color : red" >'.$i.'</td>';
}
// colonnes suivantes
if ($i==$j) {
echo '<td>';
} else {
echo '<td>';
}
// -------------------------
// DONNEES A AFFICHER dans la cellule
echo $i*$j;
// -------------------------
echo '</td>';
}
echo '</tr>';
$j=1;
}
echo '</center></table>';
?>
 
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
 
<title>Table de multiplication</title>
<style>
.titre {
font-weight : bold ;
text-align : center;
}
  
 table   {
 text-align : center;
}
 
 
table tr:nth-child(odd){
  background-color:#99ccff;
}
  
  
</style>
</head>
<body> </br></br>
<div class="titre"> TABLE DE MULTIPLICATION </div></br>
 
 
<form method = "post"  >
Choix d'une table : </br>
 
<label for ="multi"   > Saisir le numero de table (entre 1 et 10) : </label> <input type="number"  name="choix" id="multi"> </br> </br>
  
<input type=submit value="AFFICHER" ></input></br> </br>
 
 
 
</body>
 
</html>
*/

 /*$annee=array();
$annee[0]="janvier";
$annee[1]="fevrier";
$annee[2]="mars";
$annee[3]="avril";
$annee[4]="mai";
$annee[5]="juin";
$annee[6]="juillet";
$annee[7]="aout";
$annee[8]="septembre";
$annee[9]="octobre";
$annee[10]="novembre";
$annee[11]="decembre";

$annee["janvier"]=31;
$annee["fevrier"]=29;
$annee["mars"]=31;
$annee["avril"]=30;
$annee["mai"]=31;
$annee["juin"]=30;
$annee["juillet"]=31;
$annee["aout"]=31;
$annee["septembre"]=30;
$annee["octobre"]=31;
$annee["novembre"]=30;
$annee["decembre"]=31;

for($i=0; $i<=11; $i++){
    echo "<tr>";
    echo "<td>".$annee[$i]."</td>";
    echo "<td>".$annee[$annee[$i]]."</td>";
    echo "</tr> <br>";
}

asort($annee);

foreach($annee as $cle => $valeur) { 
    echo $cle ." => ".$valeur."<br>";
} */




               /* $capitales = array(
                    "Bucarest" => "Roumanie",
                    "Bruxelles" => "Belgique",
                    "Oslo" => "Norvège",
                    "Ottawa" => "Canada",
                    "Paris" => "France",
                    "Port-au-Prince" => "Haïti",
                    "Port-d'Espagne" => "Trinité-et-Tobago",
                    "Prague" => "République tchèque",
                    "Rabat" => "Maroc",
                    "Riga" => "Lettonie",
                    "Rome" => "Italie",
                    "San José" => "Costa Rica",
                    "Santiago" => "Chili",
                    "Sofia" => "Bulgarie",
                    "Alger" => "Algérie",
                    "Amsterdam" => "Pays-Bas",
                    "Andorre-la-Vieille" => "Andorre",
                    "Asuncion" => "Paraguay",
                    "Athènes" => "Grèce",
                    "Bagdad" => "Irak",
                    "Bamako" => "Mali",
                    "Berlin" => "Allemagne",
                    "Bogota" => "Colombie",
                    "Brasilia" => "Brésil",    
                    "Bratislava" => "Slovaquie",
                    "Varsovie" => "Pologne",
                    "Budapest" => "Hongrie",
                    "Le Caire" => "Egypte",
                    "Canberra" => "Australie",
                    "Caracas" => "Venezuela",
                    "Jakarta" => "Indonésie",
                    "Kiev" => "Ukraine",
                    "Kigali" => "Rwanda",
                    "Kingston" => "Jamaïque",
                    "Lima" => "Pérou",
                    "Londres" => "Royaume-Uni",
                    "Madrid" => "Espagne",
                    "Malé" => "Maldives",
                    "Mexico" => "Mexique",
                    "Minsk" => "Biélorussie",
                    "Moscou" => "Russie",
                    "Nairobi" => "Kenya",
                    "New Delhi" => "Inde",
                    "Stockholm" => "Suède",
                    "Téhéran" => "Iran",
                    "Tokyo" => "Japon",
                    "Tunis" => "Tunisie",
                    "Copenhague" => "Danemark",
                    "Dakar" => "Sénégal",
                    "Damas" => "Syrie",
                    "Dublin" => "Irlande",
                    "Erevan" => "Arménie",
                    "La Havane" => "Cuba",
                    "Helsinki" => "Finlande",
                    "Islamabad" => "Pakistan",
                    "Vienne" => "Autriche",
                    "Vilnius" => "Lituanie",
                    "Zagreb" => "Croatie"
                );
                
          
                ksort($capitales);

                foreach($capitales as $cle => $valeur) { 
                    echo $cle." : ".$valeur."<br>"; 
                }

                echo "<br>";


                asort($capitales);

                foreach($capitales as $cle1 => $valeur1) { 
                    echo $cle1." : ".$valeur1."<br>"; 
                }

                echo "<br>";

            
                $n = count($capitales);
                echo "il y a ".$n." de pays <br><br>";

                foreach ($capitales as $cle => $valeur) {
                    if(substr($valeur,0,1) == "B"){
                        unset($valeur);
                    }
                    echo $valeur.'';
                }*/


 /* $departements = array(
                    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
                    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
                    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
                    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
                );

                ksort ($departements);

                foreach($departements as $cle => $valeur) { 
                    echo $cle." : ".count($valeur)."<br>"; 
                }
                
*/







                ?>




