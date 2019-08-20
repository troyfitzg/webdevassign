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
	
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Assignment.css">
	<link id = "css" rel="stylesheet" type="text/css" href="./css/Account.css">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./Javascript/Home.js"></script>

</head>
<?php 

$session_value=(isset($_SESSION['username']))?$_SESSION['username']:''; ?>

<script>
	var usernamed='<?php echo $session_value;?>';
</script>
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
			
						<br>
			
			<h2>&nbsp;&nbsp;&nbsp;&nbsp; My Bookings</h2> 
			
			
			<?php
			
			
			$sql ="SELECT `ID`,`Destination`, `Price`, `Accommodation`, `Arrival`, `Departure` FROM `mybookings`";
				
				$temp=$con->query($sql);
				
				while ($row=$temp->fetch_assoc()) //Prints database data on page
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
							<td><a href = 'pview.php'><form id='view' method='post' action='delete.php'>
													<button type='submit' class='btn btn-custom' name='action'/>Remove</button>
													<input type='hidden' name='remove' value='$id'/>
													</form></a></td>
							
						</tr>";
						
					echo "</table>";
				
					echo "<br>";
				}
			
			
			?>
			
			<hr>	
		</div>
	</body>
</html>