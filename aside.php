<aside>
	<ul>


		<!-- About us page -->
		<?php 

			if($page == 'about') {

		?>

		<li>
			<a href="about.php" <?php if($subpage == 'about') { echo ' class="active"';} ?>>About Us<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="ourmission.php" <?php if($subpage == 'mission') { echo ' class="active"';} ?>>Our Mission<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="healthandsafety.php" <?php if($subpage == 'health') { echo ' class="active"';} ?>>Health and Safety<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="responsibility.php" <?php if($subpage == 'responsibility') { echo ' class="active"';} ?>>Environmental <br>Responsibility<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="ourbrand.php" <?php if($subpage == 'brand') { echo ' class="active"';} ?>><div class="aside_icon"><i class="fas fa-chevron-right"></i></div>Our Brand</a>
		</li>


		<?php 

			}

		?>


		<!-- Work with us page -->
		<?php 

			if($page == 'workwithus') {

		?>


		<li>
			<a href="workwithus.php" <?php if($subpage == 'workwithus') { echo ' class="active"';} ?>>Work with us<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="research.php" <?php if($subpage == 'research') { echo ' class="active"';} ?>>Research and <br>Development<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="quality.php" <?php if($subpage == 'quality') { echo ' class="active"';} ?>>Quality Control<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="register.php" <?php if($subpage == 'register') { echo ' class="active"';} ?>>Register to <br>Work with us<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>

		<?php 

			}

		?>



		<!-- Contact us -->
		<?php 

			if($page == 'contact') {

		?>


		<li>
			<a href="contact.php" <?php if($subpage == 'contact') { echo ' class="active"';} ?>>Contact Us<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>
		<li>
			<a href="privacy.php" <?php if($subpage == 'privacy') { echo ' class="active"';} ?>>Privacy Policy<div class="aside_icon"><i class="fas fa-chevron-right"></i></div></a>
		</li>

		<?php 

			}

		?>







	</ul>
</aside>