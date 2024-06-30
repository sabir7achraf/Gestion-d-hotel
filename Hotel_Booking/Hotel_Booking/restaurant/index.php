<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restaurant hotel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content name="keywords" />
    <meta content name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css?<?= filemtime("css/style.css") ?>" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0 pe-4">
                        <a href class="navbar-brand p-0" style="margin-top: 30px;">
                            <h1 class="text-primary m-0">
                                <i class="fa fa-utensils me-3"></i>Albane Restaurant
                            </h1>

                        </a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">
                                Enjoy Our<br />Delicious Meals
                            </h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">
                                Welcome to our hotel restaurant, where great
                                food and hospitality come together to create
                                unforgettable experiences. Join us as we
                                invite you on a culinary journey filled with
                                delicious flavors and warm smiles.
                            </p>
                            <a href="menu.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">View
                                Menu</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>
                                    Our culinary wizards craft every dish
                                    with expertise and passion, ensuring a
                                    delightful dining experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>
                                    We source the finest ingredients to
                                    guarantee freshness and flavor in every
                                    bite.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>
                                    Enjoy the convenience of ordering your
                                    favorite dishes from the comfort of your
                                    home or on the go.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>
                                    Our commitment to serving you knows no
                                    bounds – indulge in our offerings round
                                    the clock, whenever the craving strikes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                            About Us
                        </h5>
                        <h1 class="mb-4">
                            Welcome to
                            <i class="fa fa-utensils text-primary me-2"></i>Albane Restaurant
                        </h1>
                        <p class="mb-4">
                            Welcome to our hotel restaurant, where culinary
                            excellence meets exceptional hospitality.
                            Indulge in a fusion of flavors crafted with
                            care, amidst a welcoming ambiance that elevates
                            every dining experience.
                        </p>
                        <p class="mb-4">
                            Discover a symphony of
                            tastes that reflect our commitment to quality
                            and innovation, making each meal a memorable
                            journey for our cherished guests.
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        10
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        13
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master
                                            Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

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
                                    "SELECT * FROM plat WHERE categorie = 'Breakfast'";
                                $result = mysqli_query($conn, $query);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    echo '<form action="order.php" method="post">';
                                    // Loop through each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Fill HTML structure with meal information
                                        echo '<form action="order.php" method="post">';
                                        echo '<div class="col-lg-12">';
                                        echo '<div class="d-flex align-items-center">';
                                        echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                        echo '<h5 class="d-flex justify-content-between border-bottom pb-2">';
                                        echo '<span>' . $row['nom_plat'] . '</span>';
                                        echo '<span class="text-primary">' . $row['prix_plat'] . ' dh</span>';
                                        echo '</h5>';

                                        echo '<div class="row">';
                                        echo '<div class="col-lg-10">';
                                        echo '<small class="fst-italic">' . $row['description'] . '</small>';
                                        echo '</div>';
                                        echo '<div class="col-lg-2">';
                                        echo '<button type="submit" value="' . $row['id_plat'] . '" name="idplat" class="btn btn-primary d-flex align-items-center justify-content-center py-0 px-1 mt-2" style="width: 100%; height: 100%; text-align: center;" href="order.php">+ </button>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</form>';
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
                                $query = "SELECT * FROM plat WHERE categorie = 'Lunch'";
                                $result = mysqli_query($conn, $query);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    // Loop through each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Fill HTML structure with meal information
                                        echo '<form action="order.php" method="post">';
                                        echo '<div class="col-lg-12">';
                                        echo '<div class="d-flex align-items-center">';
                                        echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                        echo '<h5 class="d-flex justify-content-between border-bottom pb-2">';
                                        echo '<span>' . $row['nom_plat'] . '</span>';
                                        echo '<span class="text-primary">' . $row['prix_plat'] . ' dh</span>';
                                        echo '</h5>';

                                        echo '<div class="row">';
                                        echo '<div class="col-lg-10">';
                                        echo '<small class="fst-italic">' . $row['description'] . '</small>';
                                        echo '</div>';
                                        echo '<div class="col-lg-2">';
                                        echo '<button type="submit" value="' . $row['id_plat'] . '" name="idplat" class="btn btn-primary d-flex align-items-center justify-content-center py-0 px-1 mt-2" style="width: 100%; height: 100%; text-align: center;" href="order.php">+ </button>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</form>';
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
                                $query = "SELECT * FROM plat WHERE categorie = 'Dinner'";
                                $result = mysqli_query($conn, $query);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    // Loop through each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Fill HTML structure with meal information
                                        echo '<form action="order.php" method="post">';
                                        echo '<div class="col-lg-12">';
                                        echo '<div class="d-flex align-items-center">';
                                        echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                                        echo '<h5 class="d-flex justify-content-between border-bottom pb-2">';
                                        echo '<span>' . $row['nom_plat'] . '</span>';
                                        echo '<span class="text-primary">' . $row['prix_plat'] . ' dh</span>';
                                        echo '</h5>';

                                        echo '<div class="row">';
                                        echo '<div class="col-lg-10">';
                                        echo '<small class="fst-italic">' . $row['description'] . '</small>';
                                        echo '</div>';
                                        echo '<div class="col-lg-2">';
                                        echo '<button type="submit" value="' . $row['id_plat'] . '" name="idplat" class="btn btn-primary d-flex align-items-center justify-content-center py-0 px-1 mt-2" style="width: 100%; height: 100%; text-align: center;" href="order.php">+ </button>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</form>';
                                    }
                                } else {
                                    // If no meals found
                                    echo "No dinner meals found.";
                                }
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Reservation Start -->
        <div id="order" class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row">
                <div class="col-md-12 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" style="width:100%;" data-wow-delay="0.2s">
                        <form action="booking.php" method="post">
                            <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                                Order
                            </h5>
                            <h1 class="text-white mb-4">Confirm your order</h1>
                            <?php
                            // Select dinner meals from the database
                            $query = "SELECT nom_plat, prix_plat, COUNT(*) AS count FROM panier GROUP BY nom_plat,prix_plat";
                            $query2 = "SELECT SUM(prix_plat) FROM panier";
                            $result = mysqli_query($conn, $query);
                            $result2 = mysqli_query($conn, $query2);
                            $row2 = mysqli_fetch_assoc($result2);
                            // Check if there are any results
                            if (mysqli_num_rows($result) > 0) {
                                // Loop through each row
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2" style="color: white;">
                                                        <span><?php echo $row['nom_plat']; ?></span>
                                                        <span class="text-primary"><?php echo $row['prix_plat']; ?> dh x<?php echo $row['count']; ?></span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2" style="color: white; font-size: 30px;">
                                                <span>Total</span>
                                                <span class="text-primary"><?php echo $row2['SUM(prix_plat)']; ?> dh</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo '<button type="submit" value="' . $row2['SUM(prix_plat)'] . '" name="sumpanier" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft" style="position: relative; left: 42%; margin-top: 10px;">Confirm Order</button>
                                ';
                                echo '<a class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft" style="position: relative; left: 42%; margin-top: 10px; background-color: red; border: 1px solid red;" href="clearorder.php">Clear Order</a>
                                ';
                                ?>
                            <?php
                            } else {
                                // If no meals found
                                echo "No dinner meals found.";
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            // Close database connection
            mysqli_close($conn);
            ?>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->

        <!-- Team Start -->
        

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
        <!-- Footer End -->

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