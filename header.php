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
								<?php
									$zerif_logo = get_theme_mod('zerif_logo');
									//var_dump($zerif_logo);
									if(isset($zerif_logo) && $zerif_logo != ""):
										echo '<a href="'.esc_url( home_url( '/' ) ).'" class="">';
											echo '<img src="'.$zerif_logo.'" alt="'.get_bloginfo('title').'">';
										echo '</a>';
									else:
										echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';
											if( file_exists(get_stylesheet_directory()."/images/logo.png")):
												echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';									
											else:										
												echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';												
											endif;
										echo '</a>';
									endif;
								?>
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
							<nav class="collapse collapsing navbar-collapse right">
								<ul class="nav navbar-nav">
									<li class="parent">
										<a href="index.html"><span aria-hidden="true" class="icon_house_alt main-menu-icon"></span><div class="main-menu-title">HOME</div></a>
										<ul class="sub">
											<li class="parent">
												<a href="#">Home - Corporate</a>
												<ul class="sub">
													<li><a href="index.html">Corporate 1</a></li>
													<li><a href="index2.html">Corporate 2</a></li>
													<li><a href="index3.html">Corporate 3</a></li>
													<li><a href="index4.html">Corporate 4</a></li>
													<li><a href="index5.html">Corporate 5</a></li>
													<li><a href="index6.html">Corporate 6</a></li>
												</ul>
											</li>
											<li><a href="index-portfolio.html">Home - Portfolio</a></li>
											<li class="parent">
												<a href="#">Home - Blog</a>
												<ul class="sub">
													<li><a href="index-blog.html">Blog Layout 1</a></li>
													<li><a href="index-blog-2.html">Blog Layout 2</a></li>
												</ul>
											</li>
											<li><a href="index-light.html">Home - Light</a></li>
											<li><a href="index-animate.html">Home - Animate</a></li>
											<li><a href="index-video.html">Home - Video</a></li>
											<li><a href="index-full-screen.html">Home - Full Screen</a></li>
											<li><a href="index-one-page.html">Home - One Page</a></li>
											<li><a href="index-no-slider.html">No slider</a></li>
											<li class="parent">
												<a href="#">Sliders</a>
												<ul class="sub">
													<li><a href="index.html">Revolution Slider</a></li>
													<li><a href="index-flex-slider.html">Flexslider</a></li>
												</ul>
											</li>
										</ul>
									</li>

									<li class="parent megamenu">
										<a href="shortcodes.html"><span aria-hidden="true" class="icon_lightbulb_alt main-menu-icon"></span><div class="main-menu-title">FEATURES</div></a>
										<ul class="sub">
											<li>
												
												<div class="menu-sub-container">
													<div class="box col-md-3 closed">
														<h5 class="title">HEADERS</h5>
														<ul>
															<li><a href="index-header-1.html">Header 1</a></li>
															<li><a href="index-header-2.html">Header 2</a></li>
															<li><a href="index-header-3.html">Header 3</a></li>
															<li><a href="index-header-4.html">Header 4</a></li>
															<li><a href="index-header-5.html">Header 5</a></li>
															<li><a href="index-header-below.html">Header Below</a></li>
															<li><a href="index-header-always-sticky.html">Header Always Sticky</a></li>
															<li><a href="index-header-not-sticky.html">Header Not Sticky</a></li>
														</ul>
													</div>
													
													<div class="box col-md-3 closed">
														<h5 class="title">MAIN FEATURES</h5>
														<ul>
															<li><a href="shortcodes.html"><div class="menu-item-highlight">Shortcodes</div></a></li>
															<li><a href="typography.html">Typography</a></li>
															<li><a href="grid-system.html">Grid System</a></li>
															<li><a href="icons.html">Icons</a></li>
															<li><a href="animations.html">Animations</a></li>
															<li><a href="featured-boxes.html">Featured Boxes</a></li>
															<li><a href="layout-full-width.html">Layout Full width</a></li>
															<li><a href="layout-left-sidebar.html">Layout Left sidebar</a></li>
															<li><a href="layout-right-sidebar.html">Layout Right sidebar</a></li>
														</ul>
													</div>
													
													<div class="box col-md-3 closed">
														<h5 class="title">PAGES</h5>
														<ul>
															<li><a href="about-us.html">About Us</a></li>
															<li><a href="about-us-2.html">About Us 2</a></li>
															<li><a href="about-me.html">About Me</a></li>
															<li><a href="team.html">Team</a></li>
															<li><a href="services.html">Services</a></li>
															<li><a href="faq.html">FAQ</a></li>
															<li><a href="coming-soon.html">Coming soon</a></li>
															<li><a href="maintenance-page.html">Maintenance Page</a></li>
															<li><a href="404.html">404 Error</a></li>
														</ul>
													</div>
													
													<div class="box col-md-3 closed">
														<h5 class="title">FOOTERS</h5>
														<ul>
															<li><a href="index-footer-1.html#footer-demo">Footer 1</a></li>
															<li><a href="index-footer-2.html#footer-demo">Footer 2</a></li>
															<li><a href="index-footer-3.html#footer-demo">Footer 3</a></li>
															<li><a href="index-footer-4.html#footer-demo">Footer 4</a></li>
															<li><a href="index-footer-animate.html#footer-demo">Footer Animate</a></li>
														</ul>
													</div>

												</div>

											</li>
										</ul>
									</li>					
									
									<li class="parent">
										<a href="portfolio-2-col.html"><span aria-hidden="true" class="icon_toolbox_alt main-menu-icon"></span><div class="main-menu-title">PORTFOLIO</div></a>
										<ul class="sub">
											<li><a href="portfolio-2-col.html">2 Columns</a></li>
											<li><a href="portfolio-3-col.html">3 Columns</a></li>
											<li><a href="portfolio-4-col.html">4 Columns</a></li>
											<li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
											<li><a href="portfolio-timeline.html">Portfolio Timeline</a></li>
											<li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
											<li><a href="portfolio-no-filter.html">Portfolio No Filter</a></li>
											<li class="parent">
												<a href="#">Portfolio Single</a>
												<ul class="sub">
													<li><a href="portfolio-single-default.html">Default</a></li>
													<li><a href="portfolio-single-slider.html">Slider Gallery</a></li>
												</ul>
											</li>
										</ul>
									</li>					
									
									<li class="parent current">
										<a href="blog-large-image.html"><span aria-hidden="true" class="icon_pens main-menu-icon"></span><div class="main-menu-title">BLOG</div></a>
										<ul class="sub">
											<li><a href="blog-masonry.html">Blog Masonry</a></li>
											<li><a href="blog-masonry-ajax.html">Blog Masonry Ajax</a></li>
											<li><a href="blog-timeline.html">Blog Timeline</a></li>
											<li><a href="blog-full-width.html">Blog Full Width</a></li>
											<li><a href="blog-large-image.html">Blog Large Image</a></li>
											<li><a href="blog-small-image.html">Blog Small Image</a></li>
											<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
											<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
											<li class="parent">
												<a class="current" href="#">Blog Single</a>
												<ul class="sub">
													<li><a class="current" href="blog-single.html">Right Sidebar</a></li>
													<li><a href="blog-single-left.html">Left Sidebar</a></li>
												</ul>
											</li>
										</ul>
									</li>	
									
									<li id="menu-contact-info-big" class="parent megamenu">
										<a href="contact.html"><span aria-hidden="true" class="icon_mail_alt main-menu-icon"></span><div class="main-menu-title">CONTACT</div></a>
										<ul class="sub">
											<li>
												<div class="menu-sub-container">

													<div class="box col-md-3 menu-demo-info closed">
														<h5 class="title">CONTACT PAGES</h5>
														<ul>
															<li><a href="contact.html">Contact Version 1</a></li>
															<li><a href="contact2.html">Contact Version 2</a></li>
														</ul>
													</div>
													
													<div class="col-md-3 menu-contact-info">
														<!-- <h5 class="title">CONTACT INFO</h5> -->
														<ul class="contact-list">
															<li class="contact-loc clearfix">
																<div class="loc-icon-container">
																	<span aria-hidden="true" class="icon_pin_alt main-menu-contact-icon"></span>
																</div>
																<div class="menu-contact-text-container">Company, 123 Aolsom, Suite 700, New York</div>
															</li>
															<li class="contact-phone clearfix">
																<div class="loc-icon-container">
																	<span aria-hidden="true" class="icon_phone main-menu-contact-icon"></span>
																</div>	
																<div class="menu-contact-text-container">(123)&nbsp;4560-789, (123)&nbsp;9870-654</div>
															</li>
															<li class="contact-mail clearfix" >
																<div class="loc-icon-container">
																	<span aria-hidden="true" class="icon_mail_alt main-menu-contact-icon"></span>
																</div>
																<div class="menu-contact-text-container">							
																	<a class="a-mail" href="#">email@felius.com</a>
																</div>	
															</li>
														</ul>
													</div>
													
													
													<div class="col-md-6 menu-map-container hide-respons">
														<img src="images/map.jpg" alt="map">	
													</div>
												</div>
											</li>
										</ul>
									</li>
									<!-- SEARCH MOBILE READ DOCUMENTATION-->	
									<li class="hide-desck">
										<form class="form-search-respons" id="searchForm-respons" action="page-search-results.html" method="get">
											<input class="sb-search-input-respons" placeholder="SEARCH HERE..." type="text" value="" name="q" id="a">
											<input class="sb-search-submit-respons" type="submit" value="SEARCH" >
										</form>
									</li>
									
								</ul>
								<!-- SEARCH READ DOCUMENTATION -->
								<div id="sb-search" class="search sb-search right hide-respons">
									
									<form class="form-search" id="searchForm" action="page-search-results.html" method="get">
										<input class="sb-search-input" placeholder="SEARCH HERE..." type="text" value="" name="q" id="q">
										<input class="sb-search-submit" type="submit" value="SEARCH" >
										<span class="sb-icon-search"><span aria-hidden="true" class="icon_search main-menu-icon"></span></span>
									</form>
									
								</div>	  
								
							</nav>

						</div>
					</div><!-- main-menu -->

				</div><!-- container -->
				
			</div><!--main-menu-container -->




		</div><!-- header-wrapper -->
	</header><!-- header -->
