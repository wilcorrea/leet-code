<?php

$sum = 0;
for ($index = 0; $index < 10; $index++) {
    echo 'Type a number: ';
    $number = (int) trim(fgets(STDIN));
    // echo '* ', $index, ': ', $number * $index, "\n";
    $sum += $number;
}

echo 'The total of the numbers is: ', $sum, "\n";