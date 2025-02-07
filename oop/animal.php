<?php

class Animal {
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name) {
        $this->name = $name; 
        $this->legs = 4; 
        $this->cold_blooded = "no"; 
    }

    public function getInfo() {
        return "Name: " . $this->name . 
               ", Legs: " . $this->legs . 
               ", Cold Blooded: " . $this->cold_blooded;
    }
}

?>