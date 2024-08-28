<?php
function ca($array, $val) {
    $newArray = [];
    
    foreach ($array as $key => $value) {
        if ($value >= $val) {
            $newArray[] = $value * $value;
        }
    }
    
    return $newArray;
}

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$threshold = readline("Enter the threshold value: ");
$result = ca($array, $threshold);
print_r($result);
?>
