<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="color">Color:</label><br>
        <input type="text" id="color" name="color"><br>
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity"><br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"]=='post' )
    {
        $name=testInput($_POST['name']);
        $color=testInput($_POST['color']);
        $quantity=testInput($_POST['quantity']);

       
    }
    function testInput($data)
    {
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        $data=trim($data);
        return $data;
    }
    ?>
    </body>
</html>