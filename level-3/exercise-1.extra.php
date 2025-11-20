<?php

require_once __DIR__ . '/../shared/math.php';

$number = (int) fgets(STDIN);

if (is_prime($number)) {
    echo "The number $number is prime!\n";
    exit(0);
}
echo "The number $number is not prime!\n";

