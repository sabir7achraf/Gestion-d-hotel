<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
session_start();
// Vérifier si la variable de session existe
if(isset($_POST['submit_gym'])) {
    // Récupérer l'ID du client depuis la session
    $client_id = 1;
    
    // Récupérer les données du formulaire
    $nbrs_jours = $_POST["nbrs_jrs"];
    $prix = $_POST["total"];
    
    // Définir le type de service (vous devrez peut-être le remplacer par une valeur appropriée)
    $type_service = "gym";
    
    // Insérer les données dans la table services
    $query_services = "INSERT INTO services (prix_total, type, client_id) VALUES (:prix_total, :type, :client_id)";
    $statement_services = $bdd->prepare($query_services);
    $statement_services->execute(array(":prix_total" => $prix, ":type" => $type_service, ":client_id" => $client_id));
    
    
    
    echo "<script>alert('Service de gym choisi avec succès');</script>";
}
if(isset($_POST['submit_spa'])) {
    // Récupérer l'ID du client depuis la session
    $client_id = 1;
    
    // Récupérer les données du formulaire
    $prix = 100;
    
    // Définir le type de service (vous devrez peut-être le remplacer par une valeur appropriée)
    $type_service = "spa";
    
    // Insérer les données dans la table services
    $query_services = "INSERT INTO services (prix_total, type, client_id) VALUES (:prix_total, :type, :client_id)";
    $statement_services = $bdd->prepare($query_services);
    $statement_services->execute(array(":prix_total" => $prix, ":type" => $type_service, ":client_id" => $client_id));
    
    
    
    echo "<script>alert('Service de spa choisi avec succès');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Services</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="services.css" rel="stylesheet" />
    </head>
<body>
     <!-- Portfolio Grid-->
     <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">choose what you want!</h3>
            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-6 mb-4">
                    <!-- Service  1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://en.idei.club/uploads/posts/2023-03/1678583722_en-idei-club-p-sports-hall-design-50.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">GYM</div>
                            <div class="portfolio-caption-subheading text-muted">Sport</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://www.meresuu.ee/wp-content/uploads/2017/06/Meresuu_veekeskus_392-min.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><br>SPA</div>
                            <div class="portfolio-caption-subheading text-muted">Beauty</div>
                        </div>
                    </div>
                </div>
                
        </div>
    </section>
     <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">GYM</h2>
                                    <p class="item-intro text-muted">add this services to your reservation now!</p>
                                    <img class="img-fluid d-block mx-auto" src="https://en.idei.club/uploads/posts/2023-03/1678583722_en-idei-club-p-sports-hall-design-50.jpg" alt="..." />
                                    <p><form action="services.php" method="POST">
                                            <label for="nbrs_jrs">Nombre de jours :</label>
                                            <input type="number" name="nbrs_jrs" id="nbrs_jrs" required>
                                            
                                            <label for="total">Total (calculé) :</label>
                                            <input type="text" name="total" id="total" readonly placeholder="$">
                                            
                                            <button type="submit" name="submit_gym">Valider</button>
                                        </form>
                                    </p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SPA</h2>
                                    <p class="item-intro text-muted">add this services to your reservation now!</p>
                                    <img class="img-fluid d-block mx-auto" src="https://www.meresuu.ee/wp-content/uploads/2017/06/Meresuu_veekeskus_392-min.jpg" alt="..." />
                                    <form action="services.php" method="POST">
                                            <label for="nbrs_jrs">jour :</label>
                                            <input type="date" name="jour" id="nbrs_jrs" required>
                                            <button type="submit" name="submit_spa">Valider</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="services.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
    document.getElementById("nbrs_jrs").addEventListener("input", function() {
        var nbrs_jours = parseInt(this.value);
        if (!isNaN(nbrs_jours)) {
            document.getElementById("total").value = nbrs_jours * 100;
        } else {
            document.getElementById("total").value = "";
        }
    });
</script>
</body>
</html>