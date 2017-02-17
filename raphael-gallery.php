<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>    
       <?php 
       $pageTitle = "Gallery - Loves, Mariessa";
       $headContent = "Gallery. Fashion portfolio photos. Loves, Mariessa. Photos Raphael Umschied.";
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
						<a href="/img/raphael/raphael-one.jpg" data-background="/img/raphael/raphael-one-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with Raphael Umschied"></a>
					</div>
					<div class="grid-item">
						<a href="/img/raphael/raphael-two.jpg" data-background="/img/raphael/raphael-two-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with Raphael Umschied"></a>
					</div>
					<div class="grid-item">
						<a href="/img/raphael/raphael-three.jpg" data-background="/img/raphael/raphael-three-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with Raphael Umschied"></a>
					</div>
					<div class="grid-item">
						<a href="/img/raphael/raphael-four.jpg" data-background="/img/raphael/raphael-four-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with Raphael Umschied"></a>
					</div>
					<div class="grid-item">
						<a href="/img/raphael/raphael-five.jpg" data-background="/img/raphael/raphael-five-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with Raphael Umschied"></a>
					</div>
					<div class="grid-item">
						<a href="/img/raphael/raphael-six.jpg" data-background="/img/raphael/raphael-six-resize.jpg" data-rel="lightcase:gal" title="Photoshoot with Raphael Umschied"></a>
					</div>
				</div>
			</div>		
			<!-- /GALLERY -->
		
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer-gallery.php'); ?>
	</body>
</html>