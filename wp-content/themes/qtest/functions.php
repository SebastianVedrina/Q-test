<?php


//Enqueue_styles
if ( ! function_exists( 'Wps_load_styles' ) ) {
function Wps_load_styles() {

	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/style.css');

	wp_enqueue_style( 'skeleton-base' );

}
add_action('wp_enqueue_scripts', 'Wps_load_styles');
} // endif
