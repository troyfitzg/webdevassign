<!DOCTYPE HTML>

<?php 

	session_start();
?>

<html lang="en">

<head>

	<title> Troy Fitzgerald Supplimental Assignment (C16432792) </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UFT-8">
	
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Assignment.css">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./Javascript/Home.js"></script>

</head>


	<body> 
		<div id = "main">
		
			<!--Bootstrapped Navbar -->
			
			<nav class="navbar sticky-top navbar-expand-md navbar-custom">
			
				<a href="Home.php" class="navbar-brand">Fitzgerald Flights</a>
				
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
				
					<span class="navbar-toggler-icon"></span>
					
				</button>	
				<div class="collapse navbar-collapse" id="navMenu">
				
					<ul class="navbar-nav mr-auto">
					
						<li class="nav-item">
							<a href="Home.php" class="nav-link active">Home</a>
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
							<a href='Account.php' class='nav-link'>My Account</a>
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
			
			<!--Image slideshow -->
			
			<div id= "slideshowc">
			
				<div id="slideshow" class="carousel slide" data-ride="carousel" data-interval="3000">

				
				<!--Tells slideshow to move to next image -->
				  <ul class="carousel-indicators">
					<li data-target="#slideshow" data-slide-to="0" class="active" ></li>
					<li data-target="#slideshow" data-slide-to="1"></li>
					<li data-target="#slideshow" data-slide-to="2"></li>
				  </ul>
				  
				  
				 <!--Image setup for slideshow -->
				  <div class="carousel-inner">
					<div class="carousel-item active">
					
					  <img src="./images/tokyo.png" >
					  
					</div>
					<div class="carousel-item">
					
					  <img src="./images/nyc.png">
					</div>
					
					<div class="carousel-item">
					  <img src="./images/greece.png">
					</div>
				  </div>
				  
				</div>
			<br>
			<br>
			</div>
			
			<div class="footer">
			<p>Contact Us: &nbsp;  Phone - 01453134 &nbsp;&nbsp; Email - FFlights@Flights.com </p>
			</div>
		</div>
				
				
				
				
				
				
				
	</body>
</html>