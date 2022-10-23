<?php
// CopyRight Section


$wp_customize->add_section( 'bloghovar_copyright_section', array(
  'title'     => __('Copyright Text', 'bloghovar'),
  'panel'     => 'bloghovar_theme_option_panel',
) );

$wp_customize->add_setting( 'copyright_text', array(
  'default'   => 'All Right reserved!',
  'transport' => 'refresh',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( 'copyright_text', array(
  'label'      => __( 'Enter Copyright Text Here', 'bloghovar' ),
  'section'    => 'bloghovar_copyright_section',
  'type'       => 'text',
) );