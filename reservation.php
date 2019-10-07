<?php
    session_start();
	    if((!isset($_SESSION['logIn'])) && ($_SESSION['logIn']==false))
        {
            header('Location: LOGIN');
            exit();
        }
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
  <h1>FOREX STRATEGIES</h1>
  <div id="for">
    <a href="/forex/MovingAverageEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>MovingAverageEA</a>
    <hr>
    <a href="/forex/Sure-Fire" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>Sure-Fire EA</a>
    <hr>
    <a href="/forex/SarEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>SarEA</a>
    <hr>
    <a href="/forex/Momentum_Trade" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>5 Min Momentum Trade</a>
    <hr>
    <a href="/forex/PivotPoint" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>PivotPoint</a>
    <hr>
    <a href="/forex/NewsEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>News</a>
    <hr>
    <a href="/forex/FraktalEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>Fraktale</a>
    <hr>
    <a href="/forex/FaleEliota" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>FaleEliota  </a>
    <hr>
<!--<a href="" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i></a>
    <hr>
    <a href="" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i></a>
    <hr>
    <a href="https://www.mql5.com/en/articles/1572?utm_campaign=articles.list&utm_medium=special&utm_source=mt5editor " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Protect Yourselves, Developers! </a>
    <hr>
    <a href="" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i></a>
    <hr>
    <a href="https://admiralmarkets.com/education/articles/forex-strategy/simple-forex-scalping-strategies-and-techniques " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Simple Forex Scalping Strategies And Techniques <h3>Admiral Markets</h3>  </a>
    <hr>
    <a href="https://admiralmarkets.com/education/articles/forex-strategy/forex-1-minute-scalping-strategy-explained " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Forex 1-Minute Scalping Strategy Explained <h3>Admiral Markets</h3> </a>
    <hr>
    <a href="https://admiralmarkets.pl/education/articles/forex-indicators/kanal-keltnera " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Kanał Keltnera na Platformie MetaTrader [Poradnik Tradera] </a>
    <hr>
    <a href="https://www.mql5.com/en/code/12872" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i> Angry Bird (Scalping)</a>
		<hr>
    <a href="https://www.mql5.com/en/forum/43518/page14 " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Experts: Angry Bird (Scalping) </a> 
		<hr>-->
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
