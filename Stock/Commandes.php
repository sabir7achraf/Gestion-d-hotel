<?php
include("includes/header.php");
include("includes/navbar.php");
include("includes/script.php");

try {
    $conn = new PDO("mysql:host=localhost;dbname=hotel", 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Code pour la fonction deliverProduct()
// Code pour la fonction deliverProduct()
if (isset($_POST["livrer"])){
        $id=$_POST["livrerId"];
        $query = "DELETE FROM commandes_marchandises WHERE id='$id'";
         $statement = $conn->prepare($query);
        $statement->execute();
        echo "<script>alert('commande livré par succés');</script>";
    
}



?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Commandes des marchandises</h1>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom de marchandise</th>
                            <th>description</th>
                            <th>quantite</th>
                            <th>livraison</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom de marchandise</th>
                            <th>description</th>
                            <th>quantite</th>
                            <th>livraison</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM commandes_marchandises";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row["type"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td>" . $row["quantite"] . "</td>";
                                ?>
                                <form method="POST" action="Commandes.php">
                                    <input type="hidden" name="livrerId" value=<?php echo $row["id"]?> >
                                    <td><button class='btn btn-primary' name='livrer'>Livrer</button>
                                        <a class='btn btn-primary' href="achat.php" name='livrer'>Acheter</a>   </td>";
                                </form>
                                <?php
                                
                                 echo'</tr>';
                            }
                        } else {
                            echo "<tr><td colspan='7'>Aucun résultat trouvé.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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