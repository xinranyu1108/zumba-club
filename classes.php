
<?php  
    session_start(); 
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zumba</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jqueryvalidation.js"></script>
  <script type="text/javascript" src="js/jqueryloginvalidation.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400|Lobster" rel="stylesheet">

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

    <Section class="classes-section">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 classbox1">
          <div class="introduce-box">
            <div class="introduce-content">
              <p>Instructor</p>
              <img src="images/emilysea.jpg" class="introduceinstructor">
              <p>Emily Sea</p>
              <p>1 hour</p>
              <p>Primary</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 classbox2">
          <div class="introduce-box">
            <div class="introduce-content">
              <p>Instructor</p>
              <img src="images/jenniferirigoyen.jpg" class="introduceinstructor">
              <p>Emily Sea</p>
              <p>1 hour</p>
              <p>Primary</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 classbox3">

          <div class="introduce-box">
            <div class="introduce-content">
              <p>Instructor</p>
              <img src="images/emilysea.jpg" class="introduceinstructor">
              <p>Emily Sea</p>
              <p>1 hour</p>
              <p>Intermediate</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 classbox4">
          <div class="introduce-box">
            <div class="introduce-content">
              <p>Instructor</p>
              <img src="images/paulettewooten.jpg" class="introduceinstructor">
              <p>Emily Sea</p>
              <p>1 hour</p>
              <p>Advanced</p>
            </div>
          </div>
        </div>
      </div>
        
      <div class="row">
        <?php
          require ("php/connect.php"); 
          $get_post = "SELECT classID, classname, description, levels FROM classes";
          $show_post = mysqli_query($conn, $get_post);
          $button=1;

          while ($post = mysqli_fetch_assoc($show_post)) {
            echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 classcontent">';
            echo "<h2 class='classname'>" . $post["classname"] . "</h2>";
            echo "<h3 class='level'>" .$post["levels"]."</h3>";
            echo "<p class='class-description-text'>".$post["description"]."</p>";
            ?>
      			
          <form  method="POST" action="php/checksigninclass.php">
              <input type="hidden"  name="classID" value="<?php echo  $post["classID"] ?>">
              <input type="hidden"  name="classname" value="<?php echo $post["classname"]  ?>">
              <input name="<?php echo $button ?>" type="submit" class="btn btn-success btn-sm" value="book">
           </form>
						<?php
						echo '</div>';
						$button++;
						?>
							<?php	
							}
        ?>
      </div>
    </Section>



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