<?php
include_once("Tire.php");
include_once("ICEngine.php");
include_once("ElectricMotor.php");


class Car
{
    private $tires = [];
    private $engine = [];

    function __construct(
        public $color,
        public $brand,
        private $releaseYear,
        private $milage,
        $tireSize,
        $tirePressure,
        $type,
        $power,
        $fuelType,
        $efficienty

    ) {
        for ($i = 0; $i < 4; $i++) {
            $this->tires[] = new Tire($tireSize, $tirePressure);
        }

        if($type == 'Hybrid'){
            $this->engine[] = new ICEngine($power , $fuelType, $efficienty);
        }
        else if($type == 'Eletric'){
            $this->engine[] = new ElectricMotor($power , $fuelType, $efficienty);
        }
    }

    function makeNoise()
    {
    }
    function move()
    {
    }
}
