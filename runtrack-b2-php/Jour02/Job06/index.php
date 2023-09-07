<?php
// Fonction pour récupérer les promotions (grades) et les étudiants triés par taille d'étudiants
function find_ordered_students() {
    // Connexion à la base de données MySQL (Assurez-vous de remplacer ces valeurs par les vôtres)
    $conn = mysqli_connect("localhost", "root", "motdepasse1@", "lp_official");

    // Vérification de la connexion
    if (!$conn) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    // Requête SQL pour récupérer les noms des grades (promotions) et les étudiants associés
    // triés par taille d'étudiants dans chaque grade
    $sql = "SELECT grade.name AS grade_name, student.id, student.fullname, student.email, student.birthdate, student.gender
            FROM grade
            LEFT JOIN student ON student.grade_id = grade.id
            ORDER BY grade_name, student.id";

    // Exécution de la requête
    $result = mysqli_query($conn, $sql);

    // Vérification des erreurs de requête
    if (!$result) {
        die("Erreur de requête : " . mysqli_error($conn));
    }

    // Création d'un tableau pour stocker les résultats
    $grades = array();

    // Parcourir les résultats de la requête et les ajouter au tableau des grades
    while ($row = mysqli_fetch_assoc($result)) {
        $grade_name = $row['grade_name'];

        // Si le grade n'existe pas encore dans le tableau, créez-le
        if (!isset($grades[$grade_name])) {
            $grades[$grade_name] = array();
        }

        // Ajouter les informations de l'étudiant au grade
        $grades[$grade_name][] = array(
            'id' => $row['id'],
            'name' => $row['fullname'],
            'email' => $row['email'],
            'birthdate' => $row['birthdate'],
            'gender' => $row['gender']
        );
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($conn);

    // Trier les grades par taille d'étudiants
    uasort($grades, function ($a, $b) {
        return count($b) - count($a);
    });

    // Retourner le tableau des grades et étudiants triés
    return $grades;
}

// Appel de la fonction et récupération des résultats
$orderedStudents = find_ordered_students();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Étudiants par Grade (Trié par Taille)</title>
</head>
<body>
    <h1>Liste des Étudiants par Grade (Trié par Taille)</h1>
    <table>
        <thead>
            <tr>
                <th>Grade</th>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de Naissance</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderedStudents as $grade_name => $students) : ?>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td><?php echo $grade_name; ?></td>
                        <td><?php echo $student['id']; ?></td>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo $student['birthdate']; ?></td>
                        <td><?php echo $student['gender']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
