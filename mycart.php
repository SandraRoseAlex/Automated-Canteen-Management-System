<?php
session_start();
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
		<link rel="stylesheet" href="css/cart.css">
		
		<title> Cart</title>
		
	</head>
	<body>
		<header id="header" class="header fixed-top d-flex align-items-center">
			<!--navbar-->
			
			<nav class="navbar navbar-expand-lg navbar-light sticky-top">
				<div class="container">
					<!--<div class = "logo">-->
					<!--<img src="C:\Users\Vathappallil House\Desktop\lmcst.jpg" alt="college logo" class="img-responsive" width="70" height="70">-->
					<!--</div>-->
					
					<a href ="#" class="navbar-brand"> 
						<img src="Images\lmcst.jpg" alt="college logo" style="width:50px;" class="rounded-pill">
						CANTEEN 
					</a>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
						<ul class="navbar-nav mr-auto mb-1 mb-lg-0">	
						
							<li class="nav-item">
							<a href="header.php" class="nav-link active show">Home</a>
							</li>
						</ul>
						
						<div class="ms-auto mb-2 mb-lg-0">
							<a class="btn btn-outline-info" href="mycart.php" role="button" aria-controls="cart"><i class="fa-solid fa-cart-shopping"></i>
							<span id="cart_count" class="text-warning ">
								<?php if(isset($_SESSION['cart']))
								{ 
									echo sizeof($_SESSION['cart']); 
								}
								else
								{ 
									echo '0';
								}
								?>
							</span></a>
						</div>
					</div>
				</div>
				</div>
			</nav>
		</header>	

		<!--NAVBAR ENDS-->
		<br>
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-12 text-center border rounded bg-light my-5">
					<h1> MY CART</h1>
				</div>
				<br>
				<div class="col-lg-9">
					<table class="table table-bordered table-success table-striped">
						<thead class=" table-light text-center">
							<tr>
								<th scope="col">Serial No.</th>
								<th scope="col">Item Name</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody class="text-center">
						<?php
						$total=0;
						if(isset($_SESSION['cart']))
						{
							foreach($_SESSION['cart'] as $key=>$value)
							{
								$sr=$key+1;
								$total=$total+$value['Price'];
								echo"
									<tr>
										<td>$sr</td>
										<td>$value[Item_Name]</td>
										<td>$value[Price]</td>
										<td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
										<form action='demomanage.php' method='post'>
										<td><button class='btn btn-outline-primary btn-sm' name='remove'>Remove</button>
										<input type='hidden'name='Item_Name' value='$value[Item_Name]'></td>
										</form>
								</tr>
								";
								
							}
						}
					?>
				</tbody>	
				
					</table>
				</div>
				<div class="col-lg-3">
					<div class="border bg-light rounded p-4">
						<h4>Total: </h4>
						<h5 class="text-right" id="total"><?php echo $total?></h5>
						<br>
						<form action="purchase.php" method="POST">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="fullname" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Phone No</label>
								<input type="text" name="phone"class="form-control"required>
							</div>
							<div class="form-group">
								<label>Adm No</label>
								<input type="text" name="adm" class="form-control"required>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="paymode" value="OFFLINE" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									Pay Offline
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="paymode" value="ONLINE" id="flexRadioDefault2" checked>
								<label class="form-check-label" for="flexRadioDefault2">
									Pay Online
								</label>
							</div>
							<h5 class="fw-normal fs-6"> Your Order ID is : </h5>
							<br>
							<button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
						</form>
					</div>
				</div>
			</div>	
		</div>	
	
		  <!-- ======= Footer ======= -->
		<footer id="footer" class="footer">

			<div class="container">
			  <div class="row gy-3">
				<div class="col-lg-3 col-md-6 d-flex">
				
				  <i class="bi bi-geo-alt icon"></i>
				  <div>
					<h4>Address</h4>
					<p>
					  Lourdes Matha College <br>
					  Kuttichal Trivandrum - India<br>
					</p>
				  </div>

				</div>

				<div class="col-lg-3 col-md-6 footer-links d-flex">
				  <i class="bi bi-telephone icon"></i>
				  <div>
					<h4>Contact us</h4>
					<p>
					  <strong>Phone:</strong> +91 123456789<br>
					  <strong>Email:</strong> smarteen@gmail.com<br>
					</p>
				  </div>
				</div>

				<div class="col-lg-3 col-md-6 footer-links d-flex">
				  <i class="bi bi-clock icon"></i>
				  <div>
					<h4>Opening Hours</h4>
					<p>
					  <strong>Mon-Sat: 8.00AM</strong> - 3.45PM<br>
					  Sunday: Closed
					</p>
				  </div>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
				  <h4>Follow Us</h4>
				  <div class="social-links d-flex">
					<a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
					<a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
					<a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
					<a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
				  </div>
				</div>

			  </div>
			</div>

			<div class="container">
			  <div class="copyright">
				&copy; Copyright <strong><span>SMARTEEN</span></strong>. All Rights Reserved
			  </div>
			</div>

		</footer>
	  
	  <!-- End Footer -->
			<!-- JavaScript Bundle with Popper -->
			
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
			integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>	