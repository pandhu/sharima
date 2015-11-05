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
					<?php 
					$args = array(
						'hide_empty'=>0
					);
					$categories = get_categories($args)?>
					<ul class="nav bs-sidenav blog-categories m-bot-30">
						<?php foreach($categories as $item):?>
						<li class=""><a href="<?php echo get_category_link($item->term_id)?>"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span><?php echo $item->name?></a></li>
						<?php endforeach;?>
					</ul>

					<!-- TABS  -->	
					<div class="tabs custom-tabs m-bot-30">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#popular" data-toggle="tab">POPULAR</a>
							</li>
							<li>
								<a href="#recent" data-toggle="tab">RECENT</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="popular" class="tab-pane tab-pop-cat-container active">
								<ul class="latest-post-container">
									<?php $popular = new WP_Query('orderby=comment_count&posts_per_page=5'); ?> 
									<?php while ($popular->have_posts()) : $popular->the_post(); ?> 
										<li class="latest-post-sidebar clearfix">
											<div class="lp-img-cont left">
											<?php if(has_post_thumbnail()):
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ); 
												?>
												<a href="<?php echo $image[0]?>" class="lightbox">
													<img src="<?php echo $image[0]?>" alt="Ipsum"></a>
												<?php else:?>
												<a href="<?php echo get_template_directory_uri().'/images/content/blog-sqr-4.jpg'?>" class="lightbox">
													<img src="<?php echo get_template_directory_uri().'/images/content/blog-sqr-4.jpg'?>" alt="Ipsum"></a>
											<?php endif;?>	
											</div>
											<div class="lp-title-cont left">
												<p class="latest-post-sidebar-title"><a class="a-invert" href="<?php the_permalink()?>"><?php the_title()?></a></p>
												<p class="latest-post-sidebar-date"><?php zerif_posted_on(); ?></p>
												<p class="latest-post-sidebar-comm"><?php wp_count_comments(the_id()) ?> comments</p>
											</div>	
										</li>
									<?php endwhile; ?> 	
								</ul>
							</div>
							<div id="recent" class="tab-pane tab-pop-cat-container">
								<ul class="latest-post-container">
									<?php $popular = new WP_Query('orderby=date&order=DESC&posts_per_page=5'); ?> 
									<?php while ($popular->have_posts()) : $popular->the_post(); ?> 
										<li class="latest-post-sidebar clearfix">
											<div class="lp-img-cont left">
											<?php if(has_post_thumbnail()):
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
												?>
												<a href="<?php echo $image[0]?>" class="lightbox">
													<img src="<?php echo $image[0]?>" alt="Ipsum"></a>
												<?php else:?>
												<a href="<?php echo get_template_directory_uri().'/images/content/blog-sqr-4.jpg'?>" class="lightbox">
													<img src="<?php echo get_template_directory_uri().'/images/content/blog-sqr-4.jpg'?>" alt="Ipsum"></a>
											<?php endif;?>	
											</div>
											<div class="lp-title-cont left">
												<p class="latest-post-sidebar-title"><a class="a-invert" href="#"><?php the_title()?></a></p>
												<p class="latest-post-sidebar-date"><?php zerif_posted_on(); ?></p>
												<p class="latest-post-sidebar-comm"><?php wp_count_comments(the_id()) ?> comments</p>
											</div>	
										</li>
									<?php endwhile; ?> 	
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
						<?php $tags = get_tags();?>
						<ul class="clearfix">
						<?php foreach($tags as $item):?>
							<li><a class="button small thin" href="<?php echo get_tag_link($item->term_id)?>">#<?php echo $item->name?></a></li>
						<?php endforeach;?>
					
						</ul>
					</div>
					
					<!-- FLICKR WIDGET 		
					<div class="title-lines-sidebar m-bot-30">
						<div class="title-block">
							FLICKR
						</div>
					</div>	
					<ul id="flickrfeed" class="popup-gallery clearfix m-bot-30"></ul>
					
				</div>
				-->
				

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
	