<?php

namespace Object\Human;

class Student {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function introduce() {
        return "Привет, меня зовут " . $this->name . " и мне " . $this->age . " лет.";
    }
}