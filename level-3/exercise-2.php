<?php

$drawn = random_int(1, 10);
$guesses = [];
do {
    echo "Guess the drawn number (between 1 and 10): ";
    $number = (int) fgets(STDIN);
    $guesses[] = $number;
    if ($number === $drawn) {
        echo "Congratulations! You guessed the number $number!\n";
        echo "You made " . count($guesses) . " guesses.\n";
        break;
    }
    echo "The number $number is not the drawn number. Try again!\n";
} while (true);
