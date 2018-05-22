<?php
include "config.php";
session_start();

$un=$_POST["localusername"];
$pass=$_POST["localpassword"];

$sql = "Select * from user where localusername='$un' and localpassword='$pass' ";

$result = $conn->query($sql);

if ($result->num_rows>0) {
	
   $_SESSION["user"] = $un;
   //echo $_SESSION["user"];
  header('location: Home.php');
} else {
    header('location: login.php?id=0');
}


?>