<?php

echo "Type a number and press [enter]:\n";
$number = trim(fgets(STDIN));
if (is_numeric($number)) {
    if ($number > 0) {
        echo "The number typed is positive";
    } else if ($number < 0) {
        echo "The number typed is negative";
    } else {
        echo "The number is zero";
    }
} else {
    echo "Please type a valid number";
}