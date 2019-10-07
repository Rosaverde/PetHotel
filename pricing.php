<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purrrfect Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://bigittech.com/pethotel/">Purrrfect Hotel</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://bigittech.com/pethotel/">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="pricing">Pricing</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="reservation">Reservation</a></li>

                    <?php
                    // Adding Forex nav button after logging
                        if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true))
                            {
                                echo '<li><a href="forex.php">Forex</a></li>';
                            }
                    ?>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignUp.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
                    <?php
                        //Toggle login or log out file           
                            if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true))
                                {
                                    echo '<li class="noHover"><a>';
                                }
                            else {
                                {
                                    echo '<li><a href="LOGIN">';
                                }
                            }
                        ?>
                        <i class="fas fa-user"></i>
                        <?php
                        // Adding log out after loging
                        if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true))
                            {
                            echo 'Welcome   '.$_SESSION['user'];
                            echo '<li class="btnLogOut"><a href="logout_handler">Log Out!</a></li>';
                            
                            }
                            else
                            {
                                echo 'Login';
                            }
                        ?>
                    </a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <ul>
                    <h2>HOTEL</h2>
                    <li>
                        <h3>
                            Standard Room $45
                        </h3>
                        <p>
                            8 sq m
                            Private room with Tempered glass door
                            Elevated bed
                            Webcams available for an additional $5/night
                            Daily playtime in DAYCARE
                            TV featuring DOGTV
                            Potty breaks
                        </p>
                    </li>
                    <li>
                        <h3>
                            Vip Room $65
                        </h3>
                        <p>
                            15 sq m
                            Private room with Tempered glass door
                            Elevated bed
                            Webcams available for an additional $5/night
                            Daily playtime in DAYCARE
                            TV featuring DOGTV
                            Potty breaks
                        </p>
                    </li>
                    <hr>
                    <h2>DAYCARE</h2>
                    <li>
                        <h3>
                            FULL DAY $35
                        </h3>
                    </li>
                    <li>
                        <h3>
                            HALF DAY $25
                        </h3>
                    </li>
                    <hr>
                    <h2>SPA</h2>
                    <li>
                        <h3>
                            BUBBLE BATH
                        </h3>
                        <p>
                            30lbs $40
                        </p>
                        <p>
                            30lbs + $50
                        </p>
                    </li>
                    <li>
                        <h3>
                            PAWDICURE​ $20
                        </h3>
                    </li>
                    <li>
                        <h3>
                            TOOTH BRUSHING $15
                        </h3>
                    </li>
                    <hr>
                    <h2>TRAINING</h2>
                    <li>
                        <h3>
                            FITNESS 15 – 25 minutes $20 
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="footerWrap">
        <p>Copyright © 2019  </p>
    </footer>

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
