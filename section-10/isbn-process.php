<?php

//check if form is there
if (isset($_POST['submit'])) {
	# code...


//assign post variables
	$isbn = $_POST['isbn'];

//total incrementor
	$total = 0;
	$i = 1;

//split the string
	$digits = str_split($isbn);
//loop through array
	foreach ($digits as $digit) {
		//update total = digit * 1, 2, 3, ect
		$total += $digit * $i;
		$i++;
	}


//check if divisible by 11
if ($total % 11 == 0) {
	echo "valid";
} else {
	echo "invalid";
}

}