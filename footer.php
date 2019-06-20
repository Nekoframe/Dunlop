<footer>
	<section class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 d-none d-xl-block">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">Our Company</a></li>
						<li><a href="#!">Products</a></li>
						<ul class="sub">
							<li><a class="sub-item" href="dunlop_product_listing.php">&#8226; Dunlop Adhesives</a></li>
							<li><a class="sub-item" href="dat_product_listing.php">&#8226; DAT Adhesives &amp; Sealants</a></li>
						</ul>
					</ul>
				</div>
				<div class="col-lg-4 d-none d-xl-block">
					<ul>
						<li><a href="workwithus.php">Work With Us</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-lg-4">
					<p>Tel. <a href="tel:+0.8456661"><span>038 456 661</span></a></p>
					<p>Email : <a href="mailto:info@dunlopadhesives.com">info@dunlopadhesives.com</p>

					<div class="social">
						<a href="https://web.facebook.com/DunlopAdhesivesThailand/?_rdc=1&_rdr" style="margin-right: 0.5rem;" target="blank"><i class="fab fa-facebook-square"></i></a>
						<a href="#!" style="margin-right: 0.5rem;"><i class="fab fa-linkedin"></i></a>
						<!-- <a href="#!"><i class="fab fa-twitter-square"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer_buttom">
		<div class="container">
			<p>Copyright DUNLOP ADHESIVES (THAILAND) CO., LTD. © 2018. All Rights Reserved.</p>
		</div>
	</section>
</footer>  






<!-- Bootstrap 4 Full page slidshow -->
<script type="text/javascript">
	var $item = $('#home_slideshow .carousel-item'); 
	var $wHeight = $(window).height();
	$item.eq(0).addClass('active');
	$item.height($wHeight); 
	$item.addClass('full-screen');

	$('#home_slideshow.carousel img').each(function() {
	  var $src = $(this).attr('src');
	  var $color = $(this).attr('data-color');
	  $(this).parent().css({
	    'background-image' : 'url(' + $src + ')',
	    'background-color' : $color
	  });
	  $(this).remove();
	});

	$(window).on('resize', function (){
	  $wHeight = $(window).height();
	  $item.height($wHeight);
	});

	$('#home_slideshow.carousel').carousel({
	  interval: 6000,
	  // interval: 0,
	  pause: "false"
	});
</script>


<!-- Nav hover -->
<!-- <script type="text/javascript">
	$('body').on('mouseenter mouseleave','.dropdown',function(e){
		var _d=$(e.target).closest('.dropdown');
		_d.addClass('show');
		setTimeout(function(){
		_d[_d.is(':hover')?'addClass':'removeClass']('show');
		$('[data-toggle="dropdown"]', _d).attr('aria-expanded',_d.is(':hover'));
		},300);
	});
</script> -->


<!-- Avoid dropdown menu close on click inside -->
<script type="text/javascript">
	$('.dropdown-menu.mega-dropdown-menu').on('click', function(event){
	    // The event won't be propagated up to the document NODE and 
	    // therefore delegated events won't be fired
	    event.stopPropagation();
	});
</script>


<!-- Sub menu -->
<script type="text/javascript">
	// Dunlop
	$('#btn_dunlop_sub_1').on('click', function(e){
		$('#btn_dunlop_sub_1').toggleClass('active');
		$('#dunlop_sub_1').toggleClass('active');
	});

	$('#btn_dunlop_sub_2').on('click', function(e){
		$('#btn_dunlop_sub_2').toggleClass('active');
		$('#dunlop_sub_2').toggleClass('active');
	});

	// DAT
	$('#btn_dat_sub_1').on('click', function(e){
		$('#btn_dat_sub_1').toggleClass('active');
		$('#dat_sub_1').toggleClass('active');
	});

	$('#btn_dat_sub_2').on('click', function(e){
		$('#btn_dat_sub_2').toggleClass('active');
		$('#dat_sub_2').toggleClass('active');
	});
</script>





<!-- Mobile Sub menu -->
<script type="text/javascript">
	// Our Company
	$('#btn_company_menu').on('click', function(e){
		$('#work_menu').removeClass('active');
		$('#contact_menu').removeClass('active');
		$('#company_menu').toggleClass('active');
	});

	// Products
	$('#navbarDropdownMenuLink').on('click', function(e){
		$('#company_menu').removeClass('active');
		$('#contact_menu').removeClass('active');
		$('#work_menu').removeClass('active');
	});
	

	// Work woth us
	$('#btn_work_menu').on('click', function(e){
		$('#company_menu').removeClass('active');
		$('#contact_menu').removeClass('active');
		$('#work_menu').toggleClass('active');
	});

	// Our Company
	$('#btn_contact_menu').on('click', function(e){
		$('#company_menu').removeClass('active');
		$('#work_menu').removeClass('active');
		$('#contact_menu').toggleClass('active');
	});
</script>



<!-- DAT aside Sub menu -->
<script type="text/javascript">

  	function dropDown(a) {
	    var li = a.parentElement,
	    	a = li.getElementsByTagName('a')[0],
	    	ul = a.parentElement.parentElement,
	        submenu = li.getElementsByTagName('ul')[0];

	        $('.third_submenu').css('display','none');


	    


	    if ($(ul).hasClass('second_submenu')) {
		    $(a).removeClass('active');
		}

		else{
			$(a).toggleClass('active');
		}


	    submenu.style.display = submenu.style.display == "block" ? "none" : "block";


	    $(".third_submenu").mouseleave(function(){
		    $('.third_submenu').css('display','none');
		});


	    
	    return false;
	}
	

</script>



<!-- News & Promotion Carousel -->
<script type="text/javascript">
	$(document).ready(function(){
	  $("#news_carousel").owlCarousel({
	  	items:2,
	  	responsive : {
		    // breakpoint from 0 up
		    0 : {
		    	items:1
		    },
		    // breakpoint from 480 up
		    480 : {
		        items:1
		    },
		    // breakpoint from 768 up
		    768 : {
		        items:1
		    },
		    // breakpoint from 1366 up
		    1366 : {
		        items:2
		    }
		}

	  });
	});
</script>


<!-- Related Product -->
<script type="text/javascript">
	$(document).ready(function(){
	  $("#related_product").owlCarousel({
	  	items:2,
	  	margin:80,

	  	responsive : {
		    // breakpoint from 0 up
		    0 : {
		    	items:1,
		    	dots:true
		    },
		    // breakpoint from 480 up
		    480 : {
		        items:1,
		        dots:true
		    },
		    // breakpoint from 768 up
		    768 : {
		        items:2,
		        dots:true
		    },

		    // breakpoint from 1366 up
		    1366 : {
		        items:2,
		        nav:true,
		        dots: false
		    }
		}

	  });
	});
</script>


<!-- Mobile Hamburger Icon -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
			$(this).toggleClass('open');
		});
	});
</script>


<!-- Fixed Header -->
<script>
$(window).scroll(function() {

    if ($(this).scrollTop() <= 50) { // this refers to window
        // $('.logo_wrapper').removeClass('logo_active');
        $('.dunlop_navbar').removeClass('sticky');
        $('.top_section').removeClass('sticky');
    }

    if ($(this).scrollTop() > 50) { // this refers to window
        // $('.logo_wrapper').addClass('logo_active');
        $('.dunlop_navbar').addClass('sticky');
        $('.top_section').addClass('sticky');
    }
});
</script>




<script>

function initialize() {
    var latlng = new google.maps.LatLng(18.520266,73.856406);
    var latlng2 = new google.maps.LatLng(28.579943,77.330006);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var myOptions2 =  {
        zoom: 15,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };

    var map = new google.maps.Map(document.getElementById("map"), myOptions);
    
    var map2 = new google.maps.Map(document.getElementById("map2"), myOptions2);

    var myMarker = new google.maps.Marker(
    {
        position: latlng,
        map: map,
        title:"Pune"
   });

    var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,
        title:"Noida"
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx-LmkPmJJTo7bidRAT3wIk4u4XaHTh6k&callback=initMap">
</script>




  </body>
</html>
