<?php

function bloghovar_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'swipper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'master', get_template_directory_uri() . '/assets/css/master.css', array(), _S_VERSION );
	wp_enqueue_style( 'bloghovar-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bloghovar-style', 'rtl', 'replace' );



	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bloghovar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bloghovar_scripts' );