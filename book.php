<?php
      session_start();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zumba</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400|Lobster" rel="stylesheet">
        <script src="js/jquery-3.1.0.min.js"></script>
         <link rel="stylesheet" type="text/css" href="css/dx.common.css" />
        <link rel="stylesheet" type="text/css" href="css/dx.spa.css" />
        <script type="text/javascript" src="js/dx.all.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="js/jqueryvalidation.js"></script>
        <script type="text/javascript" src="js/jquerybookingvalidation.js"></script>
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
						
        <main>
            <section class="book-section">
                <form id="bookingform" name="bookingform" method="post" action="php/bookvalidate.php">
                    <h3>Book A Class</h3>
                    <div class="form-group">
                        <label>Class ID</label>
                        <input  name="booKclassId" type="text" class="form-control" value="<?php  echo $_SESSION['classID']; ?>" readonly >
                    </div>

                    <div class="form-group">
                        <label>Class name</label>
                        <input name="className" class="form-control" value=" <?php  echo $_SESSION['classname']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input name="busername" type="text" class="form-control" placeholder="First Name" value="<?php echo $_SESSION['username']; ?>">
                    </div>

                    <div class="form-group">
                        <label>First name</label>
                        <input name="bfirstName" type="text" class="form-control" placeholder="First Name" value="<?php  echo $_SESSION['firstname']; ?>">
                    </div> 

                    <div class="form-group">
                        <label>Last name</label>
                        <input id="blastName" name="blastName" type="text" class="form-control" placeholder="Last Name" value="<?php  echo $_SESSION['lastname']; ?>">
                    </div>

                    <div class="form-group">
                             <label>Time</label> 
                             <select  name="schedule" id="schedule" class="form-control" class="dropdown-toggle" type="button" data-toggle="dropdown" required="true" >

                            <?php														
                                echo $scheduleoption;?>

                               <option value="0" selected='selected'></option>
                                <?php
                             echo "</select>";
                                ?>	
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <select id="location" name="location" type="text" class="form-control" placeholder="Location">
                            <option value="location A">LocationA</option>
                            <option value="location B">LocationB</option>
                            <option value="location C">LocationC</option>
                        </select>
                    </div>

                    <div class="button">
                        <div class="input-group">
                        <input name="bookubmitbutton" type="submit" class="btn btn-primary btn-lg" value="Submit"/>
                        </div>	
                    </div>  
                </form>
            </section>
        </main>
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
<?php

    unset($_SESSION['bookerror']);

?>
        