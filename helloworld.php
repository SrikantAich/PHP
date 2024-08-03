<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP</h1>

<?php
// echo "Hello World!!" . "<br>";
// echo "This is my first PHP program";
$num =467;
echo $num."<br>";
echo decbin($num)."<br>";

echo decoct($num)."<br>";;

echo dechex($num)."<br>";


$x=10.5;
echo var_dump($x)."<br>";
echo gettype($x)."<br>";
echo "$x <br>";
echo '$x <br>';

$y="Srikant";
echo var_dump($y)."<br>";
echo gettype($y)."<br>";

echo "php version ".phpversion();
?>


</body>
</html>