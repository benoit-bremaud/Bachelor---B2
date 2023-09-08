<?php
// Paramètres de connexion à la base de données
$hostname = "localhost";
$username = "root";
$password = "motdepasse1@";
$database = "lp_official";

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
