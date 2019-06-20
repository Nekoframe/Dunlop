<?php 
  $page = 'contact';
  $title = 'Dunlop - Privacy Policy';
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
			$subpage = 'privacy';
			include('aside.php'); 
		?>

		<div class="main_area">
			<div class="dunlop_breadcrumb">
				<a href="#!">Home</a>
				<span> / </span>
				<a href="#!" class="active">Privacy Policy</a>
			</div>

			<content>
				<header>Privacy Policy</header>
				<article>
					develops and produces high-performance, long-lasting adhesives, sealants and coatings to suit the ever-evolving needs of its customers. Our varied product base is ideal for a wide range of materials
				</article>
			</content>
		</div>
	</section>
	<!-- end main_wrapper -->














	<?php
		 include 'news_promotion.php';
		 include 'footer.php';
	?>
