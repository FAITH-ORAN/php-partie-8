<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php partie 8</title>
</head>
<body>
<?php
echo "<h3 style='color:red;'>exercice 1</h3><br>";
echo date("Y/m/d");

echo "<h3 style='color:red;'>exercice 2</h3><br>";
echo date("Y-m-d");

echo "<h3 style='color:red;'>exercice 3</h3><br>";
setlocale(LC_TIME,"fr_FR");
echo " Nous sommes le".strftime("%A %d %B %Y")."<br>";

echo "<h3 style='color:red;'>exercice 4</h3><br>";
$jour=array(
    "",
    "lundi",
    "mardi",
    "mercredi",
    "jeudi",
    "vendredi",
    "samedi",
    "dimanche",
  );

  $mois=array(
    "",
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "decembre",
  );
  $dateFr= $jour[date("N")]." ".date("d").$mois[date("n")]. " ".date("Y");
  echo "nous sommes le ".$dateFr."<br>";
   

  echo "<h3 style='color:red;'>exercice 5</h3><br>";
  echo "le timestamp courant est ". time();
  echo "<br>";
 
  $gmt1 = mktime(2, 1, 2021);
  echo 'Timestamp 01 Février 2021 : ' .$gmt1. '<br>';

  echo "<h3 style='color:red;'>exercice 6</h3><br>";
  $mois = 2; // Pour    février
  echo"dans le mois de février 2021 il y a". date("t",mktime(0,0,0,$mois,1,2021))." jours"; // Affiche 28
?>
</body>
</html>