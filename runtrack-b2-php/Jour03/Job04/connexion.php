<?php
// Informations de connexion à la base de données
$hostname = "localhost"; // Remplacez par le nom d'hôte de votre base de données
$username = "root";      // Remplacez par votre nom d'utilisateur de base de données
$password = "motdepasse1@";  // Remplacez par votre mot de passe de base de données
$database = "lp_official";  // Remplacez par le nom de votre base de données

try {
    // Création de la connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

    // Configuration de PDO pour générer des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Jeu de caractères UTF-8 pour la connexion
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
