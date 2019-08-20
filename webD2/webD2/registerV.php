<?php

session_start();

$con=mysqli_connect("localhost","root","","flightdatabase");


$sql="INSERT INTO users (Email, Password , Username , FName , LName , Secure)
VALUES
('$_POST[email]','$_POST[password]','$_POST[username]','$_POST[fname]','$_POST[lname]','$_POST[secureq]')";

if(!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error());
}
else
{
mysqli_close($con);
$_SESSION['username']= $_POST['username']; 	
header("Location:Account.php");


}

?>