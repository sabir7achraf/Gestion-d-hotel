<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content name="keywords">
    <meta content name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>ALBANE RESTAURANT</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="menu.html" class="nav-item nav-link active">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food
                        Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food
                        Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "hotel";

                    // Create connection
                    $conn = mysqli_connect(
                        $servername,
                        $username,
                        $password,
                        $database
                    );

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " .
                            mysqli_connect_error());
                    }
                    ?>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                                <?php
                                // Select breakfast meals from the database
                                $query =
                                    "SELECT nom_plat, prix_plat, description FROM plat WHERE categorie = 'Breakfast'";
                                $result = mysqli_query($conn, $query);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    // Loop through each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Fill HTML structure with meal information
                                        echo '<div class="col-lg-6">';
                                        echo '<div
                                        class="d-flex align-items-center">';
                                        echo '<div
                                            class="w-100 d-flex flex-column text-start ps-4">';
                                        echo '<h5
                                                class="d-flex justify-content-between border-bottom pb-2">';
                                        echo '<span>' . $row['nom_plat']
                                            .
                                            '</span>';
                                        echo '<span
                                                    class="text-primary">' .
                                            $row['prix_plat'] .
                                            ' dh</span>';
                                        echo '</h5>';
                                        echo '<small class="fst-italic">' .
                                            $row['description'] .
                                            '</small>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    // If no meals found
                                    echo "No breakfast meals found.";
                                }
                                ?>

                            </div>


                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php
                                // Select lunch meals from the database
                                $query = "SELECT nom_plat, prix_plat, description FROM plat WHERE categorie = 'Lunch'";
                                $result = mysqli_query($conn, $query);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    // Loop through each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Fill HTML structure with meal information
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="d-flex align-items-center">';
                                        echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                        echo '<h5 class="d-flex justify-content-between border-bottom pb-2">';
                                        echo '<span>' . $row['nom_plat'] . '</span>';
                                        echo '<span class="text-primary">' . $row['prix_plat'] . ' dh</span>';
                                        echo '</h5>';
                                        echo '<small class="fst-italic">' . $row['description'] . '</small>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    // If no meals found
                                    echo "No lunch meals found.";
                                }
                                ?>

                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php
                                // Select dinner meals from the database
                                $query = "SELECT nom_plat, prix_plat, description FROM plat WHERE categorie = 'Dinner'";
                                $result = mysqli_query($conn, $query);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    // Loop through each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Fill HTML structure with meal information
                                        echo '<div class="col-lg-6">';
                                        echo '<div class="d-flex align-items-center">';
                                        echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                        echo '<h5 class="d-flex justify-content-between border-bottom pb-2">';
                                        echo '<span>' . $row['nom_plat'] . '</span>';
                                        echo '<span class="text-primary">' . $row['prix_plat'] . ' dh</span>';
                                        echo '</h5>';
                                        echo '<small class="fst-italic">' . $row['description'] . '</small>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    // If no meals found
                                    echo "No dinner meals found.";
                                }
                                ?>

                            </div>
                        </div>

                    </div>
                    <?php
                    // Close database connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
        <!-- Menu End -->

         <!-- Footer Start -->
         <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                            Company
                        </h4>
                        <li class="btn btn-link" href>About Us</li>
                        <li class="btn btn-link" href>Contact Us</li>
                        <li class="btn btn-link" href>Reservation</li>
                        <li class="btn btn-link" href>Privacy Policy</li>
                        <li class="btn btn-link" href>Terms & Condition</li>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                            Contact
                        </h4>
                        <p class="mb-2">
                            <i class="fa fa-map-marker-alt me-3"></i>
                            FST,TANGER
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-phone-alt me-3"></i>0612345678
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-envelope me-3"></i>LSI@gmail.com
                        </p>
                        <div class="d-flex pt-2">
                            <li class="btn btn-outline-light btn-social" href><i class="fab fa-twitter"></i></li>
                            <li class="btn btn-outline-light btn-social" href><i class="fab fa-facebook-f"></i></li>
                            <li class="btn btn-outline-light btn-social" href><i class="fab fa-youtube"></i></li>
                            <li class="btn btn-outline-light btn-social" href><i class="fab fa-linkedin-in"></i></li>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                            Opening
                        </h4>
                        <h5 class="text-light fw-normal">Monday -
                            Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">ALBANE HOTEL
                                </a>, All
                            Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            
                            <br /><br />
                           
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>