<?php
function ammcasting_setup() {
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
}
add_action('after_setup_theme', 'ammcasting_setup');

add_filter( 'wp_title', 'ammcasting_filter_wp_title' );
function ammcasting_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'wp_enqueue_scripts', 'ammcasting_load_scripts' );
function ammcasting_load_scripts() {
	wp_enqueue_script('ammcastingscript_app', get_stylesheet_directory_uri() . '/build/app.min.js');
	wp_enqueue_script('ammcastingscript_swiper', get_stylesheet_directory_uri() . '/build/swiper.min.js');
	wp_register_style('ammcastingstyle', get_stylesheet_directory_uri() . '/build/style.min.css' );
  wp_register_style('ammcastingswiper', get_stylesheet_directory_uri() . '/build/swiper.min.css' );
	wp_enqueue_style('ammcastingstyle');
	wp_enqueue_style('ammcastingswiper');
}
