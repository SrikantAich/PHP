<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions</title>
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
        .output {
            background-color: #e0f7fa;
            padding: 10px;
            border: 1px solid #006064;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h3>PHP Array Functions</h3>

    <!-- array_combine -->
    <h4>array_combine()</h4>
    <p><strong>Description:</strong> Combines two arrays into one associative array where the first array’s values are used as keys and the second array’s values as the corresponding values.</p>
    <pre><code>&lt;?php
// Reinitializing arrays with names and marks
$name = array("John", "Doe", "Jane");
$marks = array(78, 89, 92);

// Combining the arrays into an associative array
$c = array_combine($name, $marks);
print_r($c);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $name = array("John", "Doe", "Jane");
        $marks = array(78, 89, 92);
        $c = array_combine($name, $marks);
        print_r($c);
        ?>
    </div>

    <!-- array_chunk -->
    <h4>array_chunk()</h4>
    <p><strong>Description:</strong> Splits an array into chunks of the specified size, returning a multidimensional array where each inner array is a chunk.</p>
    <pre><code>&lt;?php
// Reinitializing the array with names
$name = array("John", "Doe", "Jane");

// Splitting the array into chunks of size 2
$chunks = array_chunk($name, 2);
print_r($chunks);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $name = array("John", "Doe", "Jane");
        $chunks = array_chunk($name, 2);
        print_r($chunks);
        ?>
    </div>

    <!-- array_filter -->
    <h4>array_filter()</h4>
    <p><strong>Description:</strong> Filters the elements of an array using a callback function. Only elements that pass the callback function’s test are included in the result.</p>
    <pre><code>&lt;?php
// Reinitializing the array with marks
$marks = array(78, 89, 92, 50);

// Filtering the array to include only marks greater than 80
$filtered = array_filter($marks, function($value) {
    return $value > 80;
});
print_r($filtered);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $marks = array(78, 89, 92, 50);
        $filtered = array_filter($marks, function($value) {
            return $value > 80;
        });
        print_r($filtered);
        ?>
    </div>

    <!-- array_map -->
    <h4>array_map()</h4>
    <p><strong>Description:</strong> Applies a callback function to the elements of one or more arrays, returning a new array with the results of the callback function.</p>
    <pre><code>&lt;?php
// Reinitializing the array with CGPAs
$cgpa = array(7.8, 8.9, 9.2);

// Applying a function to square each CGPA
$squared = array_map(function($value) {
    return $value * $value;
}, $cgpa);
print_r($squared);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $cgpa = array(7.8, 8.9, 9.2);
        $squared = array_map(function($value) {
            return $value * $value;
        }, $cgpa);
        print_r($squared);
        ?>
    </div>

    <!-- array_merge -->
    <h4>array_merge()</h4>
    <p><strong>Description:</strong> Merges one or more arrays into a single array. If the arrays have the same string keys, the later value will overwrite the previous one.</p>
    <pre><code>&lt;?php
// Reinitializing arrays with names and surnames
$name = array("John", "Doe");
$surname = array("Smith", "Brown");

// Merging the arrays into one
$merged = array_merge($name, $surname);
print_r($merged);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $name = array("John", "Doe");
        $surname = array("Smith", "Brown");
        $merged = array_merge($name, $surname);
        print_r($merged);
        ?>
    </div>

    <!-- array_reduce -->
    <h4>array_reduce()</h4>
    <p><strong>Description:</strong> Reduces an array to a single value using a callback function that accumulates the values. The function receives two parameters: the carry (accumulator) and the current item.</p>
    <pre><code>&lt;?php
// Reinitializing the array with marks
$marks = array(78, 89, 92);

// Summing the values using a reduce function
$sum = array_reduce($marks, function($carry, $item) {
    return $carry + $item;
}, 0);
echo $sum;
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $marks = array(78, 89, 92);
        $sum = array_reduce($marks, function($carry, $item) {
            return $carry + $item;
        }, 0);
        echo $sum;
        ?>
    </div>

    <!-- array_reverse -->
    <h4>array_reverse()</h4>
    <p><strong>Description:</strong> Returns an array with its elements in reverse order. The original array remains unchanged.</p>
    <pre><code>&lt;?php
// Reinitializing the array with names
$name = array("John", "Doe", "Jane");

// Reversing the order of elements
$reversed = array_reverse($name);
print_r($reversed);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $name = array("John", "Doe", "Jane");
        $reversed = array_reverse($name);
        print_r($reversed);
        ?>
    </div>

    <!-- array_slice -->
    <h4>array_slice()</h4>
    <p><strong>Description:</strong> Returns a portion of an array specified by the offset and length. The original array remains unchanged.</p>
    <pre><code>&lt;?php
// Reinitializing the array with marks
$marks = array(78, 89, 92, 70, 85);

// Slicing the array to get the first three elements
$sliced = array_slice($marks, 0, 3);
print_r($sliced);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $marks = array(78, 89, 92, 70, 85);
        $sliced = array_slice($marks, 0, 3);
        print_r($sliced);
        ?>
    </div>

    <!-- array_sum -->
    <h4>array_sum()</h4>
    <p><strong>Description:</strong> Returns the sum of all the values in an array. Useful for summing up numeric values.</p>
    <pre><code>&lt;?php
// Reinitializing the array with marks
$marks = array(78, 89, 92);

// Calculating the sum of the array values
$total = array_sum($marks);
echo $total;
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $marks = array(78, 89, 92);
        $total = array_sum($marks);
        echo $total;
        ?>
    </div>

    <!-- array_unique -->
    <h4>array_unique()</h4>
    <p><strong>Description:</strong> Removes duplicate values from an array, returning only the unique elements. The array is indexed numerically.</p>
    <pre><code>&lt;?php
// Reinitializing the array with marks, including duplicates
$marks = array(78, 89, 92, 78, 89);

// Removing duplicate values to get unique marks
$unique = array_unique($marks);

// Printing the array with unique values
print_r($unique);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $marks = array(78, 89, 92, 78, 89);
        $unique = array_unique($marks);
        print_r($unique);
        ?>
    </div>

    <!-- array_values -->
    <h4>array_values()</h4>
    <p><strong>Description:</strong> Returns all the values from an array and indexes the array numerically. This is useful for getting a list of values from an associative array.</p>
    <pre><code>&lt;?php
// Reinitializing an associative array with student names
$students = array("A" => "John", "B" => "Doe", "C" => "Jane");

// Getting only the values from the associative array
$values = array_values($students);

// Printing the numeric indexed array of values
print_r($values);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $students = array("A" => "John", "B" => "Doe", "C" => "Jane");
        $values = array_values($students);
        print_r($values);
        ?>
    </div>

    <!-- array_walk -->
    <h4>array_walk()</h4>
    <p><strong>Description:</strong> Applies a user-defined function to each element of an array. The function modifies the original array in place.</p>
    <pre><code>&lt;?php
// Reinitializing the array with marks
$marks = array(78, 89, 92);

// Applying a function to each mark to add 5 to each value
array_walk($marks, function(&$value) {
    $value += 5;
});

// Printing the modified array
print_r($marks);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $marks = array(78, 89, 92);
        array_walk($marks, function(&$value) {
            $value += 5;
        });
        print_r($marks);
        ?>
    </div>

    <!-- array_column -->
    <h4>array_column()</h4>
    <p><strong>Description:</strong> Returns the values from a single column in the input array, identified by the column key. Useful for extracting a column of data from a multidimensional array.</p>
    <pre><code>&lt;?php
// Reinitializing a multidimensional array with employee data
$employees = array(
    array("id" => 1, "name" => "John", "department" => "Sales"),
    array("id" => 2, "name" => "Jane", "department" => "Marketing"),
    array("id" => 3, "name" => "Doe", "department" => "HR")
);

// Extracting the 'name' column from the array
$names = array_column($employees, 'name');

// Printing the array of names
print_r($names);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $employees = array(
            array("id" => 1, "name" => "John", "department" => "Sales"),
            array("id" => 2, "name" => "Jane", "department" => "Marketing"),
            array("id" => 3, "name" => "Doe", "department" => "HR")
        );
        $names = array_column($employees, 'name');
        print_r($names);
        ?>
    </div>

</body>
</html>
