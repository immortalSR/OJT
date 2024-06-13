<?php
/**
 * Block Patterns
 *
 * @package hockey_sports
 * @since 1.0
 */

function hockey_sports_register_block_patterns() {
	$block_pattern_categories = array(
		'hockey-sports' => array( 'label' => esc_html__( 'Hockey Sports', 'hockey-sports' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'hockey-sports' ) ),
	);

	$block_pattern_categories = apply_filters( 'hockey_sports_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'hockey_sports_register_block_patterns', 9 );