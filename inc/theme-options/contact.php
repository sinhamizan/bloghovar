<?php
  /**
   * Footer Contact
   */


  $wp_customize->add_section( 'bloghovar_footer_contact_section', array(
    'title'    => 'Footer Contact Info',
    'panel'    => 'bloghovar_theme_option_panel',
  ) );

  // Contact location
  $wp_customize->add_setting( 'bloghovar_footer_location', array(
    'default'    => '',
    'transport'  => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_footer_location', array(
    'label'       => __( 'Company Location', 'bloghovar' ),
    'section'     => 'bloghovar_footer_contact_section',
    'description' => 'Keep blank if don\'t need display frontend.',
    'type'        => 'text',
  ) );

  // Contact Phone
  $wp_customize->add_setting( 'bloghovar_footer_phone', array(
    'default'    => '',
    'transport'  => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_footer_phone', array(
    'label'       => __( 'Company Phone Number', 'bloghovar' ),
    'section'     => 'bloghovar_footer_contact_section',
    'description' => 'Keep blank if don\'t need display frontend.',
    'type'        => 'text',
  ) );

  // Contact Email
  $wp_customize->add_setting( 'bloghovar_footer_email', array(
    'default'    => '',
    'transport'  => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_footer_email', array(
    'label'       => __( 'Company Email', 'bloghovar' ),
    'section'     => 'bloghovar_footer_contact_section',
    'description' => 'Keep blank if don\'t need display frontend.',
    'type'        => 'text',
  ) );



  
  // Additional Info
  $wp_customize->add_section( 'bloghovar_footer_additional_text_section', array(
    'title'    => 'Footer Text',
    'panel'    => 'bloghovar_theme_option_panel',
  ) );

  $wp_customize->add_setting( 'bloghovar_footer_additional_text', array(
    'default'    => '',
    'transport'  => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );

  $wp_customize->add_control( 'bloghovar_footer_additional_text', array(
    'label'       => __( 'Text under Footer Logo', 'bloghovar' ),
    'section'     => 'bloghovar_footer_additional_text_section',
    'description' => 'Keep blank if don\'t need display frontend.',
    'type'        => 'textarea',
  ) );