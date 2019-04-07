<?php

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$age = $_POST['age'];
	$colour = $_POST['colour'];

	setcookie('name', $name, time()+5000);
	setcookie('age', $age, time()+5000);
	setcookie('colour', $colour, time()+5000);
}