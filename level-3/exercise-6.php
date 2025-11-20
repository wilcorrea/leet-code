<?php

require_once __DIR__ . '/../shared/fibonacci.php';

echo "Enter a number to limit the fibonacci sequence: ";

$number = (int) fgets(STDIN);

fibonacci($number);
