<?php
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $_SESSION['cart'][] = $product_id; // Add product to cart
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <ul>
        <?php foreach ($_SESSION['cart'] as $item) { echo "<li>Product ID: $item</li>"; } ?>
    </ul>
    <a href="checkout.php">Proceed to Checkout</a>
</body>
</html>

