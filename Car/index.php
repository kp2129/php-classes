<?php
include("Car.php");
include("Cat.php");

// echo "Hi, ";

// $myCar = new Car("Dacia");
// $myCar2 = new Car("Tesla");
// Car::makeNoise();
// $myCar->makeNoise();

$cat = new Cat();
$cat2 = new Cat();
$cat->name = "Mincis";
$cat->name = "Brincis";

Cat::moew();