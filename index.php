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
        <link rel="stylesheet" type="text/css" href="style.css">
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
    
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/1.jpg" alt="zumbaimage">
                    <div class="carousel-caption">
                        <h1>ZUMBA CLUB</h1>
                            <p> Zumba classes provide a large calorie burn through aerobic activity done with interval training in mind.</p>
                            <p><a href="signup.php" class="btn btn-primary btn-lg">Join Us Now</a></p>
                    </div>
                </div>
               <div class="item">
                    <img src="images/2.jpg" alt="zumbaimage">
                    <div class="carousel-caption">
                        <h1>ZUMBA CLUB</h1>
                            <p>Zumba makes reaching your target heart rate much easier than standard workout routines you’d find on a DVD or in a gym. </p>
                            <p><a href="signup.html" class="btn btn-primary btn-lg">Join Us Now</a></p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/3.jpg" alt="zumbaimage">
                    <div class="carousel-caption">
                        <h1>ZUMBA CLUB</h1>
                            <p>Zumba is the perfect workout to take if you want to get rid of all that stress you accumulate during your every day. </p>
                            <p><a href="signup.html" class="btn btn-primary btn-lg">Join Us Now</a></p>
                    </div>
                </div>
            </div>  
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
        
<section class="classesindex">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box1">
                <h3>Zumba Step</h3>
                <p>Zumba Step is a lower-body workout that incorporates Zumba routines and step aerobics with Latin dance rhythms.</p>
                <div class="indexbook">
                    <a href="classes.php">Book this class<span class="glyphicon glyphicon-arrow-right"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box2">
                <h3>Zumba Tonning</h3>
                <p>Zumba Toning is for people who do their workouts with toning sticks. It targets the abs, thighs, arms, and other muscles throughout the body.</p>
                <div class="indexbook">
                    <a href="classes.php">Book this class<span class="glyphicon glyphicon-arrow-right"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box3">
                 <h3>Aqua Zumba</h3>
                <p>Aqua Zumba classes are held in a swimming pool. The instructor leads the class poolside while participants follow in shallow water.</p>
                <div class="indexbook">
                    <a href="classes.php">Book this class<span class="glyphicon glyphicon-arrow-right"></span></a>
                </div>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 box4">
                 <h3>Zumba Gold-Toning</h3>
                <p>Zumba Gold-Toning is a toning class for older participants with goals of improving muscle strength, posture, mobility, and coordination.</p>
                 <div class="indexbook">
                    <a href="classes.php">Book this class<span class="glyphicon glyphicon-arrow-right"></span></a>
                 </div>
            </div>
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
 
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>