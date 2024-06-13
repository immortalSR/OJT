<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Sportspot
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function sportspot_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'sportspot-padding-0',
				'label' => esc_html__( 'No Padding', 'sportspot' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'sportspot-post-author-card',
				'label' => esc_html__( 'Theme Style', 'sportspot' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'sportspot-button',
				'label'        => esc_html__( 'Plain', 'sportspot' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'sportspot-post-comments',
				'label'        => esc_html__( 'Theme Style', 'sportspot' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'sportspot-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'sportspot' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'sportspot-wp-table',
				'label'        => esc_html__( 'Theme Style', 'sportspot' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'sportspot-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'sportspot' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'sportspot-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'sportspot' ),
			)
		);
	}
	add_action( 'init', 'sportspot_register_block_styles' );
}
