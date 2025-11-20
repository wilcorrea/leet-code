<?php

require_once __DIR__ . '/../shared/Number.php';

echo "Enter a number to check if it is perfect: ";
$number = (int) fgets(STDIN);

$number = new Number($number);

$response = $number->isPerfect() ? 'yes' : 'no';

echo "The number is perfect: $response\n";
