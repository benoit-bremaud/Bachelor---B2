<?php

class Grade {
    private $id;
    private $roomId;
    private $name;
    private $year;

    // Constructeur avec des paramètres optionnels
    public function __construct(
        int $id = null,
        int $roomId = null,
        string $name = null,
        string $year = null
    ) {
        $this->id = $id;
        $this->roomId = $roomId;
        $this->name = $name;
        $this->year = $year;
    }

    // Getter pour l'ID de la note
    public function getId(): ?int {
        return $this->id;
    }

    // Getter pour l'ID de la salle associée à la note
    public function getRoomId(): ?int {
        return $this->roomId;
    }

    // Setter pour l'ID de la salle associée à la note
    public function setRoomId(int $roomId): self {
        $this->roomId = $roomId;
        return $this;
    }

    // Getter pour le nom de la note
    public function getName(): ?string {
        return $this->name;
    }

    // Setter pour le nom de la note
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    // Getter pour l'année de la note
    public function getYear(): ?string {
        return $this->year;
    }

    // Setter pour l'année de la note
    public function setYear(string $year): self {
        $this->year = $year;
        return $this;
    }
}

?>
