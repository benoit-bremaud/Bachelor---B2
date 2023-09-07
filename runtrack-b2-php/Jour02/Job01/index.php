<?php
// Configuration de la base de données
$dsn = "mysql:host=localhost;dbname=lp_official";
$username = "root";
$password = "motdepasse1@";

try {
    // Créez une instance de connexion PDO
    $conn = new PDO($dsn, $username, $password);

    // Définissez le mode d'erreur sur les exceptions pour PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Définissez la fonction pour récupérer tous les étudiants
    function find_all_students($conn) {
        $students = array(); // Initialisez un tableau vide pour stocker les étudiants

        // Requête SQL pour récupérer toutes les colonnes de la table "student"
        $sql = "SELECT * FROM student";

        // Préparez la requête
        $stmt = $conn->prepare($sql);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez les résultats sous forme de tableau associatif
        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $students;
    }

    // Appelez la fonction pour récupérer les étudiants
    $studentList = find_all_students($conn);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Étudiants</title>
</head>
<body>
    <h1>Liste des Étudiants</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
        </tr>
        <?php
        // Affichez les étudiants dans le tableau HTML
        foreach ($studentList as $student) {
            echo "<tr>";
            echo "<td>" . $student['id'] . "</td>";
            echo "<td>" . $student['fullname'] . "</td>";
            echo "<td>" . $student['email'] . "</td>";
            echo "<td>" . $student['birthdate'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
