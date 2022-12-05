<?php 
include('connect.php');
include('functions/common_function.php');
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
		
		<title>Admin</title>
		
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
							<a href="#home" class="nav-link active show">Home</a>
							</li>
							<li class="nav-item">
							<a href="#menu" class="nav-link active show">Menu</a>
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
										<form class="d-flex" method="get">
											<input class="form-control me-2" type="text" name="find" id="search-item"placeholder="Search" onkeyup="search()">
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
		<!--NAVBAR ENDS-->
		
		<!--HOME-->
		<section id="home">
			<!--<div style="height:10px; background:#27aae1;"></div>-->
			<div class= "lgoo">
				<img src="images/banner.jpg">
			</div>
		</section>
		
		<!--HOME ENDS-->
		
		
		<!--ABOUT SECTION-->
		
		<section id="about">
			<div class="about-section wrapper">
				<div class="container">
					<div class="section-header">
						<div class="text-content text-center">
						<p>About <span>Us</span></p>
					</div>
				</div>
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
							<div class="card border-10px">
								<img src="images/club-sandwich-with-side-french-fries.jpg" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-5 col-md-12 text-sec">
							<h2>This canteen belongs to Lourdes Matha College Of Science And Technology.</h2>
							
							<p>Canteen Management system manages all the details of food items which contains name, description, image, price, etc.
							Admin can view and confirm order and update the status of the order accordingly.
							It also shows a summarization on the business done on that day Customer can check their order history and able to delete the order according to order status.</p>
							
						</div>
					</div>
				</div>
			</div>
		</section> 		
	<!--ABOUT ENDS-->

	
<!--MENU SECTION-->
<?php include("products.php") ?>
<!-- End Menu Section -->
		
	
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
	

	 </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SMARTEEN</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->
		<!-- JavaScript Bundle with Popper -->
		<script src="search.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>