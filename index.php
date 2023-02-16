<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MERAZ KHAN</title>
        <link rel="shortcut icon" href="images/demo/logos/Black Minimalist Initial Font M Logo.png" type="image/x-icon">
        <!-- font awesome -->
        <link rel="stylesheet" href="css/animate.css">
		<link href="https://fonts.googleapis.com/css2?family=Mada:wght@200;300&family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
		<!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
		<!-- SWIPER CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script>
			$( document ).ready(function() {
				console.log( "document loaded" );
			});
		 
			$( window ).on( "load", function() {
				console.log( "window loaded" );
			});
		</script>
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        
		<style>
			.Source-font{
				font-family: 'Source Sans Pro', sans-serif;
			}
			[x-cloak]{
				display:none;
			}
		</style>
		
		<script defer src="js/alpine.min.js"></script>
    </head>
    <body >
        <header>
			<!-- Nav -->
			<?php include('main-nav.php');?>
        </header>
        <main class="overflow-hidden">
			<!-- home-slider part -->
			<?php include('home-slider.php');?>
			<!-- featured-ads part -->
			<?php include('advance-search.php');?>
			<!-- featured-ads part -->
			<?php include('featured-ads.php');?>
			<!-- our-services part -->
			<?php include('our-services.php');?>
			<!-- Testimonials part -->
			<?php include('testimonials.php');?>
			<!-- our-clients part -->
			<?php include('expert-reviews.php');?>
			<!-- our-clients part -->
			<?php include('our-clients.php');?>
			<!-- car-inspection part -->
			<?php include('car-inspection.php');?>
			<!-- car-sale part -->
			<?php include('car-sale.php');?>
			

		</main>
		<!-- footer part -->
       
			<?php include('footer.php'); ?>
        
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
		 <script>
		  var swiper = new Swiper("#Swiper-testimonials", {
			slidesPerView: 3,
			spaceBetween: 30,
			loop: true,
			autoplay: {
			  delay: 1000,
			  autoHeight: true,
			  disableOnInteraction: false,
			},
			breakpoints: {
			  500: {
				slidesPerView: 1,
			  },
			  768: {
				slidesPerView: 2,
			  },
			  1024: {
				slidesPerView: 3,
			  },
			},
		  });
		</script>
		 <script>
		  var swiper = new Swiper("#Swiper-our-clients", {
			slidesPerView: 5,
			loop: true,
			autoplay: {
			  delay: 1000,
			  autoHeight: true,
			  disableOnInteraction: false,
			},
			breakpoints: {
			  500: {
				slidesPerView: 2,
			  },
			  640: {
				slidesPerView: 4,
			  },
			  768: {
				slidesPerView: 4,
			  },
			  1024: {
				slidesPerView: 5,
			  },
			},
		  });
		</script>
		
		<script>
		var wow = new WOW(
			  {
				boxClass:     'wow',
				animateClass: 'animated',
				offset:       0,
				mobile:       true,
				live:         true,
				callback:     function(box) {
					
				},
				scrollContainer: null,
				resetAnimation: true, 
			  }
			);
			wow.init();
		</script>
			<script>
				$(document).ready(function() {
					$('.js-example-basic-single').select2();
				});
			</script>
			<script>
				window.onscroll = function(){
					var scrollValue = window.pageYOffset;
					//alert(scrollValue);
					
					if(scrollValue >800){
						document.querySelector('#upper').classList.remove('opacity-0');
						document.querySelector('#upper').classList.add('opacity-100');
					}else{
						document.querySelector('#upper').classList.remove('opacity-100');
						document.querySelector('#upper').classList.add('opacity-0');
					}
					
				}
				document.querySelector('#upper').addEventListener("click",function(){
					window.scrollTo(0,0);
				});
			</script>
			<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
			<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
    </body>
</html>