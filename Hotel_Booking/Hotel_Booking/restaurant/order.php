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

    if (isset($_POST['idplat'])) {
        $query = "SELECT * FROM plat WHERE id_plat = :idplat";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':idplat', $_POST['idplat']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $query = "INSERT INTO panier (id_plat, nom_plat, prix_plat) VALUES (:id_plat, :nom_plat, :prix_plat)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_plat', $row['id_plat']);
        $stmt->bindParam(':nom_plat', $row['nom_plat']);
        $stmt->bindParam(':prix_plat', $row['prix_plat']);
        $stmt->execute();
        header("location: index.php#order");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
