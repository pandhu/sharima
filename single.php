<?php
/**
 * The Template for displaying all single posts.
 *
 * @package zerif
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<!-- PAGE TITLE 1 -->
	<div class="page-title-bg indent-header-1 page-main-content m-bot-40">
		<div class="container">
			<div class="page-title-container">
				<div class="row">
					<div class="col-md-12">
						<h2>POST</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a class="a-invert" href="<?php echo home_url('/')?>">HOME</a></li>
							<li><a class="a-invert" href="blog-large-image.html">BLOG</a></li>
							<li class="active"><?php the_title(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="title-lines-container"><!-- !IMPORTANT CONTAINER  FOR LINES-->	
		<!-- COTENT CONTAINER -->
		<div class="container">
			<div class="row m-bot-40">
				<!-- CONTENT -->		
				<div class="col-md-9">
					<div class="row box-with-hover">
						
						<!-- ITEM 1-->
						<div class="element col-md-12 m-bot-10" >
						<?php 
						if ( has_post_thumbnail() ):  ?>
							<?php
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
							//var_dump($image);
							?>
							<div class="view view-first hovered">
								<a href="<?php echo $image[0]?>" class="lightbox">
									<?php
										the_post_thumbnail('full');
									?>
									<!--<img src="images/content/blog-wide-1.jpg" alt="Ipsum" >-->
									<div class="mask">
										<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
									</div>
								</a>
							</div>
						<?php
						endif; 
						?>
							<div class="blog-caption-container">
								<h2><a class="a-invert" href="<?php get_permalink()?>"><?php the_title(); ?></a></h2>
								<ul class="post-meta clearfix">
									<li><span aria-hidden="true" class="icon_clock_alt"></span> <?php zerif_posted_on(); ?></li>
									<li><span aria-hidden="true" class="icon_profile"></span><a href="#"> <?php the_author()?></a></li>
									<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="#comments"> <?php wp_count_comments(the_id()) ?> COMMENTS</a></li>
									<li><span aria-hidden="true" class="icon_tags_alt"></span> 
										<?php
										$posttags = get_the_tags();
										$count = 0;
										if ($posttags):
											foreach($posttags as $tag): ?>
											<?php if($count == count($tags)-1):?>
												<a href="<?php $tag->url?>"><?php echo $tag->name ?></a>
											<?php else:?>
												<a href="<?php $tag->url?>"><?php echo $tag->name ?></a>
											<?php endif;?>
										<?php 	
											endforeach;
										endif;?>
										</li>
									</ul>
								</div>
								<!-- TEXT -->	
								<div class="blog-carousel-text-container">
									<?php the_content()	?>	
								</div>

								<!-- TAG CLOUD -->	
								<div class="tag-cloud m-top-10 m-bot-20">
									<ul class="clearfix">
										<?php
										if ($posttags) {
											foreach($posttags as $tag) { 
												?>

												<li><a class="button small thin" href="#">#<?php echo $tag->name ?></a></li>
												<?php 	}
											}
											?>									
										</ul>
									</div>

									<!-- SOCIAL SHARE -->
									<div class="social-share-container m-bot-30">
										<ul class="social-icons-ul">
											<li>
												<a href="#">
													<span aria-hidden="true" class="social_facebook main-menu-icon"></span>
												</a>
											</li>	
											<li>	
												<a href="#">
													<span aria-hidden="true" class="social_twitter main-menu-icon"></span>
												</a>
											</li>	
											<li>	
												<a href="#">
													<span aria-hidden="true" class="social_linkedin main-menu-icon"></span>
												</a>
											</li>	
											<li>	
												<a href="#">
													<span aria-hidden="true" class="social_googleplus main-menu-icon"></span>
												</a>
											</li>	
											<li>	
												<a href="#">
													<span aria-hidden="true" class="social_pinterest main-menu-icon"></span>
												</a>
											</li>
											<li>	
												<a href="#">
													<span aria-hidden="true" class="social_rss main-menu-icon"></span>
												</a>
											</li>
										</ul>
									</div>

								</div>

								<!-- AUTHOR -->	
								<div class="col-md-12 post-author">
									
									<!-- RELATED POSTS -->	
									<div class="col-md-12 m-bot-30">			
										<div class="heading-line h3-line">
											<h3>RELATED POSTS</h3>
										</div>
									</div>
									<div class="col-md-12">	
										<div class="row m-bot-20">
											<?php
											$orig_post = $post;
											global $post;
											$tags = wp_get_post_tags($post->ID);

											if ($tags) {
												$tag_ids = array();
												foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
												$args=array(
													'tag__in' => $tag_ids,
													'post__not_in' => array($post->ID),
										    'posts_per_page'=>4, // Number of related posts to display.
										    'caller_get_posts'=>1
										    );

												$my_query = new wp_query( $args );

												while( $my_query->have_posts() ) {
													$my_query->the_post();
													?>


													<!-- ITEM -->	
													<div class="col-xs-12 col-sm-4 col-md-4 m-bot-30">
														<div class="pos-relative">
															<div class="view view-first hovered">
																<?php if(has_post_thumbnail()):
																	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
																?>
																<a href="<?php echo $image[0]?>" class="lightbox">
																	<img src="<?php echo $image[0]?>" alt="Ipsum">
																<?php else:?>
																<a href="<?php echo get_template_directory_uri().'/images/content/blog-sqr-4.jpg'?>" class="lightbox">
																	<img src="<?php echo get_template_directory_uri().'/images/content/blog-sqr-4.jpg'?>" alt="Ipsum">
																<?php endif;?>
																	<div class="mask">
																		<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
																	</div>
																</a>
															</div>
														</div>	
														<div class="blog-related-caption-container">
															<h2><a class="a-invert" href="blog-single.html"><?php the_title()?></a></h2>
															<ul class="post-meta clearfix">
																<li><span aria-hidden="true" class="icon_clock_alt"></span> <?php zerif_posted_on(); ?></li>
																<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="<?php the_permalink()?>"> <?php wp_count_comments(the_id()) ?> COMMENTS</a></li>
															</ul>
														</div>
														<div class="blog-carousel-text-container">
															<?php 
															$content = strip_tags(get_the_content());
															if(strlen($content) > 200)
																echo substr($content,0,200).'....';
															else
																echo $content;
															?>
														</div>
														<div class="blog-carousel-button-container">
															<a class="button medium blog-rm" href="<?php the_permalink()?>">READ MORE</a>
														</div>
													</div>

													<?php 
												}
											}
											$post = $orig_post;
											wp_reset_query();
											?>
										</div>
									</div>	
								</div>

								<!--	COMMENTS	-->	
								
								<?php
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>

							</div> <!-- END row -->
							
						</div>  <!-- END col-md-9 -->
						
						<!-- SIDEBAR -->		
						<?php get_sidebar();?>

					</div><!-- row END-->

				</div><!-- container END-->
			</div><!-- !important container for lines END-->	

		<?php endwhile;?>

		<?php get_footer(); ?>