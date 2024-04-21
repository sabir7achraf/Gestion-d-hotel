<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bolder">Add Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nom </label>
                <input type="text" name="nom" class="form-control" placeholder="Enter Nom">
            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" name="prenom" class="form-control checking_email" placeholder="Enter Prenom">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" name="position" class="form-control" placeholder="Enter Position">
            </div>
            <div class="form-group">
                <label>Deppartement</label>
                <input type="text" name="departement" class="form-control" placeholder="Enter Deppartement">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" name="salaire" class="form-control" placeholder="Enter Salary">
            </div>
            <div class="form-group">
                <label>username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <input type="text" name="tel" class="form-control" placeholder="Enter Tel">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Date de Naissance </label>
                <input type="date" name="date_naissance" class="form-control" placeholder="Enter Date de Naissance">
            </div>
            <div class="form-group">
                <label>Sexe : </label><br>
                
                <label for="male">Male</label>
                <input type="radio" id="male" name="sexe" value="male">
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <label for="female">Female</label>
                <input type="radio" id="female" name="sexe" value="female">
        </div>
            <div class="form-group">
                <label>CIN</label>
                <input type="text" name="cin" class="form-control" placeholder="Enter CIN">
            </div>
            <div class="form-group">
                <label>RIB</label>
                <input type="text" name="rib" class="form-control" placeholder="Enter RIB">
            </div>
            <!-- Divider -->
            <hr class="sidebar-divider"> 

            <!-- Heading -->
            <div class="sidebar-heading" style="font-size:large;font-weight:bolder">
                Contrat
            </div> 
            <div class="form-group">
                <label>Date Debut</label>
                <input type="date" name="date_debut" class="form-control" placeholder="Enter Date Debut">
            </div>
            <div class="form-group">
                <label>Date Fin</label>
                <input type="date" name="date_fin" class="form-control" placeholder="Enter Date Fin">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="employeebtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Employee Profile
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Employee Profile 
</button>
        </h6>
</div>

<div class="card-body">
    <div class ="table-responsive">
    <?php if(isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo '<h2 bg-primary text-white>'.$_SESSION['success'].'</h2>' ; 
            unset($_SESSION['success']) ; 
        }

        if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<h2 class="bg-info text-white">'.$_SESSION['status'].'</h2>' ; 
            unset($_SESSION['status']) ; 
        }
            ?>
            <?php
            $connection = mysqli_connect("localhost" , "root" , "" , "hotel") ;
            $query = "SELECT * FROM employe";
            $query_run = mysqli_query($connection, $query); 
            ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Position</th>
                    <th>Deppartement</th>
                    <th>Salaire</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Date Naissance</th>
                    <th>Sexe</th>
                    <th>CIN</th>
                    <th>RIB</th>
        
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thread>
            <tbody>
            <?php
                if(mysqli_num_rows($query_run) > 0)        
                        {
                    while($row = mysqli_fetch_assoc($query_run))
                        {
            ?>
                <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['nom']; ?></td>
                                <td><?php  echo $row['prenom']; ?></td>
                                <td><?php  echo $row['position']; ?></td>
                                <td><?php  echo $row['departement']; ?></td>
                                <td><?php  echo $row['salaire']; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                                <td><?php  echo $row['password']; ?></td>
                                <td><?php  echo $row['tel']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['date_naissance']; ?></td>
                                <td><?php  echo $row['sexe']; ?></td>
                                <td><?php  echo $row['cin']; ?></td>
                                <td><?php  echo $row['rib']; ?></td>
                                <td>
                                    <form action="gerer_empl_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn_reg" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
    </div>
</div>
</div>
</div>
 
<?php 
include('includes/script.php') ;
// include('includes/footer.php') ;  
?>