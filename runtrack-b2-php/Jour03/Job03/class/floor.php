<?php

class Floor {
    private $id;
    private $name;
    private $level;

    // Constructeur avec des paramètres optionnels
    public function __construct(
        int $id = null,
        string $name = null,
        int $level = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    // Getter pour l'ID de l'étage
    public function getId(): ?int {
        return $this->id;
    }

    // Getter pour le nom de l'étage
    public function getName(): ?string {
        return $this->name;
    }

    // Setter pour le nom de l'étage
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    // Getter pour le niveau de l'étage
    public function getLevel(): ?int {
        return $this->level;
    }

    // Setter pour le niveau de l'étage
    public function setLevel(int $level): self {
        $this->level = $level;
        return $this;
    }
}

?>
