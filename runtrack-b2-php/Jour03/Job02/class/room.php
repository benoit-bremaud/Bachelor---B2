<?php

class Room {
    // Attributs privés pour représenter les données de la table 'room'
    private $id;          // Identifiant unique de la salle (entier)
    private $floor_id;    // Identifiant du niveau auquel la salle est située (entier)
    private $name;        // Nom de la salle (chaîne de caractères)
    private $capacity;    // Capacité de la salle (entier)

    // Constructeur avec des paramètres optionnels
    public function __construct($id = null, $floor_id = null, $name = null, $capacity = null) {
        // Initialisation des attributs avec les valeurs passées en paramètre
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    // Fonction pour obtenir l'ID de la salle
    public function getId() {
        return $this->id;
    }

    // Fonction pour obtenir l'ID du niveau auquel la salle est située
    public function getFloorId() {
        return $this->floor_id;
    }

    // Fonction pour obtenir le nom de la salle
    public function getName() {
        return $this->name;
    }

    // Fonction pour obtenir la capacité de la salle
    public function getCapacity() {
        return $this->capacity;
    }

    // Fonction pour définir l'ID de la salle
    public function setId($id) {
        $this->id = $id;
    }

    // Fonction pour définir l'ID du niveau auquel la salle est située
    public function setFloorId($floor_id) {
        $this->floor_id = $floor_id;
    }

    // Fonction pour définir le nom de la salle
    public function setName($name) {
        $this->name = $name;
    }

    // Fonction pour définir la capacité de la salle
    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }
}
?>
