<?php
include './header.php';



if(isset($_SESSION['utilisateur'][0])){
            ?>
                vous etes connecté
            <?php
          }
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
  <p>Notre Parc d'atraction propose une ribembelle de diversement à votre entière disposition. <br> 
    Nous vous proposont de tout, du grand 8 au tpurniquet en passent par les maison hantées.<br>
    Voici ci-dessou, la liste des atraction propser par notre parc.<br> 
    Retrouvons nous au pays des reve est des sensation :) .</p>


    <?php 
    $file = fopen('Atraction.csv', 'r');
    if($file !== FALSE){
        echo "<table>";
    }

    while (($row = fgetcsv($file, 6000,";")) !== FALSE){
        $numero = $row[0];
        $nom = $row[1];
        $taille = $row[2];
        $public = $row[3];
        $note = $row[5];
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>$nom</td>";
        echo "<td>$taille</td>";
        echo "<td>public</td>";
        echo "<td>$note</td>";
        echo "<td><button id='$numero' onclick='function()'>Favoris</button></td>";
        echo "</tr>";
    
    }
    
    fclose($file);
    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#bouton").click(function(){
        var valeur = $(this).id(); // Récupère le texte du bouton
        $.ajax({
            type: "POST", // ou "GET" selon vos besoins
            url: "traitement_fav.php",
            data: { valeur: valeur }, // Envoie la valeur à PHP
            success: function(response){
                $("#resultat").html(response); // Affiche la réponse de PHP
            }
        });
    });
});
</script>


</html>