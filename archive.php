<?php
/**
 * The Template for displaying all single posts.
 *
 * @package zerif
 */
get_header(); ?>
<div class="page-title-bg indent-header-1 page-main-content m-bot-40">
	<div class="container">
		<div class="page-title-container">
			<div class="row">
				<div class="col-md-12">
					<h2>
						<?php
						if (is_category()):
							single_cat_title();
						elseif (is_tag()):
							single_tag_title();
						elseif (is_author()):
							printf(__('Author: %s', 'zerif-lite') , '<span class="vcard">' . get_the_author() . '</span>');
						elseif (is_day()):
							printf(__('Day: %s', 'zerif-lite') , '<span>' . get_the_date() . '</span>');
						elseif (is_month()):
							printf(__('Month: %s', 'zerif-lite') , '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'zerif-lite')) . '</span>');
						elseif (is_year()):
							printf(__('Year: %s', 'zerif-lite') , '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'zerif-lite')) . '</span>');
						elseif (is_tax('post_format', 'post-format-aside')):
							_e('Asides', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-gallery')):
							_e('Galleries', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-image')):
							_e('Images', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-video')):
							_e('Videos', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-quote')):
							_e('Quotes', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-link')):
							_e('Links', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-status')):
							_e('Statuses', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-audio')):
							_e('Audios', 'zerif-lite');
						elseif (is_tax('post_format', 'post-format-chat')):
							_e('Chats', 'zerif-lite');
						else:
							_e('Archives', 'zerif-lite');
						endif;
						?>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a class="a-invert" href="<?php echo home_url('/')?>">HOME</a></li>
						<li class="active">
							<?php
							if (is_category()):
								single_cat_title();
							elseif (is_tag()):
								single_tag_title();
							elseif (is_author()):
								printf(__('Author: %s', 'zerif-lite') , '<span class="vcard">' . get_the_author() . '</span>');
							elseif (is_day()):
								printf(__('Day: %s', 'zerif-lite') , '<span>' . get_the_date() . '</span>');
							elseif (is_month()):
								printf(__('Month: %s', 'zerif-lite') , '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'zerif-lite')) . '</span>');
							elseif (is_year()):
								printf(__('Year: %s', 'zerif-lite') , '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'zerif-lite')) . '</span>');
							elseif (is_tax('post_format', 'post-format-aside')):
								_e('Asides', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-gallery')):
								_e('Galleries', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-image')):
								_e('Images', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-video')):
								_e('Videos', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-quote')):
								_e('Quotes', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-link')):
								_e('Links', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-status')):
								_e('Statuses', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-audio')):
								_e('Audios', 'zerif-lite');
							elseif (is_tax('post_format', 'post-format-chat')):
								_e('Chats', 'zerif-lite');
							else:
								_e('Archives', 'zerif-lite');
							endif;
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- PAGE TITLE 1 -->
	<div class="title-lines-container"><!-- !IMPORTANT CONTAINER  FOR LINES-->	
		<!-- COTENT CONTAINER -->
		<div class="container">
			<div class="row m-bot-40">
				<!-- CONTENT -->		
				<div class="col-md-9">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="row box-with-hover m-bot-50">
						
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
									<li><span aria-hidden="true" class="icon_comment_alt"></span><a href="#comments"> <?php echo (get_comments_number(get_the_ID())) ?> COMMENTS</a></li>
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
								<?php $content = get_the_content();	
								if(strlen($content) > 500){
									echo substr($content, 0, 500).'...';
								} else {
									echo $content;
								}
								?>	
							</div>
							<div class="blog-carousel-button-container">
								<a class="button medium blog-rm" href="<?php the_permalink()?>">READ MORE</a>
							</div>	
						</div> <!-- END row -->

					</div>  <!-- END col-md-9 -->

				<?php endwhile;?>
				</div>
				<!-- SIDEBAR -->		
				<?php get_sidebar();?>

			</div><!-- row END-->

		</div><!-- container END-->
	</div><!-- !important container for lines END-->	


<?php get_footer(); ?>