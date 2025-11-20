<?php
echo "Enter a number to calculate its factorial: ";
$number = (int)fgets(STDIN);
$initial = $number;
$answer =  1;
do {
    $answer = $number * $answer;
    $number--;
} while ($number >= 1);

echo "The factorial of '$initial' is: $answer\n";