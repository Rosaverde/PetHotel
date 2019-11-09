<?php

session_start();

  if(isset($_POST['email']))
    {
        $all_ok=true;
            // NICK
        $nick = $_POST['nick'];

        if ((strlen($nick)<3) || (strlen($nick)>20))
            {
                $all_ok=false;
                $_SESSION['e_nick']="Username must be at least 3 and up to 20 characters long!";
            }
        if (ctype_alnum($nick)==false)
            {
                $all_ok=false;
                $_SESSION['e_nick']="Nick can be only alphanumeric";
            }
            // EMAIL
        $email=$_POST['email'];
        $emailB=filter_var($email,FILTER_SANITIZE_EMAIL);
        if((filter_var($email,FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
            {
                $all_ok=false;
                $_SESSION['e_email']="Inccorect Email";
            }
            //PASSWORD
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if((strlen($password1)<3) || (strlen($password1)>20))
            {
                $all_ok=false;
                $_SESSION['e_password']="Password must have from 3 to 20 characters!";
            }
        if($password1!=$password2)
            {
                $all_ok=false;
                $_SESSION['e_password']="Password doesn't mach" ;
            }
        $password_hash = password_hash($password1, PASSWORD_DEFAULT);
            //Terms
        if (!isset($_POST['terms']))
            {
                $all_ok=false;
                $_SESSION['e_terms']="Accept Terms of Use and Privacy Policy" ;
            }
            // Recapcha
		$sekret = "6LcY0mgUAAAAAHeuI0X5Ju0NRCsf92yXba1sMwXd";
        $check1 = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);	
		$answer = json_decode($check1);
		if ($answer->success==false)
			{
				$all_ok=false;
				$_SESSION['e_bot']="Unvalid Capcha";
			}	

        $_SESSION['fr_nick'] = $nick;
        $_SESSION['fr_email'] = $email;
        $_SESSION['fr_password1'] = $password1;
        $_SESSION['fr_password2'] = $password2;
        if (isset($_POST['terms'])) $_SESSION['fr_terms'] = true;

        require_once "MySqlLog.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        try
            {
                $connection = new mysqli($host, $db_user, $db_password, $db_name);
                if ($connection->connect_errno!=0)
                    {
                        throw new Exception(mysqli_connect_errno());
                    }
                else 
                    {
                        $result=$connection->query("SELECT id FROM usersbase WHERE email='$email'");
                        if(!$result) throw new Exception($connection->error);
                        $mailCount=$result->num_rows;
                        if($mailCount>0)
                            {
                                $all_ok=false;
                                $_SESSION['e_email']="Email exist";
                            }

							$result = $connection->query("SELECT id FROM usersbase WHERE user='$nick'");
				
							if (!$result) throw new Exception($connection->error);
							
							$ile_nick = $result->num_rows;
                        if($ile_nick>0)
                            {
                                $all_ok=false;
                                $_SESSION['e_nick']="Nick exist";
							}
						
                        if($all_ok==true)
                            {
								if ($connection->query("INSERT INTO usersbase VALUES (NULL, '$nick', '$password_hash', '$email', 100, 0)"))
								{
									$_SESSION['registrationComplete']=true;
									header('Location: welcome');
                                    }
                                else
                                    {
                                        throw new Exception($connection->error);
                                    }
                            }
                    $connection->close();
                    }
                
            }
        catch(Exception $e)
            {
                echo'<span class="error">Server error! Sorry for inconenience, please try later!</span>';
                echo'<br/>Dev notice:'.$e;
            }
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
    <div class="signup login" id="SignUp">
        <h1><i class="fas fa-paw"></i>
        SIGN UP</h1>
        <form  method="post">
            <div class="tbox">
                <input type="text" value="<?php
                    if (isset($_SESSION['fr_nick']))
                    {
                        echo $_SESSION['fr_nick'];
                        unset($_SESSION['fr_nick']);
                    }
                ?>" placeholder="Username" name="nick">
            </div>

                <?php
                    if(isset($_SESSION['e_nick']))
                        {
                            echo'<div class="error">'.$_SESSION['e_nick'].'</div>';
                            unset($_SESSION['e_nick']);
                        }
                ?>

            <div class="tbox">
                <input type="text" value="<?php
                        if (isset($_SESSION['fr_email']))
                        {
                            echo $_SESSION['fr_email'];
                            unset($_SESSION['fr_email']);
                        }
                    ?>" placeholder="E-mail" name="email">
            </div>
                <?php
                    if(isset($_SESSION['e_email']))
                        {
                            echo'<div class="error">'.$_SESSION['e_email'].'</div>';
                            unset($_SESSION['e_email']);
                        }
                ?>

            <div class="tbox">
                <input type="password" value="<?php
                        if (isset($_SESSION['fr_password1']))
                        {
                            echo $_SESSION['fr_password1'];
                            unset($_SESSION['fr_password1']);
                        }
                    ?>" placeholder="Password" name="password1">
            </div>

                <?php
                    if (isset($_SESSION['e_password']))
                        {
                            echo'<div class="error">'.$_SESSION['e_password'].'</div>';
                            unset($_SESSION['e_password']);
                        }
                ?>
            <div class="tbox">
                <input type="password"  value="<?php
                        if (isset($_SESSION['fr_password2']))
                        {
                            echo $_SESSION['fr_password2'];
                            unset($_SESSION['fr_password2']);
                        }
                    ?>" placeholder="Repeat Password" name="password2">
            </div>
            <div>
                <label>
                    <input type="checkbox" name="terms"
                        <?php
                            if (isset($_SESSION['fr_terms']))
                            {
                                echo "checked";
                                unset($_SESSION['fr_terms']);
                            }
                        ?>
                    /> I agree to the Terms of Use and Privacy Policy
                </label>
                    <?php
                        if(isset($_SESSION['e_terms']))
                            {
                                echo'<div class="error">'.$_SESSION['e_terms'].'</div>';
                                unset($_SESSION['e_terms']); 
                            }
                    ?>
            </div>
            <div class="g-recaptcha" data-sitekey="6LcY0mgUAAAAAL81i7PgmnPL2eKg5Jb44-36KfFT"></div>
                <?php
                    if(isset($_SESSION['e_bot']))
                        {
                            echo'<div class="error">'.$_SESSION['e_bot'].'</div>';
                            unset($_SESSION['e_bot']);
                        }
                ?>
            <input class="btn_log hov" type="submit"  value="Sign Up">
        </form>
        <a class="b1 hov" href="#">FORGOT PASSWORD ?</a>
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