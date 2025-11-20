<?php

echo "Type a number and press [enter]:\n";
$number = (float) trim(fgets(STDIN));
if ($number % 2 !== 0) {
    echo "The number typed is odd";
} else {
    echo "The number typed is even";
}