<?php
/**
 * Adventure Trekking Camp: Customizer
 *
 * @subpackage Adventure Trekking Camp
 * @since 1.0
 */

function adventure_trekking_camp_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/assets/css/customizer.css');

	// Fontawesome icon-picker
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	// Add custom control.
 	require get_parent_theme_file_path( 'inc/switch/control_switch.php' );

 	require get_parent_theme_file_path( 'inc/custom-control.php' );

 	//Register the sortable control type.
	$wp_customize->register_control_type( 'Adventure_Trekking_Camp_Control_Sortable' );

 	// Add homepage customizer file
  	require get_template_directory() . '/inc/customizer-home-page.php';

  	// pro section
 	$wp_customize->add_section('adventure_trekking_camp_pro', array(
        'title'    => __('UPGRADE TREKKING CAMP PREMIUM', 'adventure-trekking-camp'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('adventure_trekking_camp_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Adventure_Trekking_Camp_Pro_Control($wp_customize, 'adventure_trekking_camp_pro', array(
        'label'    => __('TREKKING CAMP PREMIUM', 'adventure-trekking-camp'),
        'section'  => 'adventure_trekking_camp_pro',
        'settings' => 'adventure_trekking_camp_pro',
        'priority' => 1,
    )));

    //Logo
    $wp_customize->add_setting('adventure_trekking_camp_logo_max_height',array(
		'default'=> '100',
		'transport' => 'refresh',
		'sanitize_callback' => 'adventure_trekking_camp_sanitize_integer'
	));
	$wp_customize->add_control(new Adventure_Trekking_Camp_Slider_Custom_Control( $wp_customize, 'adventure_trekking_camp_logo_max_height',array(
		'label'	=> esc_html__('Logo Width','adventure-trekking-camp'),
		'section'=> 'title_tagline',
		'settings'=>'adventure_trekking_camp_logo_max_height',
		'input_attrs' => array(
			'reset'            => 100,
            'step'             => 1,
			'min'              => 0,
			'max'              => 250,
        ),
        'priority' => 9,
	)));
	$wp_customize->add_setting('adventure_trekking_camp_logo_title',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_logo_title',
			array(
				'settings'        => 'adventure_trekking_camp_logo_title',
				'section'         => 'title_tagline',
				'label'           => __( 'Show Site Title', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('adventure_trekking_camp_logo_text',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => 'off',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_logo_text',
			array(
				'settings'        => 'adventure_trekking_camp_logo_text',
				'section'         => 'title_tagline',
				'label'           => __( 'Show Site Tagline', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);

	// typography
 	$wp_customize->add_section( 'adventure_trekking_camp_typography_settings', array(
		'title'       => __( 'Typography Settings', 'adventure-trekking-camp' ),
		'priority'       => 3,
	) );
	$adventure_trekking_camp_font_choices = array(
		'' => 'Select',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
	);
	$wp_customize->add_setting( 'adventure_trekking_camp_section_typo_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_typo_heading', array(
		'label'       => esc_html__( 'Typography Settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_typography_settings',
		'settings'    => 'adventure_trekking_camp_section_typo_heading',
	) ) );
	$wp_customize->add_setting( 'adventure_trekking_camp_headings_text', array(
		'sanitize_callback' => 'adventure_trekking_camp_sanitize_fonts',
	));
	$wp_customize->add_control( 'adventure_trekking_camp_headings_text', array(
		'type' => 'select',
		'description' => __('Select your suitable font for the headings.', 'adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_typography_settings',
		'choices' => $adventure_trekking_camp_font_choices
	));
	$wp_customize->add_setting( 'adventure_trekking_camp_body_text', array(
		'sanitize_callback' => 'adventure_trekking_camp_sanitize_fonts'
	));
	$wp_customize->add_control( 'adventure_trekking_camp_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your suitable font for the body.', 'adventure-trekking-camp' ),
		'section' => 'adventure_trekking_camp_typography_settings',
		'choices' => $adventure_trekking_camp_font_choices
	) );
    
	// Theme General Settings
    $wp_customize->add_section('adventure_trekking_camp_theme_settings',array(
        'title' => __('Theme General Settings', 'adventure-trekking-camp'),
        'priority' => 3,
    ) );
    $wp_customize->add_setting( 'adventure_trekking_camp_section_sticky_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_sticky_heading', array(
		'label'       => esc_html__( 'Sticky Header Settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_theme_settings',
		'settings'    => 'adventure_trekking_camp_section_sticky_heading',
	) ) );
    $wp_customize->add_setting(
		'adventure_trekking_camp_sticky_header',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_sticky_header',
			array(
				'settings'        => 'adventure_trekking_camp_sticky_header',
				'section'         => 'adventure_trekking_camp_theme_settings',
				'label'           => __( 'Show Sticky Header', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'adventure_trekking_camp_section_loader_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_loader_heading', array(
		'label'       => esc_html__( 'Loader Settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_theme_settings',
		'settings'    => 'adventure_trekking_camp_section_loader_heading',
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_theme_loader',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_theme_loader',
			array(
				'settings'        => 'adventure_trekking_camp_theme_loader',
				'section'         => 'adventure_trekking_camp_theme_settings',
				'label'           => __( 'Show Site Loader', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting('adventure_trekking_camp_loader_style',array(
        'default' => 'style_one',
        'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
	));
	$wp_customize->add_control('adventure_trekking_camp_loader_style',array(
        'type' => 'select',
        'label' => __('Select Loader Design','adventure-trekking-camp'),
        'section' => 'adventure_trekking_camp_theme_settings',
        'choices' => array(
            'style_one' => __('Circle','adventure-trekking-camp'),
            'style_two' => __('Bar','adventure-trekking-camp'),
        ),
	) );
	
	$wp_customize->add_setting( 'adventure_trekking_camp_section_menu_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_menu_heading', array(
		'label'       => esc_html__( 'Menu Settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_theme_settings',
		'settings'    => 'adventure_trekking_camp_section_menu_heading',
	) ) );
	$wp_customize->add_setting('adventure_trekking_camp_menu_text_transform',array(
        'default' => 'CAPITALISE',
        'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
	));
	$wp_customize->add_control('adventure_trekking_camp_menu_text_transform',array(
        'type' => 'select',
        'label' => __('Menus Text Transform','adventure-trekking-camp'),
        'section' => 'adventure_trekking_camp_theme_settings',
        'choices' => array(
            'CAPITALISE' => __('CAPITALISE','adventure-trekking-camp'),
            'UPPERCASE' => __('UPPERCASE','adventure-trekking-camp'),
            'LOWERCASE' => __('LOWERCASE','adventure-trekking-camp'),
        ),
	) );
	$wp_customize->add_setting( 'adventure_trekking_camp_section_scroll_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_scroll_heading', array(
		'label'       => esc_html__( 'Scroll Top Settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_theme_settings',
		'settings'    => 'adventure_trekking_camp_section_scroll_heading',
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_scroll_enable',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_scroll_enable',
			array(
				'settings'        => 'adventure_trekking_camp_scroll_enable',
				'section'         => 'adventure_trekking_camp_theme_settings',
				'label'           => __( 'show Scroll Top', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'adventure_trekking_camp_scroll_options',
		array(
			'default' => 'right_align',
			'transport' => 'refresh',
			'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Adventure_Trekking_Camp_Text_Radio_Button_Custom_Control( $wp_customize, 'adventure_trekking_camp_scroll_options',
		array(
			'type' => 'select',
			'label' => esc_html__( 'Scroll Top Alignment', 'adventure-trekking-camp' ),
			'section' => 'adventure_trekking_camp_theme_settings',
			'choices' => array(
				'left_align' => __('LEFT','adventure-trekking-camp'),
				'center_align' => __('CENTER','adventure-trekking-camp'),
				'right_align' => __('RIGHT','adventure-trekking-camp'),
			)
		)
	) );
	$wp_customize->add_setting('adventure_trekking_camp_scroll_top_icon',array(
		'default'	=> 'fas fa-chevron-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_scroll_top_icon',array(
		'label'	=> __('Add Scroll Top Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_theme_settings',
		'setting'	=> 'adventure_trekking_camp_scroll_top_icon',
		'type'		=> 'icon'
	))); 

	$wp_customize->add_setting( 'adventure_trekking_camp_section_cursor_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_cursor_heading', array(
		'label'       => esc_html__( 'Cursor Setting', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_theme_settings',
		'settings'    => 'adventure_trekking_camp_section_cursor_heading',
	) ) );

	$wp_customize->add_setting(
		'adventure_trekking_camp_enable_custom_cursor',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_enable_custom_cursor',
			array(
				'settings'        => 'adventure_trekking_camp_enable_custom_cursor',
				'section'         => 'adventure_trekking_camp_theme_settings',
				'label'           => __( 'show custom cursor', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting( 'adventure_trekking_camp_section_animation_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_animation_heading', array(
		'label'       => esc_html__( 'Animation Setting', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_theme_settings',
		'settings'    => 'adventure_trekking_camp_section_animation_heading',
	) ) );

	$wp_customize->add_setting(
		'adventure_trekking_camp_animation_enable',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_animation_enable',
			array(
				'settings'        => 'adventure_trekking_camp_animation_enable',
				'section'         => 'adventure_trekking_camp_theme_settings',
				'label'           => __( 'show/Hide Animation', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);

	// Post Layouts
	$wp_customize->add_panel( 'adventure_trekking_camp_post_panel', array(
		'title' => esc_html__( 'Post Layout', 'adventure-trekking-camp' ),
		'priority' => 4,
	));
    $wp_customize->add_section('adventure_trekking_camp_layout',array(
        'title' => __('single-Post Layout', 'adventure-trekking-camp'),
        'panel' => 'adventure_trekking_camp_post_panel',
    ) );
    $wp_customize->add_setting( 'adventure_trekking_camp_section_post_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_post_heading', array(
		'label'       => esc_html__( 'Post Structure', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_layout',
		'settings'    => 'adventure_trekking_camp_section_post_heading',
	) ) );
	$wp_customize->add_setting( 'adventure_trekking_camp_single_post_option',
		array(
			'default' => 'single_right_sidebar',
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Adventure_Trekking_Camp_Radio_Image_Control( $wp_customize, 'adventure_trekking_camp_single_post_option',
		array(
			'type'=>'select',
			'label' => __( 'select Single Post Page Layout', 'adventure-trekking-camp' ),
			'section' => 'adventure_trekking_camp_layout',
			'choices' => array(

				'single_right_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/image/2column.jpg',
					'name' => __( 'Right Sidebar', 'adventure-trekking-camp' )
				),
				'single_left_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/image/left.png',
					'name' => __( 'Left Sidebar', 'adventure-trekking-camp' )
				),
				'single_full_width' => array(
					'image' => get_template_directory_uri().'/assets/image/1column.jpg',
					'name' => __( 'One Column', 'adventure-trekking-camp' )
				),
			)
		)
	) );
	$wp_customize->add_setting('adventure_trekking_camp_single_post_date',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_single_post_date',
			array(
				'settings'        => 'adventure_trekking_camp_single_post_date',
				'section'         => 'adventure_trekking_camp_layout',
				'label'           => __( 'Show Date', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'adventure_trekking_camp_single_post_date', array(
		'selector' => '.date-box',
		'render_callback' => 'adventure_trekking_camp_customize_partial_adventure_trekking_camp_single_post_date',
	) );
	$wp_customize->add_setting('adventure_trekking_camp_single_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_single_date_icon',array(
		'label'	=> __('date Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_layout',
		'setting'	=> 'adventure_trekking_camp_single_date_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('adventure_trekking_camp_single_post_admin',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_single_post_admin',
			array(
				'settings'        => 'adventure_trekking_camp_single_post_admin',
				'section'         => 'adventure_trekking_camp_layout',
				'label'           => __( 'Show Author/Admin', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'adventure_trekking_camp_single_post_admin', array(
		'selector' => '.entry-author',
		'render_callback' => 'adventure_trekking_camp_customize_partial_adventure_trekking_camp_single_post_admin',
	) );
	$wp_customize->add_setting('adventure_trekking_camp_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_single_author_icon',array(
		'label'	=> __('Author Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_layout',
		'setting'	=> 'adventure_trekking_camp_single_author_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('adventure_trekking_camp_single_post_comment',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_single_post_comment',
			array(
				'settings'        => 'adventure_trekking_camp_single_post_comment',
				'section'         => 'adventure_trekking_camp_layout',
				'label'           => __( 'Show Comment', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('adventure_trekking_camp_single_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_single_comment_icon',array(
		'label'	=> __('comment Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_layout',
		'setting'	=> 'adventure_trekking_camp_single_comment_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('adventure_trekking_camp_single_post_tag_count',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_single_post_tag_count',
			array(
				'settings'        => 'adventure_trekking_camp_single_post_tag_count',
				'section'         => 'adventure_trekking_camp_layout',
				'label'           => __( 'Show tag count', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('adventure_trekking_camp_single_tag_icon',array(
		'default'	=> 'fas fa-tags',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_single_tag_icon',array(
		'label'	=> __('tag Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_layout',
		'setting'	=> 'adventure_trekking_camp_single_tag_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('adventure_trekking_camp_single_post_tag',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_single_post_tag',
			array(
				'settings'        => 'adventure_trekking_camp_single_post_tag',
				'section'         => 'adventure_trekking_camp_layout',
				'label'           => __( 'Show Tags', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'adventure_trekking_camp_single_post_tag', array(
		'selector' => '.single-tags',
		'render_callback' => 'adventure_trekking_camp_customize_partial_adventure_trekking_camp_single_post_tag',
	) );
	$wp_customize->add_setting('adventure_trekking_camp_similar_post',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_similar_post',
			array(
				'settings'        => 'adventure_trekking_camp_similar_post',
				'section'         => 'adventure_trekking_camp_layout',
				'label'           => __( 'Show Similar post', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('adventure_trekking_camp_similar_text',array(
		'default' => 'Explore More',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('adventure_trekking_camp_similar_text',array(
		'label' => esc_html__('Similar Post Heading','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_layout',
		'setting' => 'adventure_trekking_camp_similar_text',
		'type'    => 'text'
	));
	$wp_customize->add_section('adventure_trekking_camp_archieve_post_layot',array(
        'title' => __('Archieve-Post Layout', 'adventure-trekking-camp'),
        'panel' => 'adventure_trekking_camp_post_panel',
    ) );
	$wp_customize->add_setting( 'adventure_trekking_camp_section_archive_post_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_archive_post_heading', array(
		'label'       => esc_html__( 'Archieve Post Structure', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_archieve_post_layot',
		'settings'    => 'adventure_trekking_camp_section_archive_post_heading',
	) ) );
    $wp_customize->add_setting( 'adventure_trekking_camp_post_option',
		array(
			'default' => 'right_sidebar',
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Adventure_Trekking_Camp_Radio_Image_Control( $wp_customize, 'adventure_trekking_camp_post_option',
		array(
			'type'=>'select',
			'label' => __( 'select Post Page Layout', 'adventure-trekking-camp' ),
			'section' => 'adventure_trekking_camp_archieve_post_layot',
			'choices' => array(
				'right_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/image/2column.jpg',
					'name' => __( 'Right Sidebar', 'adventure-trekking-camp' )
				),
				'left_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/image/left.png',
					'name' => __( 'Left Sidebar', 'adventure-trekking-camp' )
				),
				'one_column' => array(
					'image' => get_template_directory_uri().'/assets/image/1column.jpg',
					'name' => __( 'One Column', 'adventure-trekking-camp' )
				),
				'three_column' => array(
					'image' => get_template_directory_uri().'/assets/image/3column.jpg',
					'name' => __( 'Three Column', 'adventure-trekking-camp' )
				),
				'four_column' => array(
					'image' => get_template_directory_uri().'/assets/image/4column.jpg',
					'name' => __( 'Four Column', 'adventure-trekking-camp' )
				),
				'grid_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/image/grid-sidebar.jpg',
					'name' => __( 'Grid-Sidebar Layout', 'adventure-trekking-camp' )
				),
				'grid_left_sidebar' => array(
					'image' => get_template_directory_uri().'/assets/image/grid-left.png',
					'name' => __( 'Grid-Sidebar Layout', 'adventure-trekking-camp' )
				),
				'grid_post' => array(
					'image' => get_template_directory_uri().'/assets/image/grid.jpg',
					'name' => __( 'Grid Layout', 'adventure-trekking-camp' )
				)
			)
		)
	) );
	$wp_customize->add_setting( 'adventure_trekking_camp_grid_column',
		array(
			'default' => '3_column',
			'transport' => 'refresh',
			'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Adventure_Trekking_Camp_Text_Radio_Button_Custom_Control( $wp_customize, 'adventure_trekking_camp_grid_column',
		array(
			'type' => 'select',
			'label' => esc_html__('Grid Post Per Row','adventure-trekking-camp'),
			'section' => 'adventure_trekking_camp_archieve_post_layot',
			'choices' => array(
				'1_column' => __('1','adventure-trekking-camp'),
	            '2_column' => __('2','adventure-trekking-camp'),
	            '3_column' => __('3','adventure-trekking-camp'),
	            '4_column' => __('4','adventure-trekking-camp'),
			)
		)
	) );
	$wp_customize->add_setting('archieve_post_order', array(
        'default' => array('title', 'image', 'meta','excerpt','btn'),
        'sanitize_callback' => 'adventure_trekking_camp_sanitize_sortable',
    ));
    $wp_customize->add_control(new Adventure_Trekking_Camp_Control_Sortable($wp_customize, 'archieve_post_order', array(
    	'label' => esc_html__('Post Order', 'adventure-trekking-camp'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'adventure-trekking-camp') ,
        'section' => 'adventure_trekking_camp_archieve_post_layot',
        'choices' => array(
            'title' => __('title', 'adventure-trekking-camp') ,
            'image' => __('media', 'adventure-trekking-camp') ,
            'meta' => __('meta', 'adventure-trekking-camp') ,
            'excerpt' => __('excerpt', 'adventure-trekking-camp') ,
            'btn' => __('Read more', 'adventure-trekking-camp') ,
        ) ,
    )));
	$wp_customize->add_setting('adventure_trekking_camp_post_excerpt',array(
		'default'=> 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'adventure_trekking_camp_sanitize_integer'
	));
	$wp_customize->add_control(new Adventure_Trekking_Camp_Slider_Custom_Control( $wp_customize, 'adventure_trekking_camp_post_excerpt',array(
		'label' => esc_html__( 'Excerpt Limit','adventure-trekking-camp' ),
		'section'=> 'adventure_trekking_camp_archieve_post_layot',
		'settings'=>'adventure_trekking_camp_post_excerpt',
		'input_attrs' => array(
			'reset'			   => 30,
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));
	$wp_customize->add_setting('adventure_trekking_camp_read_more_text',array(
		'default' => 'Read More',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('adventure_trekking_camp_read_more_text',array(
		'label' => esc_html__('Read More Text','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_archieve_post_layot',
		'setting' => 'adventure_trekking_camp_read_more_text',
		'type'    => 'text'
	));
	$wp_customize->add_setting('adventure_trekking_camp_date',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_date',
			array(
				'settings'        => 'adventure_trekking_camp_date',
				'section'         => 'adventure_trekking_camp_archieve_post_layot',
				'label'           => __( 'Show Date', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'adventure_trekking_camp_date', array(
		'selector' => '.date-box',
		'render_callback' => 'adventure_trekking_camp_customize_partial_adventure_trekking_camp_date',
	) );
	$wp_customize->add_setting('adventure_trekking_camp_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_date_icon',array(
		'label'	=> __('date Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_archieve_post_layot',
		'setting'	=> 'adventure_trekking_camp_date_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('adventure_trekking_camp_admin',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_admin',
			array(
				'settings'        => 'adventure_trekking_camp_admin',
				'section'         => 'adventure_trekking_camp_archieve_post_layot',
				'label'           => __( 'Show Author/Admin', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'adventure_trekking_camp_admin', array(
		'selector' => '.entry-author',
		'render_callback' => 'adventure_trekking_camp_customize_partial_adventure_trekking_camp_admin',
	) );
	$wp_customize->add_setting('adventure_trekking_camp_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_author_icon',array(
		'label'	=> __('Author Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_archieve_post_layot',
		'setting'	=> 'adventure_trekking_camp_author_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('adventure_trekking_camp_comment',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_comment',
			array(
				'settings'        => 'adventure_trekking_camp_comment',
				'section'         => 'adventure_trekking_camp_archieve_post_layot',
				'label'           => __( 'Show Comment', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'adventure_trekking_camp_comment', array(
		'selector' => '.entry-comments',
		'render_callback' => 'adventure_trekking_camp_customize_partial_adventure_trekking_camp_comment',
	) );
	$wp_customize->add_setting('adventure_trekking_camp_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_comment_icon',array(
		'label'	=> __('comment Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_archieve_post_layot',
		'setting'	=> 'adventure_trekking_camp_comment_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('adventure_trekking_camp_tag',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_tag',
			array(
				'settings'        => 'adventure_trekking_camp_tag',
				'section'         => 'adventure_trekking_camp_archieve_post_layot',
				'label'           => __( 'Show tag count', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'adventure_trekking_camp_tag', array(
		'selector' => '.tags',
		'render_callback' => 'adventure_trekking_camp_customize_partial_adventure_trekking_camp_tag',
	) );
	$wp_customize->add_setting('adventure_trekking_camp_tag_icon',array(
		'default'	=> 'fas fa-tags',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_tag_icon',array(
		'label'	=> __('tag Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_archieve_post_layot',
		'setting'	=> 'adventure_trekking_camp_tag_icon',
		'type'		=> 'icon'
	)));

	// header-image
	$wp_customize->add_setting( 'adventure_trekking_camp_section_header_image_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_header_image_heading', array(
		'label'       => esc_html__( 'Header Image Settings', 'adventure-trekking-camp' ),
		'section'     => 'header_image',
		'settings'    => 'adventure_trekking_camp_section_header_image_heading',
		'priority'    =>'1',
	) ) );

	$wp_customize->add_setting('adventure_trekking_camp_show_header_image',array(
        'default' => 'on',
        'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
	));
	$wp_customize->add_control('adventure_trekking_camp_show_header_image',array(
        'type' => 'select',
        'label' => __('Select Option','adventure-trekking-camp'),
        'section' => 'header_image',
        'choices' => array(
            'on' => __('With Header Image','adventure-trekking-camp'),
            'off' => __('Without Header Image','adventure-trekking-camp'),
        ),
	) );

	// breadcrumb
	$wp_customize->add_section('adventure_trekking_camp_breadcrumb_settings',array(
        'title' => __('Breadcrumb Settings', 'adventure-trekking-camp'),
        'priority' => 4
    ) );
	$wp_customize->add_setting( 'adventure_trekking_camp_section_breadcrumb_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_breadcrumb_heading', array(
		'label'       => esc_html__( 'Theme Breadcrumb Settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_breadcrumb_settings',
		'settings'    => 'adventure_trekking_camp_section_breadcrumb_heading',
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_enable_breadcrumb',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_enable_breadcrumb',
			array(
				'settings'        => 'adventure_trekking_camp_enable_breadcrumb',
				'section'         => 'adventure_trekking_camp_breadcrumb_settings',
				'label'           => __( 'Show Breadcrumb', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('adventure_trekking_camp_breadcrumb_separator', array(
        'default' => ' / ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('adventure_trekking_camp_breadcrumb_separator', array(
        'label' => __('Breadcrumb Separator', 'adventure-trekking-camp'),
        'section' => 'adventure_trekking_camp_breadcrumb_settings',
        'type' => 'text',
    ));
	$wp_customize->add_setting( 'adventure_trekking_camp_single_breadcrumb_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_single_breadcrumb_heading', array(
		'label'       => esc_html__( 'Single post & Page', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_breadcrumb_settings',
		'settings'    => 'adventure_trekking_camp_single_breadcrumb_heading',
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_single_enable_breadcrumb',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_single_enable_breadcrumb',
			array(
				'settings'        => 'adventure_trekking_camp_single_enable_breadcrumb',
				'section'         => 'adventure_trekking_camp_breadcrumb_settings',
				'label'           => __( 'Show Breadcrumb', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	if ( class_exists( 'WooCommerce' ) ) { 
		$wp_customize->add_setting( 'adventure_trekking_camp_woocommerce_breadcrumb_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_woocommerce_breadcrumb_heading', array(
			'label'       => esc_html__( 'Woocommerce Breadcrumb', 'adventure-trekking-camp' ),
			'section'     => 'adventure_trekking_camp_breadcrumb_settings',
			'settings'    => 'adventure_trekking_camp_woocommerce_breadcrumb_heading',
		) ) );
		$wp_customize->add_setting(
			'adventure_trekking_camp_woocommerce_enable_breadcrumb',
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
			new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
				$wp_customize,
				'adventure_trekking_camp_woocommerce_enable_breadcrumb',
				array(
					'settings'        => 'adventure_trekking_camp_woocommerce_enable_breadcrumb',
					'section'         => 'adventure_trekking_camp_breadcrumb_settings',
					'label'           => __( 'Show Breadcrumb', 'adventure-trekking-camp' ),				
					'choices'		  => array(
						'1'      => __( 'On', 'adventure-trekking-camp' ),
						'off'    => __( 'Off', 'adventure-trekking-camp' ),
					),
					'active_callback' => '',
				)
			)
		);
		$wp_customize->add_setting('woocommerce_breadcrumb_separator', array(
	        'default' => ' / ',
	        'sanitize_callback' => 'sanitize_text_field',
	    ));
	    $wp_customize->add_control('woocommerce_breadcrumb_separator', array(
	        'label' => __('Breadcrumb Separator', 'adventure-trekking-camp'),
	        'section' => 'adventure_trekking_camp_breadcrumb_settings',
	        'type' => 'text',
	    ));
	}

	//woocommerce
	if ( class_exists( 'WooCommerce' ) ) { 
		$wp_customize->add_section('adventure_trekking_camp_Woocoomerce_settings',array(
    		'title' => __('WooCommerce Settings', 'adventure-trekking-camp'),
    		'priority' => 4,
		) );					
		$wp_customize->add_setting( 'adventure_trekking_camp_section_shoppage_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_shoppage_heading', array(
			'label'       => esc_html__( 'Sidebar Settings', 'adventure-trekking-camp' ),
			'section'     => 'adventure_trekking_camp_Woocoomerce_settings',
			'settings'    => 'adventure_trekking_camp_section_shoppage_heading',
		) ) );
		$wp_customize->add_setting( 'adventure_trekking_camp_shop_page_sidebar',
			array(
				'default' => 'right_sidebar',
				'transport' => 'refresh',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);
		$wp_customize->add_control( new Adventure_Trekking_Camp_Radio_Image_Control( $wp_customize, 'adventure_trekking_camp_shop_page_sidebar',
			array(
				'type'=>'select',
				'label' => __( 'Show Shop Page Sidebar', 'adventure-trekking-camp' ),
				'section'     => 'adventure_trekking_camp_Woocoomerce_settings',
				'choices' => array(

					'right_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/image/2column.jpg',
						'name' => __( 'Right Sidebar', 'adventure-trekking-camp' )
					),
					'left_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/image/left.png',
						'name' => __( 'Left Sidebar', 'adventure-trekking-camp' )
					),
					'full_width' => array(
						'image' => get_template_directory_uri().'/assets/image/1column.jpg',
						'name' => __( 'Full Width', 'adventure-trekking-camp' )
					),
				)
			)
		) );
		$wp_customize->add_setting( 'adventure_trekking_camp_wocommerce_single_page_sidebar',
			array(
				'default' => 'right_sidebar',
				'transport' => 'refresh',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);
		$wp_customize->add_control( new Adventure_Trekking_Camp_Radio_Image_Control( $wp_customize, 'adventure_trekking_camp_wocommerce_single_page_sidebar',
			array(
				'type'=>'select',
				'label'           => __( 'Show Single Product Page Sidebar', 'adventure-trekking-camp' ),
				'section'     => 'adventure_trekking_camp_Woocoomerce_settings',
				'choices' => array(

					'right_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/image/2column.jpg',
						'name' => __( 'Right Sidebar', 'adventure-trekking-camp' )
					),
					'left_sidebar' => array(
						'image' => get_template_directory_uri().'/assets/image/left.png',
						'name' => __( 'Left Sidebar', 'adventure-trekking-camp' )
					),
					'full_width' => array(
						'image' => get_template_directory_uri().'/assets/image/1column.jpg',
						'name' => __( 'Full Width', 'adventure-trekking-camp' )
					),
				)
			)
		) );
		$wp_customize->add_setting( 'adventure_trekking_camp_section_archieve_product_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_archieve_product_heading', array(
			'label'       => esc_html__( 'Archieve Product Settings', 'adventure-trekking-camp' ),
			'section'     => 'adventure_trekking_camp_Woocoomerce_settings',
			'settings'    => 'adventure_trekking_camp_section_archieve_product_heading',
		) ) );
		$wp_customize->add_setting('adventure_trekking_camp_archieve_item_columns',array(
		    'default' => '3',
		    'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
		));
		$wp_customize->add_control('adventure_trekking_camp_archieve_item_columns',array(
		    'type' => 'select',
		    'label' => __('Select No of Columns','adventure-trekking-camp'),
		    'section' => 'adventure_trekking_camp_Woocoomerce_settings',
		    'choices' => array(
		        '1' => __('One Column','adventure-trekking-camp'),
		        '2' => __('Two Column','adventure-trekking-camp'),
		        '3' => __('Three Column','adventure-trekking-camp'),
		        '4' => __('four Column','adventure-trekking-camp'),
		        '5' => __('Five Column','adventure-trekking-camp'),
		        '6' => __('Six Column','adventure-trekking-camp'),
		    ),
		) );
		$wp_customize->add_setting( 'adventure_trekking_camp_archieve_shop_perpage', array(
			'default'              => 6,
			'type'                 => 'theme_mod',
			'transport' 		   => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_sanitize_number_absint',
			'sanitize_js_callback' => 'absint',
		) );
		$wp_customize->add_control( 'adventure_trekking_camp_archieve_shop_perpage', array(
			'label'       => esc_html__( 'Display Products','adventure-trekking-camp' ),
			'section'     => 'adventure_trekking_camp_Woocoomerce_settings',
			'type'        => 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 30,
			),
		) );
		$wp_customize->add_setting( 'adventure_trekking_camp_section_related_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_related_heading', array(
			'label'       => esc_html__( 'Related Product Settings', 'adventure-trekking-camp' ),
			'section'     => 'adventure_trekking_camp_Woocoomerce_settings',
			'settings'    => 'adventure_trekking_camp_section_related_heading',
		) ) );
		$wp_customize->add_setting('woocommerce_related_products_heading', array(
	        'default' => 'Related products',
	        'sanitize_callback' => 'sanitize_text_field',
	    ));
	    $wp_customize->add_control('woocommerce_related_products_heading', array(
	        'label' => __('Related Products Heading', 'adventure-trekking-camp'),
	        'section' => 'adventure_trekking_camp_Woocoomerce_settings',
	        'type' => 'text',
	    ));
		$wp_customize->add_setting('adventure_trekking_camp_related_item_columns',array(
	        'default' => '3',
	        'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
		));
		$wp_customize->add_control('adventure_trekking_camp_related_item_columns',array(
	        'type' => 'select',
	        'label' => __('Select No of Columns','adventure-trekking-camp'),
	        'section' => 'adventure_trekking_camp_Woocoomerce_settings',
	        'choices' => array(
	            '1' => __('One Column','adventure-trekking-camp'),
	            '2' => __('Two Column','adventure-trekking-camp'),
	            '3' => __('Three Column','adventure-trekking-camp'),
	            '4' => __('four Column','adventure-trekking-camp'),
	            '5' => __('Five Column','adventure-trekking-camp'),
	            '6' => __('Six Column','adventure-trekking-camp'),
	        ),
		) );
		$wp_customize->add_setting( 'adventure_trekking_camp_related_shop_perpage', array(
			'default'              => 3,
			'type'                 => 'theme_mod',
			'transport' 		   => 'refresh',
			'sanitize_callback'    => 'adventure_trekking_camp_sanitize_number_absint',
			'sanitize_js_callback' => 'absint',
		) );
		$wp_customize->add_control( 'adventure_trekking_camp_related_shop_perpage', array(
			'label'       => esc_html__( 'Display Products','adventure-trekking-camp' ),
			'section'     => 'adventure_trekking_camp_Woocoomerce_settings',
			'type'        => 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 10,
			),
		) );
		$wp_customize->add_setting(
			'adventure_trekking_camp_related_product',
			array(
				'type'                 => 'option',
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '',
				'default'              => '1',
				'transport'            => 'refresh',
				'sanitize_callback'    => 'adventure_trekking_camp_callback_sanitize_switch',
			)
		);
		$wp_customize->add_control(new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch($wp_customize,'adventure_trekking_camp_related_product',
			array(
				'settings'        => 'adventure_trekking_camp_related_product',
				'section'         => 'adventure_trekking_camp_Woocoomerce_settings',
				'label'           => __( 'Show Related Products', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		));
	}

	// mobile width
	$wp_customize->add_section('adventure_trekking_camp_mobile_options',array(
        'title' => __('Mobile Media settings', 'adventure-trekking-camp'),
        'priority' => 4,
    ) );
    $wp_customize->add_setting( 'adventure_trekking_camp_section_mobile_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_mobile_heading', array(
		'label'       => esc_html__( 'Mobile Media settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_mobile_options',
		'settings'    => 'adventure_trekking_camp_section_mobile_heading',
		'priority' => 1,
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_scroll_enable_mobile',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_scroll_enable_mobile',
			array(
				'settings'        => 'adventure_trekking_camp_scroll_enable_mobile',
				'section'         => 'adventure_trekking_camp_mobile_options',
				'label'           => __( 'Show Scroll Top', 'adventure-trekking-camp' ),
				'description' => __('Control wont function if scroll-top is off in the main settings.', 'adventure-trekking-camp') ,					
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'adventure_trekking_camp_section_mobile_breadcrumb_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_mobile_breadcrumb_heading', array(
		'label'       => esc_html__( 'Mobile Breadcrumb settings', 'adventure-trekking-camp' ),
		'description' => __('Controls wont function if the breadcrumb is off in the main breadcrumb settings.', 'adventure-trekking-camp') ,
		'section'     => 'adventure_trekking_camp_mobile_options',
		'settings'    => 'adventure_trekking_camp_section_mobile_breadcrumb_heading',
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_enable_breadcrumb_mobile',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_enable_breadcrumb_mobile',
			array(
				'settings'        => 'adventure_trekking_camp_enable_breadcrumb_mobile',
				'section'         => 'adventure_trekking_camp_mobile_options',
				'label'           => __( 'Theme Breadcrumb', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting(
		'adventure_trekking_camp_single_enable_breadcrumb_mobile',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_single_enable_breadcrumb_mobile',
			array(
				'settings'        => 'adventure_trekking_camp_single_enable_breadcrumb_mobile',
				'section'         => 'adventure_trekking_camp_mobile_options',
				'label'           => __( 'Single Post & Page', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
	if ( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_setting(
			'adventure_trekking_camp_woocommerce_enable_breadcrumb_mobile',
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
			new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
				$wp_customize,
				'adventure_trekking_camp_woocommerce_enable_breadcrumb_mobile',
				array(
					'settings'        => 'adventure_trekking_camp_woocommerce_enable_breadcrumb_mobile',
					'section'         => 'adventure_trekking_camp_mobile_options',
					'label'           => __( 'wooCommerce Breadcrumb', 'adventure-trekking-camp' ),				
					'choices'		  => array(
						'1'      => __( 'On', 'adventure-trekking-camp' ),
						'off'    => __( 'Off', 'adventure-trekking-camp' ),
					),
					'active_callback' => '',
				)
			)
		);
	}

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'adventure_trekking_camp_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'adventure_trekking_camp_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'adventure_trekking_camp_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'adventure_trekking_camp_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'adventure-trekking-camp' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'adventure-trekking-camp' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'adventure_trekking_camp_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'adventure_trekking_camp_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'adventure_trekking_camp_customize_register' );

function adventure_trekking_camp_customize_partial_blogname() {
	bloginfo( 'name' );
}
function adventure_trekking_camp_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function adventure_trekking_camp_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
function adventure_trekking_camp_is_view_with_layout_option() {
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

define('ADVENTURE_TREKKING_CAMP_PRO_LINK',__('https://www.ovationthemes.com/wordpress/trekking-wordpress-theme/','adventure-trekking-camp'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Adventure_Trekking_Camp_Pro_Control')):
    class Adventure_Trekking_Camp_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( ADVENTURE_TREKKING_CAMP_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE TREKKING CAMP PREMIUM','adventure-trekking-camp');?> </a>
	        </div>
            <div class="col-md">
                <img class="adventure_trekking_camp_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
	            <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('TREKKING CAMP PREMIUM - Features', 'adventure-trekking-camp'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'adventure-trekking-camp');?> </li>
                    <li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'adventure-trekking-camp');?> </li>
                   	<li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'adventure-trekking-camp');?> </li>
                   	<li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'adventure-trekking-camp');?> </li>
                   	<li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'adventure-trekking-camp');?> </li>
                   	<li class="upsell-adventure_trekking_camp"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'adventure-trekking-camp');?> </li>
                </ul>
        	</div>
		    <div class="col-md upsell-btn upsell-btn-bottom">
	            <a href="<?php echo esc_url( ADVENTURE_TREKKING_CAMP_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE TREKKING CAMP PREMIUM','adventure-trekking-camp');?> </a>
		    </div>
        </label>
    <?php } }
endif;