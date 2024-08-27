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

    <h3>PHP Array Functions Overview</h3>

    <!-- Section: Array Creation and Initialization -->
    <h4>Array Creation and Initialization</h4>
    <p>Creating an array using <code>array()</code> and <code>range()</code>:</p>
    <pre><code>&lt;?php
// Creating an array with array()
$fruits = array("Apple", "Banana", "Cherry");
print_r($fruits);

// Creating an array with range()
$numbers = range(1, 5);
print_r($numbers);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Creating an array with array()
        $fruits = array("Apple", "Banana", "Cherry");
        print_r($fruits);

        echo "<br>";

        // Creating an array with range()
        $numbers = range(1, 5);
        print_r($numbers);
        ?>
    </div>

    <!-- Section: Array Manipulation -->
    <h4>Array Manipulation</h4>
    <p>Merging, pushing, popping, shifting, slicing, and splicing arrays:</p>
    <pre><code>&lt;?php
// Merging arrays
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$result = array_merge($array1, $array2);
print_r($result);

// Pushing elements
array_push($fruits, "Orange");
print_r($fruits);

// Popping elements
array_pop($fruits);
print_r($fruits);

// Shifting elements
array_shift($fruits);
print_r($fruits);

// Unshifting elements
array_unshift($fruits, "Kiwi");
print_r($fruits);

// Slicing arrays
$sliced_array = array_slice($numbers, 1, 3);
print_r($sliced_array);

// Splicing arrays
array_splice($fruits, 1, 2, array("Mango", "Papaya"));
print_r($fruits);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Merging arrays
        $array1 = array("red", "green");
        $array2 = array("blue", "yellow");
        $result = array_merge($array1, $array2);
        print_r($result);

        echo "<br>";

        // Pushing elements
        array_push($fruits, "Orange");
        print_r($fruits);

        echo "<br>";

        // Popping elements
        array_pop($fruits);
        print_r($fruits);

        echo "<br>";

        // Shifting elements
        array_shift($fruits);
        print_r($fruits);

        echo "<br>";

        // Unshifting elements
        array_unshift($fruits, "Kiwi");
        print_r($fruits);

        echo "<br>";

        // Slicing arrays
        $sliced_array = array_slice($numbers, 1, 3);
        print_r($sliced_array);

        echo "<br>";

        // Splicing arrays
        array_splice($fruits, 1, 2, array("Mango", "Papaya"));
        print_r($fruits);
        ?>
    </div>

    <!-- Section: Array Search -->
    <h4>Array Search</h4>
    <p>Searching for elements in an array:</p>
    <pre><code>&lt;?php
// Checking if a value exists in an array
if (in_array("Apple", $fruits)) {
    echo "Apple is in the fruits array.";
}

// Searching for a key in an array
$key = array_search("Mango", $fruits);
echo "Mango is found at index: $key";

// Checking if a key exists
if (array_key_exists(0, $fruits)) {
    echo "The key 0 exists in the fruits array.";
}
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Checking if a value exists in an array
        if (in_array("Apple", $fruits)) {
            echo "Apple is in the fruits array.<br>";
        }

        // Searching for a key in an array
        $key = array_search("Mango", $fruits);
        echo "Mango is found at index: $key<br>";

        // Checking if a key exists
        if (array_key_exists(0, $fruits)) {
            echo "The key 0 exists in the fruits array.";
        }
        ?>
    </div>

    <!-- Section: Array Sorting -->
    <h4>Array Sorting</h4>
    <p>Sorting arrays in different ways:</p>
    <pre><code>&lt;?php
// Sorting an array in ascending order
sort($numbers);
print_r($numbers);

// Sorting an array in descending order
rsort($numbers);
print_r($numbers);

// Sorting an associative array by value
$grades = array("John" => 85, "Jane" => 92, "Doe" => 78);
asort($grades);
print_r($grades);

// Sorting an associative array by key
ksort($grades);
print_r($grades);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Sorting an array in ascending order
        sort($numbers);
        print_r($numbers);

        echo "<br>";

        // Sorting an array in descending order
        rsort($numbers);
        print_r($numbers);

        echo "<br>";

        // Sorting an associative array by value
        $grades = array("John" => 85, "Jane" => 92, "Doe" => 78);
        asort($grades);
        print_r($grades);

        echo "<br>";

        // Sorting an associative array by key
        ksort($grades);
        print_r($grades);
        ?>
    </div>

    <!-- Section: Array Filtering -->
    <h4>Array Filtering</h4>
    <p>Filtering arrays using a callback function:</p>
    <pre><code>&lt;?php
// Filtering an array to get only even numbers
$even_numbers = array_filter($numbers, function($num) {
    return $num % 2 === 0;
});
print_r($even_numbers);

// Applying a callback function to array elements
$doubled_numbers = array_map(function($num) {
    return $num * 2;
}, $numbers);
print_r($doubled_numbers);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Filtering an array to get only even numbers
        $even_numbers = array_filter($numbers, function($num) {
            return $num % 2 === 0;
        });
        print_r($even_numbers);

        echo "<br>";

        // Applying a callback function to array elements
        $doubled_numbers = array_map(function($num) {
            return $num * 2;
        }, $numbers);
        print_r($doubled_numbers);
        ?>
    </div>

    <!-- Section: Array Keys and Values -->
    <h4>Array Keys and Values</h4>
    <p>Working with array keys and values:</p>
    <pre><code>&lt;?php
// Getting all the keys of an array
$keys = array_keys($grades);
print_r($keys);

// Getting all the values of an array
$values = array_values($grades);
print_r($values);

// Flipping the keys and values of an array
$flipped_array = array_flip($grades);
print_r($flipped_array);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Getting all the keys of an array
        $keys = array_keys($grades);
        print_r($keys);

        echo "<br>";

        // Getting all the values of an array
        $values = array_values($grades);
        print_r($values);

        echo "<br>";

        // Flipping the keys and values of an array
        $flipped_array = array_flip($grades);
        print_r($flipped_array);
        ?>
    </div>

    <!-- Section: Array Counting -->
    <h4>Array Counting</h4>
    <p>Counting elements in an array:</p>
    <pre><code>&lt;?php
// Counting all elements in an array
echo "Number of elements in fruits array: " . count($fruits);

// Counting all values of an array
$counted_values = array_count_values($fruits);
print_r($counted_values);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Counting all elements in an array
        echo "Number of elements in fruits array: " . count($fruits) . "<br>";

        // Counting all values of an array
        $counted_values = array_count_values($fruits);
        print_r($counted_values);
        ?>
    </div>

    <!-- Section: Array Chunking -->
    <h4>Array Chunking</h4>
    <p>Splitting an array into chunks:</p>
    <pre><code>&lt;?php
// Splitting an array into chunks
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Splitting an array into chunks
        $chunked_array = array_chunk($fruits, 2);
        print_r($chunked_array);
        ?>
    </div>

    <!-- Section: Array Difference and Intersection -->
    <h4>Array Difference and Intersection</h4>
    <p>Computing the difference and intersection of arrays:</p>
    <pre><code>&lt;?php
$array3 = array("a" => "red", "b" => "green", "c" => "blue");
$array4 = array("a" => "red", "b" => "yellow");

// Difference between arrays
$difference = array_diff($array3, $array4);
print_r($difference);

// Intersection of arrays
$intersection = array_intersect($array3, $array4);
print_r($intersection);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $array3 = array("a" => "red", "b" => "green", "c" => "blue");
        $array4 = array("a" => "red", "b" => "yellow");

        // Difference between arrays
        $difference = array_diff($array3, $array4);
        print_r($difference);

        echo "<br>";

        // Intersection of arrays
        $intersection = array_intersect($array3, $array4);
        print_r($intersection);
        ?>
    </div>

    <!-- Section: Array Reversal -->
    <h4>Array Reversal</h4>
    <p>Reversing the order of an array:</p>
    <pre><code>&lt;?php
// Reversing the order of an array
$reversed_array = array_reverse($fruits);
print_r($reversed_array);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Reversing the order of an array
        $reversed_array = array_reverse($fruits);
        print_r($reversed_array);
        ?>
    </div>

    <!-- Section: Array Randomization -->
    <h4>Array Randomization</h4>
    <p>Shuffling and picking random elements from an array:</p>
    <pre><code>&lt;?php
// Shuffling an array
shuffle($fruits);
print_r($fruits);

// Picking random elements from an array
$random_keys = array_rand($fruits, 2);
print_r($random_keys);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Shuffling an array
        shuffle($fruits);
        print_r($fruits);

        echo "<br>";

        // Picking random elements from an array
        $random_keys = array_rand($fruits, 2);
        print_r($random_keys);
        ?>
    </div>

    <!-- Section: Array Unique -->
    <h4>Array Unique</h4>
    <p>Removing duplicate values from an array:</p>
    <pre><code>&lt;?php
$duplicate_array = array("a" => "red", "b" => "green", "c" => "red");
$unique_array = array_unique($duplicate_array);
print_r($unique_array);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $duplicate_array = array("a" => "red", "b" => "green", "c" => "red");
        $unique_array = array_unique($duplicate_array);
        print_r($unique_array);
        ?>
    </div>

    <!-- Section: Array Reduction -->
    <h4>Array Reduction</h4>
    <p>Reducing an array to a single value:</p>
    <pre><code>&lt;?php
$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
});
echo "Sum of numbers: $sum";
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $sum = array_reduce($numbers, function($carry, $item) {
            return $carry + $item;
        });
        echo "Sum of numbers: $sum";
        ?>
    </div>

    <!-- Section: Array Key-Value Association -->
    <h4>Array Key-Value Association</h4>
    <p>Getting the first and last keys of an array:</p>
    <pre><code>&lt;?php
$first_key = array_key_first($grades);
echo "First key: $first_key";

$last_key = array_key_last($grades);
echo "Last key: $last_key";
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $first_key = array_key_first($grades);
        echo "First key: $first_key<br>";

        $last_key = array_key_last($grades);
        echo "Last key: $last_key";
        ?>
    </div>

    <!-- Section: Array Serialization -->
    <h4>Array Serialization</h4>
    <p>Serializing and unserializing arrays:</p>
    <pre><code>&lt;?php
$serialized = serialize($grades);
echo "Serialized: $serialized";

$unserialized = unserialize($serialized);
print_r($unserialized);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        $serialized = serialize($grades);
        echo "Serialized: $serialized<br>";

        $unserialized = unserialize($serialized);
        print_r($unserialized);
        ?>
    </div>

    <!-- Section: Miscellaneous -->
    <h4>Miscellaneous</h4>
    <p>Miscellaneous array functions:</p>
    <pre><code>&lt;?php
// Applying a user function recursively to every member of an array
array_walk_recursive($grades, function(&$item, $key) {
    $item = $item + 5; // Adding 5 marks to each grade
});
print_r($grades);

// Compacting variables into an array
$name = "John";
$age = 25;
$compact_array = compact("name", "age");
print_r($compact_array);

// Extracting variables from an array
$person = array("name" => "Jane", "age" => 30);
extract($person);
echo "Name: $name, Age: $age";

// Computing the difference of arrays using keys
$array_diff_key = array_diff_key($grades, $flipped_array);
print_r($array_diff_key);

// Computing the intersection of arrays using keys
$array_intersect_key = array_intersect_key($grades, $flipped_array);
print_r($array_intersect_key);
?&gt;</code></pre>
    <h5>Output:</h5>
    <div class="output">
        <?php
        // Applying a user function recursively to every member of an array
        array_walk_recursive($grades, function(&$item, $key) {
            $item = $item + 5; // Adding 5 marks to each grade
        });
        print_r($grades);

        echo "<br>";

        // Compacting variables into an array
        $name = "John";
        $age = 25;
        $compact_array = compact("name", "age");
        print_r($compact_array);

        echo "<br>";

        // Extracting variables from an array
        $person = array("name" => "Jane", "age" => 30);
        extract($person);
        echo "Name: $name, Age: $age<br>";

        // Computing the difference of arrays using keys
        $array_diff_key = array_diff_key($grades, $flipped_array);
        print_r($array_diff_key);

        echo "<br>";

        // Computing the intersection of arrays using keys
        $array_intersect_key = array_intersect_key($grades, $flipped_array);
        print_r($array_intersect_key);
        ?>
    </div>

</body>
</html>
