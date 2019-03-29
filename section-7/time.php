<?php

$christmasDay = strtotime("25 december");

$daysToChristmas = ceil(($christmasDay - time())/60/60/24);

echo "There are " . $daysToChristmas . " days until Christmas";

