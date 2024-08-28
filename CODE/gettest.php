<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>
            Welcome,
            <?php
            echo ($_GET["name"]);
            ?>!
        </h1>
        <h2>Your Registration Number is is:
            <strong>
                <?php
                echo ($_GET["Registration"]);
                ?>
            </strong>
        </h2>
        <h2>Address:
            <strong>
                <?php
                echo ($_GET["Address"]);
                ?>
            </strong>
        </h2>
        <h2>Specialization:
            <strong>
                <?php
                echo ($_GET["Specialization"]);
                ?>
            </strong>
        </h2>
        <h2>Address:
            <strong>
                <?php
                echo ($_GET["DOB"]);
                ?>
            </strong>
        </h2>
    </div>
</body>

</html>