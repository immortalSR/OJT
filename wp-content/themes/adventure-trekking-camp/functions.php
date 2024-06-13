<?php
/**
 * Adventure Trekking Camp functions and definitions
 *
 * @subpackage Adventure Trekking Camp
 * @since 1.0
 */

//woocommerce//
//shop page no of columns
function adventure_trekking_camp_woocommerce_loop_columns() {
	
	$retrun = get_theme_mod( 'adventure_trekking_camp_archieve_item_columns', 3 );
    
    return $retrun;
}
add_filter( 'loop_shop_columns', 'adventure_trekking_camp_woocommerce_loop_columns' );
function adventure_trekking_camp_woocommerce_products_per_page() {

		$retrun = get_theme_mod( 'adventure_trekking_camp_archieve_shop_perpage', 6 );
    
    return $retrun;
}
add_filter( 'loop_shop_per_page', 'adventure_trekking_camp_woocommerce_products_per_page' );
// related products
function adventure_trekking_camp_related_products_args( $args ) {
    $defaults = array(
        'posts_per_page' => get_theme_mod( 'adventure_trekking_camp_related_shop_perpage', 3 ),
        'columns'        => get_theme_mod( 'adventure_trekking_camp_related_item_columns', 3),
    );

    $args = wp_parse_args( $defaults, $args );

    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'adventure_trekking_camp_related_products_args' );
function adventure_trekking_camp_related_products_heading($adventure_trekking_camp_translated_text, $text, $domain) {
    $adventure_trekking_camp_heading = get_theme_mod('woocommerce_related_products_heading', 'Related products');

    if ($text === 'Related products' && $domain === 'woocommerce') {
        $adventure_trekking_camp_translated_text = $adventure_trekking_camp_heading;
    }
    return $adventure_trekking_camp_translated_text;
}
add_filter('gettext', 'adventure_trekking_camp_related_products_heading', 20, 3);
// breadcrumb seperator
function adventure_trekking_camp_woocommerce_breadcrumb_separator($adventure_trekking_camp_defaults) {
    $adventure_trekking_camp_separator = get_theme_mod('woocommerce_breadcrumb_separator', ' / ');

    // Update the separator
    $adventure_trekking_camp_defaults['delimiter'] = $adventure_trekking_camp_separator;

    return $adventure_trekking_camp_defaults;
}
add_filter('woocommerce_breadcrumb_defaults', 'adventure_trekking_camp_woocommerce_breadcrumb_separator');

//add animation class
if ( class_exists( 'WooCommerce' ) ) { 
	add_filter('post_class', function($adventure_trekking_camp_classes, $class, $product_id) {
	    if( is_shop() || is_product_category() ){
	        
	        $adventure_trekking_camp_classes = array_merge(['wow','swing'], $adventure_trekking_camp_classes);
	    }
	    return $adventure_trekking_camp_classes;
	},10,3);
}
//woocommerce-end//

// Get start function
function adventure_trekking_camp_custom_admin_notice() {
    // Check if the notice is dismissed
    if (!get_user_meta(get_current_user_id(), 'dismissed_admin_notice', true)) {
        // Check if not on the theme documentation page
        $adventure_trekking_camp_current_screen = get_current_screen();
        if ($adventure_trekking_camp_current_screen && $adventure_trekking_camp_current_screen->id !== 'appearance_page_adventure-trekking-camp-guide-page') {
            $adventure_trekking_camp_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php echo esc_html($adventure_trekking_camp_theme->get('Name')); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'adventure-trekking-camp'); ?></p>
                    </div>
                    <a class="button-primary" href="themes.php?page=adventure-trekking-camp-guide-page"><?php _e('Theme Documentation', 'adventure-trekking-camp'); ?></a>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'adventure_trekking_camp_custom_admin_notice');
// Dismiss notice function
function adventure_trekking_camp_dismiss_admin_notice() {
    update_user_meta(get_current_user_id(), 'dismissed_admin_notice', true);
}
add_action('wp_ajax_adventure_trekking_camp_dismiss_admin_notice', 'adventure_trekking_camp_dismiss_admin_notice');
// Enqueue scripts and styles
function adventure_trekking_camp_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('adventure-trekking-camp-admin.js', get_theme_file_uri('/assets/js/adventure-trekking-camp-admin.js'), array('jquery'), true);

    wp_localize_script('adventure-trekking-camp-admin.js', 'adventure_trekking_camp_scripts_localize', array(
        'ajax_url' => esc_url(admin_url('admin-ajax.php'))
    ));
}
add_action('admin_enqueue_scripts', 'adventure_trekking_camp_enqueue_admin_script');
// Reset the dismissed notice status when the theme is switched
function adventure_trekking_camp_after_switch_theme() {
    delete_user_meta(get_current_user_id(), 'dismissed_admin_notice');
}
add_action('after_switch_theme', 'adventure_trekking_camp_after_switch_theme');
//get-start-function-end//

// tag count
function adventure_trekking_camp_display_post_tag_count() {
    $adventure_trekking_camp_tags = get_the_tags();
    $adventure_trekking_camp_tag_count = ($adventure_trekking_camp_tags) ? count($adventure_trekking_camp_tags) : 0;
    $adventure_trekking_camp_tag_text = ($adventure_trekking_camp_tag_count === 1) ? 'tag' : 'tags';
    echo $adventure_trekking_camp_tag_count . ' ' . $adventure_trekking_camp_tag_text;
}

//media post format
function adventure_trekking_camp_get_media($adventure_trekking_camp_type = array()){
	$adventure_trekking_camp_content = apply_filters( 'the_content', get_the_content() );
  	$output = false;

  // Only get media from the content if a playlist isn't present.
  if ( false === strpos( $adventure_trekking_camp_content, 'wp-playlist-script' ) ) {
    $output = get_media_embedded_in_content( $adventure_trekking_camp_content, $adventure_trekking_camp_type );
    return $output;
  }
}

// excerpt function
function adventure_trekking_camp_custom_excerpt() {
    $adventure_trekking_camp_excerpt = get_the_excerpt();
    $adventure_trekking_camp_plain_text_excerpt = wp_strip_all_tags($adventure_trekking_camp_excerpt);
    
    // Get dynamic word limit from theme mod
    $adventure_trekking_camp_word_limit = esc_attr(get_theme_mod('adventure_trekking_camp_post_excerpt', '30'));
    
    // Limit the number of words
    $adventure_trekking_camp_limited_excerpt = implode(' ', array_slice(explode(' ', $adventure_trekking_camp_plain_text_excerpt), 0, $adventure_trekking_camp_word_limit));

    echo esc_html($adventure_trekking_camp_limited_excerpt);
}

// post meta fields function //
function adventure_trekking_camp_bn_custom_meta_offer() {
  add_meta_box( 'bn_meta', __( 'Trekking Custom Feilds', 'adventure-trekking-camp' ), 'adventure_trekking_camp_meta_callback_trekking', 'post', 'normal', 'high' );
}
/* Hook things in for admin*/
if (is_admin()){
  add_action('admin_menu', 'adventure_trekking_camp_bn_custom_meta_offer');
}
function adventure_trekking_camp_meta_callback_trekking( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'adventure_trekking_camp_offer_trekking_meta_nonce' );
  $adventure_trekking_camp_bn_stored_meta = get_post_meta( $post->ID );
  $adventure_trekking_camp_trekking_amount = get_post_meta( $post->ID, 'adventure_trekking_camp_trekking_amount', true );
  $adventure_trekking_camp_trekking_rating = get_post_meta( $post->ID, 'adventure_trekking_camp_trekking_rating', true );
  ?>
  <table id="list">
    <tbody id="the-list" data-wp-lists="list:meta">
      <tr id="meta-8">
        <td class="left">
          <?php esc_html_e( 'Trekking Amount', 'adventure-trekking-camp' )?>
        </td>
        <td class="left">
          <input type="text" name="adventure_trekking_camp_trekking_amount" id="adventure_trekking_camp_trekking_amount" value="<?php echo esc_attr($adventure_trekking_camp_trekking_amount); ?>" />
        </td>
      </tr>
      <tr id="meta-8">
        <td class="left">
          <?php esc_html_e( 'Rating', 'adventure-trekking-camp' )?>
        </td>
        <td class="left">
          <input type="text" name="adventure_trekking_camp_trekking_rating" id="adventure_trekking_camp_trekking_rating" value="<?php echo esc_attr($adventure_trekking_camp_trekking_rating); ?>" />
        </td>
      </tr>
    </tbody>
  </table>
  <?php
}
/* Saves the custom meta input */
function adventure_trekking_camp_custom_feild_save( $post_id ) {
  if (!isset($_POST['adventure_trekking_camp_offer_trekking_meta_nonce']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['adventure_trekking_camp_offer_trekking_meta_nonce']) ), basename(__FILE__))) {
      return;
  }

  if (!current_user_can('edit_post', $post_id)) {
      return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }

  // Save Trip Amount
  if( isset( $_POST[ 'adventure_trekking_camp_trekking_amount' ] ) ) {
      update_post_meta( $post_id, 'adventure_trekking_camp_trekking_amount', strip_tags( wp_unslash( $_POST[ 'adventure_trekking_camp_trekking_amount' ]) ) );
  }
  // Save Trip Days
  if( isset( $_POST[ 'adventure_trekking_camp_trekking_rating' ] ) ) {
      update_post_meta( $post_id, 'adventure_trekking_camp_trekking_rating', strip_tags( wp_unslash( $_POST[ 'adventure_trekking_camp_trekking_rating' ]) ) );
  }
}
add_action( 'save_post', 'adventure_trekking_camp_custom_feild_save' );
// post meta fields function end //

// front page template
function adventure_trekking_camp_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'adventure_trekking_camp_front_page_template' );

//typography
function adventure_trekking_camp_fonts_scripts() {
	$adventure_trekking_camp_headings_font = esc_html(get_theme_mod('adventure_trekking_camp_headings_text'));
	$adventure_trekking_camp_body_font = esc_html(get_theme_mod('adventure_trekking_camp_body_text'));

	if( $adventure_trekking_camp_headings_font ) {
		wp_enqueue_style( 'adventure-trekking-camp-headings-fonts', '//fonts.googleapis.com/css?family='. $adventure_trekking_camp_headings_font );
	} else {
		wp_enqueue_style( 'adventure-trekking-camp-source-sans', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
	}
	if( $adventure_trekking_camp_body_font ) {
		wp_enqueue_style( 'adventure-trekking-camp-body-fonts', '//fonts.googleapis.com/css?family='. $adventure_trekking_camp_body_font );
	} else {
		wp_enqueue_style( 'adventure-trekking-camp-source-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');
	}
}
add_action( 'wp_enqueue_scripts', 'adventure_trekking_camp_fonts_scripts' );

// Footer Text
function adventure_trekking_camp_copyright_link() {
    $adventure_trekking_camp_footer_text = get_theme_mod('adventure_trekking_camp_footer_text', esc_html__('Adventure WordPress Theme', 'adventure-trekking-camp'));
    $adventure_trekking_camp_credit_link = esc_url('https://www.ovationthemes.com/wordpress/free-adventure-wordpress-theme/');

    echo '<a href="' . $adventure_trekking_camp_credit_link . '" target="_blank">' . esc_html($adventure_trekking_camp_footer_text) . '<span class="footer-copyright">' . esc_html__(' By Ovation Themes', 'adventure-trekking-camp') . '</span></a>';
}

// custom sanitizations
// dropdown
function adventure_trekking_camp_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}
// slider custom control
if ( ! function_exists( 'adventure_trekking_camp_sanitize_integer' ) ) {
	function adventure_trekking_camp_sanitize_integer( $input ) {
		return (int) $input;
	}
}
// range contol
function adventure_trekking_camp_sanitize_number_absint( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}
// select post page
function adventure_trekking_camp_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
// toggle switch
function adventure_trekking_camp_callback_sanitize_switch( $value ) {
	// Switch values must be equal to 1 of off. Off is indicator and should not be translated.
	return ( ( isset( $value ) && $value == 1 ) ? 1 : 'off' );
}
//choices control
function adventure_trekking_camp_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}
// phone number
function adventure_trekking_camp_sanitize_phone_number( $phone ) {
  return preg_replace( '/[^\d+]/', '', $phone );
}
// Sanitize Sortable control.
function adventure_trekking_camp_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

// customizer-dropdowns
function adventure_trekking_camp_slider_dropdown(){
	if(get_option('adventure_trekking_camp_slider_arrows') == true ) {
		return true;
	}
	return false;
}
function adventure_trekking_camp_service_dropdown(){
	if(get_option('adventure_trekking_camp_services_enable') == true ) {
		return true;
	}
	return false;
}

// theme setup
function adventure_trekking_camp_setup() {

	load_theme_textdomain( 'adventure-trekking-camp', get_template_directory() . '/languages' );
	add_theme_support( 'woocommerce' );
	add_theme_support( "align-wide" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'adventure-trekking-camp-featured-image', 2000, 1200, true );
	add_image_size( 'adventure-trekking-camp-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'adventure-trekking-camp' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio','quote',) );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'adventure_trekking_camp_setup' );

// widgets
function adventure_trekking_camp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'adventure-trekking-camp' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'adventure-trekking-camp' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'adventure-trekking-camp' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'adventure-trekking-camp' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'adventure-trekking-camp' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'adventure-trekking-camp' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'adventure-trekking-camp' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'adventure-trekking-camp' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'adventure-trekking-camp' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'adventure-trekking-camp' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'adventure-trekking-camp' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'adventure-trekking-camp' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'adventure-trekking-camp' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'adventure-trekking-camp' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'adventure_trekking_camp_widgets_init' );

//Enqueue scripts and styles.
function adventure_trekking_camp_scripts() {

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'outfit',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap' ),
		array(),
		'1.0'
	);

	//Bootstarp
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'adventure-trekking-camp-style', get_stylesheet_uri() );

	// Theme Customize CSS.
	require get_parent_theme_file_path( 'inc/extra_customization.php' );
	wp_add_inline_style( 'adventure-trekking-camp-style',$adventure_trekking_camp_custom_style );

	//Slick CSS
	wp_enqueue_style( 'slick-style', get_template_directory_uri().'/assets/css/slick.css' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/assets/css/fontawesome-all.css' );

	// Block Style
	wp_enqueue_style( 'adventure-trekking-camp-block-style', get_template_directory_uri().'/assets/css/blocks.css' );

	//Custom JS
	wp_enqueue_script( 'adventure-trekking-camp-custom.js', get_theme_file_uri( '/assets/js/theme-script.js' ), array( 'jquery' ), true );

	//Slick JS
	wp_enqueue_script( 'slick-js', get_theme_file_uri( '/assets/js/slick.js' ), array( 'jquery' ),true );

	//Nav Focus JS
	wp_enqueue_script( 'adventure-trekking-camp-navigation-focus', get_theme_file_uri( '/assets/js/navigation-focus.js' ), array( 'jquery' ), true );

	//Bootstarp JS
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ),true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if (get_option('adventure_trekking_camp_animation_enable', false) !== 'off') {
		//wow.js
		wp_enqueue_script( 'adventure-trekking-camp-wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		//animate.css
		wp_enqueue_style( 'adventure-trekking-camp-animate-css', get_template_directory_uri().'/assets/css/animate.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'adventure_trekking_camp_scripts' );

function adventure_trekking_camp_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'adventure-trekking-camp-block-editor-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/css/editor-blocks.css' );
}
add_action( 'enqueue_block_editor_assets', 'adventure_trekking_camp_block_editor_styles' );

# Load scripts and styles.(fontawesome)
add_action( 'customize_controls_enqueue_scripts', 'adventure_trekking_camp_customize_controls_register_scripts' );
function adventure_trekking_camp_customize_controls_register_scripts() {
	
	wp_enqueue_style( 'adventure-trekking-camp-ctypo-customize-controls-style', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
}

// enque files
require get_parent_theme_file_path( '/inc/custom-header.php' );
require get_parent_theme_file_path( '/inc/template-tags.php' );
require get_parent_theme_file_path( '/inc/template-functions.php' );
require get_parent_theme_file_path( '/inc/customizer.php' );
require get_parent_theme_file_path( '/inc/typofont.php' );
require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );
require get_parent_theme_file_path( '/inc/breadcrumb.php' );
require get_parent_theme_file_path( 'inc/sortable/sortable_control.php' );