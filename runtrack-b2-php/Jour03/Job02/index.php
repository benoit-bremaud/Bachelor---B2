<?php

// Inclure les fichiers des classes
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

// Test de la classe 'Floor' (Étage)

// Créer une instance de la classe 'Floor' avec des valeurs
$floor = new Floor(1, 'Premier étage', 1);

// Afficher les informations de l'étage
echo "Test de la classe 'Floor' (Étage) :<br>";
echo "Floor ID : " . $floor->getId() . "<br>";
echo "Floor Name : " . $floor->getName() . "<br>";
echo "Floor Level : " . $floor->getLevel() . "<br>";

?>
