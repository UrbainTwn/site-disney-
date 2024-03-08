<?php
if (isset($_POST['nom'])&& isset($_POST['prenom']) && isset($_POST['ID']) && isset($_POST['password'])){
    $file_name="utilisateur.csv";
    $fav = array();

    $file=fopen($file_name, "a");

    if (isset($file)== FALSE){
        fputcsv($file, ['nom', 'prenom', 'ID', 'password', 'Favoris']);
    }

    fputcsv($file, [$_POST['nom'], $_POST["prenom"], $_POST["ID"], $_POST['password'], []]);
    fclose($file);
    echo "un nouvelle utilisateur à été ajouté";
    header("location: login.php");
}