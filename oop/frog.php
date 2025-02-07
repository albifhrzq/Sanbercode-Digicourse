<?php

require_once 'animal.php';

class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name); 
        $this->cold_blooded = "yes"; 
    }

    public function jump() {
        echo " jump: hop hop\n";
    }
}

?>