<?php 
  $page = 'product';
  $title = 'Dunlop - Dunlop Products';
  include 'meta.php';
?>

  
<body>

	<!-- header_image -->
	<section class="header_image dunlop_product_banner">


		<?php
			 include 'header.php';
		?>


		
	</section>
	<!-- end header_image -->




	<!-- main_wrapper -->
	<section class="main_wrapper">
		
		<?php 
			$subpage = 'link';
			include('dunlop_aside.php'); 
		?>

		<div class="main_area dunlop_product_listing_wrapper">
			<div class="dunlop_breadcrumb dunlop">
				<a href="#!">Home</a>
				<span> / </span>
				<a href="#!">Dunlop Adhesives</a>
				<span> / </span>
				<a href="#!">Products</a>
				<span> / </span>
				<a href="#!">adhesives</a>
				<span> / </span>
				<a href="#!" class="active">Contact Adhesives</a>
			</div>

			<content>
				<header>CONTACT ADHESIVES</header>


				<!-- product_detail_wrapper -->
				<div class="product_detail_wrapper dunlop_product_detail">
					<div class="row">
						<div class="col-lg-6 col-xl-6" id="slider">
							 <div id="product_slider" class="carousel slide" data-ride="carousel">



							 	<!-- Indicators -->
								<ul class="carousel-indicators d-block d-xl-none">
								    <li data-target="#product_slider" data-slide-to="0" class="active"></li>
								    <li data-target="#product_slider" data-slide-to="1"></li>
								    <li data-target="#product_slider" data-slide-to="2"></li>
								</ul>


			                    <!-- main slider carousel items -->
			                    <div class="carousel-inner">
					                <div class="carousel-item active">
					                    <img src="images/products/dat_product_slide.jpg">
					                </div>
					                <div class="carousel-item">
					                    <img src="images/products/dat_product_slide.jpg">
					                </div>
					                <div class="carousel-item">
					                    <img src="images/products/dat_product_slide.jpg">
					                </div>                				                
					            </div>
			                    <!-- main slider carousel nav controls -->


			                    <div class="clearfix">
							        <div id="thumbcarousel" class="carousel slide" data-interval="false">
							            <div class="carousel-inner">
							                <div class="item active row">
							                    <div data-target="#product_slider" data-slide-to="0" class="thumb col-xl-4 col-lg-4">
							                    	<img src="images/products/dat_product_slide.jpg">
							                    </div>
							                    <div data-target="#product_slider" data-slide-to="1" class="thumb col-xl-4 col-lg-4">
							                    	<img src="images/products/dat_product_slide.jpg">
							                    </div>
							                    <div data-target="#product_slider" data-slide-to="2" class="thumb col-xl-4 col-lg-4">
							                    	<img src="images/products/dat_product_slide.jpg">
							                    </div>
							                </div><!-- /item -->
							            </div><!-- /carousel-inner -->
							            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
							                <span class="glyphicon glyphicon-chevron-left"></span>
							            </a>
							            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
							                <span class="glyphicon glyphicon-chevron-right"></span>
							            </a>
							        </div> <!-- /thumbcarousel -->
							    </div><!-- /clearfix -->


			            	</div>
						</div>


						<div class="col-lg-5 col-xl-5 offset-lg-1 offset-xl-1">
							<div class="product_description">
								<h1>LAMINATED PLASTIC ADHESIVE</h1>
								<content>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod... 
tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus

									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod... 
tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus
								</content>

								<div class="feature_section">
									<h2>Features</h2>
									<div class="row">
										<div class="col-xl-3 col-lg-3 col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature1.png" alt="Feature 1" title="Feature 1">
										</div>

										<div class="col-xl-3 col-lg-3 col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature2.png" alt="Feature 2" title="Feature 2">
										</div>

										<div class="col-xl-3 col-lg-3  col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature3.png" alt="Feature 3" title="Feature 3">
										</div>

										<div class="col-xl-3 col-lg-3 col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature4.png" alt="Feature 4" title="Feature 4">
										</div>

										<div class="col-xl-3 col-lg-3 col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature5.png" alt="Feature 5" title="Feature 5">
										</div>

										<div class="col-xl-3 col-lg-3 col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature6.png" alt="Feature 6" title="Feature 6">
										</div>

										<div class="col-xl-3 col-lg-3 col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature7.png" alt="Feature 7" title="Feature 7">
										</div>
										
										<div class="col-xl-3 col-lg-3 col-sm-3 col-3 feature">
											<img src="images/products/dunlop_feature8.png" alt="Feature 8" title="Feature 8">
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>


					<!-- product_long_description -->
					<section class="product_long_description">

						<div class="scrollable">
							<ul class="nav nav-tabs" role="tablist">
							  <li class="nav-item">
							  	<a class="active first" href="#tab1" role="tab" data-toggle="tab">Product Description
							  		<div class="border_buttom"></div></a>
							  </li>
							  <li class="nav-item">
							  	<a href="#tab2" role="tab" data-toggle="tab">Applications<div class="border_buttom"></div></a>
							  </li>
							  <li class="nav-item">
							  	<a href="#tab3" role="tab" data-toggle="tab">Directions<div class="border_buttom"></div></a>
							  </li>
							  <li class="nav-item">
							  	<a href="#tab4" role="tab" data-toggle="tab">Content<div class="border_buttom"></div></a>
							  </li>
							  <li class="nav-item">
							  	<a href="#tab5" role="tab" data-toggle="tab">Storage<div class="border_buttom"></div></a>
							  </li>
							</ul>
						</div>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="tab1">
								<div class="row desc_box">

									<div class="col-xl-12 col-lg-12">
										
										<article>
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod... 
tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
										</article>
									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane" id="tab2">
								<p>tab2</p>
							</div>

							<div role="tabpanel" class="tab-pane" id="tab3">
								<p>tab3</p>
							</div>

							<div role="tabpanel" class="tab-pane" id="tab4">
								<p>tab4</p>
							</div>

							<div role="tabpanel" class="tab-pane" id="tab5">
								<p>tab5</p>
							</div>
						</div>
					</section>
					<!-- end product_long_description -->




					<!-- data_sheet_wrapper -->
					<section class="data_sheet_wrapper">
						<h4>Data Sheet</h4>
						<ul class="download_box">
							<li>
								<a href="#!">
									<img src="images/products/pdf_icon.png" class="sheet_icon">
									<p>DIY Adhesives Bochur PDF</p>
								</a>
							</li>
							<li>
								<a href="#!">
									<img src="images/products/pdf_icon.png" class="sheet_icon">
									<p>DIY Adhesives Bochur PDF</p>
								</a>
							</li>
							<li>
								<a href="#!">
									<img src="images/products/pdf_icon.png" class="sheet_icon">
									<p>DIY Adhesives Bochur PDF</p>
								</a>
							</li>
						</ul>
					</section>
					<!-- end data_sheet_wrapper -->




					<!-- related_product_wrapper -->
					<section class="related_product_wrapper">
						<header>Related Products</header>
						<div class="relate_product_slider">
							<div class="owl-carousel" id="related_product">

								<div class="related_pro_box">
									<a href="#!">
										<div class="related_pro_image">
											<div class="overlay"></div>
											<img src="images/products/dunlop_product.jpg">
										</div>
										<div class="related_pro_detail">
								  			<h3>DIY Adhesives</h3>
								  			<p>March 20, 2018</p>
								  			<article>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… </article>
									  	</div>
									</a>
								</div>

								<div class="related_pro_box">
									<a href="#!">
										<div class="related_pro_image">
											<div class="overlay"></div>
											<img src="images/products/dunlop_product.jpg">
										</div>
										<div class="related_pro_detail">
								  			<h3>DIY Adhesives</h3>
								  			<p>March 20, 2018</p>
								  			<article>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… </article>
									  	</div>
									</a>
								</div>

								<div class="related_pro_box">
									<a href="#!">
										<div class="related_pro_image">
											<div class="overlay"></div>
											<img src="images/products/dunlop_product.jpg">
										</div>
										<div class="related_pro_detail">
								  			<h3>DIY Adhesives</h3>
								  			<p>March 20, 2018</p>
								  			<article>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… </article>
									  	</div>
									</a>
								</div>

								<div class="related_pro_box">
									<a href="#!">
										<div class="related_pro_image">
											<div class="overlay"></div>
											<img src="images/products/dunlop_product.jpg">
										</div>
										<div class="related_pro_detail">
								  			<h3>DIY Adhesives</h3>
								  			<p>March 20, 2018</p>
								  			<article>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… </article>
									  	</div>
									</a>
								</div>

								<div class="related_pro_box">
									<a href="#!">
										<div class="related_pro_image">
											<div class="overlay"></div>
											<img src="images/products/dunlop_product.jpg">
										</div>
										<div class="related_pro_detail">
								  			<h3>DIY Adhesives</h3>
								  			<p>March 20, 2018</p>
								  			<article>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… </article>
									  	</div>
									</a>
								</div>

								<div class="related_pro_box">
									<a href="#!">
										<div class="related_pro_image">
											<div class="overlay"></div>
											<img src="images/products/dunlop_product.jpg">
										</div>
										<div class="related_pro_detail">
								  			<h3>DIY Adhesives</h3>
								  			<p>March 20, 2018</p>
								  			<article>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod… </article>
									  	</div>
									</a>
								</div>

							</div>
						</div>
					</section>
					<!-- end related_product_wrapper -->






				</div>
				<!-- end product_detail_wrapper -->



			</content>
		</div>
	</section>
	<!-- end main_wrapper -->














	<?php
		 include 'news_promotion.php';
		 include 'footer.php';
	?>
