<?php
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "hotel"; // Change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {;

    // Retrieve form data
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];

    // Prepare and execute SQL query to insert data into commandes_marchandises table
    $query = "INSERT INTO commandes_marchandises (type, quantite) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $name, $quantity); // Assuming 'type' is VARCHAR and 'quantite' is INT
    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Stock request submitted successfully.";
    } else {
        // Error in executing the query
        echo "Error: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If form is not submitted, redirect to the form page
    header("Location: form_page.php"); // Replace 'form_page.php' with the actual page containing the form
    exit();
}
