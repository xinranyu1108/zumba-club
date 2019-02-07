<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zumba</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400|Lobster" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="js/signup.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jqueryvalidation.js"></script>
        <script type="text/javascript" src="js/signup.js"></script>
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
                        <li><a href="signup.php" >Sign up</a></li>
                        <li><a href="login.php">Log in</a></li>
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
       
         
         <section class="signup-section"> 
             <div class="signup-box">
                <form id="signupform" name="signupform" method="post" action="php/registration.php" onsubmit="return validatesignupform()">    
                    <h2 style="margin-top:0;">Join us</h2>
                    <div class="form-group">
                    <label for>Username</label>
                    <input id="Username" name="regUsername" type="text" class="form-control" placeholder="Username" minlength="3" maxlength="10" autofocus required>
                  </div>

                    <div class="form-group">
                    <label>Password</label>
                    <input id="password" name="regpassword" type="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}" title="8 characters with at least one letter" required>
                    </div>

                     <div class="form-group">
                    <label>Confirm Password</label>
                    <input id="confirmPassword" name="confirmPassword" type="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}" title="8 characters with at least one letter" required>
                    </div>
                    
                    <div class="form-group">
                    <label for>First Name</label>
                    <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name"> 
                  </div>
                <div class="form-group">
                    <label for>Last Name</label>
                    <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name">
                  </div>
                    <div class="radio-group">
                    <label for>Gender</label>
                    <input id="Gender" name="Gender" type="radio"  placeholder="Gender" value="Female" checked >Female
                    <input id="Gender" name="Gender" type="radio" placeholder="Gender" value="Male" >Male
         
                  </div>

                  <div class="form-group">
                    <label for>Date of birth</label>
                    <input id="birthday" name="birthday" type="date" class="form-control" required >
                    </div>

                <div class="form-group">
                    <label>Email</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="email">
                    </div>

                  <div class="form-group">
                  <br>
                      <input id="submitChecked" name="submitChecked" type="checkbox" checked> 
                      I agree to the Terms and conditions and Policy
                      </div>
                      <br>
                  <div class="button">
                  <div class="form-group">
                    <input id="regsubmitbutton" name="regsubmitbutton" type="submit" class="btn btn-primary btn-lg" value="Create Account"/>
                    </div>	
                    <div class="form-group" id="formgroupforreset">
                    <input id="resetbutton" name="resetbutton" type="reset" class="btn btn-sm" value="Reset"/>
                    </div>
                </div>  
                </form>
             </div>
         </section>


                
        <footer class="navbar ">
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
    