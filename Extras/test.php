<?php

// Function to reverse a string or number
function rev($parameter)
{
    // Convert the parameter to a string to handle both strings and numbers
    $para = (string)$parameter;
    // Get the length of the string
    $size = strlen($para);
    // Initialize an empty string to store the reversed value
    $new = '';
    // Loop through the string in reverse order and append each character to $new
    for ($i = $size - 1; $i >= 0; $i--) {
        $new .= $para[$i];
    }
    return $new;
}

// Function to check if a number is an Armstrong number
function armstrong($arm)
{
    // Get the length of the number
    $size = strlen($arm);
    // Initialize the sum to zero
    $sum = 0;
    // Loop through each digit of the number
    for ($i = $size - 1; $i >= 0; $i--) {
        // Add the power of each digit to the sum
        $sum = $sum + pow($arm[$i], $size);
    }

    return $sum;
}

// Read input from the user
$name = (string)readline("Your name: ");
$int = (int)readline('Enter an integer: ');
$arm = readline('Enter an integer: ');

$result=rev($int);
$result2=armstrong($arm);

// Output the reversed name
echo "Reversed Name: " . rev($name)."<br>";

// Check if the entered integer is a palindrome
($result == $int) ? print("\nNumber is a Palindrome") : print("\nNot a Palindrome $result");

// Check if the entered integer is an Armstrong number
($result2 == $arm) ? print("\nNumber is Armstrong") : print("\nNot Armstrong $result2");

?>
