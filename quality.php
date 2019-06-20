<?php 
  $page = 'workwithus';
  $title = 'Dunlop - Quality Control';
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
			$subpage = 'quality';
			include('aside.php'); 
		?>

		<div class="main_area">
			<div class="dunlop_breadcrumb">
				<a href="#!">Home</a>
				<span> / </span>
				<a href="#!" class="active">Quality Control</a>
			</div>

			<content>
				<header>Quality Control</header>
				<article>
					develops and produces high-performance, long-lasting adhesives, sealants and coatings to suit the 
ever-evolving needs of its customers. Our varied product base is ideal for a wide 
applications and substrates. The Company is dedicated to developing precisely tailored adhesive products through our commitment to product consistency, service and customer satisfaction. We pride ourselves on 
employing exceptional chemists and operators, enabling us to ensure a high level of customer satisfaction 
on which we have built a strong and solid reputation throughout Asia.   
				</article>
			</content>
		</div>
	</section>
	<!-- end main_wrapper -->














	<?php
		 include 'news_promotion.php';
		 include 'footer.php';
	?>
