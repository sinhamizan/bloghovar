<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BlogHovar
 */

get_header();
?>

<?php
	$bloghovar_error_title = get_theme_mod( 'bloghovar_error_title', __( 'Error 404 - Page Not Found', 'bloghovar' ) );
	$bloghovar_error_desc = get_theme_mod( 'bloghovar_error_desc', __( 'Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'bloghovar' ) );
	$bloghovar_error_btn = get_theme_mod( 'bloghovar_error_btn_text', __( 'Go Home', 'bloghovar' ) );
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found error__area">
			<div class="container">
				<div class="row">
					<div class="col-xxl-12">
						<div class="error__content">
							<h2 class="error__title"><?php echo esc_html( $bloghovar_error_title ); ?></h2>
							<p><?php echo esc_html( $bloghovar_error_desc ); ?></p>
							<a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo esc_html( $bloghovar_error_btn ); ?></a>
						</div><!-- .page-content -->
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->


<?php get_footer(); ?>
