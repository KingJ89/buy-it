<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Checkout</h1>
    <form action="process_order.php" method="post">
        <label>Name:</label><input type="text" name="name" required>
        <label>Address:</label><input type="text" name="address" required>
        <label>Phone:</label><input type="text" name="phone" required>
        <button type="submit">Place Order</button>
    </form>
</body>
</html>

