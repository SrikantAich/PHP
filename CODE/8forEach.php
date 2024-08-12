<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop in PHP</title>
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
    <h3>Using the `foreach` Loop in PHP</h3>
    <p>The `foreach` loop in PHP is a powerful and easy way to iterate over arrays. It simplifies the process of accessing each element in an array without needing to manage a counter or array index manually.</p>

    <h4>Parameters in the `foreach` Loop</h4>
    <p>The `foreach` loop in PHP requires at least one parameter, but it typically uses two:</p>
    <ul>
        <li><strong>Array:</strong> The array you want to loop through.</li>
        <li><strong>Value:</strong> The value of the current element in the array.</li>
        <li><strong>Key (Optional):</strong> The key of the current element in the array. This is especially useful for associative arrays.</li>
    </ul>
    <p>The syntax of the `foreach` loop is as follows:</p>
    <pre><code>foreach ($array as $value) {
    // Code to execute
}

foreach ($array as $key => $value) {
    // Code to execute
}</code></pre>

    <p>In the first form, the loop iterates through each value in the array. In the second form, both the key and value of each element are accessible within the loop.</p>

    <h4>Example of the `foreach` Loop in Action</h4>
    <p>Below is an example where we loop through an associative array of students and their course codes. The loop checks if the course code is "INT220" and prints the student's name and course code if the condition is met:</p>

    <pre><code>&lt;?php
// Associative array of students and their respective course codes
$students = array(
    "A" =&gt; "INT220", 
    "B" =&gt; "INT222", 
    "C" =&gt; "INT220", 
    "D" =&gt; "INT222"
);

// Loop through each student and course code
foreach ($students as $key =&gt; $value) {
    // Check if the course code is "INT220"
    if ($value == "INT220") {
        // Print the student's name (key) and course code (value)
        echo "$key = $value&lt;br&gt;";
    }
}
?&gt;
</code></pre>

    <h3>Output:</h3>
    <?php
    // Associative array of students and their respective course codes
    $students = array(
        "A" => "INT220", 
        "B" => "INT222", 
        "C" => "INT220", 
        "D" => "INT222"
    );

    // Loop through each student and course code
    foreach ($students as $key => $value) {
        // Check if the course code is "INT220"
        if ($value == "INT220") {
            // Print the student's name (key) and course code (value)
            echo "$key = $value<br>";
        }
    }
    ?>
</body>

</html>
