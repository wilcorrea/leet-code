<?php

echo 'Type a number: ';

$number = (int) trim(fgets(STDIN));

echo 'This is the multiplication table for: ', $number, "\n";

// for (useful when we know the end)
    // for (<init>;<condition>;<each>) { ... }
// while (useful to conditional workflow)
    // while (<condition>) { ... }
// do ... while (good to handle while whithout an initial condition)
    // do { ... } while (<condition>)

// foreach (interesting when we have an array or vector to walk through)
    // foreach ($array as $key => $item) { ... }

for ($index = 1; $number <= 10; $index = $index + 1) {
    echo '* ', $index, ': ', $number * $index, "\n";
}