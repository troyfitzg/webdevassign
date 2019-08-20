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
							<a href="Packages.php" class="nav-link">Packages</a>
						</li>
						<li class="nav-item">
							<a href="Search.php" class="nav-link active">Search</a>
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
			<h1>&nbsp;&nbsp;&nbsp;&nbsp; Search for your perfect holiday!</h1> 
				
			<hr>
			
			<div id = "container">
				<form name="searchform" action="Search.php" method="POST" onsubmit = "return validateForm()">
				
					<div class="form-group">
						<br>
						<a id="UsernameP">Destination</a>
						<br>
						<input type="text" class="form-control" id="destinationf" placeholder="Enter A Destination" name="destinationf">
					</div>
						<br>
					<div class="form-group">
							<a id="UsernameP">Accomodation</a>
							<br>
							<select name="accomf" id="accomf" class="form-control">
								<option value="">Enter Accommodation Type</option>
								<option value="Hotel">Hotel</option>
								<option value="Apartment">Apartment</option>
								<option value="House">House</option>

							</select>
					</div>
					<br>
					<div class="form-group">
							<a id="UsernameP">Price</a>
							<br>
							<select name="price" id="price" class="form-control">
								<option value="">Enter Price Range</option>
								<option value="500">$500</option>
								<option value="1000">$1000</option>
								<option value="1500">$1500</option>
								<option value="2000">$2000</option>
								<option value="2500">$2500</option>

							</select>
					</div>
						
					<br>
					<button type="submit" class="btn btn-custom" name="refine" >Refine</button>
				
				</form>
			</div>
			
	<?php
	
		if(isset($_POST["refine"]))
		{
			
			$destinationf = $_POST["destinationf"];
			$accomf = $_POST["accomf"];
			$price = $_POST["price"];
			
			if(!empty($accomf) || !empty($destinationf) || !empty($price)) //Prints database data on page
			{
				
				$sql ="SELECT `ID`, `Destination`, `Price`, `Accommodation`, `Arrival`, `Departure`, `img` FROM `packages` WHERE Accommodation LIKE '%".$accomf."%' AND Price LIKE '%".$price."%' AND Destination LIKE '%".$destinationf."%' ";
				
				$temp=$con->query($sql);
				
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
			}			
			
		}				
		?>	

	<script>
	
	function validateForm() //Checks if search form has been filled
	{
		var destinationf = document.forms["searchform"]["destinationf"].value;
		var accomf = document.forms["searchform"]["accomf"].value;
		var price = document.forms["searchform"]["price"].value;
		
		if(destinationf == "" && accomf == "" && price == "")
		{
			alert("At least one field must be filled");
			return false;
		}
		
	}
	</script>
	</body>
</html>