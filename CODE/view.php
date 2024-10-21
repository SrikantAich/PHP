<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #e53935;
        }

        .delete-all-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .delete-all-button:hover {
            background-color: #e53935;
        }
    </style>
</head>

<body>
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

    // Handle delete request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete_id'])) {
            $delete_id = $_POST['delete_id'];
            $delete_sql = "DELETE FROM fruits WHERE id = ?";
            $stmt = $conn->prepare($delete_sql);
            $stmt->bind_param("i", $delete_id);
            $stmt->execute();
            $stmt->close();
            echo "Record deleted successfully<br>";
        } elseif (isset($_POST['delete_all'])) {
            $delete_all_sql = "DELETE FROM fruits";
            if ($conn->query($delete_all_sql) === TRUE) {
                echo "All records deleted successfully<br>";
            } else {
                echo "Error deleting records: " . $conn->error . "<br>";
            }
        }
    }

    $sql = "SELECT id, name, price, quantity, created_at FROM fruits";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Fruits Table Data:</h2>";
        echo "<form method='post' action=''>
                <input type='hidden' name='delete_all' value='1'>
                <input type='submit' value='Delete All' class='delete-all-button'>
              </form>";

        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["price"] . "</td>
                    <td>" . $row["quantity"] . "</td>
                    <td>" . $row["created_at"] . "</td>
                    <td>
                        <form method='post' action=''>
                            <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                            <input type='submit' value='Delete' class='delete-button'>
                        </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
    <a href="DatabaseForm.php">Back</a>
</body>

</html>