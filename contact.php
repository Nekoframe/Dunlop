<?php 
  $page = 'contact';
  $title = 'Dunlop - Contact';
  include 'meta.php';
?>

  
<body onload="initialize()">

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
			$subpage = 'contact';
			include('aside.php'); 
		?>

		<div class="main_area">
			<div class="dunlop_breadcrumb">
				<a href="#!">Home</a>
				<span> / </span>
				<a href="#!" class="active">Contact Us</a>
			</div>

			<content>


				<header>CONTACT US</header>
				<article>
					If you have a question or need more information on any of our products or services, feel free to send us an email or give us a call. We would be happy to hear from you and answer any queries you may have. 
				</article>


				<div class="row">
					<div class="col-xl-6">
						<header class="subheader">Head Office:</header>
						<article>
							<address>Amata Nakorn Industrial Estate<br>
		700/242   M00 1 , Bangkao, Chonburi 20160<br>
		Thailand</address>
						</article>
					</div>
				</div>

				<article>
					<div class="phone_detail_wrapper">
						<p>Telephone: <a href="tel:03-846-5661">03-846-5661</a>, <a href="tel:03-846-5662">03-846-5662</a></p>
						<p>Fax: <a href="tel:03-846-5663">03-846-5663</a></p>
						<p>Email: <a href="mailto:dalelamb@dunlopadhesives.com">dalelamb@dunlopadhesives.com</a></p>
					</div>
				</article>


				<div class="map_wrapper">
					<div id="map"></div>
				</div>


				<div class="row">
					<div class="col-xl-6">
						<header class="subheader">Sales Office:</header>
						<article>
							<address>Bangna Tower Building A<br>
		2<span>nd</span> Floor Room 207<br>
		40/14 Moo 14, Bangna-Trad Road K.M. 6.5<br>
		Bangkaew, Bangplee, Samutprakarn 10540<br>
	Thailand</address>
						</article>
					</div>
				</div>

				<div class="map_wrapper">
					<div id="map2"></div>
				</div>
			</content>

			<h1><strong>Enquiry Form</strong></h1>

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
						    <label for="email">Email*</label>
				    		<input type="email" class="form-control" id="email" placeholder=" ">
				    	</div>
					</div>

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
						<div class="form-group col-xl-9">
						    <label for="enquiry">Enquiry*</label>
				    		<textarea class="form-control" id="enquiry" rows="5">
				    			
				    		</textarea>
				    	</div>
				    </div>


			    	<div class="form-check white">
					    <input type="checkbox" class="form-check-input" id="formcheck">
					    <label class="form-check-label" for="formcheck">Yes, I accept the Term of Use and Privacy Policy . *</label>
					</div>

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
