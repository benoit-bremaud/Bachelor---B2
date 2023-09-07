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

    // Appelez la fonction pour récupérer un étudiant en fonction de l'email
    $emailToFind = 'manon11@muller.org'; // Remplacez ceci par l'email que vous recherchez
    $foundStudent = find_one_student($conn, $emailToFind);

    if ($foundStudent) {
        // Affichez les données de l'étudiant trouvé
        print_r($foundStudent);
    } else {
        echo "Aucun étudiant trouvé avec cet email.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
