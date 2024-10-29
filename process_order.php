<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cart = json_encode($_SESSION['cart']); // Convert cart array to JSON

    $stmt = $conn->prepare("INSERT INTO orders (name, address, phone, items) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $address, $phone, $cart);

    if ($stmt->execute()) {
        echo "Order placed successfully!";
        $_SESSION['cart'] = []; // Clear the cart
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
