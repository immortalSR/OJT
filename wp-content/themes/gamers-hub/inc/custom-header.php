<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses gamers_hub_header_style()
 */
function gamers_hub_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'gamers_hub_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-width'         	 => true,
    	'flex-height'            => true,
		'wp-head-callback'       => 'gamers_hub_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'gamers_hub_custom_header_setup' );

if ( ! function_exists( 'gamers_hub_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see gamers_hub_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'gamers_hub_header_style' );
function gamers_hub_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$gamers_hub_custom_css = "
        .headerbox,.header-img{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'gamers-hub-style', $gamers_hub_custom_css );
	endif;
}
endif;
