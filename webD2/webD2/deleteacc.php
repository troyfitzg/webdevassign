<?php

	session_start();
	
	$current_user = $_SESSION['username'];
	$con = mysqli_connect("localhost","root","","flightdatabase"); 
	$update = "DELETE FROM users WHERE `Username` = '$current_user'";
	$run_update = mysqli_query($con,$update);
	unset($_SESSION['username']);
	header("Location:Home.php");
	
?>