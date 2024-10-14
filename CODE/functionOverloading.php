<?php
class MathOperations {
    public function __call($name_of_function, $args) {
        if ($name_of_function == 'multiply') {
            switch (count($args)) {
                case 1:
                    return $args[0];
                case 3:
                    return $args[0] * $args[1] * $args[2];
                case 5:
                    return $args[0] * $args[1] * $args[2] * $args[3] * $args[4];
                default:
                   echo ("Invalid number of arguments for multiply function. Only 1, 3, or 5 arguments are allowed.");
            }
        } 
    }
}

// Example usage
$math = new MathOperations();

    echo "Multiply 2: " . $math->multiply(2) . "<br>"; 
    echo "Multiply 2, 3, 4: " . $math->multiply(2, 3, 4) . "<br>"; 
    echo "Multiply 1, 2, 3, 4, 5: " . $math->multiply(1, 2, 3, 4, 5) . "<br>"; 
    // Default case
    echo "Multiply 2, 3: " . $math->multiply(2, 3) . "<br>";

?>