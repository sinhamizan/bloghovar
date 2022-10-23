<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogHovar
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


<!-- Comment start -->
<div id="comments" class="comments-area">
	<?php if( comments_open() ): ?>
		<h2 class="comment__title"><?php comments_number(); ?></h2>
		<ul class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ul',
					'short_ping' => true,
				)
			);
			?>
		</ul><!-- .comment-list -->

		<h3 class="comment__add"><?php echo __( 'Add Comment', 'bloghovar' ); ?></h3>

		<?php 
			comment_form(); 
			the_comments_navigation();
		else:
	?>
		<h4 class="text-center"><?php echo __('Comments Disbaled!', 'bloghovar' ); ?></h4>
	<?php endif; ?>

</div><!-- #comments -->
<!-- Comment end -->