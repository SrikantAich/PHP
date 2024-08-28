<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET["name"])) {
    echo "<p>Hi, " . ($_GET["name"]) . "</p>";
    $uid=$_GET["name"];
    echo "<h2>Your name has " .strlen($uid)." Alphabets </h2>";

}
?>

<form  method="GET" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your Name" required>
        <button type="submit">Submit</button>
</form>
</body>
</html>