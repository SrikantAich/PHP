<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variable in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1,
        h2,
        h3 {
            color: gray;
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
    <h1>Static Variable in PHP</h1>

    <h2>Introduction</h2>
    <p>
        Static variables in PHP are variables that retain their value
        even after the function exits. This allows the variable to
        maintain its value across multiple calls to the function.
    </p>

    <h2>Example with Static Variable</h2>
    <pre><code>
    &lt;?php
        function myTest()
        {
            static $number = 10;
            echo $number;
            $number++;
        }
        myTest();
        echo "&lt;br&gt;";
        myTest();
        echo "&lt;br&gt;";
        myTest();
    ?&gt;
    </code></pre>

    <div class="output">
        <?php
        function myTest()
        {
            static $number = 10;
            echo $number;
            $number++;
        }
        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();
        ?>
    </div>

    <h2>Example without Static Variable</h2>
    <p>In this example, the variable <code>$number</code> is not static, so its value is reset each time the function is called.</p>
    <pre><code>
    &lt;?php
        function myTest1()
        {
            $number = 10;
            echo $number;
            $number++;
        }
        echo "&lt;br&gt;";
        myTest1();
        echo "&lt;br&gt;";
        myTest1();
        echo "&lt;br&gt;";
        myTest1();
    ?&gt;
    </code></pre>

    <div class="output">
        <?php
        function myTest1()
        {
            $number = 10;
            echo $number;
            $number++;
        }
        echo "<br>";
        myTest1();
        echo "<br>";
        myTest1();
        echo "<br>";
        myTest1();
        ?>
    </div>
</body>

</html>