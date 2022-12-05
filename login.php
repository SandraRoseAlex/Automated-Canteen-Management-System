<?php
session_start();
$_SESSION['cart']=array();
?>
<html lang= "en">
<head>
	
		<meta charset= "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://kit.fontawesome.com/7f5ad1206e.js" crossorigin="anonymous"></script>
		
		
		<!-- CSS only -->
		<title> Login</title>
		
		<link rel="stylesheet" type="text/css" href="css/log.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		
		
		
		
	</head>
	
	<body background="Images/loggin.jpg">
	
		<!--LOGIN PAGE-->
		
		<div class="loginform">
			<h3 class="text-center text-primary mt-2 mb-4">Login here</h3>
			<h4 class="text-center mt-2 mb-4">Lourdes Matha College of Science and Technology</h4>
			<div class="container">
				<form class="" action="auth.php" method="post">
				  <div class="mb-3">
					<label for="email" class="form-label">Email ID</label>
					<input type="text" class="form-control" placeholder="Enter Email ID" name="email" aria-describedby="emailHelp"  required>
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" placeholder="Enter Password" name="psw"  required>
				  </div>
				  <div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Remember me</label>
					&nbsp;&nbsp;<a href="reset.php">Forgot password</a>
				  </div>
				  <button type="submit" class="btn btn-primary col-lg-12 col-mt-2 mb-3">Login</button><br><br>
				Don't have an account?&nbsp;<a href="reg.php">Signup Now</a> 
				</form>
			</div>
		</div>
	</body>
</html>