<?php
/**
	* Define Theme Version
 */
define( 'VILLAPRESS_THEME_VERSION', '1.1' );	
	
function villapress_css() {
	$parent_style = 'aravalli-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'villapress-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('villapress-color-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('aravalli-color-default');
	
	wp_enqueue_style('villapress-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('aravalli-media-query');

	wp_enqueue_style('villapress-editor-style',get_stylesheet_directory_uri().'/assets/css/editor-style.css');
	wp_dequeue_style('aravalli-editor-style');

	wp_dequeue_script('aravalli-custom-js');
	wp_enqueue_script('villapress-custom', get_stylesheet_directory_uri() .'/assets/js/custom.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'villapress_css',999);
   	

function villapress_setup()	{	
	add_theme_support( 'custom-header', apply_filters( 'villapress_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'aravalli_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'villapress_setup' );

/**
 * Called all the Customize file.
 */
require( get_stylesheet_directory() . '/inc/customize/villapress-premium.php');

/**
 * Import Options From Parent Theme
 *
 */
function villapress_parent_theme_options() {
	$aravalli_mods = get_option( 'theme_mods_aravalli' );
	if ( ! empty( $aravalli_mods ) ) {
		foreach ( $aravalli_mods as $aravalli_mod_k => $aravalli_mod_v ) {
			set_theme_mod( $aravalli_mod_k, $aravalli_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'villapress_parent_theme_options' );