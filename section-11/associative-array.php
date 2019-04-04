<?php

$cities = ["London", "Paris", "Den Haag", "Amsterdam"];

foreach($cities as $city){
	echo $city . "<br>";
}

$students = array("Sam"=>12, "Tim"=>15, "Rob"=>8);

foreach($students as $student=>$age){
	echo $student . ' is ' . $age . ' years old';
	echo "<br>";
}