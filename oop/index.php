<?php

require_once 'animal.php';
require_once 'ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");
echo $sheep->getInfo();

echo "<br>";

$ape = new Ape("Kera Sakti");
echo $ape->getInfo(); 
$ape->yell();

echo "<br>";

$frog = new Frog("Buduk");
echo $frog->getInfo();
$frog->jump();
echo "<br>";

?>