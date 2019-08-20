<!DOCTYPE HTML>

<?php 

	session_start();
?>

<html lang="en">

<head>

	<title> Troy Fitzgerald Supplimental Assignment (C16432792) </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UFT-8">
	
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Register.css">
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Assignment.css">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./Javascript/Home.js"></script>

</head>


	<body> 
		<div id = "main">
			
			<nav class="navbar sticky-top navbar-expand-md navbar-custom">
			
				<a href="Home.php" class="navbar-brand">Fitzgerald Flights</a>
				
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
				
					<span class="navbar-toggler-icon"></span>
					
				</button>	
				<div class="collapse navbar-collapse" id="navMenu">
				
					<ul class="navbar-nav mr-auto">
					
						<li class="nav-item">
							<a href="Home.php" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="Packages.php" class="nav-link">Packages</a>
						</li>
						<li class="nav-item">
							<a href="Search.php" class="nav-link">Search</a>
						</li>
					 <?php
				
				
				if (isset($_SESSION['username'])) {
					echo "<li class='nav-item'>
							<a href='Account.php' class='nav-link active'>My Account</a>
						</li>";
					
					echo "<li class='nav-item'>
							<a href='Logout.php' class='nav-link'>Logout</a>
						</li>";
				}
				else
				{
					?>
						<li class="nav-item">
							<a href="Login.php" class="nav-link">Login</a>
						</li>
						<li class="nav-item">
							<a href="Register.php" class="nav-link">Register</a>
						</li>
					</ul>
				<?php
				}
				?>
				</div>
			</nav>
			
			<div id = "container">
			<form name="changepwdform" action="changepwd.php" method="POST" onsubmit = "return validateForm()">
			
				<div class="form-group">
					<br>
					<a id="PasswordP">Enter New Password</a>
					<br>
					<input type="password" class="form-control" id="newpass1" placeholder="Enter new password" name="newpass1">
				</div>
				<br>
				<div class="form-group">
					<a id="PasswordP">Re-enter New Password</a>
					<br>
					<input type="password" class="form-control" id="newpass2" placeholder="Re-enter new password" name="newpass2">
				</div>
				
				<br>
				<button type="submit" class="btn btn-custom">Change Password</button>
				
			</form>
			</div>
			
			<?php
			
			
				
				if(isset($_POST['newpass1'])) //Update your password
				{
					
					if( $_POST['newpass1'] == $_POST['newpass2'])
					{
					
						$_SESSION['newpass'] = $_POST['newpass1'];
						
						$password = $_SESSION['newpass'];
						
						$current_user = $_SESSION['username'];
						
						$con = mysqli_connect("localhost","root","","flightdatabase");
						
						$update = "Update users SET `Password` = '$password' where Username = '$current_user'";
						
						$run_update = mysqli_query($con,$update);
						
						
						header("Location:Account.php");
						
						echo "<script>alert('Password Has been Updated')</script>";
						
					}
	
				}

			?>
		</div>
		
	<script>
	
	//validates form
	function validateForm()
	{
		
	var pass1 = document.forms["changepwdform"]["newpass1"].value;
	var pass2 = document.forms["changepwdform"]["newpass2"].value;
	 
		//checks if fields are filled
		if (pass1 == "" || pass2 == "") 
		{
		alert("Both boxes must be filled out");
		return false;
		}
		
		
		//checks if passwords match
		if(pass1 !== pass2)
		{
		alert("Passwords do not match");
		return false;
		}

	
	}	
	
	</script>
					
	</body>
</html>
			