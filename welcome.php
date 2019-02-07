<?php
    session_start();
     require_once 'php/process.php';
    require ("php/connect.php");
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
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400|Lobster" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jqueryvalidation.js"></script>
    <script type="text/javascript" src="js/jqueryloginvalidation.js"></script>
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
                        <li><a href="welcome.php">My dashboard</a></li>

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

    <?php 
          
            
            $username = $_SESSION['username'];
            $get_userInfo = "SELECT * FROM userdetail WHERE username = '$username'";
            $show_userInfo = mysqli_query($conn, $get_userInfo);
            $row=mysqli_fetch_row($show_userInfo);
            $_SESSION['firstname'] = $row[3];
            $_SESSION['lastname'] = $row[4];
            $_SESSION['gender'] = $row[5];
            $_SESSION['dob'] = $row[6];
            $_SESSION['email'] = $row[7];
        ?>
    <section class="dashboard">
        <div class="container">

                <h1 id="welcome"> Welcome, &nbsp
                    <?php echo $_SESSION['firstname']; ?>
                </h1>
               
              
            
             <div class="personal-detail-box">  
                  <h3>Personal detail</h3>
            <?php 
                if ($edit == true):
                    ?>
                    <form action="php/process.php" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input name="username" class="form-control-static" value="<?php echo $_SESSION['username'];?>" />
                                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Firstname</label>
                            <div class="col-sm-10">
                                <input name="updateFN" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Lastname</label>
                            <div class="col-sm-10">
                                <input name="updateLN" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                                <input name="updateGender" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <input name="updatedob" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input name="updateEmail" type="email">
                            </div>
                        </div>
                       
                         <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" name="submit">Submit</button>
                         <a class="gobackBtn" href="welcome.php">Goback</a>
                        </div>
                        </div>
                    </form>
                <?php else: ?>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">
                                    <?php echo $_SESSION['username']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Firstname</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">
                                    <?php echo $_SESSION['firstname'] ; ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Lastname</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">
                                    <?php echo $_SESSION['lastname'] ; ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">
                                    <?php echo $_SESSION['gender'] ; ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">
                                    <?php echo $_SESSION['dob'] ; ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">
                                    <?php echo $_SESSION['email'] ; ?>
                                </p>
                            </div>
                        </div>
                          <a class="updateBtn" href="welcome.php?edit=<?php echo $_SESSION['username']; ?>">Update my profile</a>
                </div>
              
                </form>
                <?php endif; ?>
               
          
            </div>
        </div>
        </div>
        </div>
    </section>

    <form action="php/logout.php" method="post">
        <input type="submit">
    </form>

    <footer class="navbar  navbar-fixed-bottom">>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="welcomefooter1">
                <ul class="footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Classes</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="welcomefooter2">
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>

        </div>
        <div class="row">
            <p>Copyright &copy; 2017 by Xinran Yu. All right reserved</p>
        </div>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
