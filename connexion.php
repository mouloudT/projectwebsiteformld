<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL (généralement localhost)
$nom_utilisateur = "root"; // Nom d'utilisateur MySQL
$mot_de_passe = ""; // Mot de passe MySQL (laissez vide si aucun)
$nom_base_de_donnees = "sitewebmouloud"; // Nom de la base de données

// Connexion à la base de données MySQL
$connexion = mysqli_connect($serveur, $nom_utilisateur, $mot_de_passe, $nom_base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>
