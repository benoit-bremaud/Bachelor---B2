<?php

class Student {
    // Propriétés privées de la classe Student
    private $id;
    private $grade_id;
    private $email;
    private $fullname;
    private $birthdate;
    private $gender;

    // Constructeur avec des paramètres optionnels
    public function __construct(
        int $id = null,
        int $grade_id = null,
        string $email = null,
        string $fullname = null,
        string $birthdate = null,
        string $gender = null
    ) {
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }

    // Getter pour l'ID de l'étudiant
    public function getId(): ?int {
        return $this->id;
    }

    // Getter pour l'ID du grade de l'étudiant
    public function getGradeId(): ?int {
        return $this->grade_id;
    }

    // Setter pour l'ID du grade de l'étudiant
    public function setGradeId(int $grade_id): static {
        $this->grade_id = $grade_id;
        return $this;
    }

    // Getter pour l'adresse e-mail de l'étudiant
    public function getEmail(): ?string {
        return $this->email;
    }

    // Setter pour l'adresse e-mail de l'étudiant
    public function setEmail(string $email): static {
        $this->email = $email;
        return $this;
    }

    // Getter pour le nom complet de l'étudiant
    public function getFullname(): ?string {
        return $this->fullname;
    }

    // Setter pour le nom complet de l'étudiant
    public function setFullname(string $fullname): static {
        $this->fullname = $fullname;
        return $this;
    }

    // Getter pour la date de naissance de l'étudiant
    public function getBirthdate(): ?string {
        return $this->birthdate;
    }

    // Setter pour la date de naissance de l'étudiant
    public function setBirthdate(string $birthdate): static {
        $this->birthdate = $birthdate;
        return $this;
    }

    // Getter pour le genre de l'étudiant
    public function getGender(): ?string {
        return $this->gender;
    }

    // Setter pour le genre de l'étudiant
    public function setGender(string $gender): static {
        $this->gender = $gender;
        return $this;
    }
}
?>