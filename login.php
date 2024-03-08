<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <link rel="shortcut icon" href="./images(1).jpeg" >
    <title>Formulaire de Connexion</title>
</head>

<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="traitement.php?route=login" method="post">
            <label for="ID">Identifiant :</label><br>
            <input type="text" id="ID" name="ID" required><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="ajouter le contact"><br><br>
            <a href="./inscription.php">Sign up</a>
        </form>
        
    </div>
</body>

</html>


