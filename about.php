<?php 
  $page = 'about';
  $title = 'Dunlop - About';
  include 'meta.php';
?>

  
<body>

	<!-- header_image -->
	<section class="header_image">


		<?php
			 include 'header.php';
		?>


		
	</section>
	<!-- end header_image -->




	<!-- main_wrapper -->
	<section class="main_wrapper">
		
		<?php 
			$subpage = 'about';
			include('aside.php'); 
		?>

		<div class="main_area">
			<div class="dunlop_breadcrumb">
				<a href="#!">Home</a>
				<span> / </span>
				<a href="#!" class="active">About us</a>
			</div>

			<content>
				<header>About Us</header>
				<article>
					launched into the International market in 2017, provides a variety of dynamic adhesives focussed on Green Building and safer usage including Low VOC, Low Formaldehyde and Non-Toluene formu-lations. Upon request, our dedicated and proficient research and development team can advise and produce tailor-made prod-ucts for specific individual requirements.
				</article>
			</content>
		</div>
	</section>
	<!-- end main_wrapper -->














	<?php
		 include 'news_promotion.php';
		 include 'footer.php';
	?>
