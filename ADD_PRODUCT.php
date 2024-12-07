<?php
include 'db_config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $user_id = $_SESSION['user_id']; // Assume user is logged in

    $sql = "INSERT INTO products (user_id, product_name, product_description, price, category) 
            VALUES ('$user_id', '$product_name', '$product_description', '$price', '$category')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post">
    <input type="text" name="product_name" placeholder="Product Name" required><br>
    <textarea name="product_description" placeholder="Description" required></textarea><br>
    <input type="number" step="0.01" name="price" placeholder="Price" required><br>
    <input type="text" name="category" placeholder="Category" required><br>
    <button type="submit">Add Product</button>
</form>
