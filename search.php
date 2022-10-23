<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package BlogHovar
 */

get_header();
?>

	<main id="primary" class="site-main">

	<!-- Blog  area start -->
	<section class="blog__area">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<h2 class="search_result"><?php __( 'Search Result', 'bloghovar' ); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-8 col-xxl-8">
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
								get_template_part( 'template-parts/content', 'search' );

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
				<div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
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
