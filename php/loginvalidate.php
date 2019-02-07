<?php
  
   session_start();

   $username = $_POST['username'];
   $password = $_POST['password'];

     if( isset($_POST['nextbutton']) ) {
               require 'connect.php';
            
							
               $sql = "SELECT * FROM userdetail WHERE username = '$username' AND upassword = '$password';";
               $result = mysqli_query($conn, $sql);
        
               if (mysqli_num_rows($result) == 1) {
                    $row=mysqli_fetch_row($result);
                    $_SESSION['username'] = $row[1];
                    header('location:../welcome.php');
                   echo $result;
                    } else {
                
                     echo "invalid password or username";
                     $_SESSION["error"]["data"] = "Username or Password is incorrect";
                     echo "<br /><br />Error is " . $_SESSION["error"]["data"] . ".<br>";
                   
                   }
               } 
							
        
      
  mysqli_close($conn);  






?>
