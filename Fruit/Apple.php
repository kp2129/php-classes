<?php

include_once('Fruit.php');

class Apple extends Fruit {
    public function ripen() {
        echo "I'm ready to kill Snow White\n";
    }
}