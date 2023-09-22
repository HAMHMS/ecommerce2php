<?php
 include 'tpls/head.php';
 include 'tpls/header.php';
?>

	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.php" class="s-text16">
			Women
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			T-Shirt
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Boxy T-Shirt with Roll Sleeve Detail
		</span>
	</div>
            <?php
            
				$pro_id = $_GET['id'];
				include_once "admin/functions/connect.php";
				$read = "SELECT * FROM products WHERE id = $pro_id";
				$query = $conn -> query($read);
               
			?>
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<?php
                        foreach($query as $pro){
						?>
						<div class="item-slick3" data-thumb="admin/images/<?= $pro['image'] ?>">
							<div class="wrap-pic-w">
								<img src="admin/images/<?= $pro['image'] ?>" alt="IMG-PRODUCT">
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				
				<h4 class="product-detail-name m-text16 p-b-13">
					<?= $pro['name'] ?>
				</h4>

				<span class="m-text17">
					$<?= $pro['price'] ?>
				</span>

				<p class="s-text8 p-t-10">
					Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Choose an option</option>
								<option>Size S</option>
								<option>Size M</option>
								<option>Size L</option>
								<option>Size XL</option>
							</select>
						</div>
					</div>

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="color">
								<option>Choose an option</option>
								<option>Gray</option>
								<option>Red</option>
								<option>Black</option>
								<option>Blue</option>
							</select>
						</div>
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">SKU: MUG-01</span>
					<span class="s-text8">Categories: Mug, Design</span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- DETAILS TABS-->
        <div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Reviews
			</h3>	
		</div>
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Add Review</a></li>
            <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <form class="review">
                  <label>Name</label>
                  <input type="text" name="name"></br>
                  <label>Review</label>
                  <textarea name="textarea" value ="textarea"></textarea><br>
                  <input type="submit" value="Add">
                </form>
              </div>
            </div> 
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
              <div class="p-4 p-lg-5 bg-white">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="media mb-3"><img class="rounded-circle" src="img/customer-1.png" alt="" width="50">
                      <div class="media-body ml-3">
                        <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                        <ul class="list-inline mb-1 text-xs">
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                        </ul>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                    <div class="media"><img class="rounded-circle" src="img/customer-2.png" alt="" width="50">
                      <div class="media-body ml-3">
                        <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                        <ul class="list-inline mb-1 text-xs">
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                          <li class="list-inline-item m-0"><i class="fa fa-star" aria-hidden="true" style="color: #f9b701;"></i></li>
                        </ul>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                      <div class="view"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

	<!-- Related Products -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>				

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				<?php
					include_once "admin/functions/connect.php";
					$sel_pro = "SELECT * FROM products";
					$query_pro = $conn -> query($sel_pro);
					foreach($query_pro as $pro2){
					?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="admin/images/<?= $pro2['image'] ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
									<?= $pro2['name'] ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									$<?= $pro2['price'] ?>
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
        </div>    
	</section>


<?php include 'tpls/footer.php'; ?>
