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
					$fields =  array(

					  'author' => '<div class="">'.
							'<div class="row comment-form-field">'.
								'<div class="col-md-6 sm-bot-15">'.
									'<input type="text" class="form-control" value="" data-msg-required="Please enter your Name." maxlength="100" class="form-control" name="name" id="name" placeholder="NAME" required>'.
								'</div>'.		
								'<div class="col-md-6 sm-bot-15">'.
									'<input type="text" class="form-control" value="" data-msg-required="Please enter your Email." maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL" required>'.
								'</div>'.
							'</div>'.
							'<div class="row comment-form-field">'.
								'<div class="col-md-6 sm-bot-15">'.
									'<input type="text" class="form-control" value="" data-msg-required="Please enter your Web URL." maxlength="100" class="form-control" name="url" id="url" placeholder="URL">'.
								'</div>'.
							'</div>'.
						'</div>'
					);
					$args  = array(
						'comment_field' => '<div class="">'.
							'<div class="row comment-form-field">'.
								'<div class="col-md-12 sm-bot-20">'.
									'<textarea data-msg-required="Please enter your message." rows="7" class="form-control" name="comment" id="comment" placeholder="MESSAGE" required></textarea>'.
								'</div>'.
							'</div>'.
						'</div>',
						'comment_notes_after'=>'',
						'comment_notes_before'=>'',
						'title_reply'=>'',
						'class_submit' => 'button medium thin-bg-dar comment-form-field',
						'fields' => apply_filters( 'comment_form_default_fields', $fields ),


					);
				?>
				<?php comment_form($args); ?>
			</div>
		</div>

	</div>
</div>
<div id="comments" class="col-md-12 left-sidebar">
	<div class="title-lines-sidebar m-bot-30">
		<div class="title-block">
			<?php
				//$comments_count = wp_count_comments(the_id());
				//$comments_count = 1;
				echo $post->comment_count.' COMMENTS';
			?>
		</div>
	</div>	
</div>
<div class="col-md-12">
	<?php if ( have_comments() ) : ?>
	<?php $comments = get_comments()?>
	<ol class="comment-list clearfix">
		<?php foreach($comments as $comment):?>
			<?php var_dump($comment)?>
		<li class="comment" >
			<!--	COMMENT by POST AUTHOR 	-->	
			<div class="comment-container clearfix">
				<div class="comment-author-avatar">
					<img alt="ava" src="images/content/avatar-1.png" class="">
				</div>
				<div class="comment-content">
					<div class="comment-author">
						<div class="comment-author-name">
							<a href="#" class="a-invert" ><?php $comment['comment_author']?></a>
						</div>
						<div class="comment-date">May 21, 2015 at 10:07 am</div>
					</div>
					<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
					<a class="comment-reply-link a-invert" href="#"><span aria-hidden="true" class="arrow_back"></span></a>
				</div>
			</div>

		</li>
		<?php endforeach;?>
	</ol>
	<?php endif; // have_comments() ?>
	<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
				?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'zerif-lite' ); ?></p>
		<?php endif; ?>
</div> 	
	

