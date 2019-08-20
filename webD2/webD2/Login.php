<!DOCTYPE HTML>

<html lang="en">

<head>

	<title> Troy Fitzgerald Supplimental Assignment (C16432792) </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UFT-8">
	
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Login.css">
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Assignment.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</head>

<script type="text/javascript" src="./Javascript/formN.js"></script>

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
							<a href="Home.php" class="nav-link ">Home</a>
						</li>
						<li class="nav-item">
							<a href="Packages.php" class="nav-link">Packages</a>
						</li>
						<li class="nav-item">
							<a href="Search.php" class="nav-link">Search</a>
						</li>
						
						<li class="nav-item">
							<a href="Login.php" class="nav-link active">Login</a>
						</li>
						<li class="nav-item">
							<a href="Register.php" class="nav-link">Register</a>
						</li>
					</ul>
				</div>
			</nav>
			<br>
			
			<h1>&nbsp;&nbsp;&nbsp;&nbsp; Log In Here!</h1> 
			
			<hr>
			
			
		<div id = "container">
			<form name="logform" action="loginV.php" method="POST" onsubmit = "return validateForm()">
			
				<div class="form-group">
					<br>
					<a id="UsernameP">Username</a>
					<br>
					<input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
				</div>
				<br>
				<div class="form-group">
					<a id="PasswordP">Password</a>
					<br>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
				</div>
				
				<br>
				<button type="submit" class="btn btn-custom" >Login</button>
				
			</form>
			
						
			<br>
				
			<div id = "wronginfo">
				<?php if(isset($_GET["wronginfo"]) && $_GET["wronginfo"] == 'failed') 
				{
					echo "<h2>Incorrect Username/Password. Try Again.</h2>";
				}
				 ?>
			</div>
		</div>
	</div>
	
	<script>
	function validateForm()
	{
	var username = document.forms["logform"]["username"].value;
	 var password = document.forms["logform"]["password"].value;
	 
	 
	   //Username Check
			if (username == "") {
			alert("Username must be filled out");
			return false;
		  }
	 
		 //Password Check 
			if (password == "") {
			alert("Password must be filled out");
			return false;
		  }
			
	}	
	
	</script>
					
				
	</body>
</html>