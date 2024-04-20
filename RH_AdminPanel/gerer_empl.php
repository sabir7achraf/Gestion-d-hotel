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
        <h5 class="modal-title" id="exampleModalLabel">Add Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nom </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Nom">
            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" name="email" class="form-control checking_email" placeholder="Enter Prenom">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" name="password" class="form-control" placeholder="Enter Position">
            </div>
            <div class="form-group">
                <label>Deppartement</label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Deppartement">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Salary">
            </div>
            <div class="form-group">
                <label>username</label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Tel">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="confirmpassword" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Date de Naissance </label>
                <input type="date" name="confirmpassword" class="form-control" placeholder="Enter Date de Naissance">
            </div>
            <div class="form-group">
                <label>Sexe</label>
                <input type="checkbox" name="confirmpassword" class="form-control" placeholder="Enter Sexe">
            </div>
            <div class="form-group">
                <label>CIN</label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Enter CIN">
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
            $connection = mysqli_connect("localhost" , "root" , "" , "f_g_club") ;
            $query = "SELECT * FROM register";
            $query_run = mysqli_query($connection, $query); 
            ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>password</th>
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
                                <td><?php  echo $row['username']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['password']; ?></td>
                                <td>
                                    <form action="register_edit.php" method="post">
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