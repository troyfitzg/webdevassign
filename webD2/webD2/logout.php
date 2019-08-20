<?php
	session_start();
	unset($_SESSION['username']); //Logs out user
	$con = mysqli_connect("localhost","root","","flightdatabase");
	$delete = "Delete from mybookings"; //Clears bookings on sign out
	$run_delete = mysqli_query($con,$delete);
	
	header("Location:Home.php");
 ?>