<?php

session_start();

if(isset($_SESSION['hits'])){
	$_SESSION['hits']++;
	echo "you have visited this page " . $_SESSION['hits'] . "times";

} else{
	$_SESSION['hits']=1;
	echo "this is the first time you have visited this page";
}


