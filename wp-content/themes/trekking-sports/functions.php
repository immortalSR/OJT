<?php
/**
 * Theme functions and definitions
 *
 * @package trekking_sports
 */

//enque files
if ( ! function_exists( 'trekking_sports_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function trekking_sports_enqueue_styles() {
		wp_enqueue_style( 'adventure-trekking-camp-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'trekking-sports-style', get_stylesheet_directory_uri() . '/style.css', array( 'adventure-trekking-camp-style-parent' ), '1.0.0' );

		// Theme Customize CSS.
	require get_theme_file_path( 'inc/extra_customization.php' );
	wp_add_inline_style( 'trekking-sports-style',$adventure_trekking_camp_custom_style );
	require get_parent_theme_file_path( 'inc/extra_customization.php' );
	wp_add_inline_style( 'trekking-sports-style',$adventure_trekking_camp_custom_style );

	// blocks css
        wp_enqueue_style( 'trekking-sports-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'trekking-sports-style' ), '1.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'trekking_sports_enqueue_styles', 99 );

//theme setup
function trekking_sports_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'trekking-sports-featured-image', 2000, 1200, true );
	add_image_size( 'trekking-sports-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'trekking-sports' ),
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

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'trekking_sports_setup' );

// widgets
function trekking_sports_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'trekking-sports' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'trekking-sports' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'trekking-sports' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'trekking-sports' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'trekking-sports' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'trekking-sports' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'trekking-sports' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'trekking-sports' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'trekking-sports' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'trekking-sports' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'trekking-sports' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'trekking-sports' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'trekking-sports' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'trekking-sports' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'trekking_sports_widgets_init' );

// remove sections
function trekking_sports_customize_register() {
  	global $wp_customize;
	$wp_customize->remove_section( 'adventure_trekking_camp_pro' );
	$wp_customize->remove_section( 'adventure_trekking_camp_product_box_section' );

	$wp_customize->remove_section( 'adventure_trekking_camp_our_activities_section' );

	$wp_customize->remove_section( 'adventure_trekking_camp_slider_section');

	$wp_customize->remove_setting( 'adventure_trekking_camp_slider_counter' );
	$wp_customize->remove_control( 'adventure_trekking_camp_slider_counter' );

	$wp_customize->remove_setting( 'adventure_trekking_camp_slider_images' );
	$wp_customize->remove_control( 'adventure_trekking_camp_slider_images' );

	$wp_customize->remove_setting( 'adventure_trekking_camp_search_heading' );
	$wp_customize->remove_control( 'adventure_trekking_camp_search_heading' );

	$wp_customize->remove_setting( 'adventure_trekking_camp_slider_sub_heading' );
	$wp_customize->remove_control( 'adventure_trekking_camp_slider_sub_heading' );
 
	$wp_customize->remove_setting( 'adventure_trekking_camp_call_text' );
	$wp_customize->remove_control( 'adventure_trekking_camp_call_text' );

	$wp_customize->remove_setting( 'adventure_trekking_camp_call_phone_number' );
	$wp_customize->remove_control( 'adventure_trekking_camp_call_phone_number' );
	
	$wp_customize->remove_setting( 'adventure_trekking_camp_call_icon' );
	$wp_customize->remove_control( 'adventure_trekking_camp_call_icon' );

	$wp_customize->remove_setting('adventure_trekking_camp_footer_text');
	$wp_customize->remove_control('adventure_trekking_camp_footer_text');
}
add_action( 'customize_register', 'trekking_sports_customize_register', 11 );

//customizer dropdown
function trekking_sports_slide_dropdown(){
	if(get_option('trekking_sports_slide_enable') == true ) {
		return true;
	}
	return false;
}
function trekking_sports_ideas_dropdown(){
	if(get_option('trekking_sports_ideas_enable') == true ) {
		return true;
	}
	return false;
}

// select post pages
function trekking_sports_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// search bar
add_filter('get_search_form', 'trekking_sports_search_form');

function trekking_sports_search_form($form) {
    $form = '<form action="' . esc_url( home_url( '/' ) ) . '" method="get" class="search-form">
    <input type="search" name="s" tabindex="-1" class="search-field" placeholder="Search" value="' . esc_attr( get_search_query() ) . '" required>
    <button type="submit" id="search-submit" class="search-submit" tabindex="-1"><i class="fa fa-search"></i></button>
    </form>';
return $form;
}

// comments
function trekking_sports_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action('wp_enqueue_scripts', 'trekking_sports_enqueue_comments_reply');

// Footer Text
function trekking_sports_copyright_link() {
    $trekking_sports_footer_text = get_theme_mod('trekking_sports_footer_text', esc_html__('Trekking Sports WordPress Theme', 'trekking-sports'));
    $trekking_sports_credit_link = esc_url('https://www.ovationthemes.com/wordpress/free-trekking-wordpress-theme/');

    echo '<a href="' . $trekking_sports_credit_link . '" target="_blank">' . esc_html($trekking_sports_footer_text) . '<span class="footer-copyright">' . esc_html__(' By Ovation Themes', 'trekking-sports') . '</span></a>';
}

// customizer 
function trekking_sports_customize( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

	require get_theme_file_path( 'inc/custom-control.php' );

	// pro section
	$wp_customize->add_section('trekking_sports_pro', array(
		'title'    => __('UPGRADE TREKKING PREMIUM', 'trekking-sports'),
		'priority' => 1,
	));
	$wp_customize->add_setting('trekking_sports_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Trekking_Sports_Pro_Control($wp_customize, 'trekking_sports_pro', array(
		'label'    => __('TREKKING SPORTS PREMIUM', 'trekking-sports'),
		'section'  => 'trekking_sports_pro',
		'settings' => 'trekking_sports_pro',
		'priority' => 1,
	)));
	
	//Slider
	$wp_customize->add_section( 'trekking_sports_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'trekking-sports' ),    	
			'priority'   => 4,
			'panel' => 'adventure_trekking_camp_custompage_panel',
	) );
	$wp_customize->add_setting( 'trekking_sports_slide_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Trekking_Sports_Customizer_Customcontrol_Section_Heading( $wp_customize, 'trekking_sports_slide_heading', array(
		'label'       => esc_html__( 'Slider Settings', 'trekking-sports' ),	
		'section'     => 'trekking_sports_slider_section',
		'settings'    => 'trekking_sports_slide_heading',
	) ) );
	$wp_customize->add_setting(
		'trekking_sports_slide_enable',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Trekking_Sports_Customizer_Customcontrol_Switch(
			$wp_customize,
			'trekking_sports_slide_enable',
			array(
				'settings'        => 'trekking_sports_slide_enable',
				'section'         => 'trekking_sports_slider_section',
				'label'           => __( 'Check To show Slider', 'trekking-sports' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'trekking-sports' ),
					'off'    => __( 'Off', 'trekking-sports' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('trekking_sports_slide_small_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('trekking_sports_slide_small_heading',array(
		'type' => 'text',
		'label' => __('Small Heading Text','trekking-sports'),
		'section' => 'trekking_sports_slider_section',
		'active_callback' => 'trekking_sports_slide_dropdown',
	));
	$trekking_sports_args = array('numberposts' => -1);
	$post_list = get_posts($trekking_sports_args);
	$i = 0;
	$pst_sls[]= __('Select','trekking-sports');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting('trekking_sports_post_setting'.$i,array(
			'sanitize_callback' => 'trekking_sports_sanitize_select',
		));
		$wp_customize->add_control('trekking_sports_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','trekking-sports'),
			'section' => 'trekking_sports_slider_section',	
			'active_callback' => 'trekking_sports_slide_dropdown',		
		));
		$wp_customize->selective_refresh->add_partial( 'trekking_sports_post_setting'.$i, array(
			'selector' => '.carousel-caption h2',
			'render_callback' => 'trekking_sports_customize_partial_trekking_sports_post_setting'.$i,
		) );
	}
	wp_reset_postdata();

	$wp_customize->add_setting(
		'trekking_sports_slider_excerpt_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => 'off',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Trekking_Sports_Customizer_Customcontrol_Switch(
			$wp_customize,
			'trekking_sports_slider_excerpt_show_hide',
			array(
				'settings'        => 'trekking_sports_slider_excerpt_show_hide',
				'section'         => 'trekking_sports_slider_section',
				'label'           => __( 'Show Hide excerpt', 'trekking-sports' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'trekking-sports' ),
					'off'    => __( 'Off', 'trekking-sports' ),
				),
				'active_callback' => 'trekking_sports_slide_dropdown',
			)
		)
	);
	$wp_customize->add_setting('trekking_sports_slider_excerpt_count',array(
		'default'=> 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'adventure_trekking_camp_sanitize_integer'
	));
	$wp_customize->add_control(new Trekking_Sports_Slider_Custom_Control( $wp_customize, 'trekking_sports_slider_excerpt_count',array(
		'label' => esc_html__( 'Excerpt Limit','trekking-sports' ),
		'section'=> 'trekking_sports_slider_section',
		'settings'=>'trekking_sports_slider_excerpt_count',
		'input_attrs' => array(
			'reset'			   => 20,
      'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'active_callback' => 'trekking_sports_slide_dropdown',
	)));
	$wp_customize->add_setting(
		'trekking_sports_slider_button_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Trekking_Sports_Customizer_Customcontrol_Switch(
			$wp_customize,
			'trekking_sports_slider_button_show_hide',
			array(
				'settings'        => 'trekking_sports_slider_button_show_hide',
				'section'         => 'trekking_sports_slider_section',
				'label'           => __( 'Show Hide Button', 'trekking-sports' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'trekking-sports' ),
					'off'    => __( 'Off', 'trekking-sports' ),
				),
				'active_callback' => 'trekking_sports_slide_dropdown',
			)
		)
	);
	$wp_customize->add_setting('trekking_sports_slider_read_more',array(
		'default' => 'READ MORE',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('trekking_sports_slider_read_more',array(
		'label' => esc_html__('Button Text','trekking-sports'),
		'section' => 'trekking_sports_slider_section',
		'setting' => 'trekking_sports_slider_read_more',
		'type'    => 'text',
		'active_callback' => 'trekking_sports_slide_dropdown',
	));

	$wp_customize->add_setting( 'trekking_sports_slider_content_alignment',
		array(
			'default' => 'CENTER-ALIGN',
			'transport' => 'refresh',
			'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Trekking_Sports_Text_Radio_Button_Custom_Control( $wp_customize, 'trekking_sports_slider_content_alignment',
		array(
			'type' => 'select',
			'label' => esc_html__('Slider Content Alignment','trekking-sports'),
			'section' => 'trekking_sports_slider_section',
			'choices' => array(
            'LEFT-ALIGN' => __('LEFT','trekking-sports'),
            'CENTER-ALIGN' => __('CENTER','trekking-sports'),
            'RIGHT-ALIGN' => __('RIGHT','trekking-sports'),),
        'active_callback' => 'trekking_sports_slide_dropdown',
		)
	) );

	// Ideas Section
	$wp_customize->add_section( 'trekking_sports_ideas_section' , array(
    	'title'      => __( 'Adventure Ideas Settings', 'trekking-sports' ),
			'priority'   => 5,
			'panel' => 'adventure_trekking_camp_custompage_panel',
	) );
	$wp_customize->add_setting( 'trekking_sports_ideas_sec_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Trekking_Sports_Customizer_Customcontrol_Section_Heading( $wp_customize, 'trekking_sports_ideas_sec_heading', array(
		'label'       => esc_html__( 'Adventure Ideas Settings', 'trekking-sports' ),	
		'section'     => 'trekking_sports_ideas_section',
		'settings'    => 'trekking_sports_ideas_sec_heading',
	) ) );
	$wp_customize->add_setting(
		'trekking_sports_ideas_enable',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Trekking_Sports_Customizer_Customcontrol_Switch(
			$wp_customize,
			'trekking_sports_ideas_enable',
			array(
				'settings'        => 'trekking_sports_ideas_enable',
				'section'         => 'trekking_sports_ideas_section',
				'label'           => __( 'Check To show Section', 'trekking-sports' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'trekking-sports' ),
					'off'    => __( 'Off', 'trekking-sports' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('trekking_sports_ideas_main_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('trekking_sports_ideas_main_heading',array(
		'type' => 'text',
		'label' => __('Main Heading','trekking-sports'),
		'section' => 'trekking_sports_ideas_section',
		'active_callback' => 'trekking_sports_ideas_dropdown',
	));
	$trekking_sports_args = array('numberposts' => -1);
	$trekking_sports_post_list = get_posts($trekking_sports_args);
	$s = 0;
	$trekking_sports_pst_sls[]= __('Select','trekking-sports');
	foreach ($trekking_sports_post_list as $key => $trekking_sports_p_post) {
		$trekking_sports_pst_sls[$trekking_sports_p_post->ID]=$trekking_sports_p_post->post_title;
	}
	for ( $s = 1; $s <= 4; $s++ ) {		

		$wp_customize->add_setting('trekking_sports_ideas_sec_settigs'.$s,array(
			'sanitize_callback' => 'adventure_trekking_camp_sanitize_select',
		));
		$wp_customize->add_control('trekking_sports_ideas_sec_settigs'.$s,array(
			'type'    => 'select',
			'choices' => $trekking_sports_pst_sls,
			'label' => __('Select post','trekking-sports'),
			'section' => 'trekking_sports_ideas_section',
			'active_callback' => 'trekking_sports_ideas_dropdown',
		));
	}
	wp_reset_postdata(); 

	//mobile
	$wp_customize->add_setting(
		'trekking_sports_slider_button_mobile_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Trekking_Sports_Customizer_Customcontrol_Switch(
			$wp_customize,
			'trekking_sports_slider_button_mobile_show_hide',
			array(
				'settings'        => 'trekking_sports_slider_button_mobile_show_hide',
				'section'         => 'adventure_trekking_camp_mobile_options',
				'label'           => __( 'Show Slider Button', 'trekking-sports' ),	
				'description' => __('Control wont function if the button is off in the main slider settings.', 'trekking-sports') ,			
				'choices'		  => array(
					'1'      => __( 'On', 'trekking-sports' ),
					'off'    => __( 'Off', 'trekking-sports' ),
				),
				'active_callback' => '',
			)
		)
	);

	//footer
	$wp_customize->add_setting('trekking_sports_footer_text',array(
		'default'	=> 'Trekking Sports WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('trekking_sports_footer_text',array(
		'label'	=> esc_html__('Copyright Text','trekking-sports'),
		'section'	=> 'adventure_trekking_camp_footer_copyright',
		'type'		=> 'textarea'
	));
}
add_action( 'customize_register', 'trekking_sports_customize' );

if ( ! defined( 'TREKKING_SPORTS_PRO_LINK' ) ) {
	define('TREKKING_SPORTS_PRO_LINK',__('https://www.ovationthemes.com/wordpress/adventure-sports-wordpress-theme/','trekking-sports'));
}
if ( ! defined( 'ADVENTURE_TREKKING_CAMP_SUPPORT' ) ) {
define('ADVENTURE_TREKKING_CAMP_SUPPORT',__('https://wordpress.org/support/theme/trekking-sports/','trekking-sports'));
}
if ( ! defined( 'ADVENTURE_TREKKING_CAMP_REVIEW' ) ) {
define('ADVENTURE_TREKKING_CAMP_REVIEW',__('https://wordpress.org/support/theme/trekking-sports/reviews/','trekking-sports'));
}
if ( ! defined( 'ADVENTURE_TREKKING_CAMP_LIVE_DEMO' ) ) {
define('ADVENTURE_TREKKING_CAMP_LIVE_DEMO',__('https://www.ovationthemes.com/demos/trekking-sports/','trekking-sports'));
}
if ( ! defined( 'ADVENTURE_TREKKING_CAMP_BUY_PRO' ) ) {
define('ADVENTURE_TREKKING_CAMP_BUY_PRO',__('https://www.ovationthemes.com/wordpress/adventure-sports-wordpress-theme/','trekking-sports'));
}
if ( ! defined( 'ADVENTURE_TREKKING_CAMP_PRO_DOC' ) ) {
define('ADVENTURE_TREKKING_CAMP_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-trekking-sports-pro-doc/','trekking-sports'));
}
if ( ! defined( 'ADVENTURE_TREKKING_CAMP_FREE_DOC' ) ) {
define('ADVENTURE_TREKKING_CAMP_FREE_DOC',__('https://ovationthemes.com/docs/ot-trekking-sports-free-doc','trekking-sports'));
}
if ( ! defined( 'ADVENTURE_TREKKING_CAMP_THEME_NAME' ) ) {
define('ADVENTURE_TREKKING_CAMP_THEME_NAME',__('Premium Adventure Sports','trekking-sports'));
}

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Trekking_Sports_Pro_Control')):
    class Trekking_Sports_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( TREKKING_SPORTS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE TREKKING PREMIUM','trekking-sports');?> </a>
            </div>
            <div class="col-md">
                <img class="trekking_sports_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('TREKKING SPORTS PREMIUM - Features', 'trekking-sports'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'trekking-sports');?> </li>
                    <li class="upsell-trekking_sports"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'trekking-sports');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( TREKKING_SPORTS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE TREKKING PREMIUM','trekking-sports');?> </a>
            </div>
        </label>
    <?php } }
endif;