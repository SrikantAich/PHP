<?php


$name=array("John", "Doe", "Jane");
$marks=array(78, 89, 92);
$cgpa=array(7.8, 8.9, 9.2);

$c=array_combine($name, $marks);
print_r($c);
print_r(array_chunk($name,2));
?>