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
		
		<title> Reset Password</title>
		
	</head>
	
	<body background="Images/loggin.jpg">
	
		<!--RESET PAGE-->	
		<div class="resetform">
			<h3 class="text-center text-primary mt-2 mb-4">Reset Password</h3>
			<div class="container">
				<form class="" action="pwdreset.php" method="post">
				  <div class="mb-3">
					<label for="emailAddress" class="form-label">Enter Email Address</label>
					<input type="text" name="email" class="form-control" placeholder="Email Address" aria-describedby="emailHelp" required>
				  </div>
				  <button type="submit" name="reset" class="btn btn-primary col-lg-12 col-mt-2 mb-3">Reset</button>
				</form>
			</div>
		</div>
	</body>
</html>	