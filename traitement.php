<?php
session_start();
$_SESSION['id'] = FALSE;
$route = $_GET['route'];
switch($route){
    case "login":
        $file=fopen("utilisateur.csv", "r");

        
            $username = $_POST['ID'];
            $password = $_POST['password'];
            while (($row = fgetcsv($file, 6000,",")) !== FALSE){
                if ($username === $row[2] && $password === $row[3]) {
                    // Authentification réussie
                    echo "Authentification réussie. Bienvenue, $username!" ;
                    $_SESSION['id'] = "True";
                    $_SESSION['username'] = $username;
                    header("Location: index.php");
                    
                } 
            }
            if($_SESSION['id'] === FALSE){
                // Authentification échouée
                
                echo "Nom d'utilisateur ou mot de passe incorrect.";
                header("Location: login.php");
            }
        
        fclose($file);
        break;

    case "logout":
        session_destroy();
        header('location: ./index.php');
    break;

    default:
    break;
}