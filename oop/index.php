<?php
require_once('Animal.php');
require_once("Frog.php");
require_once("Ape.php");

$shaun = new Animal("shaun");

echo "Name : $shaun->name <br>";
echo "Legs : $shaun->legs <br>";
echo "Cold blooded : $shaun->cold_blooded <br> <br>";

$kodok = new Frog("buduk");

echo "Name : $kodok->name <br>";
echo "Legs : $kodok->legs <br>";
echo "Cold blooded : $kodok->cold_blooded <br>";
echo $kodok->jump(); 
echo "<br> <br>";

$sungokong = new Ape("kera sakti");

echo "Name : $sungokong->name <br>";
echo "Legs : $sungokong->legs <br>";
echo "Cold blooded : $sungokong->cold_blooded <br>";
echo $sungokong->yell();

?>