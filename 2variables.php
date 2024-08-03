<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
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
    <h3 >PHP is a Loosely Typed Language</h3>
    <h4>PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.</h4>
    <h4>In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.</h4>
    
    <?php
    // Displaying how to declare variables in PHP
    echo "<h1>Variable Declaration in PHP: \$variable = 'value'</h1>"; // use backslash to escape the special character
    $name = 'Srikant Aich';
    echo "My name is $name<br>";
    
    // Using var_dump() to display the data type and value of the variable
    var_dump($name);
    
    // Assigning the same value to multiple variables
    $name = $name1 = $name2 = 'Srikant';
    echo "<br>Assigning the same value to multiple variables but all the variables are independent.<br>";
    echo "<br>$name<br>$name1<br>$name2<br>";
    
    // Changing the value of one variable
    $name = "Srikant Aich";
    echo "<br>$name<br>$name1<br>$name2<br>";
    ?>

    <h3>Scope of Variables in PHP</h3>
    <h4>
        <ol>
            <li>Local</li>
            <li>Global</li>
            <li>Static</li>
        </ol>
    </h4>
    
    <h4>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</h4>
    <?php 
    $name = "Srikant Aich"; // global variable

    function myname() {
        // Attempting to access a global variable inside a function will cause an error
        // echo "Variable is not accessible inside the function: $name (global variable is only accessible outside the function hence error)";
    }

    myname();
    echo "<br>$name<br>"; // this will print the global variable as it is accessible outside the function
    ?>
    
    <h4>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</h4>
    <?php
    function myTest() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    // using x outside the function will generate an error
    // echo "<p>Variable x outside function is: $x</p>";
    ?>
    
    <h4>The global keyword is used to access a global variable from within a function. To do this, use the global keyword before the variables (inside the function):</h4>
    <?php 
    $p = 5;
    $q = 10;

    function myTest1() {
        // Accessing global variables using the global keyword
        global $p, $q;
        $p = $p + $q;
    } 

    myTest1();
    echo $p;
    ?>
    
    <h4>PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly:</h4>
    <?php 
    $p = 5;
    $q = 10;

    function myTest2() {
        // Accessing global variables using the $GLOBALS array
        $GLOBALS['p'] = $GLOBALS['p'] + $GLOBALS['q'];
    }

    myTest2();
    echo $p;
    ?>

    <h4>The static keyword is used to keep the local variable's value intact between function calls:</h4>
    <?php
    function myStaticTest() {
        static $count = 0; // static variable
        echo "<p>Static count is: $count</p>";
        $count++;
    }

    myStaticTest();
    myStaticTest();
    myStaticTest();
    ?>
    
    <h2>Static Keyword Example in php</h2>
</body>

</html>
