<?php  
  /**
   * Error Content
   */


   $wp_customize->add_section( 'bloghovar_404_section', array(
    'title'     => __( '404 Page Content', 'bloghovar'),
    'panel'     => 'bloghovar_theme_option_panel',
   ) );

  $wp_customize->add_setting( 'bloghovar_error_title', array(
    'default'   => 'Error 404 - Page Not Found',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_error_title', array(
    'label'     => __('Title', 'bloghovar' ),
    'section'   => 'bloghovar_404_section',
    'type'      => 'text',
  ) );

  $wp_customize->add_setting( 'bloghovar_error_desc', array(
    'default'   => 'Description Here',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_error_desc', array(
    'label'     => __('Content', 'bloghovar' ),
    'section'   => 'bloghovar_404_section',
    'type'      => 'textarea',
  ) );

  $wp_customize->add_setting( 'bloghovar_error_btn_text', array(
    'default'   => 'Go Home',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_error_btn_text', array(
    'label'     => __('Button Text', 'bloghovar' ),
    'section'   => 'bloghovar_404_section',
    'type'      => 'text',
  ) );

?>