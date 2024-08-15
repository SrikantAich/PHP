<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Global Variable Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #444;
        }
        p {
            color: #555;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            overflow: auto;
            margin-top: 20px;
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
    <h1>PHP Global Variable Example</h1>

    <h2>Using the <code>global</code> Keyword</h2>
    <p>The <code>global</code> keyword in PHP is used to access variables from the global scope within a function. When a variable is declared outside a function, it has a global scope and cannot be accessed directly within a function. The <code>global</code> keyword allows you to use these global variables inside a function.</p>

    <h2>Code Snippet (Using <code>global</code> Keyword)</h2>
    <pre><code>
    &lt;?php
        // Declare global variables
        $x = 10;
        $y = 20;

        // Function to add global variables and display the sum
        function test() {
            global $x, $y; // Access global variables
            $y = $x + $y;   // Perform addition
            echo "Sum using global keyword: $y&lt;br&gt;"; // Output the result
        }

        // Call the function
        test();
    ?&gt;
    </code></pre>

    <h2>Using the <code>$GLOBALS</code> Array</h2>
    <p>The <code>$GLOBALS</code> array is a superglobal in PHP, which means it is accessible from anywhere in the script, including within functions. The array stores all global variables as elements with the variable names as keys.</p>

    <h2>Code Snippet (Using <code>$GLOBALS</code> Array)</h2>
    <pre><code>
    &lt;?php
        // Declare global variables
        $a = 30;
        $b = 40;

        // Function to add global variables using $GLOBALS array
        function testUsingGlobals() {
            $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b']; // Perform addition using $GLOBALS array
            echo "Sum using \$GLOBALS array: " . $GLOBALS['b']; // Output the result
        }

        // Call the function
        testUsingGlobals();
    ?&gt;
    </code></pre>

    <h2>Output</h2>
    <div class="output">
        <?php
        // Declare global variables
        $x = 10;
        $y = 20;

        // Function to add global variables and display the sum
        function test() {
            global $x, $y; // Access global variables
            $y = $x + $y;   // Perform addition
            echo "Sum using global keyword: $y<br>"; // Output the result
        }

        // Call the function
        test();

        // Declare global variables for $GLOBALS example
        $a = 30;
        $b = 40;

        // Function to add global variables using $GLOBALS array
        function testUsingGlobals() {
            $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b']; // Perform addition using $GLOBALS array
            echo "Sum using \$GLOBALS array: " . $GLOBALS['b']; // Output the result
        }

        // Call the function
        testUsingGlobals();
        ?>
    </div>
</body>
</html>
