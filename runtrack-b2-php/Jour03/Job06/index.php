<?php
// Inclure le fichier de connexion à la base de données
require_once 'connexion.php';


// Inclure les fichiers des classes
require_once 'class/student.php';
require_once 'class/grade.php';
require_once 'class/room.php';
require_once 'class/floor.php';

// Test de la classe 'Grade' (Note)

// Créer une instance de la classe 'Grade' avec des valeurs
$grade = new Grade(1, 2, 'Examen final', '2023-12-15');

// Afficher les informations du grade
echo "Test de la classe 'Grade' (Note) :<br>";
echo "Grade ID : " . $grade->getId() . "<br>";
echo "Room ID : " . $grade->getRoomId() . "<br>";
echo "Grade Name : " . $grade->getName() . "<br>";
echo "Grade Year : " . $grade->getYear() . "<br><br>";

// Test de la classe 'Room' (Salle)

// Créer une instance de la classe 'Room' avec des valeurs
$room = new Room(101, 1, 'Salle de conférence', 50);

// Afficher les informations de la salle
echo "Test de la classe 'Room' (Salle) :<br>";
echo "Room ID : " . $room->getId() . "<br>";
echo "Floor ID : " . $room->getFloorId() . "<br>";
echo "Room Name : " . $room->getName() . "<br>";
echo "Room Capacity : " . $room->getCapacity() . "<br><br>";

// Test de la fonction getGrades() de la classe 'Room'
echo "Test de la fonction getGrades() de la classe 'Room' :<br>";
$grades = $room->getGrades();

// Afficher les notes associées à la salle
echo "Notes associées à la salle :<br>";
foreach ($grades as $grade) {
    echo "Grade ID : " . $grade->getId() . "<br>";
    echo "Grade Name : " . $grade->getName() . "<br>";
    echo "Grade Year : " . $grade->getYear() . "<br><br>";
}

// Test de la classe 'Floor' (Étage)

// Créer une instance de la classe 'Floor' avec des valeurs
$floor = new Floor(1, 'Premier étage', 1);

// Afficher les informations de l'étage
echo "Test de la classe 'Floor' (Étage) :<br>";
echo "Floor ID : " . $floor->getId() . "<br>";
echo "Floor Name : " . $floor->getName() . "<br>";
echo "Floor Level : " . $floor->getLevel() . "<br><br>";

// Test de la classe 'Student'

// Créer une instance de la classe 'Student' avec des valeurs
$student = new Student(1, 3, 'john@example.com', 'John Doe', '2000-01-15', 'Male');

// Afficher les informations de l'étudiant
echo "Test de la classe 'Student' (Étudiant) :<br>";
echo "Student ID : " . $student->getId() . "<br>";
echo "Grade ID : " . $student->getGradeId() . "<br>";
echo "Student Email : " . $student->getEmail() . "<br>";
echo "Student Fullname : " . $student->getFullname() . "<br>";
echo "Student Birthdate : " . $student->getBirthdate() . "<br>";
echo "Student Gender : " . $student->getGender() . "<br><br>";

?>
