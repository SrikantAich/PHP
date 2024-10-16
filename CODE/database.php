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
    color VARCHAR(30) NOT NULL,
    quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query to create the table
if ($conn->query($sql) === TRUE) {
    echo "Table 'fruits' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// SQL query to insert data into the fruits table
$sql = "INSERT INTO fruits (name, color, quantity) VALUES 
    ('Apple', 'Red', 10),
    ('Banana', 'Yellow', 20),
    ('Grapes', 'Green', 15),
    ('Orange', 'Orange', 12),
    ('Strawberry', 'Red', 8)";

// Execute the query to insert data
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
