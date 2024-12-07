<?php
// Database configuration
$servername = "localhost"; // Use "127.0.0.1" or your AMPPS IP address
$username = "root";        // Default AMPPS username
$password = "";            // Default AMPPS password
$dbname = "bucura_marketplace";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<link rel="stylesheet" href="LOGIN.php">
<link rel="stylesheet" href="PRODUCT.php">
<link rel="stylesheet" href="PRODUCT2.php">
<link rel="stylesheet" href="PROJECT1000.html">

