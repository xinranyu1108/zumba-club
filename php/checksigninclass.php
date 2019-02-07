<?php

session_start();

if  (isset( $_SESSION['firstname'])){
     $_SESSION['classID'] =$_POST['classID'];
     $_SESSION['classname'] =$_POST['classname'];   header("location:../book.php");
    }else{
    header("location:../login.php");
}
       
?>