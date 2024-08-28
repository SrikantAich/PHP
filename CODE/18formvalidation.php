<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = testInput($_POST["name"]);
    $email = testInput($_POST["Email"]);
    echo "<p>Hi, " . $name . "</p>";
    echo "<h2>Your Email is: " . $email . "</h2>";
}

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your Name" required>
    <label for="Email">Email:</label> <!-- Corrected label for email -->
    <input type="text" id="Email" name="Email" placeholder="Enter your Email" required>
    <button type="submit">Submit</button>
</form>
</body>
</html>
