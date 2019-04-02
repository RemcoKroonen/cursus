<?php

$letters = ["a","b", "c", "d", "e", "g", "h", "i", "t", "k", "v", "h"];

$result = array_slice($letters, 5);

echo "<pre>";
print_r($result);

$result = array_slice($letters, 0, 5);

echo "<pre>";
print_r($result);

$result = array_slice($letters, -5, 5);

echo "<pre>";
print_r($result);