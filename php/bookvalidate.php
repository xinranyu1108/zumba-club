<?php
	session_start();

	$userid = $_SESSION['data']['userID'];
 	$bfirstName = $_POST['bfirstName'];
	$blastName = $_POST['blastName'];

	$schedule = $_POST['schedule'];
	$location = $_POST['location'];
  


	 if( isset($_POST['bookubmitbutton']) ) {
		 			if(!empty($_POST['bfirstName'])){
						
					
						} else {
						
						$_SESSION['bookerror']['firstname'] = 'The First Name is not entered.';
						}
		 			if(!empty($_POST['blastName'])){

						} else {
							$_SESSION['bookerror']['lastname'] = 'The Last Name is not entered.';
						}
						
		 			if(!empty($_POST['schedule'])){

						} else {
							$_SESSION['bookerror']['schedule'] = 'Please select a time.';
						}

						if(!empty($_POST['location'])){

						} else {
							$_SESSION['bookerror']['location']= 'The location is not entered.';
						}


		 		if(isset($_SESSION['bookerror'] )){
						
							
								header('location:../book.php');   
								 	$_SESSION['booKclassId'] = $_POST['booKclassId'];
									$_SESSION['className'] = $_POST['className'];
					
  						}	else {

               require 'connect.php';
					
           		$booKclassId= $_POST['booKclassId'];
							
               $sql = "INSERT INTO bookinfo (bookID, classID, userid,location, classdate,firstName, lastName)
								VALUES (NULL, '$booKclassId', '$userid', '$location', '$schedule','$bfirstName', '$blastName')";
            
		 						
								if (mysqli_query($conn, $sql)) {
										echo "Thank you for booking";
										echo '<p><a href="../classes.php">Click here to make another booking</a></p>';
										echo '<p><a href="../index.php">Click here to go back to the home page</a></p>';
								} else {
										echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								}

								mysqli_close($conn);
						}
		 
				


	 }
		?>


 
		
       
            