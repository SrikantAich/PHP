<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Evaluation</title>
</head>
<body>
<?php
if (isset($_GET["Marks"])) {
    $grade = $_GET["Marks"];
    
    switch ($grade) {
        case "fail":
            echo "<p>Your grade range is 10-50. You have failed.</p>";
            break;
        case "D":
            echo "<p>Your grade range is 50-60. You have achieved a D grade.</p>";
            break;
        case "C":
            echo "<p>Your grade range is 60-70. You have achieved a C grade.</p>";
            break;
        case "B":
            echo "<p>Your grade range is 70-80. You have achieved a B grade.</p>";
            break;
        case "A":
            echo "<p>Your grade range is 80-100. You have achieved an A grade.</p>";
            break;
        default:
            echo "<p>Invalid grade selected.</p>";
            break;
    }
}
?>

<form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="Marks">Choose your marks:</label>
    <select name="Marks" id="Marks">
        <option value="fail">10-50</option>
        <option value="D">50-60</option>
        <option value="C">60-70</option>
        <option value="B">70-80</option>
        <option value="A">80-100</option>
    </select>
    <button type="submit">Submit</button>
</form>

</body>
</html>
