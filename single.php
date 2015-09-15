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
							<li><a class="a-invert" href="index.html">HOME</a></li>
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
							<div class="view view-first hovered">
								<a href="images/content/blog-full-big-1.jpg" class="lightbox">
									<img src="images/content/blog-wide-1.jpg" alt="Ipsum" >
									<div class="mask">
										<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
									</div>
								</a>
							</div>

							<div class="blog-caption-container">
								<h2><a class="a-invert" href="blog-single.html"><?php the_title(); ?></a></h2>
								<ul class="post-meta clearfix">
									<li><span aria-hidden="true" class="icon_clock_alt"></span> <?php zerif_posted_on(); ?></li>
									<li><span aria-hidden="true" class="icon_profile"></span><a href="#"> <?php the_author()?></a></li>
									<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="blog-single.html#comments"> <?php wp_count_comments(the_id()) ?> COMMENTS</a></li>
									<li><span aria-hidden="true" class="icon_tags_alt"></span> 
										<?php
										$posttags = get_the_tags();
										if ($posttags) {
											foreach($posttags as $tag) { 
												?>

												<a href="<?php $tag->url?>"><?php echo $tag->name ?></a>,
												<?php 	}
											}
											?>
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
									<div class="post-author-container clearfix">
										<div class="post-author-avatar">
											<?php echo get_avatar( get_the_author_email(), '128', '/images/no_images.jpg', get_the_author() ); ?>										</div>
											<div class="comment-content">
												<div class="comment-author m-bot-10">
													<div class="comment-author-name">Posted By 
														<a href="#" class="a-invert" ><?php the_author()?></a>
													</div>
												</div>
												<p><?php the_author_description()?></p>

											</div>
										</div>
									</div>

									<!-- RELATED POSTS -->	
									<div class="col-md-12 m-bot-30">			
										<div class="heading-line h3-line">
											<h3>RELATED POSTS</h3>
										</div>
									</div>
									<div class="col-md-12">	
										<div class="row m-bot-20">	
											<!-- ITEM -->	
											<div class="col-xs-12 col-sm-4 col-md-4 m-bot-30">
												<div class="pos-relative">
													<div class="view view-first hovered">
														<a href="images/content/blog-sqr-4.jpg" class="lightbox">
															<img src="images/content/blog-wide-4.jpg" alt="Ipsum">
															<div class="mask">
																<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
															</div>
														</a>
													</div>
												</div>	
												<div class="blog-related-caption-container">
													<h2><a class="a-invert" href="blog-single.html">POST WITH AUDIO</a></h2>
													<ul class="post-meta clearfix">
														<li><span aria-hidden="true" class="icon_clock_alt"></span> 30 MAY 2015</li>
														<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="blog-single.html#comments"> 21 COMMENTS</a></li>
													</ul>
												</div>
												<div class="blog-carousel-text-container">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus purus mi. Nam et porttitor velit.
												</div>
												<div class="blog-carousel-button-container">
													<a class="button medium blog-rm" href="blog-single.html">READ MORE</a>
												</div>
											</div>
											<!-- ITEM -->	
											<div class="col-xs-12 col-sm-4 col-md-4 m-bot-30">
												<div class="pos-relative">
													<div class="view view-first hovered">
														<a href="images/content/blog-sqr-2.jpg" class="lightbox">
															<img src="images/content/blog-wide-2.jpg" alt="Ipsum">
															<div class="mask">
																<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
															</div>
														</a>
													</div>
												</div>	
												<div class="blog-related-caption-container">
													<h2><a class="a-invert" href="blog-single.html">POST WITH A PREVIEW IMAGE</a></h2>
													<ul class="post-meta clearfix">
														<li><span aria-hidden="true" class="icon_clock_alt"></span> 25 MAY 2015</li>
														<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="blog-single.html#comments"> 21 COMMENTS</a></li>
													</ul>
												</div>
												<div class="blog-carousel-text-container">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus purus mi. Nam et porttitor velit.
												</div>
												<div class="blog-carousel-button-container">
													<a class="button medium blog-rm" href="blog-single.html">READ MORE</a>
												</div>
											</div>

											<!-- ITEM -->	
											<div class="col-xs-12 col-sm-4 col-md-4 m-bot-30">
												<div class="pos-relative">
													<div class="view view-first hovered">
														<a href="images/content/blog-sqr-3.jpg" class="lightbox">
															<img src="images/content/blog-wide-3.jpg" alt="Ipsum">
															<div class="mask">
																<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
															</div>
														</a>
													</div>
												</div>	
												<div class="blog-related-caption-container">
													<h2><a class="a-invert" href="blog-single.html">POST WITH VIDEO</a></h2>
													<ul class="post-meta clearfix">
														<li><span aria-hidden="true" class="icon_clock_alt"></span> 20 MAY 2015</li>
														<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="blog-single.html#comments"> 21 COMMENTS</a></li>
													</ul>
												</div>
												<div class="blog-carousel-text-container">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus purus mi. Nam et porttitor velit.
												</div>
												<div class="blog-carousel-button-container">
													<a class="button medium blog-rm" href="blog-single.html">READ MORE</a>
												</div>
											</div>	

										</div>
									</div>

									<!--	COMMENTS	-->	
									<div id="comments" class="col-md-12 left-sidebar">
										<div class="title-lines-sidebar m-bot-30">
											<div class="title-block">
												21 COMMENTS
											</div>
										</div>	
									</div>
									<div class="col-md-12">
										<ol class="comment-list clearfix">

											<li class="comment" >
												<!--	COMMENT by POST AUTHOR 	-->	
												<div class="comment-container clearfix">
													<div class="comment-author-avatar">
														<img alt="ava" src="images/content/avatar-1.png" class="">
													</div>
													<div class="comment-content">
														<div class="comment-author">
															<div class="comment-author-name">
																<a href="#" class="a-invert" >Jessica Doe</a>
															</div>
															<div class="comment-date">May 21, 2015 at 10:07 am</div>
														</div>
														<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
														<a class="comment-reply-link a-invert" href="#"><span aria-hidden="true" class="arrow_back"></span></a>
													</div>
												</div>

												<ul class="comment-children">

													<li class="comment" >
														<!--	COMMENT	-->	
														<div class="comment-container clearfix">
															<div class="comment-author-avatar">
																<img alt="ava" src="images/content/avatar-1.png" class="">
															</div>
															<div class="comment-content">
																<div class="comment-author">
																	<div class="comment-author-name">
																		<a href="#" class="a-invert" >Edward Doe</a>
																	</div>
																	<div class="comment-date">May 21, 2015 at 10:10 am</div>
																</div>
																<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
																<a class="comment-reply-link a-invert" href="#"><span aria-hidden="true" class="arrow_back"></span></a>
															</div>
														</div>

													</li>

												</ul>

											</li>

											<li class="comment" >
												<!--	COMMENT	-->	
												<div class="comment-container by-post-author clearfix">
													<div class="comment-author-avatar">
														<img alt="ava" src="images/content/avatar-1.png" class="">
														<span class="comment-author-badge">author</span>
													</div>
													<div class="comment-content">
														<div class="comment-author">
															<div class="comment-author-name">
																<a href="#" class="a-invert" >John Doe</a>
															</div>
															<div class="comment-date">May 21, 2015 at 10:21 am</div>
														</div>
														<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
														<a class="comment-reply-link a-invert" href="#"><span aria-hidden="true" class="arrow_back"></span></a>
													</div>
												</div>

											</li>

											<li class="comment" >
												<!--	COMMENT	-->	
												<div class="comment-container clearfix">
													<div class="comment-author-avatar">
														<img alt="ava" src="images/content/avatar-1.png" class="">
													</div>
													<div class="comment-content">
														<div class="comment-author">
															<div class="comment-author-name">
																<a href="#" class="a-invert" >Jessica Doe</a>
															</div>
															<div class="comment-date">May 21, 2015 at 10:21 am</div>
														</div>
														<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
														<a class="comment-reply-link a-invert" href="#"><span aria-hidden="true" class="arrow_back"></span></a>
													</div>
												</div>

											</li>

										</ol>
									</div> 	


									<!-- LEAVE A COMMENT	-->
									<div class="col-md-12">
										<div class=" m-top-50">

											<!-- TITLE -->
											<div class="title-lines no-after">
												<div class="title-lines-white-bg"></div>
												<div class="title-block">
													LEAVE A COMMENT
												</div>
											</div>
											<!-- CONTACT FORM -->
											<div class="gray-bg-container m-top-min-35 m-bot-30">
												<div class="contact-form-container">
													<form id="contact-form" action="#" method="POST">
														<div class="row">
															<div>
																<div class="col-md-6 m-bot-15">
																	<!-- <label>Your name *</label> -->
																	<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="NAME" required>
																</div>
																<div class="col-md-6 m-bot-15">
																	<!-- <label>Your email address *</label> -->
																	<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div >
																<div class="col-md-12 m-bot-20">
																	<!-- <label>Message *</label> -->
																	<textarea maxlength="5000" data-msg-required="Please enter your message." rows="7" class="form-control" name="message" id="message" placeholder="MESSAGE" required></textarea>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<input type="submit" value="SEND MESSAGE" class="button medium thin-bg-dark" data-loading-text="Loading...">
															</div>
														</div>
													</form>	
													<div class="alert alert-success hidden" id="contactSuccess">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="alert alert-danger hidden" id="contactError">
														<strong>Error!</strong> There was an error sending your message.
													</div>
												</div>
											</div>

										</div>
									</div>


								</div> <!-- END row -->
							</div>  <!-- END col-md-9 -->


							<!-- SIDEBAR -->		
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

						</div><!-- row END-->

					</div><!-- container END-->
				</div><!-- !important container for lines END-->	

			<?php endwhile;?>

			<?php get_footer(); ?>