<?php
include 'db_config.php';

$result = $conn->query("SELECT * FROM products"); // Get all products
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Welcome to the Store</h1>
    <div class="products">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="product">
                <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                <h2><?php echo $row['name']; ?></h2>
                <p>Price: $<?php echo $row['price']; ?></p>
                <a href="product.php?id=<?php echo $row['id']; ?>">View Product</a>
            </div>
        <?php } ?>
    </div>
</body>
</html>

