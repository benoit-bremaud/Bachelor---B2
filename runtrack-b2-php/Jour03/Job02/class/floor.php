<?php

class Floor {
    // Attributs privés pour représenter les données de la table 'floor'
    private $id;      // Identifiant unique de l'étage (entier)
    private $name;    // Nom de l'étage (chaîne de caractères)
    private $level;   // Niveau de l'étage (entier)

    // Constructeur avec des paramètres optionnels
    public function __construct($id = null, $name = null, $level = null) {
        // Initialisation des attributs avec les valeurs passées en paramètre
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    // Fonction pour obtenir l'ID de l'étage
    public function getId() {
        return $this->id;
    }

    // Fonction pour obtenir le nom de l'étage
    public function getName() {
        return $this->name;
    }

    // Fonction pour obtenir le niveau de l'étage
    public function getLevel() {
        return $this->level;
    }

    // Fonction pour définir l'ID de l'étage
    public function setId($id) {
        $this->id = $id;
    }

    // Fonction pour définir le nom de l'étage
    public function setName($name) {
        $this->name = $name;
    }

    // Fonction pour définir le niveau de l'étage
    public function setLevel($level) {
        $this->level = $level;
    }
}
?>
