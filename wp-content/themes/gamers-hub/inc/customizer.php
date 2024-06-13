<?php
/**
 * Gamers Hub: Customizer
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gamers_hub_customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Gamers_Hub_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Gamers_Hub_Control_Sortable' );	

	//add home page setting pannel
	$wp_customize->add_panel( 'gamers_hub_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( ' Custom Home page', 'gamers-hub' ),
	    'description' => __( 'Description of what this panel does.', 'gamers-hub' ),
	) );

	//TP General Option
	$wp_customize->add_section('gamers_hub_tp_general_settings',array(
        'title' => __('TP General Option', 'gamers-hub'),
        'panel' => 'gamers_hub_panel_id',
        'priority' => 1,
    ) );
    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('gamers_hub_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Sidebar Position', 'gamers-hub'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'gamers-hub'),
        'section' => 'gamers_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','gamers-hub'),
            'left' => __('Left','gamers-hub'),
            'right' => __('Right','gamers-hub'),
            'three-column' => __('Three Columns','gamers-hub'),
            'four-column' => __('Four Columns','gamers-hub'),
            'grid' => __('Grid Layout','gamers-hub')
        ),
	) );
	$wp_customize->add_setting('gamers_hub_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'gamers-hub'),
        'description'   => __('This option work for single blog page', 'gamers-hub'),
        'section' => 'gamers_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','gamers-hub'),
            'left' => __('Left','gamers-hub'),
            'right' => __('Right','gamers-hub'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('gamers_hub_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'gamers-hub'),
        'description'   => __('This option work for pages.', 'gamers-hub'),
        'section' => 'gamers_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','gamers-hub'),
            'left' => __('Left','gamers-hub'),
            'right' => __('Right','gamers-hub')
        ),
	) );

	//tp typography option
	$gamers_hub_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('gamers_hub_typography_option',array(
		'title'         => __('TP Typography Option', 'gamers-hub'),
		'priority' => 1,
		'panel' => 'gamers_hub_panel_id'
   	));

   	$wp_customize->add_setting('gamers_hub_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'gamers_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'gamers_hub_heading_font_family', array(
		'section' => 'gamers_hub_typography_option',
		'label'   => __('heading Fonts', 'gamers-hub'),
		'type'    => 'select',
		'choices' => $gamers_hub_font_array,
	));

	$wp_customize->add_setting('gamers_hub_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'gamers_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'gamers_hub_body_font_family', array(
		'section' => 'gamers_hub_typography_option',
		'label'   => __('Body Fonts', 'gamers-hub'),
		'type'    => 'select',
		'choices' => $gamers_hub_font_array,
	));

	//TP Preloader Option
	$wp_customize->add_section('gamers_hub_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'gamers-hub'),
		'priority' => 1,
		'panel' => 'gamers_hub_panel_id'
	) );
	$wp_customize->add_setting( 'gamers_hub_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'gamers-hub' ),
		'section'     => 'gamers_hub_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_preloader_show_hide',
	) ) );
	$wp_customize->add_setting( 'gamers_hub_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'gamers-hub'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_prelaoder_option',
	    'settings' => 'gamers_hub_tp_preloader_color1_option',
  	)));
  	$wp_customize->add_setting( 'gamers_hub_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'gamers-hub'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_prelaoder_option',
	    'settings' => 'gamers_hub_tp_preloader_color2_option',
  	)));
  	$wp_customize->add_setting( 'gamers_hub_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'gamers-hub'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_prelaoder_option',
	    'settings' => 'gamers_hub_tp_preloader_bg_color_option',
  	)));

	//TP Color Option
	$wp_customize->add_section('gamers_hub_color_option',array(
     'title'         => __('TP Color Option', 'gamers-hub'),
     'priority' => 1,
     'panel' => 'gamers_hub_panel_id'
    ) );
	$wp_customize->add_setting( 'gamers_hub_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_color_option', array(
		'label'     => __('Theme First Color', 'gamers-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_color_option',
	    'settings' => 'gamers_hub_tp_color_option',
  	)));
  	$wp_customize->add_setting( 'gamers_hub_tp_color_option_link', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_color_option_link', array(
			'label'     => __('Theme Second Color', 'gamers-hub'),
	    'description' => __('It will change the complete theme hover link color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_color_option',
	    'settings' => 'gamers_hub_tp_color_option_link',
  	)));

	//TP Blog Option
	$wp_customize->add_section('gamers_hub_blog_option',array(
        'title' => __('TP Blog Option', 'gamers-hub'),
        'panel' => 'gamers_hub_panel_id',
        'priority' => 1,
    ) );
    $wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category'),
        'sanitize_callback' => 'gamers_hub_sanitize_sortable',
    ));
    $wp_customize->add_control(new Gamers_Hub_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'gamers-hub'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'gamers-hub') ,
        'section' => 'gamers_hub_blog_option',
        'choices' => array(
            'date' => __('date', 'gamers-hub') ,
            'author' => __('author', 'gamers-hub') ,
            'comment' => __('comment', 'gamers-hub') ,
            'category' => __('category', 'gamers-hub') ,
        ) ,
    )));
    $wp_customize->add_setting( 'gamers_hub_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'gamers_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'gamers_hub_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','gamers-hub' ),
		'section'     => 'gamers_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	$wp_customize->add_setting('gamers_hub_read_more_text',array(
		'default'=> __('Read More','gamers-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_read_more_text',array(
		'label'	=> __('Edit Button Text','gamers-hub'),
		'section'=> 'gamers_hub_blog_option',
		'type'=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'gamers_hub_read_more_text', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_read_more_text',
	) );
	$wp_customize->add_setting( 'gamers_hub_remove_read_button', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_remove_read_button', array(
         'label' => __('Show / Hide Read More Button','gamers-hub'),
			'section'     => 'gamers_hub_blog_option',
			'type'        => 'toggle',
			'settings'    => 'gamers_hub_remove_read_button',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_read_button',
	));
    $wp_customize->add_setting( 'gamers_hub_remove_tags', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_remove_tags', array(
			'label'       => esc_html__( 'Show / Hide Tags Option', 'gamers-hub' ),
			'section'     => 'gamers_hub_blog_option',
			'type'        => 'toggle',
			'settings'    => 'gamers_hub_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_tags',
    ));
    $wp_customize->add_setting( 'gamers_hub_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'gamers-hub' ),
		'section'     => 'gamers_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_category',
	));
	$wp_customize->add_setting( 'gamers_hub_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'gamers-hub' ),
	 'section'     => 'gamers_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'gamers_hub_remove_comment',
	) ) );

	$wp_customize->add_setting( 'gamers_hub_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'gamers-hub' ),
	 'section'     => 'gamers_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'gamers_hub_remove_related_post',
	) ) );
	$wp_customize->add_setting('gamers_hub_related_post_heading',array(
		'default'=> __('Related Posts','gamers-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_related_post_heading',array(
		'label'	=> __('Edit Section Title','gamers-hub'),
		'section'=> 'gamers_hub_blog_option',
		'type'=> 'text'
	));
	$wp_customize->add_setting( 'gamers_hub_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'gamers_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'gamers_hub_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','gamers-hub' ),
		'section'     => 'gamers_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );
	$wp_customize->add_setting( 'gamers_hub_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'gamers_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'gamers_hub_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','gamers-hub' ),
		'section'     => 'gamers_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );
	$wp_customize->add_setting('gamers_hub_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'gamers-hub'),
        'section' => 'gamers_hub_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','gamers-hub'),
            'content-image' => __('Content-Media','gamers-hub'),
        ),
	) );

  	//MENU TYPOGRAPHY
	$wp_customize->add_section( 'gamers_hub_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'gamers-hub' ),
    	'priority' => 2,
		'panel' => 'gamers_hub_panel_id'
	) );
	$wp_customize->add_setting('gamers_hub_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'gamers_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'gamers_hub_menu_font_family', array(
		'section' => 'gamers_hub_menu_typography',
		'label'   => __('Menu Fonts', 'gamers-hub'),
		'type'    => 'select',
		'choices' => $gamers_hub_font_array,
	));
	$wp_customize->add_setting('gamers_hub_menu_font_weight',array(
        'default' => '400',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_menu_font_weight',array(
     'type' => 'radio',
     'label'     => __('Font Weight', 'gamers-hub'),
     'section' => 'gamers_hub_menu_typography',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','gamers-hub'),
         '200' => __('200','gamers-hub'),
         '300' => __('300','gamers-hub'),
         '400' => __('400','gamers-hub'),
         '500' => __('500','gamers-hub'),
         '600' => __('600','gamers-hub'),
         '700' => __('700','gamers-hub'),
         '800' => __('800','gamers-hub'),
         '900' => __('900','gamers-hub')
     ),
	) );
	$wp_customize->add_setting('gamers_hub_menu_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'gamers_hub_sanitize_choices'
 	));
 	$wp_customize->add_control('gamers_hub_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','gamers-hub'),
		'section' => 'gamers_hub_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','gamers-hub'),
		   'Lowercase' => __('Lowercase','gamers-hub'),
		   'Capitalize' => __('Capitalize','gamers-hub'),
		),
	) );
	$wp_customize->add_setting('gamers_hub_menu_font_size', array(
	  'default' => 15,
      'sanitize_callback' => 'gamers_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new Gamers_Hub_Range_Slider($wp_customize, 'gamers_hub_menu_font_size', array(
      'section' => 'gamers_hub_menu_typography',
      'label' => esc_html__('Font Size', 'gamers-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 20,
        'step' => 1
    )
	)));

	// Top bar Section
	$wp_customize->add_section( 'gamers_hub_topbar', array(
    	'title'      => __( 'Contact Details', 'gamers-hub' ),
    	'description' => __( 'Add your contact details', 'gamers-hub' ),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 2,
	) );
	$wp_customize->add_setting( 'gamers_hub_search_icon', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_search_icon', array(
		'label'       => esc_html__( 'Show / Hide Search Option', 'gamers-hub' ),
		'section'     => 'gamers_hub_topbar',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_search_icon',
	) ) );
	$wp_customize->selective_refresh->add_partial( 'gamers_hub_search_icon', array(
		'selector' => '.search_btn i',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_search_icon',
	) );
	$wp_customize->add_setting('gamers_hub_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('gamers_hub_mail',array(
		'label'	=> __('Add Mail Address','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'text'
	));
	$wp_customize->add_setting('gamers_hub_mail_icon',array(
		'default'	=> 'fas fa-envelope-open',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Gamers_Hub_Icon_Changer(
        $wp_customize,'gamers_hub_mail_icon',array(
		'label'	=> __('Mail Icon','gamers-hub'),
		'transport' => 'refresh',
		'section'	=> 'gamers_hub_topbar',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('gamers_hub_login_button',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_login_button',array(
		'label'	=> __('Add Login Text','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'text'
	));
	$wp_customize->add_setting('gamers_hub_register_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_register_button_link',array(
		'label'	=> __('Add Login URL','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'url'
	));
	$wp_customize->add_setting('gamers_hub_sign_up_button',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_sign_up_button',array(
		'label'	=> __('Add Sign Up Text','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'text'
	));
	$wp_customize->add_setting('gamers_hub_sign_up_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_sign_up_button_link',array(
		'label'	=> __('Add Sign Up URL','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'url'
	));

	// Social Link
	$wp_customize->add_section( 'gamers_hub_social_media', array(
    	'title'      => __( 'Social Media Links', 'gamers-hub' ),
    	'description' => __( 'Add your Social Links', 'gamers-hub' ),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 2,
	) );
	$wp_customize->add_setting( 'gamers_hub_header_fb_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_header_fb_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'gamers-hub' ),
		'section'     => 'gamers_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_header_fb_new_tab',
	) ) );	
	$wp_customize->selective_refresh->add_partial( 'gamers_hub_facebook_url', array(
		'selector' => '.social-media',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_facebook_url',
	) );
	$wp_customize->add_setting('gamers_hub_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_facebook_url',array(
		'label'	=> __('Facebook Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('gamers_hub_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Gamers_Hub_Icon_Changer(
        $wp_customize,'gamers_hub_facebook_icon',array(
		'label'	=> __('Facebook Icon','gamers-hub'),
		'transport' => 'refresh',
		'section'	=> 'gamers_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'gamers_hub_header_twt_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_header_twt_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'gamers-hub' ),
		'section'     => 'gamers_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_header_twt_new_tab',
	) ) );
	$wp_customize->add_setting('gamers_hub_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_twitter_url',array(
		'label'	=> __('Twitter Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('gamers_hub_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Gamers_Hub_Icon_Changer(
        $wp_customize,'gamers_hub_twitter_icon',array(
		'label'	=> __('Twitter Icon','gamers-hub'),
		'transport' => 'refresh',
		'section'	=> 'gamers_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'gamers_hub_header_ins_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_header_ins_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'gamers-hub' ),
		'section'     => 'gamers_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_header_ins_new_tab',
	) ) );
	$wp_customize->add_setting('gamers_hub_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_instagram_url',array(
		'label'	=> __('Instagram Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('gamers_hub_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Gamers_Hub_Icon_Changer(
        $wp_customize,'gamers_hub_instagram_icon',array(
		'label'	=> __('Instagram Icon','gamers-hub'),
		'transport' => 'refresh',
		'section'	=> 'gamers_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'gamers_hub_header_ut_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_header_ut_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'gamers-hub' ),
		'section'     => 'gamers_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_header_ut_new_tab',
	) ) );
	$wp_customize->add_setting('gamers_hub_youtube_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_youtube_url',array(
		'label'	=> __('YouTube Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('gamers_hub_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Gamers_Hub_Icon_Changer(
        $wp_customize,'gamers_hub_youtube_icon',array(
		'label'	=> __('Youtube Icon','gamers-hub'),
		'transport' => 'refresh',
		'section'	=> 'gamers_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('gamers_hub_social_icon_fontsize',array(
		'default'=> '12',
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_social_icon_fontsize',array(
		'label'	=> __('Social Icons Font Size in PX','gamers-hub'),
		'type'=> 'number',
		'section'=> 'gamers_hub_social_media',
		'input_attrs' => array(
	      		'step' => 1,
				'min'  => 0,
				'max'  => 30,
	        ),
	));

	//home page slider
	$wp_customize->add_section( 'gamers_hub_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'gamers-hub' ),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 3,
	) );
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_slider_arrows', array(
			'selector' => '#slider .carousel-caption',
			'render_callback' => 'gamers_hub_customize_partial_gamers_hub_slider_arrows',
	) );
	for ( $gamers_hub_count = 1; $gamers_hub_count <= 4; $gamers_hub_count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'gamers_hub_slider_page' . $gamers_hub_count, array(
			'default'           => '',
			'sanitize_callback' => 'gamers_hub_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'gamers_hub_slider_page' . $gamers_hub_count, array(
			'label'    => __( 'Select Slide Image Page', 'gamers-hub' ),
			'section'  => 'gamers_hub_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'gamers_hub_slider_button', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
 	) );
 	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_slider_button', array(
	 'label'       => esc_html__( 'Show / Hide Slider Button', 'gamers-hub' ),
	 'section'     => 'gamers_hub_slider_section',
	 'type'        => 'toggle',
	 'settings'    => 'gamers_hub_slider_button',
 	) ) );
	$wp_customize->add_setting('gamers_hub_slider_icon',array(
		'default'	=> 'fas fa-hand-point-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Gamers_Hub_Icon_Changer(
        $wp_customize,'gamers_hub_slider_icon',array(
		'label'	=> __('Slider Button Icon','gamers-hub'),
		'transport' => 'refresh',
		'section'	=> 'gamers_hub_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('gamers_hub_slider_content_layout',array(
        'default' => 'CENTER-ALIGN',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'gamers-hub'),
        'section' => 'gamers_hub_slider_section',
        'choices' => array(
            'CENTER-ALIGN' => __('CENTER-ALIGN','gamers-hub'),
            'LEFT-ALIGN' => __('LEFT-ALIGN','gamers-hub'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','gamers-hub'),
        ),
	) );

	//From Our Blog
	$wp_customize->add_section('gamers_hub_static_blog_section',array(
		'title'	=> __('Blog Section','gamers-hub'),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 3,
	));
    $wp_customize->add_setting( 'gamers_hub_blog_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_blog_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Blog Section', 'gamers-hub' ),
		'section'     => 'gamers_hub_static_blog_section',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_blog_show_hide',
	) ) );
	$wp_customize->add_setting('gamers_hub_blog_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_blog_tittle',array(
		'label'	=> __('Blog Title','gamers-hub'),
		'section'	=> 'gamers_hub_static_blog_section',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('gamers_hub_blog_sub_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_blog_sub_tittle',array(
		'label'	=> __('Blog Sub Title','gamers-hub'),
		'section'	=> 'gamers_hub_static_blog_section',
		'type'		=> 'text'
	));
	$gamers_hub_categories = get_categories();
	$cats = array();
	$i = 0;
	$gamers_hub_offer_cat[]= 'select';
	foreach($gamers_hub_categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$gamers_hub_offer_cat[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('gamers_hub_our_fund_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'gamers_hub_sanitize_choices',
	));
	$wp_customize->add_control('gamers_hub_our_fund_section_category',array(
		'type'    => 'select',
		'choices' => $gamers_hub_offer_cat,
		'label' => __('Select Category','gamers-hub'),
		'section' => 'gamers_hub_static_blog_section',
	));

	//Footer
	$wp_customize->add_section('gamers_hub_footer_section',array(
		'title'	=> __('Footer Text','gamers-hub'),
		'description'	=> __('Add copyright text.','gamers-hub'),
		'priority' => 4,
		'panel' => 'gamers_hub_panel_id'
	));
	$wp_customize->add_setting('gamers_hub_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_footer_text',array(
		'label'	=> __('Copyright Text','gamers-hub'),
		'section'	=> 'gamers_hub_footer_section',
		'type'		=> 'text'
	));
    // footer columns
	$wp_customize->add_setting('gamers_hub_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_footer_columns',array(
		'label'	=> __('Footer Widget Columns','gamers-hub'),
		'section'	=> 'gamers_hub_footer_section',
		'setting'	=> 'gamers_hub_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'gamers_hub_tp_footer_bg_color_option', array(
		'default' => '#151515',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_footer_bg_color_option', array(
		'label'     => __('Footer Widget Background Color', 'gamers-hub'),
		'description' => __('It will change the complete footer widget backgorund color.', 'gamers-hub'),
		'section' => 'gamers_hub_footer_section',
		'settings' => 'gamers_hub_tp_footer_bg_color_option',
	)));
	$wp_customize->add_setting('gamers_hub_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'gamers_hub_footer_widget_image',array(
      'label' => __('Footer Widget Background Image','gamers-hub'),
      'section' => 'gamers_hub_footer_section'
	)));
	$wp_customize->selective_refresh->add_partial( 'gamers_hub_footer_text', array(
		'selector' => '#footer p',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_footer_text',
	) );
	$wp_customize->add_setting( 'gamers_hub_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'gamers-hub' ),
		'section'     => 'gamers_hub_footer_section',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_return_to_header',
	) ) );
	$wp_customize->add_setting('gamers_hub_header_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Gamers_Hub_Icon_Changer(
        $wp_customize,'gamers_hub_header_icon',array(
		'label'	=> __('Scroll Top Icon','gamers-hub'),
		'transport' => 'refresh',
		'section'	=> 'gamers_hub_footer_section',
		'type'		=> 'icon'
	)));
    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('gamers_hub_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'gamers-hub'),
        'description'   => __('This option work for scroll to top', 'gamers-hub'),
        'section' => 'gamers_hub_footer_section',
        'choices' => array(
            'Right' => __('Right','gamers-hub'),
            'Left' => __('Left','gamers-hub'),
            'Center' => __('Center','gamers-hub')
        ),
	) );

    //Mobile Responsive
	$wp_customize->add_section('gamers_hub_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'gamers-hub'),
		'description' => __('Control will no function if the toggle in the main settings is off.', 'gamers-hub'),
		'priority' => 5,
		'panel' => 'gamers_hub_panel_id'
	) );
	$wp_customize->add_setting( 'gamers_hub_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'gamers-hub' ),
		'section'     => 'gamers_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'gamers_hub_slider_button_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_slider_button_mob', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'gamers-hub' ),
		'section'     => 'gamers_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_slider_button_mob',
	) ) );
	$wp_customize->add_setting( 'gamers_hub_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'gamers-hub' ),
		'section'     => 'gamers_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_related_post_mob',
	) ) );

	//Site Identity
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'gamers_hub_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'gamers_hub_customize_partial_blogdescription',
	) );
	//Site Identity
    $wp_customize->add_setting( 'gamers_hub_site_title_text', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_site_title_text', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'gamers-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_site_title_text',
	) ) );

	// logo site title size
	$wp_customize->add_setting('gamers_hub_site_title_font_size',array(
		'default'	=> 30,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','gamers-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'gamers_hub_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 80,
		),
	));
    $wp_customize->add_setting( 'gamers_hub_site_tagline_text', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_site_tagline_text', array(
		'label'       => esc_html__( 'Show / Hide Tagline', 'gamers-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
	    'settings'    => 'gamers_hub_site_tagline_text',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('gamers_hub_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','gamers-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'gamers_hub_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));
    $wp_customize->add_setting('gamers_hub_logo_width',array(
		'default' => 150,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','gamers-hub'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));
	$wp_customize->add_setting('gamers_hub_logo_settings',array(
        'default' => 'Different Line',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
    $wp_customize->add_control('gamers_hub_logo_settings',array(
        'type' => 'radio',
        'label'     => __('Logo Layout Settings', 'gamers-hub'),
        'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'gamers-hub'),
        'section' => 'title_tagline',
        'choices' => array(
            'Different Line' => __('Different Line','gamers-hub'),
            'Same Line' => __('Same Line','gamers-hub')
        ),
	) );

   //Woo Commerce
	$wp_customize->add_setting('gamers_hub_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_per_columns',array(
		'label'	=> __('Product Per Row','gamers-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting('gamers_hub_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_product_per_page',array(
		'label'	=> __('Product Per Page','gamers-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting( 'gamers_hub_product_sidebar', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_product_sidebar', array(
			'label'       => esc_html__( 'Show / Hide Shop page sidebar', 'gamers-hub' ),
			'section'     => 'woocommerce_product_catalog',
			'type'        => 'toggle',
			'settings'    => 'gamers_hub_product_sidebar',
	) ) );
	$wp_customize->add_setting('gamers_hub_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'gamers-hub'),
        'description'   => __('This option work for Archieve Products', 'gamers-hub'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','gamers-hub'),
            'right' => __('Right','gamers-hub'),
        ),
	) );
    $wp_customize->add_setting( 'gamers_hub_single_product_sidebar', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product page sidebar', 'gamers-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_single_product_sidebar',
	) ) );

    $wp_customize->add_setting( 'gamers_hub_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'gamers_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Gamers_Hub_Toggle_Control( $wp_customize, 'gamers_hub_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'gamers-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'gamers_hub_related_product',
	) ) );
	
	// 404 PAGE
	$wp_customize->add_section('gamers_hub_404_page_section',array(
		'title'         => __('404 Page', 'gamers-hub'),
		'description'   => 'Here you can customize 404 Page content.',
	) );
	$wp_customize->add_setting('gamers_hub_not_found_title',array(
		'default'=> __('Oops! That page cant be found.','gamers-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('gamers_hub_not_found_title',array(
		'label'	=> __('Edit Title','gamers-hub'),
		'section'=> 'gamers_hub_404_page_section',
		'type'=> 'text',
	));
	$wp_customize->add_setting('gamers_hub_not_found_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','gamers-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_not_found_text',array(
		'label'	=> __('Edit Text','gamers-hub'),
		'section'=> 'gamers_hub_404_page_section',
		'type'=> 'text'
	));
}
add_action( 'customize_register', 'gamers_hub_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Gamers Hub 1.0
 * @see gamers_hub_customize_register()
 *
 * @return void
 */
function gamers_hub_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Gamers Hub 1.0
 * @see gamers_hub_customize_register()
 *
 * @return void
 */
function gamers_hub_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'GAMERS_HUB_PRO_THEME_NAME' ) ) {
	define( 'GAMERS_HUB_PRO_THEME_NAME', esc_html__( 'Gamers Hub Pro Theme', 'gamers-hub' ));
}
if ( ! defined( 'GAMERS_HUB_PRO_THEME_URL' ) ) {
	define( 'GAMERS_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/gamers-hub-wordpress-theme/'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Gamers_Hub_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Gamers_Hub_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Gamers_Hub_Customize_Section_Pro(
				$manager,
				'gamers_hub_section_pro',
				array(
					'priority'   => 9,
					'title'    => GAMERS_HUB_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'gamers-hub' ),
					'pro_url'  => esc_url( GAMERS_HUB_PRO_THEME_URL, 'gamers-hub' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new Gamers_Hub_Customize_Section_Pro(
				$manager,
				'gamers_hub_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'gamers-hub' ),
					'pro_text' => esc_html__( 'Click Here', 'gamers-hub' ),
					'pro_url'  => esc_url( GAMERS_HUB_DOCS_URL, 'gamers-hub'),
				)
			)
		);
	
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'gamers-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'gamers-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Gamers_Hub_Customize::get_instance();
