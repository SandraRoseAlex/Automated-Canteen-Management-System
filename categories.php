<?php 
include('connect.php');
if(isset($_POST['addcat']))
{
	$category_title=$_POST['category_title'];
	//select data from database
	$select_query="SELECT * from  `categories` where category_title='$category_title'";
    $result_select=mysqli_query($conn,$select_query);
	$number=mysqli_num_rows($result_select);
	if($number>0)
	{
		echo "<script>alert('this category is already present')</script>";
	}
	else{
	
	$insert_query="INSERT into `categories` (category_title) values ('$category_title')";
	$result=mysqli_query($conn,$insert_query);
	if($result)
	{
       echo "<script>alert('category has been added successfully')</script>";
	}
}}
?>



<html lang= "en">
	<head>
		<meta charset= "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		
		<script src="https://kit.fontawesome.com/7f5ad1206e.js" crossorigin="anonymous"></script>
		
		
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="css/categories.css">
		
		<title>Update Menu</title>
		
	</head>
	<body>
		<!--navbar-->
		<!--<div style="height:10px; background:#27aae1;"></div>-->
		<header id="header" class="header fixed-top d-flex align-items-center">
			<!--navbar-->
			
			<nav class="navbar navbar-expand-lg navbar-light sticky-top">
				<div class="container">
					<!--<div class = "logo">-->
					<!--<img src="C:\Users\Vathappallil House\Desktop\lmcst.jpg" alt="college logo" class="img-responsive" width="70" height="70">-->
					<!--</div>-->
					
					<a href ="#" class="navbar-brand"> 
						<img src="Images/lmcst.jpg" alt="college logo" style="width:50px;" class="rounded-pill">
						CANTEEN 
					</a>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
						<ul class="navbar-nav mr-auto mb-1 mb-lg-0">	
						
							<li class="nav-item">
							<a href="admin.php" class="nav-link active show">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Update
								</a>
								<ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
									<li><a class="dropdown-item" href="C:\Users\Vathappallil House\Desktop\Canteen Website\menuUpdate.html">Menu</a></li>
									<li><a class="dropdown-item" href="#">Category</a></li>
								</ul>
							</li>
							<!--<li class="nav-item">
							<a href="#categories" class="nav-link active">Categories</a>
							</li>-->
						</ul>
						
						<ul class="navbar-nav ms-auto mb-1 mb-lg-0">
							<li class="nav-item p-1 mt-2">
								<a href="orderlist.php" class="nav-link active fw-normal"><i class="fa-solid fa-cart-arrow-down"></i> Orders</a>
							</li>
							<li class="nav-item p-1 mt-2">
							<a href="login.php" class="nav-link active"><i class="fa-solid fa-user-astronaut"></i> logout</a>
							</li>
							<li class="nav-item">
								<div class="d-flex flex-row-reverse">
									<div class="p-1 mt-2">
										<form class="d-flex">
											<input class="form-control me-2" type="text" placeholder="Search">
											<button class="btn btn-outline-info" type="button">Search</button>
										</form>
									</div>	
								</div>
							</li>
						</ul>
					</div>
				</div>
				</div>
			</nav>
		</header>		
		<br>

		<!--NAVBAR ENDS-->
		
		<section class="container my-5">
			<div class="row">
				<form class=""action="categories.php" method="post">
					<div class="card me-5 ms-5" style="width: 50rem;">
						<div class="card-header text-center">
							<h1>Add new category</h1>
						</div>	
						<div class="card-body">
							<div class="form-group">
								<label for="title"><span class="FieldInfo"> Category Title </span></label>
								<input class="form-control" type="text" name="category_title" id="title" placeholder="type title here"
								aria-label="Categories" aria-describedby="basic-addon1">
							</div>
							<div class="row my-4">
								
								<div class="col-lg-6">
									<input type="submit" class="bg-info border-0 p-2 my-3" name="addcat" value="Insert categories">
							</div>
							</div>
						</div>
					</div>
				</form>	
			</div>	
		</section>
	</body>
</html>	