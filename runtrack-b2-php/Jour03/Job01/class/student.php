<?php

class Student {
    private $id;
    private $grade_id;
    private $email;
    private $fullname;
    private $birthdate;
    private $gender;

    public function __construct($id = null, $grade_id = null, $email = "", $fullname = "", $birthdate = null, $gender = "") {
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }

    // Getters and setters for class properties

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getGradeId() {
        return $this->grade_id;
    }

    public function setGradeId($grade_id) {
        $this->grade_id = $grade_id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getFullname() {
        return $this->fullname;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    public function getBirthdate() {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }
}
