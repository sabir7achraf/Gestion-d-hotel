<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .btn {
            margin-bottom: 20px;
        }
        .header {
            
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
        }
        .header h1 {
            margin: 0;
        }
        .header p {
            margin: 0;
            font-size: 18px;
            font-style: italic;
        }
    </style>
</head>
<body style="background-image: url(image/a.png);background-size: 100% 100%;
background-position: center;
background-attachment: fixed;">
    <div class="header">
        <h1>Page Client</h1>
        <p>Bienvenue sur notre plateforme de services pour les clients.</p>
    </div>

    <div class="container" style="padding-top:150px;" >
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="../Hotel_Booking/Services/services.php" class="btn btn-primary btn-block btn-lg">
                    <i class="fas fa-cogs mr-2"></i> Services
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="../Hotel_Booking/restaurant/index.php" class="btn btn-secondary btn-block btn-lg">
                    <i class="fas fa-utensils mr-2"></i> Restaurant
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>