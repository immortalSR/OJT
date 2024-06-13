<?php
/**
 * Theme About Page
 *
 * @package Sportspot
 * @since 1.0
 */

function sportspot_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_sportspot-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible sportspot-admin-notice">
        <div class="sportspot-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Sportspot Pro', 'sportspot' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 30+ Pre-Designed Block Patterns, 30 FSE Templates, and 15 Template Parts  that are highly customizable and fully responsive.', 'sportspot' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/sportspot-pro/'); ?>"><?php esc_html_e( 'Get Sportspot Pro', 'sportspot' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=sportspot-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'sportspot' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'sportspot_admin_plugin_notice' );

function sportspot_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'sportspot-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'sportspot_theme_page_admin_style' );

/**
 * Add theme page
 */
function sportspot_menu() {
	add_theme_page( esc_html__( 'Sportspot', 'sportspot' ), esc_html__( 'Sportspot', 'sportspot' ), 'edit_theme_options', 'sportspot-theme', 'sportspot_theme_page_display' );
}
add_action( 'admin_menu', 'sportspot_menu' );

/**
 * Display About page
 */
function sportspot_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'sportspot' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Sportspot!', 'sportspot' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Sportspot has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'sportspot' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/sportspot/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'sportspot' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Sportspot Pro Theme', 'sportspot' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to Sportspot Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'sportspot' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/sportspot-pro/"><?php esc_html_e( 'Buy Sportspot Pro', 'sportspot' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'sportspot' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'sportspot' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/sportspot/"><?php esc_html_e( 'View Demo', 'sportspot' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/fse-faq' ); ?>"><?php esc_html_e( 'FSE FAQs', 'sportspot' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'sportspot' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'sportspot' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'sportspot' ); ?></h3>
						<p><?php esc_html_e( 'Loved Sportspot? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'sportspot' ); ?></p>
						<a href="https://wordpress.org/support/theme/sportspot/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'sportspot' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
