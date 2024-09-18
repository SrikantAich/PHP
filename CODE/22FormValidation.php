<?php
// Items available in the store
$items = ["Sugar", "Tea", "Milk", "Wheat Flour", "Biscuits"];

// Function to handle form submission
function handleFormSubmission($items) {
    $cart = [];
    $user_details = [];
    $total_items = 0;
    $expiry = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Store user details
        $user_details = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address']
        ];

        // Store cart items
        foreach ($items as $item) {
            $quantity = $_POST['quantity_' . str_replace(' ', '_', $item)];
            if ($quantity > 0 && $quantity <= 10) {
                $cart[$item] = ['name' => $item, 'quantity' => $quantity];
                $total_items += $quantity;
            }
            elseif ($quantity > 10) {
                echo '<p style="color:red">Maximum quantity for ' . htmlspecialchars($item) . ' is 10.</p>';
            }
        }

        // Calculate expiry date
        $expiry = date("Y-m-d", strtotime("+7 days"));
    }

    return [$cart, $user_details, $total_items, $expiry];
}

// Function to display the form
function displayForm($items) {
    echo '<form method="post">';
    echo '<input type="text" name="name" placeholder="Name" required><br><br>';
    echo '<input type="email" name="email" placeholder="Email" required><br><br>';
    echo '<input type="tel" name="phone" placeholder="Phone" required><br><br>';
    echo '<input type="text" name="address" placeholder="Address" required><br><br>';

    echo '<h3>Select Items:</h3>';
    foreach ($items as $item) {
        echo '<label>' . htmlspecialchars($item) . ':</label>';
        echo '<input type="number" name="quantity_' . str_replace(' ', '_', $item) . '" value="0" min="0"><br><br>';
    }

    echo '<input type="submit" value="Add to Cart">';
    echo '</form>';
}

// Function to display the cart and user details
function displayCart($cart, $user_details, $total_items, $expiry) {
    if ($cart) {
        echo '<h2>Your Shopping Cart</h2>';
        echo '<table border="1">';
        echo '<tr><th>Item</th><th>Quantity</th></tr>';
        foreach ($cart as $details) {
            echo '<tr><td>' . htmlspecialchars($details['name']) . '</td><td>' . htmlspecialchars($details['quantity']) . '</td></tr>';
        }
        echo '</table>';

        echo '<h3>Cart Summary:</h3>';
        echo '<p>Total Number of Items: ' . htmlspecialchars($total_items) . '</p>';

        echo '<h3>User Details:</h3>';
        echo '<p>Name: ' . htmlspecialchars($user_details['name']) . '</p>';
        echo '<p>Email: ' . htmlspecialchars($user_details['email']) . '</p>';
        echo '<p>Phone: ' . htmlspecialchars($user_details['phone']) . '</p>';
        echo '<p>Address: ' . htmlspecialchars($user_details['address']) . '</p>';
        echo '<p>Expiry: ' . htmlspecialchars($expiry) . '</p>';
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<p>Your cart is empty.</p>';
    }
}

// Call functions
list($cart, $user_details, $total_items, $expiry) = handleFormSubmission($items);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h2>Shopping Cart Form</h2>
    <?php displayForm($items); ?>
    <?php displayCart($cart, $user_details, $total_items, $expiry); ?>
</body>
</html>
