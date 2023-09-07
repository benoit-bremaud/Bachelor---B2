<?php
// Fonction pour trouver les salles et indiquer si elles sont pleines
function find_rooms_with_status() {
    // Connexion à la base de données MySQL
    $conn = mysqli_connect("localhost", "root", "motdepasse1@", "lp_official");

    // Vérification de la connexion
    if (!$conn) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    // Requête SQL pour récupérer les noms, la capacité et indiquer si la salle est pleine
    $sql = "SELECT room.name, room.capacity, 
            COUNT(student.id) AS student_count,
            CASE
                WHEN COUNT(student.id) >= room.capacity THEN 'Oui'
                ELSE 'Non'
            END AS is_full
            FROM room
            LEFT JOIN student ON student.grade_id = room.id
            GROUP BY room.id, room.name, room.capacity";

    // Exécution de la requête
    $result = mysqli_query($conn, $sql);

    // Vérification des erreurs de requête
    if (!$result) {
        die("Erreur de requête : " . mysqli_error($conn));
    }

    // Création d'un tableau pour stocker les résultats
    $rooms = array();

    // Parcourir les résultats de la requête et les ajouter au tableau
    while ($row = mysqli_fetch_assoc($result)) {
        $rooms[] = $row;
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($conn);

    // Retourner le tableau des salles avec l'indication si elles sont pleines
    return $rooms;
}

// Appel de la fonction et récupération des résultats
$roomsWithStatus = find_rooms_with_status();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Salles Pleines</title>
</head>
<body>
    <h1>Liste des Salles avec Indication de Plein ou Non</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la Salle</th>
                <th>Capacité</th>
                <th>Est Pleine</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roomsWithStatus as $room) : ?>
                <tr>
                    <td><?php echo $room['name']; ?></td>
                    <td><?php echo $room['capacity']; ?></td>
                    <td><?php echo $room['is_full']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
