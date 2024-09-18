<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
        $name = $email = $gender = $comment = $website = $age = "";
        $nameErr = $emailErr = $genderErr = $ageErr = $error = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = name($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = comment($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
            $age = test_input($_POST["Age"]);

            if (empty($name)) {
                $nameErr = "Name is required";
            }

            if (empty($email)) {
                $emailErr = "Email is required";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }

            
            if (empty($age)) {
                $ageErr = "Age is required";
            } elseif (!is_numeric($age)) {
                $ageErr = "Age must be numeric";
            }

            
            if (empty($gender)) {
                $genderErr = "Gender is required";
            }
        }

        function name($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            
            //should start with captial letter
            if($data = ucfirst($data))
            {
                return $data;
            }
            else
            {
               //capitalize the first letter
               $data=ucfirst($data);
            }
            
        }

        function comment($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            if(strlen($data) < 20)
            {
                return $data;
            }
            else
            {
                //return the first 20 characters
                return substr($data, 0, 20);
            }
            
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span style="color:red">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span style="color:red">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <br><br>
        Age: <input type="number" name="Age" value="<?php echo $age;?>">
        <span style="color:red">* <?php echo $ageErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
        <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
        <input type="radio" name="gender" value="other" <?php if (isset($gender) && $gender=="other") echo "checked";?>>Other
        <span style="color:red">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($ageErr) && empty($genderErr)) {
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
            
            
        }
    ?>

</body>
</html>