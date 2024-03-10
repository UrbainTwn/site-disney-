<?php
include 'header.php'; // Inclut le contenu de header.php
$user =$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="./images(1).jpeg" type="image/x-icon">
  <title>Attraction</title>
</head>
<body>
  <h1>FAVORIS</h1>

  <?php
      $attractions_file = 'favoris_$user.csv';

      // Vérification de l'existence du fichier d'attractions
      if (($file = fopen($attractions_file, 'r')) !== FALSE) {
        while (($data = fgetcsv($file, 6000, ";")) !== FALSE) {
          // Affichage des attractions en favoris
          echo "<ul>";

echo "<li>" . htmlspecialchars($data[0]) . "</li>"; // Nom de l'attraction
echo "</ul>";

        }
        fclose($file); // Fermeture du fichier
      }
      ?>