<?php

add_action( 'admin_menu', 'hockey_sports_getting_started' );
function hockey_sports_getting_started() {
	add_theme_page( esc_html__('Get Started', 'hockey-sports'), esc_html__('Get Started', 'hockey-sports'), 'edit_theme_options', 'hockey-sports-guide-page', 'hockey_sports_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function hockey_sports_admin_theme_style() {
   wp_enqueue_style('hockey-sports-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'hockey_sports_admin_theme_style');

//guidline for about theme
function hockey_sports_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'hockey-sports' );
?>
<div class="wrapper-info">
	<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Hockey Sports WordPress Theme', 'hockey-sports' ); ?></h3>
			<p><?php esc_html_e( 'Version:', 'hockey-sports' ); ?> <?php echo esc_html($theme['Version']);?></p>
		</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Pro version of our theme', 'hockey-sports'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Then we will proceed for pro version of theme.', 'hockey-sports'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( HOCKEY_SPORTS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'hockey-sports'); ?></a>
				<hr>
				<h4><?php esc_html_e('Check Our Demo', 'hockey-sports'); ?></h4>
				<p><?php esc_html_e('Here, you can view a live demonstration of our theme.', 'hockey-sports'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( HOCKEY_SPORTS_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'hockey-sports'); ?></a>
				<hr>
				<h4><?php esc_html_e('Theme Documentation', 'hockey-sports'); ?></h4>
				<p><?php esc_html_e('Need more details? Please check our full documentation for detailed theme setup.', 'hockey-sports'); ?></p>
				<a href="<?php echo esc_url( HOCKEY_SPORTS_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'hockey-sports'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'hockey-sports'); ?></h4>
				<p><?php esc_html_e('Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'hockey-sports'); ?></p>
				<a href="<?php echo esc_url( HOCKEY_SPORTS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'hockey-sports'); ?></a>
				<hr>
				<h4><?php esc_html_e('Leave us a review', 'hockey-sports'); ?></h4>
				<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'hockey-sports'); ?></p>
				<a href="<?php echo esc_url( HOCKEY_SPORTS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'hockey-sports'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>