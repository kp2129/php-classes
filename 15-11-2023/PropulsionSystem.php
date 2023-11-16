<?php

abstract class PropulsionSystem
{
    function __construct(
        public $power,
        public $fuelType,
        protected $efficienty
    ) {
    }

    public function work()
    {
    
    }
}
