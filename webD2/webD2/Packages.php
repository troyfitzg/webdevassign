<!DOCTYPE HTML>

<?php 

	session_start();
	$con=mysqli_connect("localhost","root","","flightdatabase");
?>

<html lang="en">

<head>

	<title> Troy Fitzgerald Supplimental Assignment (C16432792) </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UFT-8">
	
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Register.css">
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Assignment.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</head>

<script type="text/javascript" src="./Javascript/Home.js"></script>

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
							<a href="Packages.php" class="nav-link active">Packages</a>
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
			
			<br>
			
			<h1>&nbsp;&nbsp;&nbsp;&nbsp; Explore our Packages!</h1> 
			<hr>
			
			<?php
			
			
				$sql ="SELECT `ID`, `Destination`, `Price`, `Accommodation`, `Arrival`, `Departure`, `img` FROM `packages`";
				
				$temp=$con->query($sql);
				
				
				//displays packages
				while ($row=$temp->fetch_assoc())
				{  	
					$id=$row['ID'];
					echo "<br>";
					
					echo "<table class='table'>
					<tr>
						<th>Destination</th>
						<th>Accommodation</th>
						<th>Price</th>
						<th>Arrival</th>
						<th>Departure</th>
						<th></th>
					</tr>";
					
					echo "
						<tr>
							<td>".$row["Destination"]."</td>
							<td>".$row["Accommodation"]."</td> 
							<td>$".$row["Price"]."</td>
							<td>".$row["Arrival"]."</td>
							<td>".$row["Departure"]."</td>
							<td><a href = 'pview.php'><form id='view' method='post' action='pview.php'>
													<button type='submit' class='btn btn-custom' name='action'/>View</button>
													<input type='hidden' name='addid' value='$id'/>
													</form></a></td>
							
						</tr>";
						
					echo "</table>";
				
					echo "<br>";
				}
			
			
			?>
		

			
		</div>
			
		
				
				
				
				
				
				
				
	</body>
</html>