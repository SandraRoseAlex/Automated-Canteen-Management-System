<html lang= "en">
	<head>
	
		<meta charset= "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://kit.fontawesome.com/7f5ad1206e.js" crossorigin="anonymous"></script>
		
		
		<!-- CSS only -->
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="C:\Users\Vathappallil House\Desktop\Canteen Website\css\reset.css">
		
		<title> Change Password</title>
		
	</head>
	
	<body background="C:\Users\Vathappallil House\Desktop\Canteen Website\Images\loggin.jpg"><?php

session_start();

$page_title="Password Change Update";
//include('includes/header.php');
//include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

            <?php
              if(isset($_SESSION['status']))
              {
                ?>
                <div class= "alert alert-success">
                    <h5><?=$_SESSION['status'];?></h5>
              </div>
              <?php
              unset($_SESSION['status']); 
              }
             ?>
             
             
             
            <div class="card">
                <div class="card-header">
                    <h5>Change Password></h5>
            
            
                </div>
            <div class="card-body p-4">

                <form action="pwdreset.php" method="POST">
                    <input type="hidden" name ="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];}?>">
                    
                <div class="form-group mb-3">
                    <label>Email Address</label>
                    <input type="text" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>" class="form=control" placeholder="Enter Email Address">
                </div>
                <div class="form-group-mb3">
                    <label>New Password</label>
                    <input type="text" name="new_password" class="form-control" placeholder="Enter New Password">
                </div>
                <div class="form-group-mb3">
                    <label>Confirm Password</label>
                    <input type="text" name="confirm_password" class="form-control" placeholder="Enter Confirm Password">
                </div>
                <div class="form-group-mb3">
                  <button type="submit" name="password_update" class="btn btn-success w=100">Update Password</button>
                </div>
                
            </form>

            </div>
        </div>
    </div>
    </body>
</html>	