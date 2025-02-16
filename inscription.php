<?php
// Inclure le fichier de connexion à la base de données
include "connexion.php";

// Vérifier si le formulaire d'inscription a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $date_naissance = $_POST["date_naissance"];
    $mot_de_passe = $_POST["mot_de_passe"];
   

    
        // Hasher le mot de passe
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Préparer une requête d'insertion SQL
        $requete = "INSERT INTO utilisateurs (nom, prenom, email, date_naissance, mot_de_passe) VALUES (?, ?, ?, ?, ?)";

        // Préparer la requête
        $statement = mysqli_prepare($connexion, $requete);

        // Liage des paramètres
        mysqli_stmt_bind_param($statement, "sssss", $nom, $prenom, $email, $date_naissance, $mot_de_passe_hash);

        // Exécuter la requête
        if (mysqli_stmt_execute($statement)) {
            echo "Inscription réussie.";
        } else {
            echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
        }

        // Fermer le statement
        mysqli_stmt_close($statement);
    
}
?>
