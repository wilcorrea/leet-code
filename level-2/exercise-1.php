<?php

echo 'Type a number: ';

$maxNumber = (int) trim(fgets(STDIN));

echo 'The given number was: ', $maxNumber, "\n";

// for (useful when we know the end)
    // for (<init>;<condition>;<each>) { ... }
// while (useful to conditional workflow)
    // while (<condition>) { ... }
// do ... while (good to handle while whithout an initial condition)
    // do { ... } while (<condition>)

// foreach (interesting when we have an array or vector to walk through)
    // foreach ($array as $key => $item) { ... }

for ($number = 1; $number <= $maxNumber; $number = $number + 1) {
    echo 'This is the number: ', $number, "\n";
}