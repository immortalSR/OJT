<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function gamers_hub_categorized_blog() {
	$gamers_hub_category_count = get_transient( 'gamers_hub_categories' );

	if ( false === $gamers_hub_category_count ) {
		// Create an array of all the categories that are attached to posts.
		$gamers_hub_categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$gamers_hub_category_count = count( $gamers_hub_categories );

		set_transient( 'gamers_hub_categories', $gamers_hub_category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $gamers_hub_category_count > 1;
}

if ( ! function_exists( 'gamers_hub_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Gamers Hub
 */
function gamers_hub_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Flush out the transients used in gamers_hub_categorized_blog.
 */
function gamers_hub_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'gamers_hub_categories' );
}
add_action( 'edit_category', 'gamers_hub_category_transient_flusher' );
add_action( 'save_post',     'gamers_hub_category_transient_flusher' );
