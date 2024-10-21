<?php
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