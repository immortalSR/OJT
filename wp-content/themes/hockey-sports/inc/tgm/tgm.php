<?php
/**
 * Recommended plugins.
 */
	
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function hockey_sports_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Getwid – Gutenberg Blocks', 'hockey-sports' ),
			'slug'             => 'getwid',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	hockey_sports_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'hockey_sports_register_recommended_plugins' );