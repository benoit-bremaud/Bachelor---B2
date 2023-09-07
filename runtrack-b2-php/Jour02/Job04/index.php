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

    /**
     * Fonction pour récupérer les emails, noms complets et noms de promotions des étudiants.
     *
     * @param PDO $conn Connexion PDO à la base de données.
     *
     * @return array Tableau associatif contenant les données des étudiants [“email” => …, “fullname” => …, “name” => …].
     */
    function find_all_students_grades($conn) {
        // Requête SQL pour récupérer les données des étudiants avec leurs promotions
        $sql = "SELECT s.email, s.fullname, g.name 
                FROM student s
                JOIN grade g ON s.grade_id = g.id";

        // Préparez la requête
        $stmt = $conn->prepare($sql);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez les résultats sous forme de tableau associatif
        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $students;
    }

    // Utilisation de la fonction pour récupérer les données des étudiants
    $allStudentsGrades = find_all_students_grades($conn);

    // Afficher les résultats
    foreach ($allStudentsGrades as $student) {
        echo "Email: " . $student['email'] . "<br>";
        echo "Nom Complet: " . $student['fullname'] . "<br>";
        echo "Nom de Promotion: " . $student['name'] . "<br><br>";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
