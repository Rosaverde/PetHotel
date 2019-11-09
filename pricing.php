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

    <div class="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <h2>HOTEL</h2>
                </div>
                <div class="col-lg-9">
                    <h3>
                        Standard Room <span>$45</span>
                    </h3>
                    <ul>
                        <li>8 sq m</li>
                        <li>Private room with Tempered glass door</li>
                        <li>Elevated bed</li>
                        <li>Webcams available for an additional $5/night</li>
                        <li>Daily playtime in DAYCARE</li>
                        <li>TV featuring DOGTV</li>
                        <li>Potty breaks</li>
                    </ul>
                    <h3>
                        Vip Room <span>$65</span>
                    </h3>
                    <ul>
                        <li>15 sq m</li>
                        <li>Private room with Tempered glass door</li>
                        <li>Elevated bed</li>
                        <li>Webcams available for an additional $5/night</li>
                        <li>Daily playtime in DAYCARE</li>
                        <li>TV featuring DOGTV</li>
                        <li>TV featuring DOGTV</li>
                    </ul>
                    <hr>
                </div>
                <div class="col-lg-3">
                    <h2>DAYCARE</h2>
                </div>
                <div class="col-lg-9">
                    <h3>
                        FULL DAY <span>$35</span>
                    </h3>
                    <h3>
                        HALF DAY <span>$25</span>
                    </h3>
                    <hr>
                </div>
                <div class="col-lg-3">
                    <h2>SPA</h2>
                </div>
                <div class="col-lg-9">
                    <h3>
                        BUBBLE BATH
                    </h3>
                    <ul>
                        <h3>30lbs <span>$40</span></h3>
                        <h3>30lbs + <span>$50</span></h3>
                    </ul>
                    <h3>
                        PAWDICURE​ <span>$20</span>
                    </h3>
                    <h3>
                        TOOTH BRUSHING <span>$15</span>
                    </h3>
                    <hr>
                </div>
                <div class="col-lg-3">
                    <h2>TRAINING</h2>
                </div>
                <div class="col-lg-9">
                    <h3>
                        FITNESS 15 – 25 minutes <span>$20</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <footer class="footerWrap">
        <p>Copyright © 2019 </p>
    </footer>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
