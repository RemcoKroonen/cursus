<?php

function calculate($number1, $number2){
	$add = $number1 + $number2;
	$subtract = $number1 - $number2;
	return array($add, $subtract);
}

$results = calculate(10,3);


echo $results[0];
echo "<br>";
echo $results[1];