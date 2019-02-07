<?php
session_start();

?>
<?php
$userid= $_SESSION['data']['userID'];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$email = $_POST["email"];

require("connect.php");
  
$sql = "UPDATE userdetail SET firstname= '$firstname', lastname = '$lastname', dob = '$dob', email = '$email' WHERE userID='$userid';";

if(mysqli_query($conn, $sql)) {
  echo "Your profile has been updated";
  echo '<p><a href ="../welcome.php">Return to dashboard</a></p>';
}



?>