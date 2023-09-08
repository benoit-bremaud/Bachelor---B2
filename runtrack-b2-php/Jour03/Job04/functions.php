<?php
// Inclure le fichier de connexion à la base de données
require_once('connexion.php');

/**
 * Trouve un étudiant par son ID.
 *
 * @param int $id L'ID de l'étudiant à rechercher.
 * @return Student|null Une instance de Student ou null si l'étudiant n'est pas trouvé.
 */
function findOneStudent(int $id): ?Student
{
    global $pdo;

    try {
        // Préparer la requête SQL
        $query = $pdo->prepare("SELECT * FROM students WHERE id = :id");

        // Exécuter la requête avec le paramètre :id
        $query->execute(['id' => $id]);

        // Récupérer les données de l'étudiant
        $studentData = $query->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'étudiant existe
        if (!$studentData) {
            return null; // L'étudiant n'a pas été trouvé
        }

        // Créer et renvoyer une instance de Student avec les données récupérées
        return new Student(
            $studentData['id'],
            $studentData['grade_id'],
            $studentData['email'],
            $studentData['fullname'],
            $studentData['birthdate'],
            $studentData['gender']
        );
    } catch (PDOException $e) {
        die("Erreur lors de la recherche de l'étudiant : " . $e->getMessage());
    }
}

/**
 * Trouve un grade par son ID.
 *
 * @param int $id L'ID du grade à rechercher.
 * @return Grade|null Une instance de Grade ou null si le grade n'est pas trouvé.
 */
function findOneGrade(int $id): ?Grade
{
    global $pdo;

    try {
        // Préparer la requête SQL
        $query = $pdo->prepare("SELECT * FROM grades WHERE id = :id");

        // Exécuter la requête avec le paramètre :id
        $query->execute(['id' => $id]);

        // Récupérer les données du grade
        $gradeData = $query->fetch(PDO::FETCH_ASSOC);

        // Vérifier si le grade existe
        if (!$gradeData) {
            return null; // Le grade n'a pas été trouvé
        }

        // Créer et renvoyer une instance de Grade avec les données récupérées
        return new Grade(
            $gradeData['id'],
            $gradeData['room_id'],
            $gradeData['name'],
            $gradeData['year']
        );
    } catch (PDOException $e) {
        die("Erreur lors de la recherche du grade : " . $e->getMessage());
    }
}

/**
 * Trouve un étage par son ID.
 *
 * @param int $id L'ID de l'étage à rechercher.
 * @return Floor|null Une instance de Floor ou null si l'étage n'est pas trouvé.
 */
function findOneFloor(int $id): ?Floor
{
    global $pdo;

    try {
        // Préparer la requête SQL
        $query = $pdo->prepare("SELECT * FROM floors WHERE id = :id");

        // Exécuter la requête avec le paramètre :id
        $query->execute(['id' => $id]);

        // Récupérer les données de l'étage
        $floorData = $query->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'étage existe
        if (!$floorData) {
            return null; // L'étage n'a pas été trouvé
        }

        // Créer et renvoyer une instance de Floor avec les données récupérées
        return new Floor(
            $floorData['id'],
            $floorData['name'],
            $floorData['level']
        );
    } catch (PDOException $e) {
        die("Erreur lors de la recherche de l'étage : " . $e->getMessage());
    }
}

/**
 * Trouve une salle par son ID.
 *
 * @param int $id L'ID de la salle à rechercher.
 * @return Room|null Une instance de Room ou null si la salle n'est pas trouvée.
 */
function findOneRoom(int $id): ?Room
{
    global $pdo;

    try {
        // Préparer la requête SQL
        $query = $pdo->prepare("SELECT * FROM rooms WHERE id = :id");

        // Exécuter la requête avec le paramètre :id
        $query->execute(['id' => $id]);

        // Récupérer les données de la salle
        $roomData = $query->fetch(PDO::FETCH_ASSOC);

        // Vérifier si la salle existe
        if (!$roomData) {
            return null; // La salle n'a pas été trouvée
        }

        // Créer et renvoyer une instance de Room avec les données récupérées
        return new Room(
            $roomData['id'],
            $roomData['floor_id'],
            $roomData['name'],
            $roomData['capacity']
        );
    } catch (PDOException $e) {
        die("Erreur lors de la recherche de la salle : " . $e->getMessage());
    }
}
?>
