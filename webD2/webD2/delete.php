<?php

	$remove = $_POST['remove'];
	$con = mysqli_connect("localhost","root","","flightdatabase");
	$delete = "Delete from mybookings WHERE ID = '$remove'"; //Clears bookings
	$run_delete = mysqli_query($con,$delete);
	
	header("Location:mybookings.php");