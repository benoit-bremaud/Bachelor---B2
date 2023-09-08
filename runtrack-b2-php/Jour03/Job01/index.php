<?php

// Inclure le fichier de la classe Student
include 'class/student.php';

// Créer une instance de Student avec des valeurs par défaut
$student1 = new Student();
echo "Étudiant 1 : <br>";
echo "ID : " . $student1->getId() . "<br>";
echo "Grade ID : " . $student1->getGradeId() . "<br>";
echo "Email : " . $student1->getEmail() . "<br>";
echo "Nom complet : " . $student1->getFullname() . "<br>";
echo "Date de naissance : " . ($student1->getBirthdate() ? $student1->getBirthdate()->format('Y-m-d') : "") . "<br>"; // Utilisation de format
echo "Genre : " . $student1->getGender() . "<br>";

// Créer une instance de Student avec des valeurs personnalisées
$birthdate2 = new DateTime("1981-05-22");
$student2 = new Student(1, 1, "email@email.com", "Benoit Bremaud", $birthdate2, "male");
echo "<br>Étudiant 2 : <br>";
echo "ID : " . $student2->getId() . "<br>";
echo "Grade ID : " . $student2->getGradeId() . "<br>";
echo "Email : " . $student2->getEmail() . "<br>";
echo "Nom complet : " . $student2->getFullname() . "<br>";
echo "Date de naissance : " . ($student2->getBirthdate() ? $student2->getBirthdate()->format('Y-m-d') : "") . "<br>"; // Utilisation de format
echo "Genre : " . $student2->getGender() . "<br>";
