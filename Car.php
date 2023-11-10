<?php

class Car {

    public $brand;

    public function __construct($brand)
    {
        echo $this->brand = $brand." is alive! <br>";
    }

    static function makeNoise() {
        echo "Beep, beep!! <br>";
    }

    public function __destruct()
    {
        echo $this->brand." is dead <br>";
    }

}
