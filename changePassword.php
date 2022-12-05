<html lang= "en">
	<head>
	
		<meta charset= "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://kit.fontawesome.com/7f5ad1206e.js" crossorigin="anonymous"></script>
		
		
		<!-- CSS only -->
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="css/reset.css">
		
		<title> Change Password</title>
		
	</head>
	
	<body background="Images/loggin.jpg">
	
		<!--CHANGE PASSWORD-->

		<div class="resetform">
			<h3 class="text-center text-primary mt-2 mb-4">Change Password</h3>
			<div class="container">
				<form class="" action="login.php" method="post">
				  <div class="mb-3">
					<label for="email" class="form-label">Enter Email Address</label>
					<input type="text" name="email" class="form-control" placeholder="email" id="email" aria-describedby="emailHelp">
				  </div>
				  <div class="mb-3">
					<label for="nPassword" class="form-label">New Password</label>
					<input type="password" name="npassword" class="form-control" placeholder="Password">
				  </div>
				  <div class="mb-3">
					<label for="cPassword" class="form-label">confirm Password</label>
					<input type="password" name="cpassword" class="form-control" placeholder="Password">
				  </div>
				  <button type="submit" name="update" class="btn btn-primary col-lg-12 col-mt-2 mb-3">Update Password</button>
				 </form>
			</div>
		</div>
    </body>
</html>	