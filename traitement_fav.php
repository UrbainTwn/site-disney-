<?php
 $file = fopen('utilisateur.csv', 'r');
 $value = $_POST['valeur'];

while (($row = fgetcsv($file, 6000,",")) !== FALSE){
    if($row[2] == $_SESSION['username']){
        $row[4][] = "$value";
        echo "L'attraction à été ajouter en favoris.";
        exit();
    }
    echo "Nous ne parvenons pas à ajouter cet attraction  à vos favoris.";
 }
 
 
 fclose($file);

?>