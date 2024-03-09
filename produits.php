<?php
include 'header.php'; // Inclut le contenu de header.php
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
  <p>Notre Parc d'attraction propose une ribambelle de diversité à votre entière disposition. <br> 
    Nous vous proposons de tout, du grand 8 au tournevis en passant par les maisons hantées.<br>
    Voici ci-dessous, la liste des attractions proposées par notre parc.<br> 
    Retrouvons-nous au pays des rêves et des sensations :) .</p>

  <form method="post" action="enregistrer_favoris.php">
    <table>
      <?php
      $attractions_file = 'Atraction.csv';

      // Vérification de l'existence du fichier d'attractions
      if (($file = fopen($attractions_file, 'r')) !== FALSE) {
      
        while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {
          // Affichage des attractions avec des cases à cocher
          echo "<tr>";


echo "<td>" . htmlspecialchars($data[0]) . "</td>"; // Nom de l'attraction
echo "<td>" . htmlspecialchars($data[1]) . "</td>"; // Taille de l'attraction
echo "<td>" . htmlspecialchars($data[2]) . "</td>"; // Public de l'attraction
echo "<td>" . htmlspecialchars($data[3]) . "</td>"; // Parc de l'attraction

echo "<td><input type='checkbox' name='favorites[]' value='" . htmlspecialchars($data[0]) . "'></td>"; // Case à cocher pour sélectionner l'attraction
echo "</tr>";

        }
        fclose($file); // Fermeture du fichier
      }
      ?>
    </table>
    <input type="submit" value="Enregistrer les favoris">
  </form>
  <?php
$message = "très bien 🏰₊˚⊹♡ ";
echo $message;
?>
</body>
</html>
