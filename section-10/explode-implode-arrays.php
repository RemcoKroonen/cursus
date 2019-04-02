<?php

$string = "John, Sarah, Ken, Ben, Tom";

$names = explode(", ", $string);

echo "<pre>";
print_r($names);

$imploded = implode("|", $names);

echo $imploded;