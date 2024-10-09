<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Regex Example</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.container {
			background-color: #fff;
			padding: 30px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 300px;
			text-align: center;
		}
		h2 {
			margin-bottom: 20px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			text-align: left;
		}
		input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		.result {
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Regex Example</h2>
		<form action="regex.php" method="post">
			<label for="inputString">Enter a string:</label>
			<input type="text" id="inputString" name="inputString" required>
			<input type="submit" value="Check Pattern">
		</form>
		<div class="result">
			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$inputString = $_POST['inputString'];
				$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'; // Email pattern

				if (preg_match($pattern, $inputString)) {
					echo '<p style="color: green;">The string is a valid email address.</p>';
				} else {
					echo '<p style="color: red;">The string is not a valid email address.</p>';
				}
			}
			?>
		</div>
	</div>
</body>
</html>