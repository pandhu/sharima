<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package zerif

 */

?>
<!DOCTYPE html>
<!--

	Theme Name: AMILIA
	Description: HTML/CSS 
	Author: Abcgomel 
	Version: 1.0
	Designed & Coded by Abcgomel
	
-->
<!--[if lt IE 7 ]> <html  class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html  class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html  class="ie8"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<![endif]-->
		<meta name="robots" content="index, follow" > 
		<meta name="keywords" content="HTML5 Template" > 
		<meta name="description" content="Amilia - Responsive HTML5 Template" > 
		<meta name="author" content="abcgomel">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="favicon.ico">
		
		
		<!-- CSS begin -->

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!--GOOGLE FONT-->		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400' rel='stylesheet' type='text/css'>

		<!-- IE warning CSS -->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->
		
		<!--Icons ELEGANT FONT & FONT AWESOME-->		
		<link rel="stylesheet" href="css/icons-fonts.css" >		
		<!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->

		<!-- Magnific popup  in style.css-->	

		<!-- Owl Carousel Assets in style.css -->

		<!-- FLEXSLIDER FOR POSTS	-->		
		<link rel="stylesheet" href="css/flexslider-for-posts.css" >

		<!--CSS theme-->		
		<link rel="stylesheet" href="css/style.css" >
		
		<!--STILE SWITCHER in style.css-->	
		<link rel="stylesheet" href="css/layout/wide.css" id="layout">
		<link rel="stylesheet" href="css/colors/yellow.css" id="colors">		

		<!-- ANIMATE -->
		<link rel='stylesheet' href="css/animate.min.css">

		<!-- CSS end -->

		<!-- JS begin some js files in bottom of the file-->

		<!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		  <![endif]-->
		  <?php wp_head(); ?>
		</head>
		<body class="fixed-header preloader-overflow">

			<!-- Pre LOADER -->		
			<div id="preloader"  class="se-pre-con">
				<div class="preloader-container">

					<div id="fountainG">
						<div id="fountainG_1" class="fountainG">
						</div>
						<div id="fountainG_2" class="fountainG">
						</div>
						<div id="fountainG_3" class="fountainG">
						</div>
					</div>

				</div>	
			</div>

			<div id="wrap" class="boxed ">
				<div class="grey-bg "> <!-- Grey bg  -->	

	<!--[if lte IE 7]>
	<div id="ie-container">
		<div id="ie-cont-close">
			<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
		</div>
		<div id="ie-cont-content" >
			<div id="ie-cont-warning">
				<img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
			</div>
			<div id="ie-cont-text" >
				<div id="ie-text-bold">
					You are using an outdated browser
				</div>
				<div id="ie-text">
					For a better experience using this site, please upgrade to a modern web browser.
				</div>
			</div>
			<div id="ie-cont-brows" >
				<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
				<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
				<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
				<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
			</div>
		</div>
	</div>
	<![endif]-->
	
	<!-- HEADER 1 -->
	<header id="nav" class="header header-1">
		<div  class="header-wrapper">
			<div class="container">

				<div class="logo-row"> 
					<!-- LOGO --> 
					<div class="logo-container">
						<a href="index.html">
							<div class="logo">
								<img src="images/logo.png" class="logo-img" alt="Logo">
							</div>
						</a>
					</div>
					<!-- BUTTON --> 
					<div class="menu-btn-respons-container">
						<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".main-menu .navbar-collapse">
							<span class="text">MENU</span>
							<span aria-hidden="true" class="icon_menu main-menu-icon"></span>
						</button>
					</div> 

				</div>

			</div><!-- END CONTAINER -->

			<div class="main-menu-container">

				<div class="container">	
					<!-- MAIN MENU -->
					<div class="main-menu">
						<div class="navbar navbar-default" role="navigation">
							<!-- MAIN MENU LIST-->
							<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'zerif_wp_page_menu')); ?>
						</div>
					</div><!-- main-menu -->

				</div><!-- container -->

			</div><!--main-menu-container -->



		</div><!-- header-wrapper -->
	</header><!-- header -->
