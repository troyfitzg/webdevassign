<?php 
session_start();
 $con = mysqli_connect("localhost","root","","flightdatabase");
 
 $query = "SELECT * FROM users WHERE Username='".$_POST['username']."' AND Password='".$_POST['password']."'";

 $sql = $con->query($query);
 
 $n = $sql->num_rows;
  
 if($n > 0){
 
	header("Location:Account.php");
	
	$_SESSION['username']= $_POST['username']; 	
 }
 else
 {
	
	header("Location:Login.php?wronginfo=failed");
	return;
	 
	 
	 
 }

?>