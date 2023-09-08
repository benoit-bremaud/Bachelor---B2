<?php

class Room {
    private $id;
    private $floorId;
    private $name;
    private $capacity;

    // Constructeur avec des paramètres optionnels
    public function __construct(
        int $id = null,
        int $floorId = null,
        string $name = null,
        int $capacity = null
    ) {
        $this->id = $id;
        $this->floorId = $floorId;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    // Getter pour l'ID de la salle
    public function getId(): ?int {
        return $this->id;
    }

    // Getter pour l'ID de l'étage auquel la salle est située
    public function getFloorId(): ?int {
        return $this->floorId;
    }

    // Setter pour l'ID de l'étage auquel la salle est située
    public function setFloorId(int $floorId): self {
        $this->floorId = $floorId;
        return $this;
    }

    // Getter pour le nom de la salle
    public function getName(): ?string {
        return $this->name;
    }

    // Setter pour le nom de la salle
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    // Getter pour la capacité de la salle
    public function getCapacity(): ?int {
        return $this->capacity;
    }

    // Setter pour la capacité de la salle
    public function setCapacity(int $capacity): self {
        $this->capacity = $capacity;
        return $this;
    }
}

?>
