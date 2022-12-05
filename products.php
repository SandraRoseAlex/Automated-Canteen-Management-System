<section id="menu" class="menu">
	<div class="container" data-aos="fade-up">
		<div class="section-header">
			<div class="text-content text-center">
				<h2>Our Menu</h2>
				<p>Check Our <span>Menu</span></p>
			</div>
		</div>

		<ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <?php

				$select_category = "SELECT DISTINCT CS.category_title 
				                    FROM   categories CS, products PS  
				                    WHERE  CS.category_title = PS.category_title 
				                    ORDER BY CS.category_title";
				$result_category = mysqli_query($conn,$select_category);

				$activeVal = 1;
				$activedata = "active";

				while($row_data = mysqli_fetch_assoc($result_category))
				{
					$category_title = $row_data['category_title'];

					if($activeVal == 0)
					{
						$activedata = "";
					}
					$activeVal = 0;
			?>
			    <li class="nav-item">
					<a class="nav-link <?php echo $activedata; ?> show" data-bs-toggle="tab" data-bs-target="#menu-<?php echo $category_title; ?>">
					 	<h4 style="cursor: pointer;"><?php echo $category_title; ?></h4>
					</a>
				</li>
			<?php } ?>
		</ul>

		<div class="tab-content" data-aos="fade-up" data-aos-delay="300">
			<?php
				$selectCategory = "SELECT CS.category_title 
				                   FROM   categories CS, products PS  
				                   WHERE  CS.category_title = PS.category_title 
				                   ORDER BY CS.category_title";
				$resultCategory = mysqli_query($conn, $selectCategory);
				//print_r($result_query);

				$activeVal = 1;
				$activedata = "active";

				while($rowCategory = mysqli_fetch_assoc($resultCategory))
				{
					$category_title = $rowCategory['category_title'];

					if($activeVal == 0)
					{
						$activedata = "";
					}
					$activeVal = 0;
			?>
			<div class="tab-pane fade <?php echo $activedata; ?> show" id="menu-<?php echo $category_title; ?>">
				<div class="tab-header text-center">
					<br>
					    <h3><?php echo $category_title; ?></h3>
				    <br>
				</div>
				
				<div class="row gy-5 product-list" id="product-list">
					<?php 
						$selectProducts = "SELECT product_title, product_image, product_price 
						                   FROM   products 
						                   WHERE  category_title = '$category_title'
						                   ORDER BY product_title";
						//echo $selectProducts; exit;
						$resultProducts = mysqli_query($conn, $selectProducts);	
						//print_r($resultProducts); exit

						if ($resultProducts) {

							while($rowProducts = mysqli_fetch_assoc($resultProducts))
							//foreach ($rowProducts as mysqli_fetch_assoc($resultProducts))
							{
								//$product_id    = $rowProducts['product_id'];
								$product_title = $rowProducts['product_title'];
								//$product_id    = $rowProducts['product_id'];
								$product_image = $rowProducts['product_image'];
								$product_price = $rowProducts['product_price'];
					?>
					
					<div class="col-lg-4 menu-item">
						<div class="product" id="product">
							<form action="manage.php" method="post">
								<div class="card shadow">
									<div>
										<img src="images/<?php echo $product_image; ?>" class="menu-img img-fluid" alt=""></a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><?php echo $product_title; ?></h4>
										<p class="price">
	        							    <?php echo $product_price; ?>
										</p>
										<div class="text-center">
											<button type="submit" name="buy" class="btn btn-outline-info" href="">
												Buy
											</button>
											&nbsp;
											<button type="submit" name="add" class="btn btn-outline-info">
											    Add to cart
											</button>
											<input type="hidden" name="Item_Name" value="<?php echo $product_title; ?>">
											<input type="hidden" name="Price" value="<?php echo $product_price; ?>">
										</div>
									</div>
								</div>
							</form>
						</div>
					
					</div><!-- Menu Item -->
					<?php } } ?>
				</div>
				
			</div><!-- End Menu Content -->
			<?php } ?>
		</div>


		<!-- Modal -->
		<!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Buy Now</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="cart-wrapper">
							<div class="cart-card">
								<img class="cart-image" src="<?php echo $product_image; ?>">
								<div class="cart-detail">
									<p>$product_title</p>
									<i class=""></i><input type="text" value="1">
								</div>
								<h4 class="cart-price"><p> Price : 25</h4>
							</div>
									
						</div>
						<hr class="divider">
						<div class="cart-total">
							<p>Subtotal  <span>25</span></p>
						</div>
						<button type="button" class="btn btn-dark">Checkout</button>								
					</div>
				</div>
			</div>
		</div>-->
	</div>
</section><!-- End Menu Section -->