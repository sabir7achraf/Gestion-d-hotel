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

    if (isset($_POST['sumpanier'])) {
        // Delete all items from the 'panier' table
        $deleteQuery = "DELETE FROM panier";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->execute();

        // Insert the total sum into the 'facture_restaurant' table
        $totalSum = $_POST['sumpanier']; // Assuming 'sumpanier' contains the total sum
        $insertQuery = "INSERT INTO facture_restaurant (prix_total) VALUES (:totalSum)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bindParam(':totalSum', $totalSum);
        $stmt->execute();

        // INSERT THE TOTAL SUM IN THE RAPPORT
        $totalSum = $_POST['sumpanier']; // Assuming 'sumpanier' contains the total sum
        $insertQuery = "INSERT INTO rapport (montant,departement) VALUES (:totalSum,'restaurant')";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bindParam(':totalSum', $totalSum);
        $stmt->execute();

        // Redirect to index.php after completing the operation
        header("location: index.php");
        exit(); // Exit after redirection
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}