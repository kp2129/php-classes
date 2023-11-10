<?php

class Cat {

    public $name;
    public $age = 0;

    // public function __construct($name)
    // {
    //    $this->name = $name;
    // }


    public function birthday(){
        $this->age = +1;
    }
    
    static function moew() {
        echo "meow!";
    }

    // public function __destruct()
    // {
    //     echo $this->name." is dead <br>";
    // }

}