<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Binary Search for number from 1-100
    function BinarySearch($number)
    {
        // Declare an array of 100 elements
        $arr = array();
        for ($i = 0; $i < 100; $i++)
        {
            $arr[$i] = $i + 1;
        }

        if ($number < 1 || $number > 100)
        {
            echo "Please enter a number between 1 and 100";
            return;
        }
        else
        {
            // Binary search a number and return the index
            $low = 0;
            $high = 99;

            while ($low <= $high)
            {
                $mid = floor(($low + $high) / 2);
                if ($arr[$mid] == $number)
                {
                    return $mid;
                }
                elseif ($arr[$mid] > $number)
                {
                    $high = $mid - 1;
                }
                else
                {
                    $low = $mid + 1;
                }
            }

            // Number not found
            return -1;
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Enter a number between 1 and 100:</label>
        <input type="number" id="number" name="number" min="1" max="100" required>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        $result = BinarySearch($number);
        if ($result != -1) {
            echo "The Index of the number is " . $result;
        } else {
            echo "Number not found.";
        }
    }
    ?>
</body>
</html>
