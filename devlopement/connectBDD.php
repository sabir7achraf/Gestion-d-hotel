<?php
$servername = "localhost";
$username = "ACHRAF";
$password = '';
$dbname = "gestiond'hotel";
$port = "3308";
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username,'0000'); 
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Optional: Display a success message
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>

