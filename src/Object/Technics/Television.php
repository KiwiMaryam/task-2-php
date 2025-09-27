<?php

namespace Object\Technics;

class Television {
    private $brand;
    private $size;

    public function __construct($brand, $size) {
        $this->brand = $brand;
        $this->size = $size;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getSize() {
        return $this->size;
    }

    public function turnOn() {
        return "Телевизор " . $this->brand . " с диагональю " . $this->size . " дюймов включен.";
    }
}