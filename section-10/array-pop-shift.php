<?php

$cities = ["London", "Paris", "Den Haag", "Amsterdam"];

$LastCity =  array_pop($cities);

echo $LastCity;

echo "<br>";

print_r($cities);

$firstCity = array_shift($cities);

echo "<br>";

echo $firstCity;

echo "<br>";

print_r($cities);