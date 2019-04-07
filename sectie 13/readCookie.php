<?php
if(isset($_COOKIE['fruit'])){;
	echo $_COOKIE['fruit'];
} else {
	echo "cookie hasn't been set";
}