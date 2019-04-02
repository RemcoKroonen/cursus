<?php

/*$cities = array('Amsterdam', 'Berlin', 'Brisbane', 'London', 'New York', 'Paris');

echo "<pre>";

print_r($cities);

array_push($cities, 'Sydney', 'Helsinki', 'Beijing', 'Dublin', 'Rome');

echo "<pre>";

print_r($cities);

sort($cities);
foreach ($cities as $city) {
	echo "<ol>";

	echo "<li>" . $cities . "</li>";

	echo "</ol>";
}*/

$cities = array('London', 'Tokyo', 'New York', 'Berlin', 'Brisbane');

sort($cities);

echo '<ul>';

foreach($cities as $city){

echo "<li>$city</li>";

}

echo '<br>';

array_push($cities, 'Sydney','Helsinki', 'Beijing', 'Dublin', 'Rome');

sort($cities);

foreach($cities as $city){

echo "<li>$city</li>";

}

echo '</ul>';
