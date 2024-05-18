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

if (isset($_POST["Envoyer"])) {
    $nom = $_POST["nom"];
    $categorie = $_POST["categorie"];
    $quntite=$_POST["quntite"];
    $item = $_POST["item"];
    $description = $_POST["description"];
    $item_prix = $_POST["item_prix"];
    $montant = $_POST["montant"];
    $date_achat = $_POST["date_achat"];
    $departement = $_POST["departement"];
    $quantite = $_POST["quantite"];
    $query = "SELECT nom, quntite FROM stock WHERE nom = :nom";
    $statement = $conn->prepare($query);
    $statement->execute(array(":nom" => $nom));
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    
    if ($row) {
        // Si le produit existe déjà, on met à jour la quantité
        $quantiteExistante = $row["quntite"];
        $nouvelleQuantite = $quantiteExistante + $quntite;
        $query = "UPDATE stock SET quntite = :nouvelleQuantite WHERE nom = :nom";
        $statement = $conn->prepare($query);
        $statement->execute(array(":nouvelleQuantite" => $nouvelleQuantite, ":nom" => $nom));
    }
    else{
        $query1= "INSERT INTO stock (nom, categorie,quntite) VALUES (:nom, :categorie,:quntite)";
        $statement1= $conn->prepare($query1);
    $statement1->execute(array(":nom" => $nom, ":categorie" => $categorie, ":quntite"=>$quntite));
    }
    $query2 = "INSERT INTO facture (item, description, montant, item_prix, quantite, date_achat) VALUES (:item, :description, :montant, :item_prix, :quantite, :date_achat)";
$statement2 = $conn->prepare($query2);
$statement2->execute(array(":item" => $item, ":description" => $description, ":montant" => $montant, ":item_prix" => $item_prix, ":quantite" => $quantite, ":date_achat" => $date_achat));
    

    /*echo "<script>alert('Membre ajouté avec succés');</script>";*/
}




 ?>    

        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Achats des Marchandises</h1>
                    </div>
            <div class="container-fluid">
               <div class="card shadow mb-4">
                  <div id="marchandise" class="card-header py-3">
        
                <form method="POST" action="Achat.php">
                    <input type="text" placeholder="Nom de marchanidses" required name="nom">
                    <input type="text" placeholder="Categories" required name="categorie">
                    <input type="text" placeholder="quantite" required name="quntite">
                  </div>
                  
                    
               

            <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facture de marchandises</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">

            <div class="form-group">
                <label> item</label>
                <input type="text" name="item" class="form-control" placeholder="Enter Nom">
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
            <div class="form-group">
                <label>prix pour chaque item</label>
                <input type="text" name="item_prix" class="form-control" placeholder="item_prix">
            </div>
            <div class="form-group">
                <label>Deppartement</label>
                <input type="text" name="departement" class="form-control" placeholder="Enter Deppartement">
            </div>
            <div class="form-group">
                <label>quantite</label>
                <input type="text" name="quantite" class="form-control" placeholder="quantite">
            </div>
            <div class="form-group">
                <label>Prix total</label>
                <input type="text" name="montant" class="form-control" placeholder="Montant">
            </div>
            <div class="form-group">
                <label>date d'achat</label>
                <input type="date" name="date_achat" class="form-control" placeholder="date">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="Envoyer" class="btn btn-primary">Envoyer facture </button>
        </div>

    </div>
  </div>
</div>
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Confirmer achat
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
        Remplir la facture
        </button>
        </h6>
</div>
</form>

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
                </div>
                


</body>




</html>