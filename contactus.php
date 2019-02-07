<!DOCTYPE html>
<?php  session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zumba</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400|Lobster" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jqueryvalidation.js"></script>
        <script type="text/javascript" src="js/jqueryloginvalidation.js"></script>
        <script src="js/jquery-3.1.0.min.js"></script>
         <link rel="stylesheet" type="text/css" href="css/dx.common.css" />
        <link rel="stylesheet" type="text/css" href="css/dx.spa.css" />
        <script type="text/javascript" src="js/dx.all.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="js/jqueryvalidation.js"></script>
        <script type="text/javascript" src="js/jquerycontactusvalidation.js"></script>         
         <script>
             jQuery(document).ready(function($){
                $(function() {
                    $("#map").dxMap({
                        provider: "bing",
                        type: "roadmap",
                        zoom: 16,
                        center: "-37.785688, 175.279829",
                        markers:[
                            {location: "-37.778554, 175.288030"},
                            {location: "-37.778553, 175.251694"},           {location: "-37.796472, 175.286745"}
                        ]
                    });
});
            });
            </script>
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
    
<section class="contactus-section">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div id="map"></div> 
               
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h1>Get in touch</h1>
            <div class="getInTouch-box">
                <h2>Phone</h2>
                <p>234234234</p>
                <h2>Eamil</h2>
                <p>zingzumba@outlook.com</p>
                <h2>Leave us a message</h2>
                <form id="contactusform" name="contactusform" action="php">
                    <div class="form-group">
                        <label>First name</label>
                        <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" name="email" type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Feedback</label>
                        <textarea class="form-control"id="feedback" name="feedback" rows="10" cols="20"> We'd like to hear from you</textarea>
                    </div>
                    <div class="input-group submitBtn-box">
                        <input id="regsubmitbutton" name="regsubmitbutton" type="submit" class="btn btn-primary btn-lg" value="Submit"/>
                    </div>	
                </form>
            </div>
        </div>
    </div>
</ection>




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
            <br>

            <div class="button">
            <div class="input-group">
            <input id="signupbutton" name="signupbutton" type="submit" class="btn btn-primary btn-lg" value="Next"/>
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
    