<?php

abstract class Fruit {
    public $color;
    protected $weight;
    protected $weight = [];
    
    function __construct($color, $weight, $seeds)
    {
        $this->$color;
        $this->$weight;
       
    }

    public abstract function ripen();
    
    public static function becomeHealthy() {
        echo "Eat me!\n";
    }
}