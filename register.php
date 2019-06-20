<?php 
  $page = 'workwithus';
  $title = 'Dunlop - Register';
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
			$subpage = 'register';
			include('aside.php'); 
		?>

		<div class="main_area">
			<div class="dunlop_breadcrumb">
				<a href="#!">Home</a>
				<span> / </span>
				<a href="#!" class="active">Register to work with us</a>
			</div>

			<content>
				<header>Register to work with us</header>
				<article>
					develops and produces high-performance, long-lasting adhesives, sealants and coatings to suit the 
ever-evolving needs of its customers. Our varied product base is ideal for a wide 
applications and substrates. The Company is dedicated to developing precisely tailored adhesive products through our commitment to product consistency, service and customer satisfaction. We pride ourselves on 
employing exceptional chemists and operators, enabling us to ensure a high level of customer satisfaction 
on which we have built a strong and solid reputation throughout Asia.   
				</article>
			</content>

			<hr>


			<!-- contact_form -->
			<div class="contact_form">
				<form>

					<div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="firstname">First Name*</label>
						    <input type="text" class="form-control" id="firstname" placeholder=" ">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="surname">Surname*</label>
				    		<input type="text" class="form-control" id="surname" placeholder=" ">
				    	</div>
				    </div>

				    <div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="company">Company*</label>
						    <input type="text" class="form-control" id="company" placeholder=" ">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="position">Position*</label>
				    		<input type="text" class="form-control" id="position" placeholder=" ">
				    	</div>
				    </div>

				    <div class="form-row">
				    	<div class="form-group col-xl-9">
						    <label for="email">Email*</label>
				    		<input type="email" class="form-control" id="email" placeholder=" ">
				    	</div>
					</div>

					<!-- <div class="form-row">
						<div class="form-group col-xl-6 col-lg-9 col-sm-9 col-6">
						    <label for="phone">Phone Number</label>
				    		<input type="number" class="form-control" id="phone" placeholder=" ">
				    	</div>

						<div class="form-group col-xl-3 col-lg-3 col-sm-3 col-6">
						    <label for="phone_country" style="font-weight: normal;">Country Selection*</label>
				    		<select class="form-control" id="phone_country">
				    			<option>Select a country</option>
				    			<option>America</option>
				    			<option>Canada</option>
				    			<option>UK</option>
				    			<option>Thailand</option>
				    		</select>
				    	</div>
					</div> -->



					<div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="phone">Phone Number</label>
				    		<input type="number" class="form-control" id="phone" placeholder=" ">
				    	</div>
					</div>

					
					<div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="address">Address</label>
				    		<input type="text" class="form-control" id="address" placeholder=" ">
				    	</div>
				    </div>

				    <div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="city">City</label>
				    		<input type="text" class="form-control" id="city" placeholder=" ">
				    	</div>
				    </div>

				    <div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="postcode">Post Code</label>
				    		<input type="text" class="form-control" id="postcode" placeholder=" ">
				    	</div>
				    </div>

				    <div class="form-row">
						<div class="form-group col-xl-4 col-lg-6 col-sm-6 col-6">
						    <label for="country">Country*</label>
				    		<select class="form-control" id="country">
				    			<option>Select a country</option>
				    			<option>America</option>
				    			<option>Canada</option>
				    			<option>UK</option>
				    			<option>Thailand</option>
				    		</select>
				    	</div>
				    </div>


				    <div class="form-row">
						<div class="form-group col-xl-4 col-lg-6 col-sm-6 col-6">
						    <label for="specify">Please Specify*</label>
				    		<select class="form-control" id="specify">
				    			<option>Dealer</option>
				    			<option>Wholesaler</option>
				    			<option>Supplier</option>
				    			<option>Other</option>
				    		</select>
				    	</div>
				    </div>

				    <div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="message">Message*</label>
				    		<textarea class="form-control" id="message" rows="5">
				    			
				    		</textarea>
				    	</div>
				    </div>


			    	<div class="form-check white">
					    <input type="checkbox" class="form-check-input" id="formcheck">
					    <label class="form-check-label" for="formcheck">Yes, I accept the Term of Use and Privacy Policy . *</label>
					</div>


					<!-- <div class="form-row">
						<div class="form-group col-xl-9">
						    <label for="code">Please enter the validation  code*</label>
				    		<input type="text" class="form-control" id="code" placeholder="Security / Validation code Characters (not a robot)">
				    	</div>
				    </div> -->


				    <div class="form-row">
						<div class="form-group col-xl-9">
						    <div class="g-recaptcha" data-sitekey="6Le5nmwUAAAAAHA-ICndOYSDMu3Bpbf1_QCuXxJm"></div>
				    	</div>
				    </div>


				    <div class="button_wrapper">
				    	<button type="submit" class="btn btn_accept">Submit</button>

				  		<button type="submit" class="btn btn_cancel btn_next">Cancel</button>
				    </div>

				</form>
			</div>
			<!-- end contact_form -->
			
		</div>
	</section>
	<!-- end main_wrapper -->














	<?php
		 include 'news_promotion.php';
		 include 'footer.php';
	?>
