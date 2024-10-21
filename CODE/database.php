<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fruits";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// SQL query to create a table named fruits
$sql = "CREATE TABLE IF NOT EXISTS fruits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    price INT NOT NULL,
    quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query to create the table
if ($conn->query($sql) === TRUE) {
    echo "Table 'fruits' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = testInput($_POST['name']);
    $price = testInput($_POST['price']);
    $quantity = validateQuantity($_POST['quantity']);

    // SQL query to insert data into the fruits table
    $sql = "INSERT INTO fruits (name,price, quantity) VALUES ('$name', '$price', $quantity)";

    // Execute the query to insert data
    if ($conn->query($sql) === TRUE) {
       
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function testInput($data) {
    $data=strtoupper($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}

function validateQuantity($data)
{
    $data=testInput($data);
    if (is_numeric($data)) 
    {
        if ($data >= 0) {
            return $data;
        }
    }
    return -1;
}

// Close connection
$conn->close();
?>
