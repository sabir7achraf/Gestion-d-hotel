<?php
include("includes/header.php") ;
include("includes/navbar.php") ;
// session_start() ;   
?>

<?php

            $connection = mysqli_connect("localhost" , "root" , "" , "hotel") ;
            $id = 3; 
            $query = "SELECT * FROM employe WHERE id ='$id' ";
            $query_run = mysqli_query($connection, $query); 
            ?>
    <div style="padding-top:200px">
    <title>MES Information</title>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        h2 {
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
        .info label {
            font-weight: bold;
        }
        .info p {
            margin: 5px 0;
        }
    </style>
    <?php 
    $row = mysqli_fetch_assoc($query_run)
    ?>
    <div class="container"  >
        <h2 style="padding-bottom:20px">Mes Informations </h2>
        <div class="info" style="justify-content:center;display:flex;">
            <label for="name">Name:</label>
            <span id="name"><?php echo " {$row["nom"]} {$row["prenom"]} "?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="dateOfBirth">Date of Birth:</label>
            <span id="dateOfBirth"><?php echo $row["date_naissance"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="dateOfBirth">Position</label>
            <span id="dateOfBirth"><?php echo $row["position"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="educationLevel">Phone Number:</label>
            <span id="educationLevel"> <?php echo $row["tel"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="experience">Deppartement:</label>
            <span id="experience"> <?php echo $row["departement"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="description">username:</label>
            <span id="description"><?php echo $row["username"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="lastDiploma">Email:</label>
            <span id="lastDiploma"><?php echo $row["email"] ?></span>
        </div>
    </div>
<?php
include("includes/script.php") ;
?>