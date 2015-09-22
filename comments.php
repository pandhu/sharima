<?php

/**

 * The template for displaying Comments.

 *

 * The area of the page that contains both current comments

 * and the comment form.

 *

 * @package zerif

 */



/*

 * If the current post is protected by a password and

 * the visitor has not yet entered the password we will

 * return early without loading the comments.

 */

if ( post_password_required() ) {

	return;

}

?>


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
				<?php 
					$args  = array(
						'comment_field' => '<div class="row">'.
							'<div>'.
								'<div class="col-md-12 m-bot-20">'.
									'<textarea maxlength="5000" data-msg-required="Please enter your message." rows="7" class="form-control" name="message" id="message" placeholder="MESSAGE" required></textarea>'.
								'</div>'.
							'</div>'.
						'</div>'
					);
				?>
				<?php comment_form(array('comment_notes_after' => '')); ?>

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
<div id="comments" class="comments-area">



	<?php // You can start editing here -- including this comment! ?>



	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">

			<?php

			printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'zerif-lite' ),

				number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );

				?>

			</h2>



			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>

				<nav id="comment-nav-above" class="comment-navigation" role="navigation">

					<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'zerif-lite' ); ?></h1>

					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'zerif-lite' ) ); ?></div>

					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'zerif-lite' ) ); ?></div>

				</nav><!-- #comment-nav-above -->

			<?php endif; // check for comment navigation ?>



			<ul class="comment-list">

				<?php

				wp_list_comments( array(

					'style'      => 'ul',

					'short_ping' => true,

					) );

					?>

				</ul><!-- .comment-list -->



				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>

					<nav id="comment-nav-below" class="comment-navigation" role="navigation">

						<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'zerif-lite' ); ?></h1>

						<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'zerif-lite' ) ); ?></div>

						<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'zerif-lite' ) ); ?></div>

					</nav><!-- #comment-nav-below -->

				<?php endif; // check for comment navigation ?>



			<?php endif; // have_comments() ?>



			<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?

			if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

				?>

			<p class="no-comments"><?php _e( 'Comments are closed.', 'zerif-lite' ); ?></p>

		<?php endif; ?>







	</div><!-- #comments -->

