<?php

get_template_part( '/inc/tgm/class-tgm-plugin-activation');
/**
 * Recommended plugins.
 */
function sports_league_proregister_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Woocommerce', 'sports-league' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'sports_league_proregister_recommended_plugins' );