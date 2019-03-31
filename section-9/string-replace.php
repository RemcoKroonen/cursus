<?php

$string = "John|Sam|Billy|Karen|Ben|Jane|Bob";

$newString = str_replace('|', ', ', $string);

echo $newString;