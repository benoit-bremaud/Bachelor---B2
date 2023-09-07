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
     * Fonction pour insérer un nouvel étudiant en base de données.
     *
     * @param PDO $conn Connexion PDO à la base de données.
     * @param string $fullname Nom complet de l'étudiant.
     * @param string $birthdate Date de naissance de l'étudiant.
     * @param string $email Email de l'étudiant.
     * @param int $grade_id ID du grade de l'étudiant.
     * @param string $gender Genre de l'étudiant.
     *
     * @return int L'ID du nouvel étudiant inséré.
     */
    function insert_student($conn, $fullname, $birthdate, $email, $grade_id, $gender) {
        // Requête SQL pour insérer un nouvel étudiant
        $sql = "INSERT INTO student (fullname, birthdate, email, grade_id, gender) VALUES (:fullname, :birthdate, :email, :grade_id, :gender)";

        // Préparez la requête
        $stmt = $conn->prepare($sql);

        // Liez les paramètres aux valeurs fournies
        $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':grade_id', $grade_id, PDO::PARAM_INT);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);

        // Exécutez la requête
        $stmt->execute();

        // Retournez l'ID du nouvel étudiant inséré
        return $conn->lastInsertId();
    }

    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['input-fullname'];
        $birthdate = $_POST['input-birthdate'];
        $email = $_POST['input-email'];
        $grade_id = $_POST['input-grade_id'];
        $gender = $_POST['input-gender'];

        // Utilisation de la fonction pour insérer un nouvel étudiant
        $newStudentId = insert_student($conn, $fullname, $birthdate, $email, $grade_id, $gender);
        echo "Nouvel étudiant inséré avec l'ID : " . $newStudentId;
        
        
        // // Exemple d'utilisation de la fonction pour insérer un nouvel étudiant
        // $newStudentId = insert_student($conn, 'Benoit Bremaud', '1981-05-22', 'benoit.bremaud@mail.com', 1, 'Male');
        
        echo "Nouvel étudiant inséré avec l'ID : " . $newStudentId;
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Étudiant</title>
</head>
<body>
    <h1>Ajouter un Étudiant</h1>
    
    <!-- Formulaire pour ajouter un nouvel étudiant -->
    <form method="post" action="index.php">
        <label for="input-fullname">Nom complet :</label>
        <input type="text" id="input-fullname" name="input-fullname" required><br>

        <label for="input-birthdate">Date de Naissance :</label>
        <input type="date" id="input-birthdate" name="input-birthdate" required><br>

        <label for="input-email">Email :</label>
        <input type="email" id="input-email" name="input-email" required><br>

        <label for="input-grade_id">Grade ID :</label>
        <input type="number" id="input-grade_id" name="input-grade_id" required><br>

        <label for="input-gender">Genre :</label>
        <select id="input-gender" name="input-gender" required>
            <option value="male">Homme</option>
            <option value="female">Femme</option>
        </select><br>

        <button type="submit">Ajouter Étudiant</button>
    </form>
</body>
</html>