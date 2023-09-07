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

    // Définissez la fonction pour récupérer un étudiant en fonction de l'email
    function find_one_student($conn, $email) {
        // Requête SQL pour récupérer toutes les colonnes d'un étudiant en fonction de l'email
        $sql = "SELECT * FROM student WHERE email = :email";

        // Préparez la requête
        $stmt = $conn->prepare($sql);

        // Liez le paramètre :email à la valeur fournie
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez le résultat sous forme de tableau associatif
        $student = $stmt->fetch(PDO::FETCH_ASSOC);

        return $student;
    }

    // Traitement du formulaire
    if (isset($_GET['input-email-student'])) {
        $emailToFind = $_GET['input-email-student'];
        $foundStudent = find_one_student($conn, $emailToFind);

        if ($foundStudent) {
            // Affichez les données de l'étudiant trouvé
            print_r($foundStudent);
        } else {
            echo "Aucun étudiant trouvé avec cet email.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rechercher un Étudiant</title>
</head>
<body>
    <h1>Rechercher un Étudiant par Email</h1>
    
    <!-- Formulaire pour rechercher un étudiant par email -->
    <form method="get" action="index.php">
        <label for="input-email-student">Email de l'étudiant :</label>
        <input type="text" id="input-email-student" name="input-email-student" required>
        <button type="submit">Rechercher</button>
    </form>
    <!-- Afficher les informations de l'étudiant trouvé -->
    <?php if (isset($foundStudent)): ?>
        <h2>Résultat de la recherche :</h2>
        <?php if ($foundStudent): ?>
            <p>Nom : <?php echo $foundStudent['fullname']; ?></p>
            <p>Email : <?php echo $foundStudent['email']; ?></p>
            <p>Date de Naissance : <?php echo $foundStudent['birthdate']; ?></p>
            <!-- Ajoutez d'autres champs ici selon votre structure de table -->
        <?php else: ?>
            <p>Aucun étudiant trouvé avec cet email.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
