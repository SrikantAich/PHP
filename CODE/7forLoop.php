<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops and Patterns</title>
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

    <h3>Printing an Array Using a `for` Loop in PHP</h3>
    <p>In this example, we use a `for` loop to iterate over an array and print each element:</p>

    <pre><code>&lt;?php
// Array containing five elements
$arr = array(10, 20, 30, 40, 50);

// Loop through the array and print each element
for ($i = 0; $i &lt; count($arr); $i++) {
    echo $arr[$i] . "&lt;br&gt;";
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Array containing five elements
    $arr = array(10, 20, 30, 40, 50);

    // Loop through the array and print each element
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . "<br>";
    }
    ?>

    <h3>Printing Patterns Using Nested `for` Loops in PHP</h3>
    <p>In this example, we use nested `for` loops to print a pattern:</p>

    <pre><code>&lt;?php
// Print the following pattern:
// * * * *
//  * * *
//   * *
//    *
for ($i = 1; $i &lt;= 4; $i++) {
    // Print leading spaces
    for ($j = 1; $j &lt;= $i; $j++) {
        echo "&amp;nbsp;&amp;nbsp;";
    }
    // Print stars
    for ($k = 4; $k &gt;= $i; $k--) {
        echo "*&amp;nbsp;&amp;nbsp;";
    }
    echo "&lt;br&gt;";
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Print the following pattern:
    // * * * *
    //  * * *
    //   * *
    //    *
    for ($i = 1; $i <= 4; $i++) {
        // Print leading spaces
        for ($j = 1; $j <= $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // Print stars
        for ($k = 4; $k >= $i; $k--) {
            echo "*&nbsp;&nbsp;";
        }
        echo "<br>";
    }
    ?>

    <h3>Another Pattern Example</h3>
    <p>This section will print another pattern using nested `for` loops. Here, the pattern will alternate between two different row patterns:</p>

    <pre><code>&lt;?php
// Print the following alternating pattern:
// * * * *
//  * * *
// * * * *
for ($i = 1; $i&lt;4; $i++) {
    if ($i == 1 || $i == 3) { // First and last rows
        for ($j = 1; $j &lt;= 4; $j++) {
            echo "*&amp;nbsp;";
        }
    } else { // Interior rows with a leading space
        echo "&amp;nbsp;";
        for ($j = 1; $j &lt;= 3; $j++) {
            echo "*&amp;nbsp;";
        }
    }
    echo "&lt;br&gt;";
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Print the following alternating pattern:
    // * * * *
    //  * * *
    // * * * *
    for ($i = 1; $i <= 3; $i++) {
        if ($i == 1 || $i == 3) { // First and last rows
            for ($j = 1; $j <= 4; $j++) {
                echo "*&nbsp;";
            }
        } else { // Interior rows with a leading space
            echo "&nbsp;";
            for ($j = 1; $j <= 3; $j++) {
                echo "*&nbsp;";
            }
        }
        echo "<br>";
    }
    ?>

</body>

</html>
