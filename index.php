<?php 
  $page = 'home';
  $title = 'Dunlop - Home';
  include 'meta.php';
?>

  
<body>

	<!-- home_slideshow -->
	<section class="home_slideshow">


		<?php
			 include 'header.php';
		?>


		<div id="home_slideshow" class="carousel slide caption-animate" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#home_slideshow" data-slide-to="0" class="active"></li>
		    <li data-target="#home_slideshow" data-slide-to="1"></li>
		    <li data-target="#home_slideshow" data-slide-to="2"></li>
		  </ol>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="carousel-item">
		    	<div class="slideshow_overlay"></div>
		      <img class="d-block w-100 full-screen" src="images/slideshow/slideshow1.jpg" alt="First Image">
		      <!-- <div class="carousel-caption d-md-block fadeInRight"> -->
		      <div class="carousel-caption d-md-block fadeInRight">
		        <h1>TO PROVIDE THE BEST<br>
		        	<span>QUALITY PRODUCTS</span><br>
		        AND SERVICE TO OUR CUSTOMERS</h1>
		      </div>
		    </div>
		    <div class="carousel-item">
		    	<div class="slideshow_overlay"></div>
		      <img class="d-block w-100 full-screen" src="images/slideshow/slideshow1.jpg" alt="Second Image">
		      <div class="carousel-caption d-md-block fadeInRight">
		        <h1>TO PROVIDE THE BEST<br>
		        	<span>QUALITY PRODUCTS</span><br>
		        AND SERVICE TO OUR CUSTOMERS</h1>
		      </div>
		    </div>
		    <div class="carousel-item">
		    	<div class="slideshow_overlay"></div>
		      <img class="d-block w-100 full-screen" src="images/slideshow/slideshow1.jpg" alt="Third Image">
		      <div class="carousel-caption d-md-block fadeInRight">
		        <h1>TO PROVIDE THE BEST<br>
		        	<span>QUALITY PRODUCTS</span><br>
		        AND SERVICE TO OUR CUSTOMERS</h1>
		      </div>
		    </div>
		  </div>
		  <!-- Controls -->
		  <a class="carousel-control-prev" href="#home_slideshow" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		  <a class="carousel-control-next" href="#home_slideshow" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		</div>
	</section>
	<!-- end home_slideshow -->


	<!-- home_about -->
	<section class="home_about">
		<div class="container inside">
			<div class="description">
				<header>DUNLOP ADHESIVES (THAILAND) LIMITED
					<!-- <span>DUNLOP ADHESIVES (THAILAND) LIMITED</span> -->
				</header>
				<article>develops and produces high-performance, long-lasting adhesives, sealants and coatings to suit the ever-evolving needs of its customers. Our varied product base is ideal for a wide range of materials, applications and substrates. The Company is dedicated to developing precisely tailored adhesive products through our commitment to product consistency, service and customer satisfaction. We pride ourselves on employing exceptional chemists and operators, enabling us to ensure a high level of customer satisfaction on which we have built a strong and solid reputation throughout Asia.</article>
			</div>
		</div>
	</section>
	<!-- end home_about -->




	<!-- home_company_image -->
	<section class="home_company_image">
		<img src="images/company_image.jpg">
	</section>
	<!-- end home_company_image -->




	<!-- home_dunlop -->
	<section class="home_dunlop">
		<div class="home_dunlop_wrapper">
			<div class="dunlop_left">
				<div class="dunlop_header">
					<img class="header_logo" src="images/dunlop_product_logo.png">
				</div>
				<div class="dunlop_advert">
					<header><a href="dunlop_product_listing.php">Dunlop Adhesives</a></header>
					<article>
						Our long-established Dunlop Adhesives products are guaranteed to withstand the toughest tests of heat, moisture, impact and load-bearing structures that today’s professionals demand. Each product is precisely formulated for every function and application method to give superior surface adhesion, dispersion and sealing for lifelong performance. 
					</article>
					<div class="button_wrapper">
						<button class="btn btn_black" onclick="window.location.href='dunlop_product_listing.php';">VIEW PRODUCTS</button>
					</div>
				</div>
			</div>

			<div class="dunlop_right">
				<img class="dunlop_adhesives" src="images/dunlop_adhesives.jpg">
			</div>
		</div>
	</section>
	<!-- end home_dunlop -->



	<!-- dunlop_logo_grey -->
	<section class="dunlop_logo_grey">
		
	</section>
	<!-- end dunlop_logo_grey -->



	<!-- home_dat -->
	<section class="home_dat">
		<div class="home_dat_wrapper">
			<!-- <div class="dat_product_logo"> -->
				<img class="dat_product_logo" src="images/dat_product_logo.png">
			<!-- </div> -->

			<div class="dat_left">
				<img class="dat_adhesives" src="images/dat_adhesives.jpg">
			</div>

			<div class="dat_right">
				<div class="dat_advert">
					<header><a href="dat_product_listing.php">DAT Adhesives &amp; Sealants</a></header>
					<article>
						launched into the International market in 2017, provides a variety of dynamic adhesives focussed on Green Building and safer usage including Low VOC, Low Formaldehyde and Non-Toluene formulations. Upon request, our dedicated and proficient research and development team can advise and produce tailor-made products for specific individual requirements.
					</article>
					<div class="button_wrapper">
						<button class="btn btn_white" onclick="window.location.href='dat_product_listing.php';">VIEW PRODUCTS</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home_dat -->


	<div class="home_promotion">

		<?php
			 include 'news_promotion.php';
		?>

	</div>
	


	<div class="clear"></div>



	<!-- home_company_advert -->
	<section class="home_company_advert">
		<div class="overlay"></div>
		<div class="company_advert">
			<div class="company_text">
				<h1>Dunlop Adhesives (Thailand) Limited</h1>
				<p>is committed to world class quality and our<br>
				constant focus is to deliver total product reliability.</p>
			</div>
		</div>
	</section>
	<!-- end home_company_advert -->

    

<?php 
  include 'footer.php';
?>