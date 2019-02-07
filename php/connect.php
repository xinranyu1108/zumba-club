<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "";
$dbname = "zumba";

// Create connection
$conn = mysqli_connect($servername, $serverusername, $serverpassword, $dbname);

// Check connection
if (!$conn) {
die("Unable to connect to database");
} 
?>