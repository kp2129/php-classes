<?php

class Car {

    public $brand;

    public function __construct($brand)
    {
        echo $this->brand = $brand." ";
    }

    public function __destruct()
    {
        echo $this->brand." is dead <br>";
    }

    static function makeNoise() {
        echo "Beep, beep!! <br>";
    }
}