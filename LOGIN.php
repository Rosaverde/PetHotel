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
                    <li><a href="der">Gallery</a></li>
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
    <div class="login">
      <h1><i class="fas fa-paw"></i>  LOG IN</h1>
      <form action="login_handler.php" method="post">
        <div class="tbox">
          <input type="text" placeholder="username" name="login">
        </div>
        <div class="tbox">
          <input type="password" placeholder="password" name="password">
        </div>
          <input class="btn_log hov" type="submit"  value="LOG IN">
      </form>
      <?php
        if(isset($_SESSION['error'])) echo $_SESSION['error'];  /*Your username or password is incorrect. */
          {
            unset($_SESSION['error']);
          }
      ?>
      <a class="b1 hov" href="#">FORGOT PASSWORD ?</a>
      <a class="b2 hov" href="#">CREATE AN ACCOUNT</a>
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

<?php
/*
Logowanie
1 Dodanie kilku zwierzat
2 Opis zwierzat
3 Mozliwosc gry ze zwierzetami
4 Memeory mozliwosc dodania kilku zwierzat przy wyliczeniu wielkosci pola
 * Przy trafieniu dzwiek "Purrfekt"
 Shibu
 Hanekawa
 JapanAbroad
 */
 ?>