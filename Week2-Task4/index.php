<?php 
include "Frog.php";
include "Ape.php";

$sheep = new Animal("shloaun");

echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false

echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

echo "<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo"

?>