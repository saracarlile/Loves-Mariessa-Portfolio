<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>    
       <?php 
       $pageTitle = "Video - Loves, Mariessa";
       $headContent = "Video Loves, Mariessa.  Imaginations SXSW event by ConceptArt.Org, Massive Black, and Loves, Mariessa.  SXSW Interactive 2009";
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
			
			<!-- YOUTUBE BACKGROUND -->
			<!-- Add class '.muted' if you want video to be muted on window load -->
			<div class="youtube-bg" data-property="{videoURL: 'https://www.youtube.com/watch?v=MqIIdqb0kQM'}"></div>
			<!-- /YOUTUBE BACKGROUND -->
		
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
					<button class="sideslide yt-pause">
						<i class="fa fa-pause"></i>
					</button>
					<button class="sideslide yt-play hidden">
						<i class="fa fa-play"></i>
					</button>
					<button class="sideslide yt-mute">
						<i class="fa fa-volume-up"></i>
					</button>
					<button class="sideslide yt-unmute">
						<i class="fa fa-volume-off"></i>
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