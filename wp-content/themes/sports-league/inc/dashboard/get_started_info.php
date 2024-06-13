<?php

add_action( 'admin_menu', 'sports_league_gettingstarted' );
function sports_league_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'sports-league'), esc_html__('About Theme', 'sports-league'), 'edit_theme_options', 'sports-league-guide-page', 'sports_league_guide');
}

function sports_league_admin_theme_style() {
   wp_enqueue_style('sports-league-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'sports_league_admin_theme_style');

function sports_league_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Sports League, you rock!', 'sports-league' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional automobile website. Please Click on the link below to know the theme setup information.', 'sports-league' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=sports-league-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'sports-league' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'sports_league_notice');

/**
 * Theme Info Page
 */
function sports_league_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'sports-league' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Sports League', 'sports-league' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'sports-league' ); ?>
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'sports-league' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( SPORTS_LEAGUE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'sports-league'); ?></a>
						<a href="<?php echo esc_url( SPORTS_LEAGUE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'sports-league'); ?></a>
						<a href="<?php echo esc_url( SPORTS_LEAGUE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'sports-league'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Sports League Theme', 'sports-league' ); ?></h2>
			<div class="row">
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		           <p><?php esc_html_e( 'The Ultimate Sports League WordPress theme is a visually stunning and feature-rich theme designed specifically for sports leagues and organizations. With its modern and professional design, the theme aims to provide a seamless user experience for both administrators and visitors to the website. It has some key features and functionalities like Responsive Design, Customizable Homepage, Social Media Integration, Multimedia Support, Blogging Capabilities. The theme includes a blog section where you can share news, articles, interviews, and other sports-related content. This feature helps you establish your league as an authoritative source of information and provides additional value to your audience. Overall, the Ultimate Sports League WordPress theme offers a comprehensive solution for building a professional and engaging website for your sports league. With its user-friendly interface and robust features, it enables you to effectively manage league activities, engage with participants and fans, and promote your sports events.', 'sports-league' ); ?><p><br>
					        <ol>
								    <li><?php esc_html_e( 'Start','sports-league'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','sports-league'); ?></a> <?php esc_html_e( 'your website.','sports-league'); ?> </li>
								    <li><?php esc_html_e( 'Sports League','sports-league'); ?> <a target="_blank" href="<?php echo esc_url( SPORTS_LEAGUE_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','sports-league'); ?></a> </li>
							    </ol>
	         </div>
	      </div>
				 <div class="col-md-5">
						<div class="pad-box">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
						</div>
	      </div>
      </div>
			  <div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','sports-league'); ?></h2>
				   	<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','sports-league'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'The premium Sports League WordPress Theme is designed for sports enthusiasts and organizations who want to showcase their teams, matches, and events in a dynamic and professional manner. With its sleek and modern design, this theme offers a range of features tailored specifically for sports leagues. Easily create team profiles, display match schedules, and highlight player statistics with the themes user-friendly interface. Engage your audience by sharing live scores and match updates using the built-in live score feature. The theme also includes customizable widgets, allowing you to add social media integration, countdown timers, and more. Sports League WordPress Theme is fully responsive and mobile-friendly, ensuring your website looks great on any device. It is also compatible with popular plugins, allowing you to extend its functionality even further. With its powerful customization options and intuitive admin panel, this theme is the perfect choice for sports leagues, clubs, and fans alike.', 'sports-league' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Features','sports-league'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Theme options using Customizer API','sports-league'); ?></li>
										<li><?php esc_html_e( 'Responsive design','sports-league'); ?></li>
										<li><?php esc_html_e( 'Site Icon and Logo option','sports-league'); ?></li>
										<li><?php esc_html_e( 'Header Images option','sports-league'); ?></li>
										<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization','sports-league'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets','sports-league'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options','sports-league'); ?></li>
										<li><?php esc_html_e( 'Pagination option','sports-league'); ?></li>
										<li><?php esc_html_e( 'Demo Importer','sports-league'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections','sports-league'); ?></li>
										<li><?php esc_html_e( 'Main Slider','sports-league'); ?></li>
										<li><?php esc_html_e( 'Woocommerce Compatible','sports-league'); ?></li>
										<li><?php esc_html_e( 'Unlimited Slides','sports-league'); ?></li>
										<li><?php esc_html_e( 'Section to show categories','sports-league'); ?></li>
										<li><?php esc_html_e( 'Product Listing based on category','sports-league'); ?></li>
										<li><?php esc_html_e( 'Top Categories Section','sports-league'); ?></li>
										<li><?php esc_html_e( 'Best Seller Tab','sports-league'); ?></li>
										<li><?php esc_html_e( 'Testimonial with custom post type','sports-league'); ?></li>
										<li><?php esc_html_e( 'Promotional Banners','sports-league'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','sports-league'); ?></li>
										<li><?php esc_html_e( 'Shortcodes for Testimonials','sports-league'); ?></li>
										<li><?php esc_html_e( 'Newsletter with the help of contact form 7.','sports-league'); ?></li>
										<li><?php esc_html_e( 'Well-sanitized as per WordPress standards.','sports-league'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','sports-league'); ?></li>
										<li><?php esc_html_e( 'Typography for the complete website','sports-league'); ?></li>
										<li><?php esc_html_e( 'Global Color pallete','sports-league'); ?></li>
										<li><?php esc_html_e( 'Section specific Color pallete','sports-league'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with Font Awesome Icon','sports-league'); ?></li>
										<li><?php esc_html_e( 'Instagram Section','sports-league'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','sports-league'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','sports-league'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','sports-league'); ?></li>
										<li><?php esc_html_e( 'Allow setting site title, tagline, logo','sports-league'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar','sports-league'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads','sports-league'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page','sports-league'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','sports-league'); ?></li>
										<li><?php esc_html_e( 'Contact Page Template','sports-league'); ?></li>
										<li><?php esc_html_e( 'Blog Full width and right and left sidebar','sports-league'); ?></li>
										<li><?php esc_html_e( 'Recent post widget with images, Related post','sports-league'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','sports-league'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( SPORTS_LEAGUE_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','sports-league'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( SPORTS_LEAGUE_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','sports-league'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','sports-league'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','sports-league'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','sports-league'); ?></a> <?php esc_html_e( 'your website.','sports-league'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','sports-league'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( SPORTS_LEAGUE_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','sports-league'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( SPORTS_LEAGUE_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','sports-league'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','sports-league'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( SPORTS_LEAGUE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'sports-league'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>
