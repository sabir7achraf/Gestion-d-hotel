<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style>
    /* Style pour la boîte modale */
    .modal {
        display: none; /* Masquer par défaut */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto; /* 5% du haut et du bas (pour centrer verticalement), auto (pour centrer horizontalement) */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Adapter la largeur à vos besoins */
    }
    </style>
<body>
    <div class="container">
        <form class="form-group" method="post" action ="code.php">
            <div id="form">
                <h1 class="text-white text-center">Booking Now</h1>

                <div id="first-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="First name" name="prenom">
                    </div>

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="password" id="input-group" placeholder="Password" name="password" >
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Departure Date" name="date_debut">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;" placeholder="No.of guests">
                            <option value="">No.of guests</option>
                            <option value="1" name="per">1</option>
                            <option value="2" name="per">2</option>
                            <option value="3" name="per">3</option>
                        </select>
                    </div>

                </div>

                <div id="second-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Last name" name="nom">
                    </div>

                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" id="input-group" placeholder="Email" name ="email">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Arrival Date" name="date_fin">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;">
                            <option value="">Room Type</option>
                            <option value="Simple">Standard</option>
                            <option value="Double">Double</option>
                            <option value="Third">Third</option>
                        </select>
                    </div>
            
                </div>
                <div style="justify-content:center;display:flex;font-weight:bolder">
                <input type="submit" name ="reserver_btn" value="Book Now ">
                </div>
            </div>
        </form>
    </div>
   
    
</body>

</html>