<!DOCTYPE HTML>

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
							<a href="Login.php" class="nav-link">Login</a>
						</li>
						<li class="nav-item">
							<a href="Register.php" class="nav-link active">Register</a>
						</li>
					</ul>
				</div>
			</nav>
			
			<br>
			
			<h1>&nbsp;&nbsp;&nbsp;&nbsp; Join Us Today!</h1> 
			
			<hr>		
		
		
		
		
		<div id = "container">
			<form name ="regform" action="registerV.php" method ="POST" onsubmit="return validateForm()">
			
				<div class="form-group">
					<br>
					<a id="EmailP">Email</a>
					<br>
					<input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
				<br>
				<div class="form-group">
					<a id="PasswordP">Password</a>
					<br>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
				</div>
					<br>
				<div class="form-group">
					<a id="UsernameP">Username</a>
					<br>
					<input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
				</div>
					<br>
				<div class="form-group">
					<a id="FnameP">First Name</a>
					<br>
					<input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
				</div>
					<br>
				<div class="form-group">
					<a id="LnameP">Last Name</a>
					<br>
					<input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname">
				</div>
					<br>
				<div class="form-group">
					<a id="SecureP">Security Question</a>
					<br>
					<input type="text" class="form-control" id="secureq" placeholder="What is your mothers maiden name?" name="secureq">
				</div>
				<br>
				<button type="submit" class="btn btn-custom">Register</button>
				
				<br>
				<br>
				
			</form>
			
			<script>
			
			function validateForm() { //Validate form correctly
				
			//Setting sumbitted items to vars
			  var email = document.forms["regform"]["email"].value;
			  var password = document.forms["regform"]["password"].value;
			  var username = document.forms["regform"]["username"].value;
			  var fname = document.forms["regform"]["fname"].value;
			  var lname = document.forms["regform"]["lname"].value;
			  var secure = document.forms["regform"]["secureq"].value;
			  
			 //Email check
			if (email != "") {
				  
				if(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/.test(email) == false) //checks for valid email
				{
					alert("Email must contain an @ and .com");
					return false;
				}
			}
			else
			{
				alert("Email must be filled out");
				return false;
			}
			  
			  
			  
			 //Password Check 
			if (password == "") {
			alert("Password must be filled out");
			return false;
		  }
		  
		  
		  //Username Check
			if (username == "") {
			alert("Username must be filled out");
			return false;
		  }
		  
		  //Fname Check
			if (fname != "") {
				if(/^[A-Za-z]+$/.test(fname) == false)  //checks for numbers
				{
					alert("First Name cannot contain numbers");
					return false;
				}
			}
			else
			{
			alert("First Name must be filled out");
			return false;
			}
		  
		  //Lname Check
			if (lname != "") {
					if(/^[A-Za-z]+$/.test(lname) == false) //checks for numbers
					{
						alert("Last Name cannot contain numbers");
						return false;
					}
			}
					else
					{
					alert("Last Name must be filled out");
					return false;
					}
			  
			  
			//Security Check	
			if (secure == "") {
				alert("Security Question must be filled out");
				return false;
			  }
			}
			</script>
			
		</div>
		</div>
			
		
				
				
				
				
				
				
				
	</body>
</html>