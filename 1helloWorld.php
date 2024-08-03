<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w3School PHP basics</title>
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
    </style>
</head>
<body>
    <?php

    echo "Hello World!!" . "<br>";//echo statement to print the string
    // HTML tags are treated as tags and not as string
    echo "PHP version: ".phpversion()."<br/>";//method to check php version
    
    ?>
</body>
</html>