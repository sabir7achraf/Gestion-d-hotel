<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Edit Employee Profile</h6>
</div>

<div class="card-body">
<?php
    $connection= mysqli_connect("localhost","root","","hotel");
 if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $id = $_POST['edit_id'] ; 

    $query = "SELECT * FROM employe WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row){
        ?>
        <form action="code.php" method="POST">



        <?php if(isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo '<h2>'.$_SESSION['success'].'</h2>' ; 
            unset($_SESSION['success']) ; 
        }

        if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>' ; 
            unset($_SESSION['status']) ; 
        }
            ?>



            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label> Nom </label>
                <input type="text" name="edit_nom" value="<?php echo $row['nom'] ?>"class="form-control" placeholder="Enter Nom">
            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" name="edit_prenom" value="<?php echo $row['prenom'] ?>" class="form-control checking_email" placeholder="Enter Prenom">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" name="edit_position" value="<?php echo $row['position'] ?>" class="form-control" placeholder="Enter Position">
            </div>
            <div class="form-group">
                <label>Deppartement</label>
                <input type="text" name="edit_departement"value="<?php echo $row['departement'] ?>" class="form-control" placeholder="Enter Deppartement">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" name="edit_salaire" value="<?php echo $row['salaire'] ?>" class="form-control" placeholder="Enter Salary">
            </div>
            <div class="form-group">
                <label>username</label>
                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>"class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"class="form-control" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <input type="text" name="edit_tel"value="<?php echo $row['tel'] ?>" class="form-control" placeholder="Enter Tel">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>"class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Date de Naissance </label>
                <input type="date" name="edit_date_naissance" value="<?php echo $row['date_naissance'] ?>" class="form-control" placeholder="Enter Date de Naissance">
            </div>
            <div class="form-group">
                <label>Sexe : </label><br>
                
                <label for="male">Male</label>
                <input type="radio" id="male" name="edit_sexe" value="male">
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <label for="female">Female</label>
                <input type="radio" id="female" name="edit_sexe" value="female">
        </div>
            <div class="form-group">
                <label>CIN</label>
                <input type="text" name="edit_cin" value="<?php echo $row['cin'] ?>" class="form-control" placeholder="Enter CIN">
            </div>
            <div class="form-group">
                <label>RIB</label>
                <input type="text" name="edit_rib" value="<?php echo $row['rib'] ?>" class="form-control" placeholder="Enter RIB">
            </div>
            <div>
                <a href="gerer_empl.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
            <?php
    }
}
?>


















<?php 
include('includes/script.php') ;
// include('includes/footer.php') ;  
?>