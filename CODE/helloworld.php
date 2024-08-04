<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types and Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1 {
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
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>PHP</h1>
    
    <h3>PHP Data Types and Functions</h3>
    <pre><code>
    &lt;?php
        // Defining a numeric variable
        $num = 467;
        echo "Number: " . $num . "&lt;br&gt;"; // printing the number
        
        // Converting decimal to binary
        echo "Binary: " . decbin($num) . "&lt;br&gt;"; // decimal to binary
        
        // Converting decimal to octal
        echo "Octal: " . decoct($num) . "&lt;br&gt;"; // decimal to octal
        
        // Converting decimal to hexadecimal
        echo "Hexadecimal: " . dechex($num) . "&lt;br&gt;"; // decimal to hexadecimal

        // Working with a floating-point number
        $x = 10.5;
        echo "Float: " . var_dump($x) . "&lt;br&gt;"; // display data type and value
        echo "Type of Float: " . gettype($x) . "&lt;br&gt;"; // display data type
        echo "Float value: $x &lt;br&gt;"; // print the value of the variable
        echo 'Float value in single quotes: $x &lt;br&gt;'; // print the variable name as string

        // Working with a string
        $y = "Srikant";
        echo "String: " . var_dump($y) . "&lt;br&gt;"; // display data type and value
        echo "Type of String: " . gettype($y) . "&lt;br&gt;"; // display data type

        // Display PHP version
        echo "PHP version: " . phpversion();
    ?&gt;
    </code></pre>
    
    <div class="output">
        <?php
        // Defining a numeric variable
        $num = 467;
        echo "<span class='label'>Number:</span> " . $num . "<br>"; // printing the number
        
        // Converting decimal to binary
        echo "<span class='label'>Binary:</span> " . decbin($num) . "<br>"; // decimal to binary
        
        // Converting decimal to octal
        echo "<span class='label'>Octal:</span> " . decoct($num) . "<br>"; // decimal to octal
        
        // Converting decimal to hexadecimal
        echo "<span class='label'>Hexadecimal:</span> " . dechex($num) . "<br>"; // decimal to hexadecimal

        // Working with a floating-point number
        $x = 10.5;
        echo "<span class='label'>Float:</span> " . var_dump($x) . "<br>"; // display data type and value
        echo "<span class='label'>Type of Float:</span> " . gettype($x) . "<br>"; // display data type
        echo "<span class='label'>Float value:</span> $x <br>"; // print the value of the variable
        echo "<span class='label'>Float value in single quotes:</span> '$x' <br>"; // print the variable name as string

        // Working with a string
        $y = "Srikant";
        echo "<span class='label'>String:</span> " . var_dump($y) . "<br>"; // display data type and value
        echo "<span class='label'>Type of String:</span> " . gettype($y) . "<br>"; // display data type

        // Display PHP version
        echo "<span class='label'>PHP version:</span> " . phpversion();
        ?>
    </div>
</body>
</html>
