<?php

    if(isset($_POST['regsubmitbutton'])) {
        $regusername = $_POST["regUsername"];
        $regpassword = $_POST["regpassword"];
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $gender = $_POST["Gender"];
        $dob = $_POST["birthday"];
        $email = $_POST["email"];

        require ("connect.php");   
        
        $sqlSelect = "SELECT * FROM userdetail WHERE username = '$regusername';";
        
        if(mysqli_query($conn, $sqlSelect)){
            $result = mysqli_query($conn, $sqlSelect);
            $num = mysqli_num_rows($result);
            
            if($num >= 1){
                echo" Username Already Taken";
            }else{
                $sqlInsert = "INSERT INTO userdetail VALUES (Null, '$regusername', '$regpassword', '$firstname', '$lastname', '$gender', '$dob', '$email');";
                
                mysqli_query($conn, $sqlInsert);
                echo "Registration Successful";
                echo '<p><a href="../login.php">Click here to go to the login page</a></p>';    
            }
      
        } else {
                header('Location: ../signup.php');
        }
    }
 ?>              