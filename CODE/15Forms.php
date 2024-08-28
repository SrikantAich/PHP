<!-- Improved Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
  
</head>
<body>
    <form action="gettest.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter the Name" required>
        <label for="registration">Registration Number:</label>
        <input type="text" id="registration" name="Registration" placeholder="Registration Number" required>
        <label for="address">Address:</label>
        <input type="text" id="address" name="Address" placeholder="Address">
        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="Specialization" placeholder="Specialization">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="DOB" placeholder="Date of Birth" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>