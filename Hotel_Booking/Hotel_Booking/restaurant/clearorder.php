<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "DELETE FROM panier";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    header("location:index.php#order");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

