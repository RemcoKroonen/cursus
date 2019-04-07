<?php

session_start();

echo "NAME:";

if (isset($_SESSION['name'])) {
	echo $_SESSION['name'];
};

echo "<br>";

echo "AGE:";

if (isset($_SESSION['age'])) {
	echo $_SESSION['age'];
};