<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogHovar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog__item">
		<div class="blog__left">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("large", ["class" => "blog__img"]); ?></a>
		</div>

		<div class="blog__right">
			<?php the_category(); ?>
			<h2 class="blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="blog__excerpt">
				<?php
					if( !post_password_required() ):
						the_excerpt();
					else:
						echo get_the_password_form();
					endif;
				?>
			</div>
			<p class="blog__meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a> / <span><?php echo get_the_date(); ?></span></p>
			<a class="wc-btn-secondary btn-hover blog__btn" href="<?php the_permalink(); ?>"><span></span> <?php esc_html_e("Read More", "bloghovar"); ?></a>
		</div>
	</div>
</article>
