<?php
    // Function to validate the name (only alphabets)
    function ValidateName($name) {
        // Corrected regex: ^[a-zA-Z]+$ ensures only letters and at least one character
        $pattern = "/^[a-zA-Z]+$/";
        if (preg_match($pattern, $name)) {
            return htmlspecialchars($name); // Sanitize output
        } else {
            return false;
        }
    }

    // Function to validate the email using PHP's built-in filter
    function ValidateEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return htmlspecialchars($email); // Sanitize output
        } else {
            return false;
        }
    }

    // Function to validate the password (only alphabets and numbers)
    function ValidatePassword($password) {
        // Corrected regex: ^[a-zA-Z0-9]+$ ensures only letters and numbers, at least one character
        $pattern = "/^[a-zA-Z0-9]+$/";
        if (preg_match($pattern, $password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            return $hashed_password; // Return raw password for hashing
        } else {
            return false;
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and trim form data
        $name = trim($_POST['name']);
        $email = trim($_POST['Email']);
        $password = trim($_POST['password']);

        // Validate each input
        $validName = ValidateName($name);
        $validEmail = ValidateEmail($email);
        $validPassword = ValidatePassword($password);

        // Initialize an array to hold error messages
        $errors = [];

        if (!$validName) {
            $errors[] = "Name should contain only alphabets and must not be empty.";
        }

        if (!$validEmail) {
            $errors[] = "Invalid email format.";
        }

        if (!$validPassword) {
            $errors[] = "Password should contain only alphabets and numbers.";
        }

        // Display success message if no errors
        if (empty($errors)) {
            // Hash the password using PHP's password_hash function
           

            // Output the result (for learning purposes)
            echo "<h3>Form Submitted Successfully!</h3>";
            echo "<p>Hi, $validName!</p>";
            echo "<p>Your email is $validEmail.</p>";
            echo "<p>Your hashed password is: $validPassword</p>";
        } else {
            // Display error messages
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
        }
    }
?>
