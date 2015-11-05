<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package zerif

 */

?>

</div><!-- .site-content -->

<footer>
	<!-- FOOTER -->
		<div class="footer-grey-bg title-lines-container">
			<div class="container">
				<div class="row">
			<!-- LOGO  -->	
					<div class="col-md-8">
						<div class="logo-container">
						  <a href="index.html">
							  <div class="logo">
								  <img src="logo-sharima.png" class="logo-img" alt="">
							  </div>
						  </a>
						</div>
						<div class="social-icons-container-footer">
							<ul class="social-icons-ul">
								<li>
									<a href="http://themeforest.net/item/amilia-responsive-multipurpose-template/10067059?ref=abcgomel">
										<span aria-hidden="true" class="social_facebook main-menu-icon"></span>
									</a>
								</li>	
								<li>	
									<a href="http://themeforest.net/item/amilia-responsive-multipurpose-template/10067059?ref=abcgomel">
										<span aria-hidden="true" class="social_twitter main-menu-icon"></span>
									</a>
								</li>	
								<li>	
									<a href="http://themeforest.net/item/amilia-responsive-multipurpose-template/10067059?ref=abcgomel">
										<span aria-hidden="true" class="social_linkedin main-menu-icon"></span>
									</a>
								</li>	
								<li>	
									<a href="http://themeforest.net/item/amilia-responsive-multipurpose-template/10067059?ref=abcgomel">
										<span aria-hidden="true" class="social_skype main-menu-icon"></span>
									</a>
								</li>	
							</ul>		
						</div>						
					</div>
			<!-- LATEST POSTS --><!-- 
					<div class="col-md-4">
						<h3 class="title-block footer-block"></h3>
						<div class="lite-grey-bg full-col-container">
							<ul class="latest-post-footer clearfix">
								<li class="latest-post-footer-item">
									<a href="blog-single.html">
										<div class="post-icon-footer">
											<span aria-hidden="true" class="icon_image main-menu-icon"></span>
										</div>
										<div class="post-text-footer">
											<h4 class="title-post-footer">Donec id elit</h4>
											<h4 class="date-post-footer">July 10, 2015</h4>
										</div>
									</a>			
								</li>
								<li class="latest-post-footer-item">
									<a href="blog-single.html">
										<div class="post-icon-footer">
											<span aria-hidden="true" class="icon_document_alt main-menu-icon"></span>
										</div>
										<div class="post-text-footer">
											<h4 class="title-post-footer">Donec id elit</h4>
											<h4 class="date-post-footer">July 10, 2015</h4>
										</div>
									</a>	
								</li>
								<li class="latest-post-footer-item">
									<a href="blog-single.html">
										<div class="post-icon-footer">
											<span aria-hidden="true" class="icon_film main-menu-icon"></span>
										</div>
										<div class="post-text-footer">
											<h4 class="title-post-footer">Donec id elit</h4>
											<h4 class="date-post-footer">July 10, 2015</h4>
										</div>
									</a>	
								</li>
							</ul>
						</div>					
					</div>	 -->
			<!-- CONTACT INFO -->
					<div class="col-md-4">
				
						<h3 class="title-block title-full-width footer-block title-bg-after">CONTACT INFO</h3>
						<div class="main-color-bg contact-bg-after">
						
								<ul class="contact-list-footer">
									<li class="contact-list-item clearfix">
										<div class="contact-icon-container">
											<span aria-hidden="true" class="icon_pin_alt main-menu-contact-icon"></span>
										</div>
										<div class="contact-text-container">Company, 123 Aolsom, Suite 700, New York</div>
									</li>
									<li class="contact-list-item clearfix">
										<div class="contact-icon-container">
											<span aria-hidden="true" class="icon_phone main-menu-contact-icon"></span>
										</div>	
										<div class="contact-text-container">(123)&nbsp;4560-789, (123)&nbsp;9870-654</div>
									</li>
									<li class="contact-list-item clearfix">
										<div class="contact-icon-container">
											<span aria-hidden="true" class="icon_mail_alt main-menu-contact-icon"></span>
										</div>
										<div class="contact-text-container">	
											<a class="a-mail" href="#">email@felius.com</a>
										</div>	
									</li>
								</ul>
								<div class="mask-main-color-bg"></div> 					
						</div>					
								
					</div> 
				</div>
			</div>
		</div>
		<!-- COPYRIGHT  -->	
		<div class="copyright-container title-lines-container">
			<div class="container">
				<div class="row">	
					<div class="col-md-8">
						<div class="footer-menu-container">
							<nav class="clearfix" id="footer-nav">
								<ul class="footer-menu">
									<li><a href="index.html">HOME</a></li>
									<li><a href="shortcodes.html">FEATURES</a></li>
									<li><a href="portfolio.html">PORTFOLIO</a></li>
									<li><a href="blog-large-images.html">BLOG</a></li>
									<li><a href="contact.html">CONTACT</a></li>
									<li><a href="http://themeforest.net/item/amilia-responsive-multipurpose-template/10067059?ref=abcgomel">PURCHASE</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-copyright-container">
							<div class="mask-footer-copyright-container"></div>
							<div class="footer-copyright-text">
							© Amilia - Build with Passion by <a class="author" href="http://themeforest.net/user/abcgomel/portfolio">AbcGomel</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>				
		</div>
	<!-- COPYRIGHT -->
		<p id="back-top">
			<a href="#top" title="Back to Top"><span></span></a>
		</p>
	</footer>


<?php wp_footer(); ?>


<!-- IMPORTANT SCRIPTS SETTINGS -->
			<script>
	
			//jQuery(document).ready START	------------------------------------------------
			jQuery(document).ready(function() {
			
					//REVOSLIDER SCRIPT-----------------------------------------------------			
					jQuery('.tp-banner').show().revolution(
					{
						dottedOverlay:"none",
						delay:16000,
						startwidth:1170,
						startheight:860,
						hideThumbs:0,
						//hideArrows:100000,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:5,
						
						navigationType:"bullet",
						navigationArrows:"nexttobullets",
						navigationStyle:"preview4",
						
						hideTimerBar:"on",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						swipe_velocity: 0.7,
						swipe_min_touches: 1,
						swipe_max_touches: 1,
						drag_block_vertical: false,
												
												parallax:"mouse",
						parallaxBgFreeze:"on",
						parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
												
						keyboardNavigation:"off",
						
						navigationHAlign:"left",
						navigationVAlign:"bottom",
						navigationHOffset:15,
						navigationVOffset:216,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
						
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						spinner:"spinner4",
						
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",						
												
						hideThumbsOnMobile:"on",
						hideNavDelayOnMobile:1500,						
						hideBulletsOnMobile:"on",
						hideArrowsOnMobile:"on",
						hideThumbsUnderResolution:0,
						//hideArrowsOnMobile:"on",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						videoJsPath:"video/",
						fullScreenOffsetContainer: ""	
					});
					
					// Carousel CLIENTS Items-----------------------------------------------
					$("#owl-clients").owlCarousel({
			 
						  //Set AutoPlay to 3 seconds
						  autoPlay : 5000,
						  items : 5,
						  itemsDesktop : [1000,4], //5 items between 1000px and 901px
						  itemsDesktopSmall : [900,3], // betweem 900px and 601px
						  itemsTablet: [470,1], //2 items between 600 and 0
						  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
						 // itemsDesktop : [1199,4],
						 // itemsDesktopSmall : [991,1],
						 // itemsTablet: [991,1],
						 // itemsMobile : false,
						  
						  //Pagination
							pagination : false,
							paginationNumbers: false,
					 
					  });

				});	//document ready -END
			</script>
			
<script>
	
	$(document).ready(function() {	

				//FLEXSLIDER---------------------------------------------------- 
				function carFlex() {
					$('.carousel-post-style1').flexslider({ });
				};
				
				carFlex();
				
				//FLICKR FEED----------------------------------------------------
				$('#flickrfeed').jflickrfeed({
					limit: 6,
					qstrings: {
						id: '91212552@N07'
					},
					itemTemplate:
					'<li>' +
					'<a class="lightbox" rel="colorbox" href="{{image}}" title="{{title}}">' +
					'<img src="{{image_s}}" alt="{{title}}" />' +
					'</a>' +
					'</li>'
				});
			});	
</script>				

<!-- Pre LOADER -->
<script>
	window.onload = function() {
		document.body.removeChild(document.getElementById('preloader'));
		$('body').removeClass('preloader-overflow');
	}
</script>
<!-- IMPORTANT SCRIPTS SETTINGS -->
			<script>
 
				$(document).ready(function() {	

				//FLEXSLIDER---------------------------------------------------- 
					function carFlex() {
						$('.carousel-post-style1').flexslider({ });
					  };
					  
					carFlex();
				
				//FLICKR FEED----------------------------------------------------
					$('#flickrfeed').jflickrfeed({
						limit: 6,
						qstrings: {
							id: '91212552@N07'
						},
						itemTemplate:
						'<li>' +
							'<a class="lightbox" rel="colorbox" href="{{image}}" title="{{title}}">' +
								'<img src="{{image_s}}" alt="{{title}}" />' +
							'</a>' +
						'</li>'
					});
				});	
			</script>		
<!-- JS end -->	

<div class="switcher"></div>

</body>
</html>	
