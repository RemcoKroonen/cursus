<?php

$a = 5;

if ($a % 3 == 0) {
	echo "number is a multiple of 3";
} elseif ($a % 4 == 0) {
	echo "number is a multiple of 4";
} elseif ($a % 5 == 0) {
	echo "number is a multiple of 5";
} else {
	echo "number is not a multiple of 3, 4 and 5";
}