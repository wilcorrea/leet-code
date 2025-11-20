<?php

require_once __DIR__ . '/../shared/math.php';

for ($number = 1; $number <= 100; $number++) {
    $is_prime = is_prime($number);
    if ($is_prime) {
        echo "The number $number is prime!\n";
        continue;
    }
    echo "The number $number is not prime!\n";
}
