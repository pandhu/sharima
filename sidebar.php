<?php

/**

 * The Sidebar containing the main widget areas.

 *

 * @package zerif

 */

?>
		<div class="col-md-3">
					<!-- CATEGORIES -->	
					<div class="title-lines-sidebar m-bot-30">
						<div class="title-block">
							CATEGORIES
						</div>
					</div>	
					<ul class="nav bs-sidenav blog-categories m-bot-30">
						<li class="current"><a href="#accordions"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>Design</a></li>
						<li><a href="#toggles"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>Photo</a></li>
						<li><a href="#tabs"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>Video</a></li>
						<li><a href="#buttons"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>Buttons</a></li>
						<li><a href="#labels"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>Lifestyle</a></li>
						<li><a href="#alerts"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>Technology</a></li>
					</ul>

					<!-- TABS  -->	
					<div class="tabs custom-tabs m-bot-30">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab1" data-toggle="tab">POPULAR</a>
							</li>
							<li>
								<a href="#tab2" data-toggle="tab">RECENT</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="tab1" class="tab-pane tab-pop-cat-container active">
								<ul class="latest-post-container">
									<li class="latest-post-sidebar clearfix">
										<div class="lp-img-cont left">
											<a href=""><img src="images/content/blog-sqr-1-popular.jpg" alt="project"></a>
										</div>
										<div class="lp-title-cont left">
											<p class="latest-post-sidebar-title"><a class="a-invert" href="#">LOREM IPSUM</a></p>
											<p class="latest-post-sidebar-date">JUL 15, 2015</p>
											<p class="latest-post-sidebar-comm">15 comments</p>
										</div>	
									</li>
									<li class="latest-post-sidebar clearfix">
										<div class="lp-img-cont left">
											<a href=""><img src="images/content/blog-sqr-2-popular.jpg" alt="project"></a>
										</div>
										<div class="lp-title-cont left">
											<p class="latest-post-sidebar-title"><a class="a-invert" href="#">CRAS TINCID</a></p>
											<p class="latest-post-sidebar-date">OCT 10, 2015</p>
											<p class="latest-post-sidebar-comm">12 comments</p>
										</div>	
									</li>
									<li class="latest-post-sidebar clearfix">
										<div class="lp-img-cont left">
											<a href="#"><img src="images/content/blog-sqr-3-popular.jpg" alt="project"></a>
										</div>
										<div class="lp-title-cont left">
											<p class="latest-post-sidebar-title"><a class="a-invert" href="#">AMET MAURIS</a></p>
											<p class="latest-post-sidebar-date">DEC 14, 2015</p>
											<p class="latest-post-sidebar-comm">10 comments</p>
										</div>
									</li>
								</ul>
							</div>
							<div id="tab2" class="tab-pane tab-pop-cat-container">
								<ul class="latest-post-container">
									<li class="latest-post-sidebar clearfix">
										<div class="lp-img-cont left">
											<a href=""><img src="images/content/blog-sqr-4-popular.jpg" alt="project"></a>
										</div>
										<div class="lp-title-cont left">
											<p class="latest-post-sidebar-title"><a class="a-invert" href="#">AENEAN NISL ORCI</a></p>
											<p class="latest-post-sidebar-date">JUL 15, 2015</p>
											<p class="latest-post-sidebar-comm">15 comments</p>
										</div>	
									</li>
									<li class="latest-post-sidebar clearfix">
										<div class="lp-img-cont left">
											<a href=""><img src="images/content/blog-sqr-5-popular.jpg" alt="project"></a>
										</div>
										<div class="lp-title-cont left">
											<p class="latest-post-sidebar-title"><a class="a-invert" href="#">VITAE NIBH ODIOSTERS</a></p>
											<p class="latest-post-sidebar-date">OCT 10, 2015</p>
											<p class="latest-post-sidebar-comm">12 comments</p>
										</div>	
									</li>
									<li class="latest-post-sidebar clearfix">
										<div class="lp-img-cont left">
											<a href="#"><img src="images/content/blog-sqr-6-popular.jpg" alt="project"></a>
										</div>
										<div class="lp-title-cont left">
											<p class="latest-post-sidebar-title"><a class="a-invert" href="#">ODIOSTERS NULLAM</a></p>
											<p class="latest-post-sidebar-date">DEC 14, 2015</p>
											<p class="latest-post-sidebar-comm">10 comments</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>				

					<!-- TAGS WIDGET -->
					<div class="title-lines-sidebar m-bot-30">
						<div class="title-block">
							TAGS
						</div>
					</div>		
					<div class="tag-cloud m-top-30 m-bot-20">
						<ul class="clearfix">
							<li><a class="button small thin" href="#">#html 5</a></li>
							<li><a class="button small thin" href="#">#css 3</a></li>
							<li><a class="button small thin" href="#">#photoshop</a></li>
							<li><a class="button small thin" href="#">#wordpress</a></li>
							<li><a class="button small thin" href="#">#joomla!</a></li>
							<li><a class="button small thin" href="#">#ui</a></li>
							<li><a class="button small thin" href="#">#template</a></li>
						</ul>
					</div>
					
					<!-- FLICKR WIDGET -->		
					<div class="title-lines-sidebar m-bot-30">
						<div class="title-block">
							FLICKR
						</div>
					</div>	
					<ul id="flickrfeed" class="popup-gallery clearfix m-bot-30"></ul>
					
				</div>
				

	<!-- original 			
	<div id="secondary" class="widget-area" role="complementary">

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>



			<aside id="search" class="widget widget_search">

				<?php get_search_form(); ?>

			</aside>



			<aside id="archives" class="widget">

				<h1 class="widget-title"><?php _e( 'Archives', 'zerif-lite' ); ?></h1>

				<ul>

					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>

				</ul>

			</aside>



			<aside id="meta" class="widget">

				<h1 class="widget-title"><?php _e( 'Meta', 'zerif-lite' ); ?></h1>

				<ul>

					<?php wp_register(); ?>

					<li><?php wp_loginout(); ?></li>

					<?php wp_meta(); ?>

				</ul>

			</aside>



		<?php endif; // end sidebar widget area ?>

	</div><!-- #secondary -->
	