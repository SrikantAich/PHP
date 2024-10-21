<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        /* Center the body contents with flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        /* Style input fields */
        input {
            margin: 10px;
            padding: 10px;
            color: gray;
            background-color: gainsboro;
            border-radius: 20px;
            border: none;
        }
        /* Style submit button */
        button {
            width: 25vw;
            margin: 10px;
            padding: 10px;
            background-color: royalblue;
            color: white;
            border-radius: 20px;
            font-size: larger;
            border: none;
            cursor: pointer;
        }
        /* Center align the labels */
        label {
            text-align: center;
        }
        /* Style the form container */
        .main {
            background-color: gainsboro;
            margin: 10px;
            padding: 10px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 30vw;
        }
    </style>
</head>
<body>
    <!-- Form element for submitting user data using POST method -->
    <form action="welcome.php" method="post">
        <div class="main">
            <!-- Name input field -->
            <label for="name">NAME:</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name">

            <!-- Email input field -->
            <label for="Email">EMAIL:</label>
            <input type="email" id="Email" name="Email" placeholder="Enter Your Email">

            <!-- Password input field -->
            <label for="password">PASSWORD:</label>
            <input type="password" id="password" name="password" placeholder="Enter Your Password">
            
            <!-- Submit button to trigger form submission -->
            <button type="submit">Submit</button>
        </div>
    </form>


</body>
</html>
