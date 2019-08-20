<?php

	$id = $_POST['addid'];
	$con = mysqli_connect("localhost","root","","flightdatabase"); 
	$sql  = "insert into mybookings (SELECT `ID`, `Destination`, `Price`, `Accommodation`, `Arrival`, `Departure` FROM packages where ID = '$id')"; 
	$result = mysqli_query($con,$sql); //Adds selected package to bookings
			
	header("Location:Packages.php");
			
?>