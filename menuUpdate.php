<?php
include('connect.php');

if(isset($_POST['insert_product']))
{
$product_title=$_POST['product_title'];
$product_category=$_POST['product_category'];
$product_price=$_POST['product_price'];
$product_status='true';
//accessing images
$product_image=$_FILES['product_image']['name'];
//accessing image tmp name
$temp_image=$_FILES['product_image']['tmp_name'];
//checking empty condition
if($product_title=='' or $product_category=='' or $product_price=='' or $product_image=='')
{
	echo "<script>alert('Please fill all the available fields')</script>";
	exit();
}
else 
{
  move_uploaded_file($temp_image,"./product_images/$product_image");
  //insert query
  $insert_products="INSERT into `products` (product_title,category_title,product_image,product_price,date,status)
  values('$product_title','$product_category','$product_image','$product_price',NOW(),'$product_status') ";

  $result_query=mysqli_query($conn,$insert_products);
  if($result_query)
  {
	echo "<script>alert('successfully inserted at the products')</script>";
  }
}
}
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
		<link rel="stylesheet" href="css/admin.css">
		
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
									<li><a class="dropdown-item" href="menuUpdate.php">Menu</a></li>
									<li><a class="dropdown-item" href="categories.php">Category</a></li>
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
		<div class="container my-5">	
		<br>		
			<div class="col-lg-12 text-center border rounded bg-light my-3">
				<h1 class="p-2"> Add New Item</h1>
			</div>
			<form class="" action="" method="post" enctype="multipart/form-data">
				<div class="card bg-light text-light mb-3">
					<div class="card-body bg-light">
						<div class="form-group">
							<label for="title"> <span class="FieldInfo">Product Title: </span></label>
							<input class="form-control" type="text" name="product_title" id="product_title" placeholder="Type title" autocomplete="off" value="" required="required">
						</div>
						<div class="form-group">
							<label for="category"> <span class="FieldInfo mg-auto">Choose Category: </span></label>
							<select class="form-select" id="categorytitle" name="product_category" required="required">
								<option value="">Select Category</option>
								<?php
								
                                 $select_query="SELECT *FROM `categories` ";
                                 $result_query=mysqli_query($conn,$select_query);
								 while($row=mysqli_fetch_assoc($result_query))
								 {
									$category_title=$row['category_title'];
									$category_id=$row['category_id'];
									echo "<option value='$category_title'>$category_title</option>";
								 }

								?>
							</select>
							</div>	
							<!--	<option value="">category1</option>
								<option value="">category2</option>
								<option value="">category3</option>
								<option value="">category4</option>
							</select>
						</div>
								-->
						<!--<div class="form-group mb-1">
							<div class="custom-file">
								<label for="imageselect" class="custom-file-label">Select Image</label>
								<input class="custom-file-input" type="File" name="image" id="imageselect" value="">
							</div>
						</div>	-->
						<div class="form-group mt-3">
							<div class="input-group mg-auto">
							  <input type="file" class="form-control" id="inputfile" name="product_image" required="required">
							</div>	
							<div class="form-group">
								<label for="product price" class="form-label mb-1">Product Price</label>
								<input type="text" name="product_price" id="prouct_price" class="form-control"
								placeholder="Enter Product Price" autocomplete="off" required="required">
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button type="submit" class="btn btn-outline-primary mt-3" name="insert_product" value="Insert Products"> upload</button><div>
						</div>

				</div>	
			</form>	
		</div>
		<!--DELETE MENU-->
		
		<div class="container my-5">
			<div class="row">
				<div class="col-lg-12 text-center border rounded bg-light my-5">
					<h1 class="text-dark">Current Menu</h1>
				</div>
				<br>
				<div class="col-lg-9 ms-5 me-5">	
					<table class="table table-bordered table-success table-striped">
						<thead class=" table-light text-center">
							<tr>
								<th scope="col">Serial No.</th>
								<th scope="col">Item Name</th>
								<th scope="col">Price</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody="text-center">
							<tr>
								<th scope="row">1</th>
								<td>product1</td>
								<td>25</td>
								<td>
									<div>
									  <button class="btn btn-outline-dark"><i class="fa-solid fa-trash-can"></i></button>
									</div>																
								</td>
							</tr>
							<tr>
								<th scope="row">1</th>
								<td>product2</td>
								<td>25</td>
								<td>
									<div>
									  <button class="btn btn-outline-dark"><i class="fa-solid fa-trash-can"></i></button>
									</div>																
								</td>
							</tr>
							<tr>
								<th scope="row">1</th>
								<td>product3</td>
								<td>25</td>
								<td>
									<div>
									  <button class="btn btn-outline-dark"><i class="fa-solid fa-trash-can"></i></button>
									</div>																
								</td>
							</tr>
							<tr>
								<th scope="row">1</th>
								<td>product4</td>
								<td>25</td>
								<td>
									<div>
									  <button class="btn btn-outline-dark"><i class="fa-solid fa-trash-can"></i></button>
									</div>																
								</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</body>
</html>	