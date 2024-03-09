<?php
session_start(); // Démarrer la session pour récupérer le nom d'utilisateur


// Récupérer le nom d'utilisateur de la session
$utilisateur = ['utilisateur'][0];

// Créer le nom du fichier de favoris pour l'utilisateur actuel
$favoris_file = "favoris_$utilisateur.csv";

// Vérifier si des attractions ont été sélectionnées
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['favorites'])) {
    $favorites = $_POST['favorites'];

    // Ouvrir ou créer le fichier de favoris pour l'utilisateur en mode écriture
    $file = fopen($favoris_file, "w");

    // Vérifier si le fichier a été ouvert avec succès
    if ($file !== FALSE) {
        // En-tête du fichier CSV
        fputcsv($file, array('Attraction'));

        // Enregistrer chaque attraction sélectionnée dans le fichier
        foreach ($favorites as $favorite) {
            fputcsv($file, array($favorite));
        }

        fclose($file); // Fermer le fichier

        // Afficher un message de succès
        echo "Favoris enregistrés avec succès!";
    } else {
        // Afficher un message d'erreur si le fichier n'a pas pu être ouvert
        echo "Erreur lors de l'ouverture du fichier de favoris.";
    }
} else {
    // Afficher un message d'erreur si aucune attraction n'a été sélectionnée
    echo "Aucune attraction sélectionnée.";
}

header("Location: produits.php");
?>
<?php
$message = "très bien 🏰₊˚⊹♡ ";
echo $message;
?>