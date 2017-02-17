<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>    
       <?php 
       $pageTitle = "Loves, Mariessa - Custom Fashion Designs";
       $headContent = "Fashion portfolio photos. Custom fashion designs. Loves, Mariessa ";
	   require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); 
       ?>
	</head>

	<body>
		<!-- MAIN_WRAPPER -->
		<div class="main-wrapper animsition">
			<!-- HEADER -->
			<header id="header" class="fixed">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/navigation.php'); ?>
			</header>
			<!-- /HEADER -->

			<!-- HORIZONTAL GALLERY -->
			<!-- For mousewheel and keyboard navigation use classes .mousewheel and .keyboard -->
			<!-- For slide sizes use classes .one-fourth .one-third .one-half .two-thirds .three-fourths (without class it's fullwidth) -->
			<!-- For centered mode use class .center -->
			<div class="horizontal-slider swiper-container mousewheel keyboard center" data-autoplay="false" data-interval="3000">
				<div class="swiper-wrapper">
					
					<div class="swiper-slide two-thirds">
						<div data-background="/img/studio/776180172_ekYvR-XL.jpg">
							<!-- <a href="http://placehold.it/1200x900" class="expand" data-rel="lightcase:gallery" title="Like the legend of the Phoenix">-->
								<a href="/img/studio/776180172_ekYvR-XL.jpg" class="expand" data-rel="lightcase:gallery" title="photo by Trevor Ray">
								<i class="fa fa-expand"></i>
							</a>
							<div class="title">
								<a href="gallery-justified-fullwidth.html" class="link">Loves, Mariessa Custom Fashion Design</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide one-third">
						<div data-background="/img/studio/Shannon_scarf-resize.jpg">
						<a href="/img/studio/Shannon_scarf.jpg" class="expand" data-rel="lightcase:gallery" title="photo by Adrian Lin">
						  <!--	<a href="http://placehold.it/800x900" class="expand" data-rel="lightcase:gallery" title="All ends with beginnings" height 700>-->
								<i class="fa fa-expand"></i>
							</a>
							<div class="title">
								<a href="gallery-justified-fullwidth.html" class="link">Loves, Mariessa Custom Fashion Design</a>
							</div>							
						</div>
					</div>
					<div class="swiper-slide one-half">
						<div data-background="/img/studio/zebra-dress-resize.jpg">
						<!--	<a href="http://placehold.it/1000x900" class="expand" data-rel="lightcase:gallery" title="What keeps the planets spinning"> -->
						<a href="/img/studio/zebra-dress.jpg" class="expand" data-rel="lightcase:gallery" title="photo by Trevor Ray">
								<i class="fa fa-expand"></i>
							</a>
							<div class="title">
								<a href="gallery-justified-fullwidth.html" class="link">Loves, Mariessa Custom Fashion Design</a>
							</div>							
						</div>
					</div>
					<div class="swiper-slide one-third">
					  <!--	<div data-background="http://placehold.it/800x900"> -->
					     	<div data-background="/img/studio/raphael-two-resize.jpg">
							<a href="/img/studio/raphael-two.jpg" class="expand" data-rel="lightcase:gallery" title="photo by Raphael Umschied">
								<i class="fa fa-expand"></i>
							</a>
							<div class="title">
								<a href="gallery-justified-fullwidth.html" class="link">Loves, Mariessa Custom Fashion Design</a>
							</div>							
						</div>
					</div>
					<div class="swiper-slide two-thirds">
					<!--	<div data-background="http://placehold.it/1200x900"> -->
					   	<div data-background="/img/studio/black-and-white-dress-resize.jpg">
							<a href="/img/studio/black-and-white-dress.jpg" class="expand" data-rel="lightcase:gallery" title="photo by Trevor Ray">
								<i class="fa fa-expand"></i>
							</a>
							<div class="title">
								<a href="gallery-justified-fullwidth.html" class="link">Loves, Mariessa Custom Fashion Design</a>
							</div>							
						</div>
					</div>
					<div class="swiper-slide one-third">
					<!--	<div data-background="http://placehold.it/800x900"> -->
					 <div data-background="/img/studio/Tiffany-resize.jpg"> 
							<a href="/img/studio/Tiffany.jpg" class="expand" data-rel="lightcase:gallery" title="photo by Adrian Lin">
								<i class="fa fa-expand"></i>
							</a>
							<div class="title">
								<a href="gallery-justified-fullwidth.html" class="link">Loves, Mariessa Custom Fashion Design</a>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<!-- HORIZONTAL GALLERY -->
		
			<!-- FOOTER -->
			<footer id="footer" class="fixed">
				
				<!-- FOOTER LINKS -->
				<div class="footer-links pull-left">
					&copy; <span id="year"></span> Loves, Mariessa |
					<a href="https://www.etsy.com/shop/Lovesmariessa">Etsy</a> |
					<a href="https://www.modelmayhem.com/lovesmariessa">Model Mayhem</a> 
				</div>

				<!-- SLIDE CAPTION -->
				<div class="active-slide-caption"></div>
				
				<!-- CONTROLS -->
				<div class="controls-wrapper">

					<button class="sideslide swiper-prev">
						<i class="fa fa-chevron-left"></i>
					</button>
					<button class="sideslide swiper-play">
						<i class="fa fa-play"></i>
					</button>
					<button class="sideslide swiper-pause">
						<i class="fa fa-pause"></i>
					</button>
					<button class="sideslide swiper-next">
						<i class="fa fa-chevron-right"></i>
					</button>
					<button class="sideslide expand">
						<i class="fa fa-expand"></i>
					</button>

				</div>
				<!-- C/ONTROLS -->

			</footer>
			<!-- /FOOTER -->

		</div>	
		<!-- /MAIN-WRAPPER -->
		
		<!-- js -->
		<script>
         var now = new Date();
         var year = now.getFullYear();
         var yearDisplay = document.getElementById('year');
         yearDisplay.textContent = year;
        </script>
		<script src="/js/lib/jquery.min.js"></script>
		<script src="/js/lib/scripts.js"></script>
		<!-- main js -->
		<script src="/js/main.js"></script>

	</body>
</html>