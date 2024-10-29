<?php
include 'db_config.php';
$product_id = $_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id = $product_id");
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1><?php echo $product['name']; ?></h1>
    <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
    <p>Price: $<?php echo $product['price']; ?></p>
    <p><?php echo $product['description']; ?></p>
    <form action="cart.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <button type="submit">Add to Cart</button>
    </form>
</body>
</html>

