<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogHovar
 */

get_header();
?>

	<main id="primary" class="site-main">				

	<!-- Hero slider start -->
	<?php  
		$post_args = array(
			'meta_key'       => 'featured',
			'meta_value'     => '1',
			'posts_per_page' => -1,
		);
		$all_post = new WP_Query( $post_args );

		if( $all_post->have_posts() ):
	?>
	<section class="hero_area">
		<div class="swiper hero_slider">
      <div class="swiper-wrapper">
				<?php  
					while( $all_post->have_posts() ): $all_post->the_post();
				?>
        <div class="swiper-slide hero_slide" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
					<?php the_category(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a> / <span><?php the_date(); ?></span></p>
				</div>
				<?php 
					endwhile;
					wp_reset_postdata();
				?>
      </div>

      <div class="swiper-btn-next slider-btn"><i class="fa-solid fa-arrow-left"></i></div>
      <div class="swiper-btn-prev slider-btn"><i class="fa-solid fa-arrow-right"></i></div>
    </div>
	</section>
	<?php endif; ?>
	<!-- Hero slider end -->


	<!-- Blog  area start -->
	<section class="blog__area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-7 col-xl-8 col-xxl-8">
					<div class="blog__items">

						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_pagination(array(
								'mid_size'  => 2,
								'prev_text' => __( '<i class="fa-solid fa-arrow-left-long"></i>', 'bloghovar' ),
								'next_text' => __( '<i class="fa-solid fa-arrow-right-long"></i>', 'bloghovar' ),
							));

						else :
							get_template_part( 'template-parts/content', 'none' ); 
						endif;
						?>
					</div>
				</div>
				<div class="col-md-12 col-lg-5 col-xl-4 col-xxl-4">
					<div class="blog__sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog area end -->			

</main>

<?php get_footer(); ?>