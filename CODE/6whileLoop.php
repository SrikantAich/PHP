<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop in PHP</title>
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
    <h3>Using the `while` Loop in PHP</h3>
    <p>The `while` loop in PHP continues to execute a block of code as long as the specified condition evaluates to `true`. It is particularly useful when the number of iterations is not known beforehand.</p>

    <h4>Example: Counting Down and Displaying Grades</h4>
    <p>In this example, we simulate a countdown of marks starting from 100, decrementing by 10 in each iteration, and printing the corresponding grade:</p>

    <pre><code>&lt;?php
// Initial marks
$marks = 100;

// Loop until marks are less than 60
while ($marks >= 60) {
    echo "Marks: $marks - ";

    // Determine grade based on marks
    if ($marks >= 90) {
        echo "Grade A&lt;br&gt;";
    } elseif ($marks >= 80) {
        echo "Grade B&lt;br&gt;";
    } elseif ($marks >= 70) {
        echo "Grade C&lt;br&gt;";
    } elseif ($marks >= 60) {
        echo "Grade D&lt;br&gt;";
    }

    // Decrement marks by 10
    $marks -= 10;
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Initial marks
    $marks = 100;

    // Loop until marks are less than 60
    while ($marks >= 60) {
        echo "Marks: $marks - ";

        // Determine grade based on marks
        if ($marks >= 90) {
            echo "Grade A<br>";
        } elseif ($marks >= 80) {
            echo "Grade B<br>";
        } elseif ($marks >= 70) {
            echo "Grade C<br>";
        } elseif ($marks >= 60) {
            echo "Grade D<br>";
        }

        // Decrement marks by 10
        $marks -= 10;
    }
    ?>
</body>
</html>
