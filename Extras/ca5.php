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
    
    $email = testEmail($_POST["Email"]);
    $dob= testDOB($_POST["DOB"]);
}

function testEmail($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid Email Format</p>";
    } else {
        echo "<h2>Your Email is: " . $data . "</h2>";
    }
    return $data;
}

function testDOB($data)
{
    // Sanitize input
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    // Regular expression for date validation in DD/MM/YYYY format
    $pattern = '~^(0[1-9]|[12]\d|3[01])/(0[1-9]|1[0-2])/(19|20)\d{2}$~';

    // Validate the date format
    if (preg_match($pattern, $data)) {
        // Further check if the date is valid using DateTime
        $date = DateTime::createFromFormat('d/m/Y', $data);
        if ($date && $date->format('d/m/Y') === $data) {
            echo "<h2>Your DOB is: " . $data . "</h2>";
        } else {
            echo "<p>Invalid Date</p>";
        }
    } else {
        echo "<p>Invalid DOB Format</p>";
    }

    return $data;
}

?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="Email">Email:</label> 
    <input type="text" id="Email" name="Email" placeholder="Enter your Email" required>
    <label for="Email">DOB</label> 
    <input type="text" id="DOB" name="DOB" placeholder="Enter your DOB" required>
    <button type="submit">Submit</button>
</form>
</body>
</html>
