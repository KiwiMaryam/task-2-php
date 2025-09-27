<?php

namespace Object\Technics\Transport;

class Car {
    private $brand;
    private $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function start() {
        return "Машина " . $this->brand . " " . $this->model . " завелась.";
    }
}