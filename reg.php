<html lang= "en">
<head>
	
		<meta charset= "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://kit.fontawesome.com/7f5ad1206e.js" crossorigin="anonymous"></script>
		
		
		<!-- CSS only -->
		<title> register</title>
		
		<link rel="stylesheet" type="text/css" href="css/log.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		
		
		
		
	</head>
	
	<body background="Images/loggin.jpg">
    <div class="loginform">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h3 class="text-center text-primary mt-2 mb-4">SignUp page</h3>
                    </div>
                    <form action="regauth.php" method="post">
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="text" name="psw" class="form-control"  placeholder="Enter password" required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="SignUp">
						Back to <a href="login.php">login</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>