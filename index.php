<?php
include("Car.php");

// echo "Hi, ";

$myCar = new Car("Dacia");
// $myCar2 = new Car("Tesla");
Car::makeNoise();
$myCar->makeNoise();
