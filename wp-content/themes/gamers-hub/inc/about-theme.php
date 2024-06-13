<?php
/**
 * Gamers Hub Theme Page
 *
 * @package Gamers Hub
 */

function gamers_hub_admin_scripts() {
	wp_dequeue_script('gamers-hub-custom-scripts');
}
add_action( 'admin_enqueue_scripts', 'gamers_hub_admin_scripts' );

if ( ! defined( 'GAMERS_HUB_FREE_THEME_URL' ) ) {
	define( 'GAMERS_HUB_FREE_THEME_URL', 'https://www.themespride.com/themes/free-gamer-wordpress-theme/' );
}
if ( ! defined( 'GAMERS_HUB_PRO_THEME_URL' ) ) {
	define( 'GAMERS_HUB_PRO_THEME_URL', 'https://www.themespride.com/themes/gamers-hub-wordpress-theme/' );
}
if ( ! defined( 'GAMERS_HUB_DEMO_THEME_URL' ) ) {
	define( 'GAMERS_HUB_DEMO_THEME_URL', 'https://themespride.com/demo/gamers-hub-pro/' );
}
if ( ! defined( 'GAMERS_HUB_DOCS_THEME_URL' ) ) {
    define( 'GAMERS_HUB_DOCS_THEME_URL', 'https://www.themespride.com/demo/docs/gamers-hub-lite/' );
}
if ( ! defined( 'GAMERS_HUB_DOCS_URL' ) ) {
    define( 'GAMERS_HUB_DOCS_URL', 'https://www.themespride.com/demo/docs/gamers-hub-lite/' );
}
if ( ! defined( 'GAMERS_HUB_RATE_THEME_URL' ) ) {
    define( 'GAMERS_HUB_RATE_THEME_URL', 'https://wordpress.org/support/theme/gamers-hub/reviews/#new-post' );
}
if ( ! defined( 'GAMERS_HUB_SUPPORT_THEME_URL' ) ) {
    define( 'GAMERS_HUB_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/gamers-hub' );
}
if ( ! defined( 'GAMERS_HUB_CHANGELOG_THEME_URL' ) ) {
    define( 'GAMERS_HUB_CHANGELOG_THEME_URL', get_template_directory() . '/readme.txt' );
}
if ( ! defined( 'WEIGHT_LOSS_CENTER_THEME_BUNDLE' ) ) {
    define( 'WEIGHT_LOSS_CENTER_THEME_BUNDLE', 'https://www.themespride.com/themes/wordpress-theme-bundle/' );
}

/**
 * Add theme page
 */
function gamers_hub_menu() {
	add_theme_page( esc_html__( 'About Theme', 'gamers-hub' ), esc_html__( 'About Theme', 'gamers-hub' ), 'edit_theme_options', 'gamers-hub-about', 'gamers_hub_about_display' );
}
add_action( 'admin_menu', 'gamers_hub_menu' );

/**
 * Display About page
 */
function gamers_hub_about_display() {
	$gamers_hub_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $gamers_hub_theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$gamers_hub_description = explode( '. ', $gamers_hub_theme->get( 'Description' ) );

					array_pop( $gamers_hub_description );

					$gamers_hub_description = implode( '. ', $gamers_hub_description );

					echo esc_html( $gamers_hub_description . '.' );
				?></p>
				<p class="actions">
					<a href="<?php echo esc_url( GAMERS_HUB_FREE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'gamers-hub' ); ?></a>

					<a href="<?php echo esc_url( GAMERS_HUB_DEMO_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'gamers-hub' ); ?></a>

					<a href="<?php echo esc_url( GAMERS_HUB_DOCS_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'gamers-hub' ); ?></a>

					<a href="<?php echo esc_url( GAMERS_HUB_RATE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Rate this theme', 'gamers-hub' ); ?></a>

					<a href="<?php echo esc_url( GAMERS_HUB_PRO_THEME_URL ); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'gamers-hub' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $gamers_hub_theme->get_screenshot() ); ?>" />
			</div>

		</div>

		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'gamers-hub' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'gamers-hub-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'gamers-hub-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'gamers-hub' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'gamers-hub-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'gamers-hub' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'gamers-hub-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'gamers-hub' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'gamers-hub-about', 'tab' => 'get_bundle' ), 'themes.php' ) ) ); ?>" class="blink wp-bundle nav-tab<?php echo ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Get WordPress Theme Bundle', 'gamers-hub' ); ?></a>
		</nav>

		<?php
			gamers_hub_main_screen();

			gamers_hub_changelog_screen();

			gamers_hub_free_vs_pro();

			gamers_hub_get_bundle();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'gamers-hub' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'gamers-hub' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'gamers-hub' ) : esc_html_e( 'Go to Dashboard', 'gamers-hub' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function gamers_hub_main_screen() {
	if ( isset( $_GET['page'] ) && 'gamers-hub-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'gamers-hub' ); ?></h2>
				<p><?php esc_html_e( 'All Theme Options are available via Customize screen.', 'gamers-hub' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'gamers-hub' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'gamers-hub' ); ?></h2>
				<p><?php esc_html_e( 'Get genuine support from genuine people. Whether it\'s customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'gamers-hub' ) ?></p>
				<p><a href="<?php echo esc_url( GAMERS_HUB_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'gamers-hub' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Upgrade To Premium With Straight 20% OFF.', 'gamers-hub' ); ?></h2>
				<p><?php esc_html_e( 'Get our amazing WordPress theme with exclusive 20% off use the coupon', 'gamers-hub' ) ?>"<input type="text" value="GETPro20" id="myInput">".</p>
				<button class="button button-primary"><?php esc_html_e( 'GETPro20', 'gamers-hub' ); ?></button>
			</div>
		</div>
	<?php
	}
}

/**
 * Output the changelog screen.
 */
function gamers_hub_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View changelog below:', 'gamers-hub' ); ?></p>

			<?php
				$changelog_file = apply_filters( 'gamers_hub_changelog_file', GAMERS_HUB_CHANGELOG_THEME_URL );

				// Check if the changelog file exists and is readable.
				if ( $changelog_file && is_readable( $changelog_file ) ) {
					WP_Filesystem();
					$changelog = $wp_filesystem->get_contents( $changelog_file );
					$changelog_list = gamers_hub_parse_changelog( $changelog );

					echo wp_kses_post( $changelog_list );
				}
			?>
		</div>
	<?php
	}
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function gamers_hub_parse_changelog( $content ) {
	// Explode content with ==  to juse separate main content to array of headings.
	$content = explode ( '== ', $content );

	$changelog_isolated = '';

	// Get element with 'Changelog ==' as starting string, i.e isolate changelog.
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}

	// Now Explode $changelog_isolated to manupulate it to add html elements.
	$changelog_array = explode( '= ', $changelog_isolated );

	// Unset first element as it is empty.
	unset( $changelog_array[0] );

	$changelog = '<pre class="changelog">';

	foreach ( $changelog_array as $value) {
		// Replace all enter (\n) elements with </span><span> , opening and closing span will be added in next process.
		$value = preg_replace( '/\n+/', '</span><span>', $value );

		// Add openinf and closing div and span, only first span element will have heading class.
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div>';

		// Remove empty <span></span> element which newr formed at the end.
		$changelog .= str_replace( '<span></span>', '', $value );
	}

	$changelog .= '</pre>';

	return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function gamers_hub_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'gamers-hub' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'gamers-hub' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'gamers-hub' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Theme Demo Set Up', 'gamers-hub' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Templates, Color options and Fonts', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Included Demo Content', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Section Ordering', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Multiple Sections', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Plugins', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Premium Technical Support', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access to Support Forums', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Free updates', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Unlimited Domains', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Responsive Design', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Live Customizer', 'gamers-hub' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a href="<?php echo esc_url( GAMERS_HUB_PRO_THEME_URL ); ?>" class="sidebar-button single-btn" target="_blank"><?php esc_html_e( 'Go For Premium', 'gamers-hub' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function gamers_hub_get_bundle() {
	if ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'Get WordPress Theme Bundle', 'gamers-hub' ); ?></p>
			<div class="col card">
				<h2 class="title"><?php esc_html_e( ' WordPress Theme Bundle of 65+ Themes At 15% Discount. ', 'gamers-hub' ); ?></h2>
				<p><?php esc_html_e( 'Spring Offer Is To Get WP Bundle of 65+ Themes At 15% Discount use the coupon', 'gamers-hub' ) ?>"<input type="text" value=" TPRIDE15 "  id="myInput">".</p>
				<p><a target="_blank" href="<?php echo esc_url( WEIGHT_LOSS_CENTER_THEME_BUNDLE ); ?>" class="button button-primary"><?php esc_html_e( 'Theme Bundle', 'gamers-hub' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}
