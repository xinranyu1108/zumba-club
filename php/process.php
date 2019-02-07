<?php
    $edit = false;
 if(isset($_GET['edit'])){
     $edit = true;
 }

if(isset($_POST['submit'])){
    echo "this is successful<br />";
     	
        $userName = $_POST['username'];
        $firstName = $_POST['updateFN'];
        $lastName = $_POST['updateLN'];
        $gender = $_POST['updateGender'];
        $dob = $_POST['updatedob'];
        $email= $_POST['updateEmail'];
    
        require 'connect.php';

        $sql = "UPDATE userdetail SET firstname = '$firstName', lastname = '$lastName', gender = '$gender', dob ='$dob', email='$email' WHERE username = '$userName';";

        echo '<br />' . $sql;
    
        if (mysqli_query($conn, $sql)) {
            echo '<br />';
            echo '<br />';
            echo "Your profile has been updated<br />";
            echo '<p><a href ="../welcome.php">Return to dashboard</a></p>';
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);

}
?>
