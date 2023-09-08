<?php
// Inclure le fichier de connexion à la base de données
require_once('connexion.php');

function my_search_student(string $email) : array {
    global $pdo; // Utilisez la connexion depuis connexion.php

    // Préparez et exécutez la requête pour obtenir les données de l'étudiant
    $query = $pdo->prepare("SELECT * FROM student WHERE email = :email");
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();
    
    // Récupérez les données
    $studentData = $query->fetchAll(PDO::FETCH_ASSOC);

    return $studentData ? $studentData : [];
}

// Récupérez l'email de l'étudiant depuis la requête GET
$email = isset($_GET['email']) ? $_GET['email'] : '';

// Appelez la fonction et renvoyez les données en format JSON
header('Content-Type: application/json');
echo json_encode(my_search_student($email));
?>
