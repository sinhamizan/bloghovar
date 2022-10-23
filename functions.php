<?php
/**
 * BlogHovar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BlogHovar
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bloghovar_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on BlogHovar, use a find and replace
		* to change 'bloghovar' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bloghovar', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	add_theme_support( "wp-block-styles" );

	add_theme_support( "responsive-embeds" );

	add_theme_support( "align-wide" );

	add_theme_support( 'register_block_style' );

	add_theme_support( 'register_block_pattern' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary', 'bloghovar' ),
			'footer-menu' => esc_html__( 'Footer', 'bloghovar' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bloghovar_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bloghovar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bloghovar_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bloghovar_content_width', 640 );
}
add_action( 'after_setup_theme', 'bloghovar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bloghovar_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bloghovar' ),
			'id'            => 'blog_sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'bloghovar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bloghovar_widgets_init' );

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/style-script.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * BlogHovar Theme Options
 */
require get_template_directory() . '/inc/theme-options/theme-options.php';


/**
 * TGM
 */
require_once get_template_directory() . '/inc/tgm.php';


/**
* Modify the_excerpt
*/

function bloghovar_modify_excerpt( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'bloghovar_modify_excerpt' );


// Modify Comments
function bloghovar_comment_fields( $fields ) {
	$comment_field = $fields['comment'];
	$cookies_field = $fields['cookies'];

	unset( $fields['comment'] );
	unset( $fields['cookies'] );

	$fields['comment'] = $comment_field;
	$fields['cookies'] = $cookies_field;

	return $fields;
}
add_filter( 'comment_form_fields', 'bloghovar_comment_fields' );


// Remove Protected Text
function bloghovar_remove_protected_text() {
	return '%s';
}
add_filter( 'protected_title_format', 'bloghovar_remove_protected_text' );


// ACF
include_once get_template_directory() . '/inc/acf-fields.php';
add_filter('acf/settings/show_admin', '__return_false');