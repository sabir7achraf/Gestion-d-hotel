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
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bolder">Add Demandes Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Type </label>
                <input type="text" name="type" class="form-control" placeholder="Enter type">
            </div>
            <div class="form-group">
                <label>Statut</label>
                <input type="text" name="statut" class="form-control checking_email" placeholder="Enter statut">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Message</label>
                <input type="text" name="message" class="form-control" placeholder="Enter Message">
            </div>
            <!-- Divider -->
            <hr class="sidebar-divider"> 

            <!-- Heading -->
           
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addbtn" class="btn btn-primary">Save</button>
        </div>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Demandes
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Demande 
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
            $query = "SELECT * FROM demande WHERE employe_id =12  ; ";
            $query_run = mysqli_query($connection, $query); 
            ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead> <!-- Corrected 'thead' instead of 'thread' -->
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Statut</th>
                    <th>Message</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($query_run) > 0)        
                        {
                    while($row = mysqli_fetch_assoc($query_run))
                        {
            ?>
                <tr>
                                <td><?php  echo $row['id']; ?></td> <!-- Corrected 'id' instead of 'type' -->
                                <td><?php  echo $row['type']; ?></td>
                                <td><?php  echo $row['statut']; ?></td>
                                <td><?php  echo $row['message']; ?></td> <!-- Corrected 'message' instead of 'position' -->
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="12">
                                        <button type="submit" name="demande_delete_btn" class="btn btn-danger"> DELETE</button>
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
