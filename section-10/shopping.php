<?php

/*if(isset($_POST['submit'])){

	$number = $_POST['cc'];
	$total = 0;
	$i = 1;

	//get last 4
	$last4 = substr($number, -4,4);

	//split string
	$number = str_split($number);

	//reverse array
	$number = array_reverse($number);

	//loop array and calculate
	foreach ($number as $digit) {
			
		if($i % 2 == 0){
			$digit *= 2;


			if($digit > 9){
				$digit -= 9;
			}

		};
		$total += $digit;
		$i ++;


		if($total % 10 == 0){
			echo "Your code is valid and ending in" . $last4 . "is valid";
		} else{
			echo "Your code is invalid and ending in" . $last4 . "is invalid";
		}


	}
}*/

//check if form submitted
if(isset($_POST['submit'])){

    //assign variables (total and incrementor)
    $number = $_POST['cc'];
    $total = 0;
    $i = 1;

    //get last 4 digits
    $last4 = substr($number, -4, 4);

    //split string into array
    $number = str_split($number);

    //reverse array
    $number = array_reverse($number);

    //loop through array and calculate
    foreach($number as $digit){
        //if even number
        if($i % 2 == 0){
            //multiply digit by 2
            $digit *= 2;
            //if > 9
            if($digit > 9){
                //subtract 9
                $digit -= 9;
            }

        }

        // total = total + digit
        $total += $digit;
        $i++;

    }


    //check if divisible by 10
    if($total % 10 == 0){
        echo "Your credit card number ending in " . $last4 . " is valid";
    } else {
        echo "Your credit card number ending in " . $last4 . " is invalid";
    }

}