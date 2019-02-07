<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zumba</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jqueryvalidation.js"></script>
    <script type="text/javascript" src="js/jqueryloginvalidation.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400|Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/queries.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Zing</a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="classes.php">Classes</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                         <?php if  (empty($_SESSION['username']) ) { 
                         echo '<li><a href="signup.php">Sign up</a></li>';
                         echo ' <li><a href="login.php">Log in</a></li>';}
                            else {
                              echo '<li><a href="welcome.php" >Hi !          '.$_SESSION['username'].'</a></li>';
									}
						?>
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="services">
        <div class="container">
            <h3>Our services</h3>
            <div class="serviceslist">
                <h4>Group class</h4>
                <span class="glyphicon glyphicon-ok"></span>
                <p>We have various type of zumba classes that are suitable for every group of people from beginner to advanced zumba dancers</p>
            </div>
            <div class="serviceslist">
                <h4>Personal tranning</h4>
                <span class="glyphicon glyphicon-user"></span>
                <p>If you prefer to have customized classes. We provide personal tranning service to help you improve dancing skills and achive goals.</p>
            </div>
            <div class="serviceslist">
                <h4>Food zone</h4>
                <span class="glyphicon glyphicon-cutlery"></span>
                <p>At our "food zone", you can purchase all kinds of healthy food or packed salad. We also provide coffe, protein powder and smoothies.</p>
            </div>
        </div>
        </div>
    </section>
    <section class="instructor-section">
        <div class="row">
            <h3>Our instructors</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <img class="instructor" src="images/emilysea.jpg">
                <p class="name">Emily Sea</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <img class="instructor" src="images/jenniferirigoyen.jpg">
                <p class="name">Jennifer lrigoyen</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <img class="instructor" src="images/paulettewooten.jpg">
                <p class="name">Paulette Wooten</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <ul class="footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Classes</a></li>
                    <li><a href="#">Contact us</a></li>

                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>Copyright &copy; 2017 by Xinran Yu. All right reserved
            </p>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <Section class="login">
                    <h3>Log in</h3>
                    <form id="loginform" name="loginform" action="php">
                        <div class="input-group">
                            <label for>Username</label>
                            <input id="Username" name="Username" type="text" class="form-control" placeholder="Username">
                        </div>

                        <div class="input-group">
                            <label>Password</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="button">
                            <div class="input-group">
                                <input id="signupbutton" name="signupbutton" type="submit" class="btn btn-primary btn-lg" value="Next" />
                            </div>
                            <a href="signup.html" class="login-signup">Create an account ?</a>
                        </div>
                    </form>
                </Section>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
