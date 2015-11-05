<?php get_header(); ?>


<?php
if ( get_option( 'show_on_front' ) == 'page' ):
	?>
<!-- SLIDER -->
<div class="tp-banner-container p-top-60-mobile">
	<div class="tp-banner" >
		<ul>	
			<!-- SLIDE 1 -->
						<li data-transition="zoomin" data-slotamount="7" data-masterspeed="500" data-thumb="<?php echo get_template_directory_uri();?>/images/revo-slider/homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="<?php echo get_template_directory_uri();?>/images/revo-slider/homeslider_thumb1.jpg"  alt="slidebg1"  data-lazyload="<?php echo get_template_directory_uri();?>/images/revo-slider/slider-1-bg1-860.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"   >
							<!-- LAYERS -->


							<!-- LAYER NR. 3 IMG GIRL-->
							<div class="tp-caption zoomout customout rs-parallaxlevel-0"
								data-x="480"
								data-y="99" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="1100"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 4;"><img src="<?php echo get_template_directory_uri();?>/images/revo-slider/homeslider_thumb1.jpg" alt="" data-lazyload="images/revo-slider/girl1.png">
							</div>


					<!-- LAYER NR. 5  TEXT-->
							<div class="tp-caption slider-1-cap-bg30 sfr fadeout tp-resizeme rs-parallaxlevel-0"
								data-x="160"
								data-y="228" 
								data-speed="300"
								data-start="2000"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;">Fully responsive<br/> Retina ready</div>

							<!-- LAYER NR. 6 BG NUMBER-->
							<div class="tp-caption slider-1-num-bg160 customin tp-resizeme fadeout tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="228" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="2000"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
							</div>

							<!-- LAYER NR. 7 NUMBER-->
							<div class="tp-caption slider-1-num tp-resizeme customin fadeout rs-parallaxlevel-0"
								data-x="96"
								data-y="312" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="2250"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 8;"><span class="">01</span>
							</div>

							<!-- LAYER NR. 8 TEXT -->
							<div class="tp-caption slider-1-content-container customin tp-resizeme rs-parallaxlevel-0  disp-none-767"
								data-x="160"
								data-y="387" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="2600"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.05"
								data-endelementdelay="0.1"
								style="z-index: 14; max-width: auto; max-height: auto; white-space: nowrap;"><div>Lorem ipsum dolor sit ametio, consectetur sapien.<br/> Us gravida libero eget lorem imperdiet.</div>
							</div>		
							<!-- LAYER NR. 11 READ MORE-->
							<div class="tp-caption customin customout tp-resizeme rs-parallaxlevel-0"
								data-x="160"
								data-y="493" 
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
											data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="2900"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-linktoslide="next"
								style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='slider-1-largeredbtn'>READ MORE</a>
							</div>
						<!-- LAYER NR. 12 ARROW -->
							<div class="tp-caption arrowicon customin rs-parallaxlevel-0 disp-none-767"
								data-x="243"
								data-y="511" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="3200"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-linktoslide="next"
								style="z-index: 13;"><div class=" rs-slideloop" 			data-easing="Power3.easeInOut"
								data-speed="0.5"
								data-xs="-5"
								data-xe="5"
								data-ys="0"
								data-ye="0"
					>
					<img src="<?php echo get_template_directory_uri();?>/images/revo-slider/homeslider_thumb1.jpg" alt="img" data-ww="15" data-hh="15" data-lazyload="<?php echo get_template_directory_uri();?>/images/revo-slider/slider-1-arrow.png">
							</div>
							</div>

						</li>

		</ul>
		<!-- <div class="tp-bannertimer"></div>-->	
	</div> 
</div>	
<!-- BOXES 1-->
<div class="feature-box1-container m-top-min-210 m-top-min-40-mobile font-color-change">
	<div class="container">
		<div class="row box-with-hover">
			<div class="col-md-9 feature-box1">
				<div class="row">
					<div class="col-md-4">
						<div class="ca-menu hovered">
							<div class="ca-icon"><span aria-hidden="true" class="icon_adjust-horiz"></span></div>
							<div class="ca-content">
								<h2 class="ca-main">#SHELF</h2>
								<div class="ca-sub">Sed ut perspiciatis unde omnis iste nat eror acus  antium que.</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="ca-menu hovered">
							<div class="ca-icon"><span aria-hidden="true" class="icon_cog"></span></div>
							<div class="ca-content">
								<h2 class="ca-main">#SPOON</h2>
								<div class="ca-sub">Sed ut perspiciatis unde omnis iste nat eror acus  antium que.</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="ca-menu hovered">
							<div class="ca-icon"><span aria-hidden="true" class="icon_lightbulb_alt"></span></div>
							<div class="ca-content">
								<h2 class="ca-main">#SUITCASE</h2>
								<div class="ca-sub">Sed ut perspiciatis unde omnis iste nat eror acus  antium que.</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 grey-block-container">
				<div class="grey-block"></div>
			</div>
		</div>
	</div>
</div>


<!-- COTENT CONTAINER -->
<div class="title-lines-container">
	<div class="container">
		
		<!-- BLOG -->
		<div class="title-lines">
			<div class="title-block">
				LATEST POSTS
			</div>
			<div class="view-all-container">
				<a class="button medium r-m-plus r-m-full" href="<?php get_site_url()?>index.php/blog">VIEW ALL</a>
			</div>
		</div>	

		<div class="box-with-hover m-top-30 m-bot-50" >

			<!-- Item  1 --> 
			<?php 
			$args = array();
			$wp_query = new WP_Query( array('post_type' => 'post', 'showposts' => '3', 'orderby'=>'date', 'order'=>'DESC') );
			while ( $wp_query->have_posts() ) : the_post();
				
			?>
			<div class="blog-inline-item clearfix">
				
				<div class="col-sm-3 col-md-2">
					<div class="row pos-relative">
						<div class="blog-item-date2">
							<div class="blog-item-date">30</div>
							<div class="blog-item-mounth">MAY</div>
						</div>
						<div>	
							<div class="view view-first blog-inline-img hovered">
							<?php if(has_post_thumbnail()):
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ); 
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
					</div>
				</div>

				<div class="col-xs-12  col-sm-9 col-md-10">	
					<div class="blog-caption-container">
						<h2><a class="a-invert" href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
						<ul class="post-meta clearfix">
							<li><span aria-hidden="true" class="icon_profile"></span><a href="#"> <?php the_author()?></a></li>
							<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="blog-single.html#comments"> <?php echo (get_comments_number(get_the_ID())) ?>  COMMENTS</a></li>
							<?php
								$posttags = get_the_tags();
								$count = 0;
								if ($posttags):?>
							<li><span aria-hidden="true" class="icon_tags_alt"></span>
								<?php
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
				</div>

			</div>
		<?php endwhile	;?>
		
		</div>
	</div><!-- .container -->
	<?php
	else:?>


<?php endif;
get_footer(); ?>
