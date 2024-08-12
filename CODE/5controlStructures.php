<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h3 {
            color: #333;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            overflow: auto;
        }
    </style>
</head>
<body>
    <h3>Finding the Highest of Three Numbers</h3>
    <p>This example uses `if`, `else if`, and `else` statements to determine and print the highest of three numbers:</p>

    <pre><code>&lt;?php
// Define three numbers
$num1 = 10;
$num2 = 40;
$num3 = 50;

// Determine the highest number
if ($num1 &gt; $num2 &amp;&amp; $num1 &gt; $num3) {
    echo "The highest number is $num1";
} elseif ($num2 &gt; $num3) {
    echo "The highest number is $num2";
} else {
    echo "The highest number is $num3";
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Define three numbers
    $num1 = 10;
    $num2 = 40;
    $num3 = 50;

    // Determine the highest number
    if ($num1 > $num2 && $num1 > $num3) {
        echo "The highest number is $num1";
    } elseif ($num2 > $num3) {
        echo "The highest number is $num2";
    } else {
        echo "The highest number is $num3";
    }
    ?>

    <h3>Checking if a Number is Even or Odd</h3>
    <p>This example checks whether a given number is even or odd using the modulus operator:</p>

    <pre><code>&lt;?php
// Define a number
$num4 = 10;

// Check if the number is even or odd
if ($num4 % 2 == 0) {
    echo "&lt;br&gt;The number is even";
} else {
    echo "&lt;br&gt;The number is odd";
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Define a number
    $num4 = 10;

    // Check if the number is even or odd
    if ($num4 % 2 == 0) {
        echo "<br>The number is even";
    } else {
        echo "<br>The number is odd";
    }
    ?>

    <h3>Using `switch` Case for Password Validation</h3>
    <p>In this example, a `switch` case is used to validate a password and display a welcome message accordingly:</p>

    <pre><code>&lt;?php
// Prompt for password input
$password = "admin"; // Replace this line with readline("Enter the Password: ") in a CLI environment

// Validate password using switch case
switch ($password) {
    case "admin":
        echo "&lt;br&gt;Welcome Admin";
        break;
    case "user":
        echo "&lt;br&gt;Welcome User";
        break;
    default:
        echo "&lt;br&gt;Invalid Password";
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Prompt for password input
    $password = "admin"; // Replace this with actual input handling in a CLI environment

    // Validate password using switch case
    switch ($password) {
        case "admin":
            echo "<br>Welcome Admin";
            break;
        case "user":
            echo "<br>Welcome User";
            break;
        default:
            echo "<br>Invalid Password";
    }
    ?>
</body>
</html>
