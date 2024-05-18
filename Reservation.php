<?php
 try {
    $conn = new PDO("mysql:host=localhost;dbname=hotel", 'root'); 
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Optional: Display a success message
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $date = $_POST['date'];
    $chambre = $_POST['chambre'];
    $personnes = $_POST['personnes'];

    // Vérifier la validité des données
    if (empty($date) || empty($chambre) || empty($personnes)) {
        $error = "Veuillez remplir tous les champs.";
    } else if (!in_array($chambre, ['single', 'double', 'triple'])) {
        $error = "Type de chambre invalide.";
    } else if (!in_array($personnes, [1, 2, 3])) {
        $error = "Nombre de personnes invalide.";
    } else {
        // Vérifier la disponibilité de la chambre
        $isAvailable = checkAvailability($date, $chambre, $personnes);

        if ($isAvailable) {
            // Enregistrer la réservation
            $reservationId = saveReservation($date, $chambre, $personnes);

            // Afficher le formulaire de réservation
            echo "<h2>Formulaire de réservation</h2>";
            echo "<form method='post' action='payment.php'>";
            echo "<input type='hidden' name='reservationId' value='$reservationId'>";
            echo "<label for='nom'>Nom:</label><br>";
            echo "<input type='text' name='nom' id='nom' required><br>";
            echo "<label for='prenom'>Prénom:</label><br>";
            echo "<input type='text' name='prenom' id='prenom' required><br>";
            echo "<label for='email'>Email:</label><br>";
            echo "<input type='email' name='email' id='email' required><br>";
            echo "<input type='submit' value='Valider la réservation'>";
            echo "</form>";
        } else {
            // Afficher un message d'erreur
            echo "<h2>Erreur</h2>";
            echo "<p>La chambre n'est pas disponible à la date sélectionnée.</p>";
        }
    }
} else {
    // Afficher le formulaire de réservation
    echo "<h2>Formulaire de réservation</h2>";
    echo "<form method='post'>";
    echo "<label for='date'>Date de réservation:</label><br>";
    echo "<input type='date' name='date' id='date' required><br>";
    echo "<label for='chambre'>Type de chambre:</label><br>";
    echo "<select name='chambre' id='chambre' required>";
    echo "<option value='single'>Single</option>";
    echo "<option value='double'>Double</option>";
    echo "<option value='triple'>Triple</option>";
    echo "</select><br>";
    echo "<label for='personnes'>Nombre de personnes:</label><br>";
    echo "<select name='personnes' id='personnes' required>";
    echo "<option value='1'>1</option>";
    echo "<option value='2'>2</option>";
    echo "<option value='3'>3</option>";
    echo "</select><br>";
    echo "<input type='submit' name='submit' value='Vérifier la disponibilité'>";
    echo "</form>";
}

// Fonction pour vérifier la disponibilité de la chambre
function checkAvailability($date, $chambre, $personnes) {
    // Code pour vérifier la disponibilité de la chambre dans la base de données
    // ...
    return true; // Remplacer par la valeur de disponibilité
}

// Fonction pour enregistrer la réservation
function saveReservation($date, $chambre, $personnes) {
    // Code pour enregistrer la réservation dans la base de données
    // ...
    return 1; // Remplacer par l'identifiant de la réservation
}