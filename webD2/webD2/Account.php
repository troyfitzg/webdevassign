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
			
			<div id="profilec">
				<br>
				<br>
				
				<h1>Hello, <script>document.write(usernamed);</script>!</h1> 
				
				<hr class = "breaker">
				<br>
				
				<a id="changepwd" href="mybookings.php">My Bookings</a>
				<br>
				<br>
				<br>
				<br>
				<a id="changepwd" href="changepwd.php">Change Password</a>
				<br>
				<br>
				<br>
				<br>
				<a id="changepp">Change Picture:&nbsp;&nbsp;</a>
				<input type="file" id="choose" style="display: none;" onchange="changePic(this);">
				<button type="submit" class="btn btn-custom" onclick="document.getElementById('choose').click();" >Choose Photo</button> 
				<br>
				<br>
				<br>
				<br>
				<a id="deleteacc" href="deleteacc.php">Delete Account</a>
				
				
				
				<img id="profiler" src="" height="350px" width="300px" >
				
	
				<br>
				<br>
			</div>
		</div>
		
	<script>
	
	//Gets chosen file for picture
	
	function changePic(pic){
		
            if (pic.files && pic.files[0]) {
				
                var reader = new FileReader();

                reader.onload = function (e) {
					
                    $('#profiler').attr('src', e.target.result);
                };

                reader.readAsDataURL(pic.files[0]);
            }
        }
	
 
 
 
 
 
	</script>
	</body>
	
	
</html>
			