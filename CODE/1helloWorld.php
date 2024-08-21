<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w3School PHP Basics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h3 {
            color: #333;
        }
        h4 {
            color: #666;
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
    <h3>PHP Basics</h3>
    <h4>This example demonstrates basic PHP syntax and functionality.</h4>
    <pre><code>
    &lt;?php
        echo "Hello World!!" . "&lt;br&gt;"; // echo statement to print the string
        // HTML tags are treated as tags and not as strings
        echo "PHP version: " . phpversion() . "&lt;br/&gt;"; // method to check PHP version
    ?&gt;
    </code></pre>
    
    <div class="output">
        <?php
            echo "Hello World!!" . "<br>";// echo statement to print the string
            // HTML tags are treated as tags and not as string
            echo "PHP version: " . phpversion() . "<br/>"; // method to check PHP version
        ?>
    </div>
</body>
</html>
