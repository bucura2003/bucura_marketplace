<?php
include 'db_config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['product_name'] . "</h3>";
        echo "<p>" . $row['product_description'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No products available.";
}
?>
