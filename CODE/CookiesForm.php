<?php
    setcookie("Auction_Item", "Luxury Car", time() + 2 * 86400);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_COOKIE["Auction_Item"])) {
    echo "Auction Item is a " . $_COOKIE["Auction_Item"];
} else {
    echo "No items found";
}
?>

<p>
    <strong>You have to reload this page to see the value of cookies</strong>
</p>

</body>
</html>