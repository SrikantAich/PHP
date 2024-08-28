<?php
// Add your custom PHP code here
    function filterAndTransform($array,$threshold)
    {
        $filteredArray=array_filter($array,function($value) use ($threshold){
            return $value>=$threshold;
        });
        $filteredArray=array_map(function($value){
            return $value*$value;
        },$filteredArray);
        return $filteredArray;
    }

    $array=[0,1,2,3,4,5,6,7,8,9,10];
    $threshold=readline("Enter the threshold value: ");

    $result=filterAndTransform($array,$threshold);
    print_r($result);

?>