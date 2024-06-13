<?php
/**
 * Hockey Sports functions and definitions
 *
 * @package hockey_sports
 * @since 1.0
 */

if ( ! function_exists( 'hockey_sports_support' ) ) :
	function hockey_sports_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'hockey_sports_support' );

if ( ! function_exists( 'hockey_sports_styles' ) ) :
	function hockey_sports_styles() {
		// Register theme stylesheet.
		$hockey_sports_theme_version = wp_get_theme()->get( 'Version' );

		$hockey_sports_version_string = is_string( $hockey_sports_theme_version ) ? $hockey_sports_theme_version : false;
		wp_enqueue_style(
			'hockey-sports-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$hockey_sports_version_string
		);

		// Enqueue the 'animate-style' stylesheet
		wp_enqueue_style( 'animate-style', 
			get_template_directory_uri() . '/assets/css/animate.min.css', 
			array(), 
			$hockey_sports_theme_version, 
			'all' 
		);
		
		// Enqueue the 'themeanimate-js' script, dependent on jQuery
		wp_enqueue_script( 'themeanimate-js', 
			get_template_directory_uri() . '/assets/js/themeanimate.js', 
			array( 'jquery' ), 
			$hockey_sports_theme_version, true 
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'hockey_sports_styles' );

/* Theme Credit link */
define('HOCKEY_SPORTS_BUY_NOW',__('https://www.cretathemes.com/gutenberg/hockey-wordpress-theme/','hockey-sports'));
define('HOCKEY_SPORTS_PRO_DEMO',__('https://www.cretathemes.com/preview/hockey-sports/','hockey-sports'));
define('HOCKEY_SPORTS_THEME_DOC',__('https://www.cretathemes.com/pro-guide/hockey-sports/','hockey-sports'));
define('HOCKEY_SPORTS_SUPPORT',__('https://wordpress.org/support/theme/hockey-sports/','hockey-sports'));
define('HOCKEY_SPORTS_REVIEW',__('https://wordpress.org/support/theme/hockey-sports/reviews/#new-post','hockey-sports'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function hockey_sports_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'hockey_sports_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_hockey-sports-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing Hockey Sports Theme!', 'hockey-sports'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=hockey-sports-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'hockey-sports'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?hockey_sports_admin_notice=1"><?php esc_html_e( 'Dismiss', 'hockey-sports' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'hockey_sports_admin_notice' );

if( ! function_exists( 'hockey_sports_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function hockey_sports_update_admin_notice(){
    if ( isset( $_GET['hockey_sports_admin_notice'] ) && $_GET['hockey_sports_admin_notice'] = '1' ) {
        update_option( 'hockey_sports_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'hockey_sports_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'hockey_sports_getstart_setup_options');
function hockey_sports_getstart_setup_options () {
    update_option('hockey_sports_admin_notice', FALSE );
}