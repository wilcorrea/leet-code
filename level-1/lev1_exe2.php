<?php

echo "Type the first number and press [enter]:\n";
$number1 = trim(fgets(STDIN));

echo "Type the seconrd number and press [enter]:\n";
$number2 = trim(fgets(STDIN));

if (is_numeric($number1) && is_numeric($number2)) {
    $number1 = (float) $number1;
    $number2 = (float) $number2;

    match (true) {
        $number1 > $number2 => print "The first number is the greatest",
        $number1 < $number2 => print "The second number is the greatest",
        default => print "The numbers are the same",
    };
} else {
    echo "Please type just valid numbers!";
}