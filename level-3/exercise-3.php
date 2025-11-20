<?php

do {
    echo "===== Menu =====", "\n";
    echo "1) Show current date", "\n";
    echo "2) Say \"Hello!\"", "\n";
    echo "3) Exit program", "\n";
    echo "Please enter an option: ";

    $instruction = trim(fgets(STDIN));
    echo " > ";
    
    switch ($instruction) {
        case '1':
            echo "Current date: " . date('Y-m-d H:i:s');
            break;
        case '2':
            echo "Hello!";
            break;
        case '3':
            echo "Bye!";
            break;
        default:
            echo "Invalid option, please try again.";
    }
    echo "\n================\n";
} while ($instruction !== '3');