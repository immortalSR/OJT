<?php
/**
 * @package Sports League
 * @subpackage sports-league
 * @since sports-league 1.0
 * Setup the WordPress core custom header feature.
 * @uses sports_league_header_style()
*/

function sports_league_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'sports_league_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 70,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'sports_league_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'sports_league_custom_header_setup' );

if ( ! function_exists( 'sports_league_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'sports_league_header_style' );
function sports_league_header_style() {
	if ( get_header_image() ) :
	$sports_league_custom_css = "
        .middle-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'sports-league-basic-style', $sports_league_custom_css );
	endif;
}
endif;