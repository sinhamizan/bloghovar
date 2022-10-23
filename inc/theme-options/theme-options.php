<?php

function bloghovar_theme_options( $wp_customize ) {

  $wp_customize->add_panel( 'bloghovar_theme_option_panel', array(
    'title'     => __('BlogHovar Theme Options', 'bloghovar'),
  ) );
  
  // 404 page content
  require_once get_template_directory() . '/inc/theme-options/error-content.php';

  // Footer Contact Info
  require_once get_template_directory() . '/inc/theme-options/contact.php';

  // Copyright Text
  require_once get_template_directory() . '/inc/theme-options/copyright.php';

  // Social Media
  require_once get_template_directory() . '/inc/theme-options/social-media.php';

}
add_action('customize_register', 'bloghovar_theme_options');