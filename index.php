<?php

require 'autoload.php';

use Object\Human\Student;
use Object\Technics\Transport\Car;
use Object\Technics\Television;

$student = new Student("Дмитрий", 23);
echo $student->introduce() . PHP_EOL;

$car = new Car("Toyota", "Camry");
echo $car->start() . PHP_EOL;

$tv = new Television("Sony", 55);
echo $tv->turnOn() . PHP_EOL;