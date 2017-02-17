<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>    
       <?php 
       $pageTitle = "Gallery - Loves, Mariessa";
       $headContent = "Gallery. Fashion portfolio photos. Loves, Mariessa. Photos SK Images.";
	   require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); 
       ?>
	</head>
	
	<body>
		<!-- MAIN_WRAPPER -->
		<div class="main-wrapper animsition">
			<!-- HEADER -->
			<header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/navigation.php'); ?>
			</header>
			<!-- /HEADER -->

			<!-- GALLERY -->
			<div class="container">
				<div class="grid gallery" data-gutter="5" data-columns="3">

					<div class="grid-item">
						<a href="/img/sk/sk-eight.jpg" data-background="/img/sk/sk-eight-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with SK Images"></a>
					</div>
					<div class="grid-item">
						<a href="/img/sk/sk-five.jpg" data-background="/img/sk/sk-five-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with SK Images"></a>
					</div>
					<div class="grid-item">
						<a href="/img/sk/sk-four.jpg" data-background="/img/sk/sk-four-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with SK Images"></a>
					</div>
					<div class="grid-item">
						<a href="/img/sk/sk-one.jpg" data-background="/img/sk/sk-one-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with SK Images"></a>
					</div>
					<div class="grid-item">
						<a href="/img/sk/sk-ten.jpg" data-background="/img/sk/sk-ten-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with SK Images"></a>
					</div>
					<div class="grid-item">
						<a href="/img/sk/sk-three.jpg" data-background="/img/sk/sk-three-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with SK Images"></a>
					</div>
				</div>
			</div>		
			<!-- /GALLERY -->
		
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer-gallery.php'); ?>
	</body>
</html>