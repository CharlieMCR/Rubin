<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}
add_action('init', 'register_theme_menus');

function cmcr_theme_styles() {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );

	wp_enqueue_style('googlefont_css', 'http://fonts.googleapis.com/css?family=Droid+Sans:400,700');

	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css');

}
add_action('wp_enqueue_scripts', 'cmcr_theme_styles');

function cmcr_theme_js() {

	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );

	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );

	wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
}
add_action( 'wp_enqueue_scripts', 'cmcr_theme_js');

 ?>