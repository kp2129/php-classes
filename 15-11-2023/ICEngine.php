<?php
include_once("PropulsionSystem.php");

class ICEngine extends PropulsionSystem
{
    function __construct(
        public $size,
        private $cylinderCount
        ){}

        function work(){
            echo "Brumm, Brumm";
        }
    
}



