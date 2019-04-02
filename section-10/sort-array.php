<?php

$names = array('Tim', 'Tom', 'Tum');

rsort($names);

echo "<ol>";

foreach ($names as $name) {
	echo "<li>" . $name . "</li>"; 
}

echo "</ol>";