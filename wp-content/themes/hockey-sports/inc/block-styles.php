<?php
/**
 * Block Styles
 *
 * @package hockey_sports
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function hockey_sports_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'hockey-sports-padding-0',
				'label' => esc_html__( 'No Padding', 'hockey-sports' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'hockey-sports-post-author-card',
				'label' => esc_html__( 'Theme Style', 'hockey-sports' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'hockey-sports-button',
				'label'        => esc_html__( 'Plain', 'hockey-sports' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'hockey-sports-post-comments',
				'label'        => esc_html__( 'Theme Style', 'hockey-sports' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'hockey-sports-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'hockey-sports' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'hockey-sports-wp-table',
				'label'        => esc_html__( 'Theme Style', 'hockey-sports' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'hockey-sports-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'hockey-sports' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'hockey-sports-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'hockey-sports' ),
			)
		);
	}
	add_action( 'init', 'hockey_sports_register_block_styles' );
}
