<?php
include("includes/header.php") ;
include("includes/navbar.php") ;
// session_start() ;   
?>

<?php
if(isset($_POST['candidat_info_btn'])){
            $connection = mysqli_connect("localhost" , "root" , "" , "hotel") ;
            $id = $_POST["candidat_id"] ; 
            $query = "SELECT * FROM candidat WHERE id ='$id' ";
            $query_run = mysqli_query($connection, $query); 
            ?>
    <div style="padding-top:200px">
    <title>Candidate Information</title>
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
    <div class="container">
        <h2>Candidate Information</h2>
        <div class="info" style="justify-content:center;display:flex">
            <label for="name">Name:</label>
            <span id="name"><?php echo " {$row["nom_c"]} {$row["prenom_c"]} "?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="dateOfBirth">Date of Birth:</label>
            <span id="dateOfBirth"><?php echo $row["date_naissance"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="educationLevel">Education Level:</label>
            <span id="educationLevel"> <?php echo $row["Niveau_etude"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="experience">Experience:</label>
            <span id="experience"> <?php echo $row["experience"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="description">Description:</label>
            <span id="description"><?php echo $row["description"] ?></span>
        </div>
        <br>
        <div class="info" style="justify-content:center;display:flex">
            <label for="lastDiploma">Last Diploma:</label>
            <span id="lastDiploma"><?php echo $row["last_Diplom"] ?></span>
        </div>
    </div>
<?php } ?>
<?php
include("includes/script.php") ;
?>