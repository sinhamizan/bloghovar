<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogHovar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BlogHovar Theme">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Preloader Start -->
	<div id="preloader">
		<div class="loading">
			<div></div>
			<div></div>
		</div>
  </div>
	<!-- Preloader End -->

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bloghovar' ); ?></a>

		<header class="header__area site-header">
			<div class="container">
				<div class="row">
					<div class="col-xx-3 col-xl-3 col-lg-3 col-md-3 col-6">
						<div class="site-branding">
							<?php
								if( has_custom_logo() ) {
									the_custom_logo();
								} else { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
									<p class="site-description"><?php bloginfo( 'description' ); ?></p>
								</a>
							<?php	} ?>
						</div><!-- .site-branding -->
					</div>

					<div class="col-xx-8 col-xl-8 col-lg-7 col-md-6 col-1">
						<nav id="site-navigation" class="main-navigation">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary-menu',
									'menu_id'        => 'primary-menu',
									'fallback_cb'    => false,
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="col-xx-1 col-xl-1 col-lg-1 col-md-2 col-5">
						<div class="header__search-icon">
							<button id="open_search_box"><i class="fa-solid fa-magnifying-glass"></i></button>
						</div>
					</div>
				</div>
			</div>

			<!-- Search Option -->
			<div class="header__search">
				<button id="close_search_box"><i class="fa-solid fa-xmark"></i></button>
				<div class="header__search-box">
					<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET">
						<input type="search" name="s" id="s" value="" placeholder="search...">
					</form>
				</div>
			</div>
		</header>