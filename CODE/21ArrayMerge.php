<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Merge Two Arrays</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


        <label for="array1">Enter the first array:</label>
        <input type="text" id="array1" name="array1" required>
        <br><br>
        <label for="array2">Enter the second array:</label>
        <input type="text" id="array2" name="array2" required>
        <br><br>
        <input type="submit" value="Submit">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array1 = $_POST["array1"];
        $array2 = $_POST["array2"];
        $array1 = explode(",", $array1);
        $array2 = explode(",", $array2);
        $array1 = array_map('intval', $array1);
        $array2 = array_map('intval', $array2);
        $mergedArray = array_merge($array1, $array2);

        $uniqueArray=array_unique($mergedArray);
        echo "The merged array is: [";
        foreach ($mergedArray as $value) {
            echo $value . ", ";
        }
        echo    "]";

        echo "The Unique Elements in merged array is: [";
        foreach ($uniqueArray as $value) {
            echo $value . ", ";
        }
        echo    "]";
    }
    ?>
</body>

</html>