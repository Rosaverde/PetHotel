<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purrrfect Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark px-5">
        <a class="navbar-brand px-3" href="http://bigittech.com/pethotel">Purrrfect Hotel</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  mr-auto">
                <li class="nav-item active">
                    <a class="nav-link px-3" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="pricing.html">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="reservation.html">Reservation</a>
                </li>
            </ul>
            <ul class="navbar-nav px-5">
                <li class="nav-item">
                    <a class="nav-link" href="SignUp.html"><i class="fas fa-user-plus"></i>SignUp</a>
                </li>
                <?php
                if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn'] == true)) 
                    {
                        echo '<li class="nav-item dropdown">';
                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    }
                else
                    {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="LOGIN">';
                    }
                ?>
                <i class="fas fa-user"></i>
                <?php
                if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn'] == true)) 
                    {
                        echo 'My Account</a>';
                        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                        echo '<a class="dropdown-item" href="profile">Profile</a>';
                        echo '<a class="dropdown-item" href="reservation">Reservations</a>';
                        echo '<a class="dropdown-item" href="logout_handler.php">Log Out</a>';
                        echo '</div></li>';
                    } 
                else 
                    {
                        echo 'Log In</a></li>';
                    }
                ?>
            </ul>
        </div>
    </nav>

    <div class="mainContainer">
        <div class="row mx-5">
            <div class="col-lg-6 px-0">
                <div class="about-img">
                    <img src="gallery/Poodle-Doodle-Full-Grooming.jpg">
                </div>
            </div>
            <div class="col-lg-6 d-flex px-0">
                <div class="about-details p-4 d-flex align-items-center">
                    <p>
                        Whether you are looking for a new puppy to liven up your home,
                        or are in need of a grooming service for your cat,
                        you need to look no further than <span>Purrrfect Pet Care Hotel</span>.
                        With the perfect combination of experience and skill,
                        Purrrfect Pet Care Hotel’s team has the knowledge and means
                        to make your pet-related dreams a reality. We take immense
                        pride in the pet care service that we offer and that
                        is why we go to such great lengths to ensure that,
                        when you call us, you will receive exceptional service.
                        So, what are you waiting for? With expertise in all
                        aspects of pet care, we should be the first number you call.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footerWrap">
        <p>Copyright © 2019 </p>
    </footer>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>