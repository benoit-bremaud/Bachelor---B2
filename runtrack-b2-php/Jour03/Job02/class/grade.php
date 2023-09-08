<?php

class Grade {
    // Attributs privés pour représenter les données de la table 'grade'
    private $id;
    private $room_id;
    private $name;
    private $year;

    // Constructeur avec des paramètres optionnels
    public function __construct($id = null, $room_id = null, $name = null, $year = null) {
        // Initialisation des attributs avec les valeurs passées en paramètre
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        $this->year = $year;
    }

    // Fonction pour obtenir l'ID du grade
    public function getId() {
        return $this->id;
    }

    // Fonction pour obtenir l'ID de la salle associée au grade
    public function getRoomId() {
        return $this->room_id;
    }

    // Fonction pour obtenir le nom du grade
    public function getName() {
        return $this->name;
    }

    // Fonction pour obtenir l'année du grade
    public function getYear() {
        return $this->year;
    }

    // Fonction pour définir l'ID du grade
    public function setId($id) {
        $this->id = $id;
    }

    // Fonction pour définir l'ID de la salle associée au grade
    public function setRoomId($room_id) {
        $this->room_id = $room_id;
    }

    // Fonction pour définir le nom du grade
    public function setName($name) {
        $this->name = $name;
    }

    // Fonction pour définir l'année du grade
    public function setYear($year) {
        $this->year = $year;
    }
}
?>
