<?php 
require ('./animal.php');

$sheep = new Animal("shaun");

$sheep->set_name("shaun");
$sheep->set_legs(2);
$sheep->set_cold_blooded(json_encode(false));

echo 'name: '.$sheep->get_name(); // "shaun"
echo "<br>";
echo 'legs: '.$sheep->get_legs(); // 2
echo "<br>";
echo 'cold_blooded: '.$sheep->get_cold_blooded(); // false


