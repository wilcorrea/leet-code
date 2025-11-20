<?php

function getNumbers(string $message) : array {
    echo $message, "\n";
    $num1 = (float)trim(fgets(STDIN));
    $num2 = (float)trim(fgets(STDIN));
    return [$num1, $num2];
}

do {
    echo "===== Menu =====", "\n";
    echo "*) Multiply", "\n";
    echo "+) Add", "\n";
    echo "-) Subtract", "\n";
    echo "/) Divide", "\n";
    echo ":q!) Exit program", "\n";
    echo "Please enter an option: ";

    $instruction = trim(fgets(STDIN));
    echo " > ";
    
    switch ($instruction) {
        case '*':
            [$num1, $num2] = getNumbers("Enter two numbers to multiply: ");
            echo "Result: " . ($num1 * $num2);
            break;
        case '+':
            [$num1, $num2] = getNumbers("Enter two numbers to add: ");
            echo "Result: " . ($num1 + $num2);
            break;
        case '-':
            [$num1, $num2] = getNumbers("Enter two numbers to subtract: ");
            echo "Result: " . ($num1 - $num2);
            break;
        case '/':
            [$num1, $num2] = getNumbers("Enter two numbers to divide: ");
            if ($num2 !== 0) {
                echo "Result: " . ($num1 / $num2);
            } else {
                echo "Error: Division by zero is not allowed.";
            }
            break;
        case ':q!':
            echo "Bye!";
            break;
        default:
            echo "Invalid option, please try again.";
    }
    echo "\n================\n";
} while ($instruction !== ':q!');