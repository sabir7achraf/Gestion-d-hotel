<?php
 include("includes/header.php");
 include("includes/navbar.php");
 include("includes/script.php");
 try {
    $conn = new PDO("mysql:host=localhost;dbname=hotel", 'root'); 
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Optional: Display a success message
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}



 ?>    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Mon stock</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">disponibilité des marchandises</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Categories</th>
                                            <th>Quantite</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Categories</th>
                                            <th>Quantite</th>
                                            
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td><?php 
			  $sql = "SELECT * FROM stock";
			  $stmt = $conn->prepare($sql);
			  $stmt->execute();
			  if($stmt->rowCount()>0){
			  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
				  echo "<tr>";
				  echo "<td>".$row["nom"]."</td>";
				  echo "<td>".$row["categorie"]."</td>";
				  echo "<td>".$row["quntite"]."</td>";
				  echo "</tr>";
			  }
			   
		  }
		  else {
			  echo "<tr><td colspan='7'>Aucun résultat trouvé.</td></tr>";} ?></td>
                                           
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
 

                    

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>