<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Concepts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h3, h4 {
            color: #333;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            overflow: auto;
        }
        .output {
            background-color: #e0f7fa;
            padding: 10px;
            border: 1px solid #006064;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h3>PHP Functions Overview</h3>

    <!-- Section: Creating and Calling a Function -->
    <h4>Create and Call a Function</h4>
    <p>In PHP, you can define a function using the <code>function</code> keyword. Below is an example of creating and calling a function:</p>
    <pre><code>&lt;?php
// Function to greet a user
function greet() {
    echo "Hello, welcome to PHP functions!";
}

// Calling the greet function
greet();
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Function to greet a user
        function greet() {
            echo "Hello, welcome to PHP functions!";
        }

        // Calling the greet function
        greet();
        ?>
    </div>

    <!-- Section: PHP Function Arguments -->
    <h4>PHP Function Arguments</h4>
    <p>Functions can take arguments to process data. Here’s an example with arguments:</p>
    <pre><code>&lt;?php
// Function to add two numbers
function add($a, $b) {
    echo "The sum of $a and $b is: " . ($a + $b);
}

// Calling the add function with arguments
add(5, 10);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Function to add two numbers
        function add($a, $b) {
            echo "The sum of $a and $b is: " . ($a + $b);
        }

        // Calling the add function with arguments
        add(5, 10);
        ?>
    </div>

    <!-- Section: PHP Default Argument Value -->
    <h4>PHP Default Argument Value</h4>
    <p>You can provide a default value for an argument. If the argument is not passed, the default value is used:</p>
    <pre><code>&lt;?php
// Function to multiply two numbers with a default value
function multiply($a, $b = 2) {
    echo "The product of $a and $b is: " . ($a * $b);
}

// Calling the multiply function with one argument
multiply(5);

// Calling the multiply function with two arguments
multiply(5, 3);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Function to multiply two numbers with a default value
        function multiply($a, $b = 2) {
            echo "The product of $a and $b is: " . ($a * $b) . "<br>";
        }

        // Calling the multiply function with one argument
        multiply(5);

        // Calling the multiply function with two arguments
        multiply(5, 3);
        ?>
    </div>

    <!-- Section: PHP Functions - Returning Values -->
    <h4>PHP Functions - Returning Values</h4>
    <p>Functions can return a value using the <code>return</code> statement:</p>
    <pre><code>&lt;?php
// Function to divide two numbers and return the result
function divide($a, $b) {
    return $a / $b;
}

// Storing and displaying the result of the division
$result = divide(10, 2);
echo "The result of the division is: $result";
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Function to divide two numbers and return the result
        function divide($a, $b) {
            return $a / $b;
        }

        // Storing and displaying the result of the division
        $result = divide(10, 2);
        echo "The result of the division is: $result";
        ?>
    </div>

    <!-- Section: Passing Arguments by Reference -->
    <h4>Passing Arguments by Reference</h4>
    <p>You can pass arguments by reference, allowing the function to modify the original variable:</p>
    <pre><code>&lt;?php
// Function to increment a value by reference
function increment(&$num) {
    $num += 5;
}

// Initial value
$number = 10;

// Calling the increment function
increment($number);

// Displaying the modified value
echo "The incremented value is: $number";
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Function to increment a value by reference
        function increment(&$num) {
            $num += 5;
        }

        // Initial value
        $number = 10;

        // Calling the increment function
        increment($number);

        // Displaying the modified value
        echo "The incremented value is: $number";
        ?>
    </div>

    <!-- Section: Variable Number of Arguments -->
    <h4>Variable Number of Arguments</h4>
    <p>You can create functions that accept a variable number of arguments using <code>...</code> (splat operator):</p>
    <pre><code>&lt;?php
// Function to calculate the sum of multiple numbers
function sum(...$numbers) {
    return array_sum($numbers);
}

// Calling the sum function with different numbers of arguments
echo "The sum of 1, 2, 3 is: " . sum(1, 2, 3) . "&lt;br&gt;";
echo "The sum of 4, 5, 6, 7 is: " . sum(4, 5, 6, 7);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Function to calculate the sum of multiple numbers
        function sum(...$numbers) {
            return array_sum($numbers);
        }

        // Calling the sum function with different numbers of arguments
        echo "The sum of 1, 2, 3 is: " . sum(1, 2, 3) . "<br>";
        echo "The sum of 4, 5, 6, 7 is: " . sum(4, 5, 6, 7);
        ?>
    </div>

    <!-- Section: PHP is a Loosely Typed Language -->
    <h4>PHP is a Loosely Typed Language</h4>
    <p>PHP automatically converts types based on the context. For example:</p>
    <pre><code>&lt;?php
// Adding a number and a string
$sum = 5 + "10";

// PHP converts the string to a number automatically
echo "The sum is: $sum";
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Adding a number and a string
        $sum = 5 + "10";

        // PHP converts the string to a number automatically
        echo "The sum is: $sum";
        ?>
    </div>

    <!-- Section: Enforcing Strict Typing -->
    <h4>Enforcing Strict Typing</h4>
    <p>To enforce strict typing, use <code>declare(strict_types=1);</code> at the beginning of the PHP file:</p>
    <pre><code>&lt;?php
declare(strict_types=1);

// Function to add two integers
function addIntegers(int $a, int $b): int {
    return $a + $b;
}

// Calling the function with integer values
echo "The sum of 5 and 10 is: " . addIntegers(5, 10);

// This will cause a TypeError because of strict typing
// echo addIntegers(5, "10"); // Uncommenting this line will cause an error
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
    <?php


// Function to add two integers
function addIntegers(int $a, int $b): int {
    return $a + $b;
}

// Calling the function with integer values
echo "The sum of 5 and 10 is: " . addIntegers(5, 10);

// This will cause a TypeError because of strict typing
// echo addIntegers(5, "10"); // Uncommenting this line will cause an error
?>

    </div>

</body>
</html>
