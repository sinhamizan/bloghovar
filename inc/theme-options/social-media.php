<?php
  // Social Media Section


  $wp_customize->add_section( 'bloghovar_social_media_section', array(
    'title'     => __( 'Social Media', 'bloghovar' ),
    'panel'     => 'bloghovar_theme_option_panel',
  ) );

  // Facebook link
  $wp_customize->add_setting( 'bloghovar_facebook_link', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_facebook_link', array(
    'label'     => __( 'Facebook Link', 'bloghovar' ),
    'section'   => 'bloghovar_social_media_section',
    'description' => 'Keep it blank if don\'t want to display in fronend.',
    'type'      => 'text',
  ) );


  // LinkedIn link
  $wp_customize->add_setting( 'bloghovar_linkedin_link', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_linkedin_link', array(
    'label'     => __( 'LinkedIn Link', 'bloghovar' ),
    'section'   => 'bloghovar_social_media_section',
    'description' => 'Keep it blank if don\'t want to display in fronend.',
    'type'      => 'text',
  ) );


  // Twitter link
  $wp_customize->add_setting( 'bloghovar_twitter_link', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_twitter_link', array(
    'label'     => __( 'Twitter Link', 'bloghovar' ),
    'section'   => 'bloghovar_social_media_section',
    'description' => 'Keep it blank if don\'t want to display in fronend.',
    'type'      => 'text',
  ) );


  // YouTube link
  $wp_customize->add_setting( 'bloghovar_youtube_link', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_youtube_link', array(
    'label'     => __( 'YouTube Link', 'bloghovar' ),
    'section'   => 'bloghovar_social_media_section',
    'description' => 'Keep it blank if don\'t want to display in fronend.',
    'type'      => 'text',
  ) );


  // Instagram link
  $wp_customize->add_setting( 'bloghovar_instagram_link', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_instagram_link', array(
    'label'     => __( 'Instagram Link', 'bloghovar' ),
    'section'   => 'bloghovar_social_media_section',
    'description' => 'Keep it blank if don\'t want to display in fronend.',
    'type'      => 'text',
  ) );

  
  // Pinterest link
  $wp_customize->add_setting( 'bloghovar_pinterest_link', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_pinterest_link', array(
    'label'     => __( 'Pinterest Link', 'bloghovar' ),
    'section'   => 'bloghovar_social_media_section',
    'description' => 'Keep it blank if don\'t want to display in fronend.',
    'type'      => 'text',
  ) );
