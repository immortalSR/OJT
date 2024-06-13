<?php
/**
 * Sports League Theme Customizer
 * @package Sports League
 */

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-sizer.php' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sports_league_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_setting( 'sports_league_logo_sizer',array(
		'default' => 50,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_logo_sizer',array(
		'label' => esc_html__( 'Logo Sizer','sports-league' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

 	// logo padding
	$wp_customize->add_setting( 'sports_league_logo_padding',array(
		'default' =>20,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_logo_padding',array(
		'label' => esc_html__( 'Logo Padding','sports-league' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	// logo margin
	$wp_customize->add_setting( 'sports_league_logo_margin',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_logo_margin',array(
		'label' => esc_html__( 'Logo Margin','sports-league' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('sports_league_site_title_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_site_title_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Site Title','sports-league'),
		'section' => 'title_tagline'
	));

 	$wp_customize->add_setting('sports_league_site_title_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_site_title_font_size',array(
		'label' => esc_html__( 'Site Title Font Size (px)','sports-league' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	)));

	// site title color
   $wp_customize->add_setting('sports_league_site_title_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_site_title_color', array(
		'label'    => __('Site Title Color', 'sports-league'),
		'section'  => 'title_tagline',
		'settings' => 'sports_league_site_title_color',
	)));

   $wp_customize->add_setting('sports_league_site_tagline_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_site_tagline_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Site Tagline','sports-league'),
      'section' => 'title_tagline'
   ));

   $wp_customize->add_setting('sports_league_site_tagline_font_size',array(
		'default'=> 13,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_site_tagline_font_size',array(
		'label' => esc_html__( 'Site Tagline Font Size (px)','sports-league' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	// site tagline color
	$wp_customize->add_setting('sports_league_site_tagline_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_site_tagline_color', array(
		'label'    => __('Site Tagline Color', 'sports-league'),
		'section'  => 'title_tagline',
		'settings' => 'sports_league_site_tagline_color',
	)));

    $wp_customize->add_setting('sports_league_site_logo_inline',array(
       'default' => false,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_site_logo_inline',array(
       'type' => 'checkbox',
       'label' => __('Site logo inline with site title','sports-league'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('sports_league_background_skin',array(
        'default' => 'Without Background',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_background_skin',array(
        'type' => 'radio',
        'label' => __('Background Skin','sports-league'),
        'description' => __('Here you can add the background skin along with the background image.','sports-league'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background Skin','sports-league'),
            'Without Background' => __('Without Background Skin','sports-league'),
        ),
	) );

	//Important Links
	$wp_customize->add_section( 'sports_league_important_links' , array(
    	'title' => esc_html__( 'Important Links', 'sports-league' ),
    	'priority' => 10,
	) );

	$wp_customize->add_setting('sports_league_doc_link',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_doc_link',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(SPORTS_LEAGUE_FREE_DOC) ." '>". esc_html('Documentation','sports-league') ."</a>",
		'section'=> 'sports_league_important_links'
	));

	$wp_customize->add_setting('sports_league_demo_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_demo_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(SPORTS_LEAGUE_LIVE_DEMO) ." '>". esc_html('Demo','sports-league') ."</a>",
		'section'=> 'sports_league_important_links'
	));

	$wp_customize->add_setting('sports_league_forum_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_forum_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(SPORTS_LEAGUE_FREE_SUPPORT) ." '>". esc_html('Support Forum','sports-league') ."</a>",
		'section'=> 'sports_league_important_links'
	));

	//add home page setting pannel
	$wp_customize->add_panel( 'sports_league_panel_id', array(
	    'priority' => 11,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'sports-league' ),
	    'description' => __( 'Description of what this panel does.', 'sports-league' ),
	) );

	$sports_league_font_array = array(
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

	//Typography
	$wp_customize->add_section('sports_league_typography', array(
		'title'    => __('Typography', 'sports-league'),
		'panel'    => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_typography_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_typography_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_typography'
	));

	//This is body FontFamily picker setting
	$wp_customize->add_setting('sports_league_body_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_body_color', array(
		'label'    => __('Body Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_body_color',
	)));

	$wp_customize->add_setting('sports_league_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control(	'sports_league_body_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('Body Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	$wp_customize->add_setting('sports_league_body_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_body_font_size', array(
		'label'   => __('Body Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_body_font_size',
		'type'    => 'text',
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('sports_league_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_paragraph_color', array(
		'label'    => __('Paragraph Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('sports_league_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control(	'sports_league_paragraph_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('Paragraph Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	$wp_customize->add_setting('sports_league_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_paragraph_font_size',
		'type'    => 'text',
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('sports_league_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_atag_color', array(
		'label'    => __('"a" Tag Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('sports_league_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control(	'sports_league_atag_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('"a" Tag Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('sports_league_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_li_color', array(
		'label'    => __('"li" Tag Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('sports_league_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control(	'sports_league_li_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('"li" Tag Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('sports_league_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_h1_color', array(
		'label'    => __('H1 Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('sports_league_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control('sports_league_h1_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('H1 Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('sports_league_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_h1_font_size', array(
		'label'   => __('H1 Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_h1_font_size',
		'type'    => 'text',
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting('sports_league_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_h2_color', array(
		'label'    => __('h2 Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('sports_league_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control(
	'sports_league_h2_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('h2 Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('sports_league_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_h2_font_size', array(
		'label'   => __('H2 Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_h2_font_size',
		'type'    => 'text',
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting('sports_league_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_h3_color', array(
		'label'    => __('H3 Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('sports_league_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control(
	'sports_league_h3_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('H3 Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('sports_league_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_h3_font_size', array(
		'label'   => __('H3 Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_h3_font_size',
		'type'    => 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting('sports_league_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_h4_color', array(
		'label'    => __('H4 Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('sports_league_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control('sports_league_h4_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('H4 Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('sports_league_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_h4_font_size', array(
		'label'   => __('H4 Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_h4_font_size',
		'type'    => 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting('sports_league_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_h5_color', array(
		'label'    => __('H5 Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('sports_league_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control('sports_league_h5_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('H5 Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('sports_league_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_h5_font_size', array(
		'label'   => __('H5 Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_h5_font_size',
		'type'    => 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting('sports_league_h6_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_h6_color', array(
		'label'    => __('H6 Color', 'sports-league'),
		'section'  => 'sports_league_typography',
		'settings' => 'sports_league_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('sports_league_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control('sports_league_h6_font_family', array(
		'section' => 'sports_league_typography',
		'label'   => __('H6 Fonts', 'sports-league'),
		'type'    => 'select',
		'choices' => $sports_league_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('sports_league_h6_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_league_h6_font_size', array(
		'label'   => __('H6 Font Size', 'sports-league'),
		'section' => 'sports_league_typography',
		'setting' => 'sports_league_h6_font_size',
		'type'    => 'text',
	));

 	//Header Section
	$wp_customize->add_section('sports_league_header_section',array(
		'title'	=> __('Header','sports-league'),
		'description'	=> __('Add contact details here','sports-league'),
		'priority'	=> null,
		'panel' => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_header_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_header_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_header_section'
	));

	$wp_customize->add_setting('sports_league_display_search',array(
      'default' => true,
      'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));

   $wp_customize->add_control('sports_league_display_search',array(
      'type' => 'checkbox',
      'label' => __('Show / Hide Search','sports-league'),
      'section' => 'sports_league_header_section'
   ));

   $wp_customize->add_setting('sports_league_display_cart',array(
      'default' => true,
      'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));

   $wp_customize->add_control('sports_league_display_cart',array(
      'type' => 'checkbox',
      'label' => __('Show / Hide Cart','sports-league'),
      'section' => 'sports_league_header_section'
   ));

	$wp_customize->add_setting('sports_league_slider_search_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_slider_search_icon',array(
		'label'	=> __('Search Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_header_section',
		'type'		=> 'icon'
	)));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'sports_league_show_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ) );
   $wp_customize->add_control('sports_league_show_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Topbar','sports-league' ),
        'section' => 'sports_league_header_section'
   ));

   $wp_customize->add_setting('sports_league_get_tickets',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
	)); 
	$wp_customize->add_control('sports_league_get_tickets',array(
			'label'	=> esc_html__('Get Tickets','sports-league'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Get Tickets', 'sports-league' ),
	         ),
			'section'=> 'sports_league_header_section',
			'type'=> 'text'
	));

	$wp_customize->add_setting('sports_league_get_tickets_url',array(
			'default'=> '',
			'sanitize_callback'	=> 'esc_url_raw'
	)); 
	$wp_customize->add_control('sports_league_get_tickets_url',array(
			'label'	=> esc_html__('Add Get Tickets Url','sports-league'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'www.example-info.com', 'sports-league' ),
	        ),
			'section'=> 'sports_league_header_section',
			'type'=> 'url'
	));

	$wp_customize->add_setting('sports_league_track_delivery',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
	)); 
	$wp_customize->add_control('sports_league_track_delivery',array(
			'label'	=> esc_html__('Track Delivery','sports-league'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Track Delivery', 'sports-league' ),
	        ),
			'section'=> 'sports_league_header_section',
			'type'=> 'text'
	));

	$wp_customize->add_setting('sports_league_track_delivery_url',array(
			'default'=> '',
			'sanitize_callback'	=> 'esc_url_raw'
	)); 
	$wp_customize->add_control('sports_league_track_delivery_url',array(
			'label'	=> esc_html__('Add Track Delivery Url','sports-league'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'www.example-info.com', 'sports-league' ),
	        ),
			'section'=> 'sports_league_header_section',
			'type'=> 'url'
	));

	$wp_customize->add_setting('sports_league_news_text',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
	)); 
	$wp_customize->add_control('sports_league_news_text',array(
			'label'	=> esc_html__('Add News Text','sports-league'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Terms and Condition', 'sports-league' ),
	        ),
			'section'=> 'sports_league_header_section',
			'type'=> 'text'
	));

	$wp_customize->add_setting( 'sports_league_notice_section_text', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sports_league_notice_section_text', array(
			'label'    => __( 'Notice Text', 'sports-league' ),
			'input_attrs' => array(
	            'placeholder' => __( 'Support Your Favourite Team Now!Offer Available On Team Jerseys Limited Time Offer.', 'sports-league' ),
	        ),
			'section'  => 'sports_league_header_section',
			'type'     => 'text'
	) );

	//Social Icons Settings
	$wp_customize->add_section('sports_league_social_icons_settings',array(
		'title'	=> __('Social Icons','sports-league'),
		'priority'	=> null,
		'panel' => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_social_icons_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_social_icons_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_social_icons_settings'
	));

	$wp_customize->add_setting('sports_league_facebook_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_league_facebook_url',array(
		'type' => 'url',
		'label' => __('Add Facebook URL','sports-league'),
		'section' => 'sports_league_social_icons_settings',
	));

	$wp_customize->add_setting('sports_league_twitter_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_league_twitter_url',array(
		'type' => 'url',
		'label' => __('Add Twitter URL','sports-league'),
		'section' => 'sports_league_social_icons_settings',
	));

	$wp_customize->add_setting('sports_league_instagram_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_league_instagram_url',array(
		'type' => 'url',
		'label' => __('Add Instagram URL','sports-league'),
		'section' => 'sports_league_social_icons_settings',
	));

	$wp_customize->add_setting('sports_league_pinterest_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_league_pinterest_url',array(
		'type' => 'url',
		'label' => __('Add Pinterest URL','sports-league'),
		'section' => 'sports_league_social_icons_settings',
	));

	$wp_customize->add_setting('sports_league_social_icon_size',array(
		'default'=> 12,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize,'sports_league_social_icon_size',array(
		'label'	=> __('Social Icon Size','sports-league'),
		'section'=> 'sports_league_social_icons_settings',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	//Menu Settings
	$wp_customize->add_section('sports_league_menu_settings',array(
		'title'	=> __('Menu Settings','sports-league'),
		'priority'	=> null,
		'panel' => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_menu_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_menu_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_menu_settings'
	));

	$wp_customize->add_setting('sports_league_menu_font_size_option',array(
		'default'=> 16,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize,'sports_league_menu_font_size_option',array(
		'label'	=> __('Menu Font Size ','sports-league'),
		'section'=> 'sports_league_menu_settings',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('sports_league_menu_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize,'sports_league_menu_padding',array(
		'label'	=> __('Main Menu Padding','sports-league'),
		'section'=> 'sports_league_menu_settings',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	)));

	$wp_customize->add_setting('sports_league_font_weight_option_menu',array(
		'default' => '500',
		'sanitize_callback' => 'sports_league_sanitize_choices'
 	));
 	$wp_customize->add_control('sports_league_font_weight_option_menu',array(
		'type' => 'select',
		'label' => __('Menu Font Weight','sports-league'),
		'section' => 'sports_league_menu_settings',
		'choices' => array(
		   '100' => __('100','sports-league'),
         '200' => __('200','sports-league'),
         '300' => __('300','sports-league'),
         '400' => __('400','sports-league'),
         '500' => __('500','sports-league'),
         '600' => __('600','sports-league'),
         '700' => __('700','sports-league'),
         '800' => __('800','sports-league'),
         '900' => __('900','sports-league'),
		),
	) );

	$wp_customize->add_setting('sports_league_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_menu_color', array(
		'label'    => __('Menu Color', 'sports-league'),
		'section'  => 'sports_league_menu_settings',
		'settings' => 'sports_league_menu_color',
	)));

	$wp_customize->add_setting('sports_league_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_sub_menu_color', array(
		'label'    => __('Submenu Color', 'sports-league'),
		'section'  => 'sports_league_menu_settings',
		'settings' => 'sports_league_sub_menu_color',
	)));

	$wp_customize->add_setting('sports_league_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'sports-league'),
		'section'  => 'sports_league_menu_settings',
		'settings' => 'sports_league_menu_hover_color',
	)));

	$wp_customize->add_setting('sports_league_sub_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_sub_menu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'sports-league'),
		'section'  => 'sports_league_menu_settings',
		'settings' => 'sports_league_sub_menu_hover_color',
	)));

	//Slider Section
	$wp_customize->add_section( 'sports_league_slider_section' , array(
    	'title'      => __( 'Slider Section', 'sports-league' ),
		'priority'   => null,
		'panel' => 'sports_league_panel_id'
	));

	$wp_customize->add_setting('sports_league_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('You can change how many slides there are.','sports-league') ."</li><li>". esc_html('You can change the font family and the colours of headings and subheadings.','sports-league') ."</li><li>". esc_html('And so on...','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_slider_section'
	));	

	$wp_customize->add_setting('sports_league_slider_hide',array(
		'default' => false,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_slider_hide',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable slider','sports-league'),
		'section' => 'sports_league_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'sports_league_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'sports_league_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'sports_league_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'sports-league' ),
			'section'  => 'sports_league_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'sports_league_slider_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sports_league_slider_small_title', array(
		'label'    => __( 'Add Slider Small Text', 'sports-league' ),
		'input_attrs' => array(
            'placeholder' => __( 'POWERFUL SPORTS THEME', 'sports-league' ),
        ),
		'section'  => 'sports_league_slider_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting('sports_league_slider_heading',array(
		'default' => true,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_slider_heading',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Heading','sports-league'),
		'section' => 'sports_league_slider_section'
	));

	$wp_customize->add_setting('sports_league_slider_heading_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_slider_heading_color', array(
		'label'    => __('Slider Heading Color', 'sports-league'),
		'section'  => 'sports_league_slider_section',
	)));

	$wp_customize->add_setting('sports_league_slider_text',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_slider_text',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Text','sports-league'),
       'section' => 'sports_league_slider_section'
   ));

	$wp_customize->add_setting('sports_league_slider_text_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_slider_text_color', array(
		'label'    => __('Slider Text Color', 'sports-league'),
		'section'  => 'sports_league_slider_section',
	)));

   $wp_customize->add_setting('sports_league_show_slider_button',array(
	    'default' => true,
	    'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_show_slider_button',array(
		 'type' => 'checkbox',
		 'label' => __('Show / Hide Slider Button','sports-league'),
		 'section' => 'sports_league_slider_section'
	));

	$wp_customize->add_setting('sports_league_slider_button_text',array(
		'default'	=> __('Read More','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_slider_button_text',array(
		'label'	=> __('Slider Button Text','sports-league'),
		'section'	=> 'sports_league_slider_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sports_league_slider_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_league_slider_button_link',array(
		'label'	=> esc_html__('Add Button Link','sports-league'),
		'section'=> 'sports_league_slider_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting('sports_league_slider_btn_text_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_slider_btn_text_color', array(
		'label'    => __('Slider Button Text Color', 'sports-league'),
		'section'  => 'sports_league_slider_section',
	)));

	$wp_customize->add_setting('sports_league_slider_btn_bg_color', array(
		'default'           => '#fe5900',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_slider_btn_bg_color', array(
		'label'    => __('Slider Button Background Color', 'sports-league'),
		'section'  => 'sports_league_slider_section',
	)));

	$wp_customize->add_setting('sports_league_slider_previous_icon',array(
		'default'	=> 'fas fa-arrow-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_slider_previous_icon',array(
		'label'	=> __('Slider Previous Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_slider_next_icon',array(
		'default'	=> 'fas fa-arrow-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_slider_next_icon',array(
		'label'	=> __('Slider Next Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_slider_section',
		'type'		=> 'icon'
	)));

	//content layout
   $wp_customize->add_setting('sports_league_slider_content_layout',array(
     	'default' => 'Left',
     	'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_slider_content_layout',array(
      'type' => 'radio',
      'label' => __('Slider Content Layout','sports-league'),
      'section' => 'sports_league_slider_section',
      'choices' => array(
            'Center' => __('Center','sports-league'),
            'Left' => __('Left','sports-league'),
            'Right' => __('Right','sports-league'),
        ),
	) );

	//Slider excerpt
	$wp_customize->add_setting( 'sports_league_slider_excerpt_number', array(
		'default'              => 20,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'sports_league_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Content Limit','sports-league' ),
		'section'     => 'sports_league_slider_section',
		'type'        => 'number',
		'settings'    => 'sports_league_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('sports_league_slider_opacity',array(
		'default'           => 0.9,
		'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control( 'sports_league_slider_opacity', array(
		'label'       => esc_html__( 'Slider Image Opacity','sports-league' ),
		'section'     => 'sports_league_slider_section',
		'type'        => 'select',
		'settings'    => 'sports_league_slider_opacity',
		'choices' => array(
			'0' =>  esc_attr('0','sports-league'),
			'0.1' =>  esc_attr('0.1','sports-league'),
			'0.2' =>  esc_attr('0.2','sports-league'),
			'0.3' =>  esc_attr('0.3','sports-league'),
			'0.4' =>  esc_attr('0.4','sports-league'),
			'0.5' =>  esc_attr('0.5','sports-league'),
			'0.6' =>  esc_attr('0.6','sports-league'),
			'0.7' =>  esc_attr('0.7','sports-league'),
			'0.8' =>  esc_attr('0.8','sports-league'),
			'0.9' =>  esc_attr('0.9','sports-league')
		),
	));

	//Classes
  	$wp_customize->add_section('sports_league_classes_section',array(
		'title' => __('Sports Section','sports-league'),
		'description' => '',
		'priority'  => null,
		'panel' => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_events_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_events_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Includes settings to set section title.','sports-league') ."</li><li>". esc_html('Contains settings for the background colour.','sports-league') ."</li><li>". esc_html('Contains options for background images.','sports-league') ."</li><li>". esc_html('You can change the font family and colours of heading.','sports-league') ."</li><li>". esc_html('And so on...','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_classes_section'
	));

	$wp_customize->add_setting('sports_league_product_enable',array(
		'default' => false,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_product_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Sports Section','sports-league'),
		'section' => 'sports_league_classes_section'
	));

		$wp_customize->add_setting('sports_league_section_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_section_text',array(
		'type' => 'text',
		'label' => __('Section Title','sports-league'),
		'input_attrs' => array(
	            'placeholder' => esc_html__( 'Section Title', 'sports-league' ),
	        ),
		'section' => 'sports_league_classes_section'
	));

	$wp_customize->add_setting('sports_league_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_section_title',array(
		'type' => 'text',
		'label' => __('Section Text','sports-league'),
		'input_attrs' => array(
	            'placeholder' => esc_html__( 'Section Text', 'sports-league' ),
	        ),
		'section' => 'sports_league_classes_section'
	));

 	$categories = get_categories( );
 	$cats = array();
 	$i = 0;
 	foreach($categories as $category){
     	if($i==0){
         $default = $category->slug;
         $i++;
     	}
     $cats[$category->slug] = $category->name;
 	}
 	$wp_customize->add_setting('sports_league_events_category',array(
     	'sanitize_callback' => 'sports_league_sanitize_choices',
 	));
	$wp_customize->add_control('sports_league_events_category',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Category','sports-league'),
		'section' => 'sports_league_classes_section',
 	));

	//layout setting
	$wp_customize->add_section( 'sports_league_option', array(
    	'title'      => __( 'Layout Settings', 'sports-league' ),
    	'panel'    => 'sports_league_panel_id',
	) );

	$wp_customize->add_setting('sports_league_layout_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_layout_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_option'
	));

	$wp_customize->add_setting( 'sports_league_single_page_breadcrumb',array(
	    'default' => false,
    	'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
  	) );
	$wp_customize->add_control('sports_league_single_page_breadcrumb',array(
	    	'type' => 'checkbox',
	       'label' => __( 'Show / Hide Single Page Breadcrumb','sports-league' ),
	       'section' => 'sports_league_option'
	 ));

	$wp_customize->add_setting('sports_league_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','sports-league'),
       'section' => 'sports_league_option'
    ));

   $wp_customize->add_setting('sports_league_preloader_type',array(
     	'default' => 'First Preloader Type',
     	'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_preloader_type',array(
      'type' => 'radio',
      'label' => __('Preloader Types','sports-league'),
      'section' => 'sports_league_option',
      'choices' => array(
         'First Preloader Type' => __('First Preloader Type','sports-league'),
         'Second Preloader Type' => __('Second Preloader Type','sports-league'),
      ),
	) );

	$wp_customize->add_setting('sports_league_preloader_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sports_league_preloader_bg_image',array(
        'label' => __('Preloader Background Image','sports-league'),
        'section' => 'sports_league_option'
	)));

	$wp_customize->add_setting('sports_league_preloader_bg_color_option', array(
		'default'           => '#F6551C',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_preloader_bg_color_option', array(
		'label'    => __('Preloader Background Color', 'sports-league'),
		'section'  => 'sports_league_option',
	)));

	$wp_customize->add_setting('sports_league_preloader_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_preloader_icon_color_option', array(
		'label'    => __('Preloader Icon Color', 'sports-league'),
		'section'  => 'sports_league_option',
	)));

	$wp_customize->add_setting('sports_league_width_layout_options',array(
		'default' => 'Default',
		'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_width_layout_options',array(
		'type' => 'radio',
		'label' => __('Container Box','sports-league'),
		'description' => __('Here you can change the Width layout. ','sports-league'),
		'section' => 'sports_league_option',
		'choices' => array(
		   'Default' => __('Default','sports-league'),
		   'Container Layout' => __('Container Layout','sports-league'),
		   'Box Layout' => __('Box Layout','sports-league'),
		),
	) );

	// Add page sidebar Layout
	$wp_customize->add_setting('sports_league_page_sidebar',array(
        'default' => 'One Column',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	) );
	$wp_customize->add_control('sports_league_page_sidebar', array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','sports-league'),
        'section' => 'sports_league_option',
        'choices' => array(
            'One Column' => __('One Column','sports-league'),
            'Left Sidebar' => __('Left Sidebar','sports-league'),
            'Right Sidebar' => __('Right Sidebar','sports-league')
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('sports_league_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	) );
	$wp_customize->add_control('sports_league_layout_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','sports-league'),
        'section' => 'sports_league_option',
        'choices' => array(
            'One Column' => __('One Column','sports-league'),
            'Three Columns' => __('Three Columns','sports-league'),
            'Four Columns' => __('Four Columns','sports-league'),
            'Grid Layout' => __('Grid Layout','sports-league'),
            'Left Sidebar' => __('Left Sidebar','sports-league'),
            'Right Sidebar' => __('Right Sidebar','sports-league')
        ),
	) );

	$wp_customize->add_setting('sports_league_sidebar_size',array(
        'default' => 'Sidebar 1/3',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_sidebar_size',array(
        'type' => 'radio',
        'label' => __('Sidebar Size Option','sports-league'),
        'section' => 'sports_league_option',
        'choices' => array(
            'Sidebar 1/3' => __('Sidebar 1/3','sports-league'),
            'Sidebar 1/4' => __('Sidebar 1/4','sports-league'),
        ),
	) );

   //Global Color
	$wp_customize->add_section('sports_league_global_color', array(
		'title'    => __('Theme Color Option', 'sports-league'),
		'panel'    => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_color_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_color_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_global_color'
	));

	$wp_customize->add_setting('sports_league_first_color', array(
		'default'           => '#fe5900',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_first_color', array(
		'label'    => __('Highlight Color', 'sports-league'),
		'section'  => 'sports_league_global_color',
		'settings' => 'sports_league_first_color',
	)));

	//Blog Post Settings
	$wp_customize->add_section('sports_league_post_settings', array(
		'title'    => __('Post General Settings', 'sports-league'),
		'panel'    => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_blog_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_blog_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_post_settings'
	));

	$wp_customize->add_setting('sports_league_post_layouts',array(
     'default' => 'Layout 2',
     'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_post_layouts', array(
		'type' => 'select',
		'label' => __('Post Layouts','sports-league'),
		'description' => __('Here you can change the 3 different layouts of post','sports-league'),
		'section' => 'sports_league_post_settings',
		'choices' => array(
		   'Layout 1' => __('Layouts 1','sports-league'),
		   'Layout 2' => __('Layouts 2','sports-league'),
		   'Layout 3' => __('Layouts 3','sports-league'),
	)));

	$wp_customize->add_setting('sports_league_metafields_date',array(
		'default' => true,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_metafields_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date ','sports-league'),
		'section' => 'sports_league_post_settings'
	));

	$wp_customize->add_setting('sports_league_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_post_date_icon',array(
		'label'	=> __('Post Date Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('sports_league_metafields_author',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','sports-league'),
       'section' => 'sports_league_post_settings'
    ));

    $wp_customize->add_setting('sports_league_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_post_author_icon',array(
		'label'	=> __('Post Author Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('sports_league_metafields_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Comments','sports-league'),
       'section' => 'sports_league_post_settings'
    ));

    $wp_customize->add_setting('sports_league_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_post_comment_icon',array(
		'label'	=> __('Post Comment Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('sports_league_metafields_time',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','sports-league'),
       'section' => 'sports_league_post_settings'
    ));

    $wp_customize->add_setting('sports_league_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_post_time_icon',array(
		'label'	=> __('Post Time Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_post_featured_image',array(
       'default' => 'Image',
       'sanitize_callback'	=> 'sports_league_sanitize_choices'
    ));
    $wp_customize->add_control('sports_league_post_featured_image',array(
       'type' => 'select',
       'label'	=> __('Post Image Options','sports-league'),
       'choices' => array(
            'Image' => __('Image','sports-league'),
            'Color' => __('Color','sports-league'),
            'None' => __('None','sports-league'),
        ),
      	'section'	=> 'sports_league_post_settings',
    ));

    $wp_customize->add_setting('sports_league_post_featured_color', array(
		'default'           => '#F6551C',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_post_featured_color', array(
		'label'    => __('Post Color', 'sports-league'),
		'section'  => 'sports_league_post_settings',
		'settings' => 'sports_league_post_featured_color',
		'active_callback' => 'sports_league_post_color_enabled'
	)));

	$wp_customize->add_setting( 'sports_league_custom_post_color_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_custom_post_color_width',	array(
		'label' => esc_html__( 'Color Post Custom Width','sports-league' ),
		'section' => 'sports_league_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'sports_league_show_post_color'
	)));

	$wp_customize->add_setting( 'sports_league_custom_post_color_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_custom_post_color_height',array(
		'label' => esc_html__( 'Color Post Custom Height','sports-league' ),
		'section' => 'sports_league_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'sports_league_show_post_color'
	)));

	$wp_customize->add_setting('sports_league_post_featured_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'sports_league_sanitize_choices'
   ));
   $wp_customize->add_control('sports_league_post_featured_image_dimention',array(
       'type' => 'select',
       'label'	=> __('Post Featured Image Dimention','sports-league'),
       'choices' => array(
            'Default' => __('Default','sports-league'),
            'Custom' => __('Custom','sports-league'),
      ),
      	'section'	=> 'sports_league_post_settings',
      	'active_callback' => 'sports_league_enable_post_featured_image'
   ));

   $wp_customize->add_setting( 'sports_league_post_featured_image_custom_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_post_featured_image_custom_width',	array(
		'label' => esc_html__( 'Post Featured Image Custom Width','sports-league' ),
		'section' => 'sports_league_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'sports_league_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'sports_league_post_featured_image_custom_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_post_featured_image_custom_height',	array(
		'label' => esc_html__( 'Post Featured Image Custom Height','sports-league' ),
		'section' => 'sports_league_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'sports_league_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'sports_league_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize,  'sports_league_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','sports-league' ),
		'section'     => 'sports_league_post_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	)) );

	$wp_customize->add_setting( 'sports_league_image_box_shadow',array(
		'default' => 0,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize,  'sports_league_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','sports-league' ),
		'section' => 'sports_league_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	)));

	$wp_customize->add_setting('sports_league_show_first_caps',array(
      'default' => false,
      'sanitize_callback' => 'sports_league_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'sports_league_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'sports-league'),
		'type' => 'checkbox',
		'section' => 'sports_league_post_settings',
	));

    //Post excerpt
	$wp_customize->add_setting( 'sports_league_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'sports_league_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','sports-league' ),
		'section'     => 'sports_league_post_settings',
		'type'        => 'number',
		'settings'    => 'sports_league_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('sports_league_content_settings',array(
        'default' =>'Excerpt',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_content_settings',array(
        'type' => 'radio',
        'label' => __('Content Settings','sports-league'),
        'section' => 'sports_league_post_settings',
        'choices' => array(
            'Excerpt' => __('Excerpt','sports-league'),
            'Content' => __('Content','sports-league'),
        ),
	) );

	$wp_customize->add_setting( 'sports_league_post_discription_suffix', array(
		'default'   => __('[...]','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sports_league_post_discription_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','sports-league' ),
		'section'     => 'sports_league_post_settings',
		'type'        => 'text',
		'settings'    => 'sports_league_post_discription_suffix',
	) );

	$wp_customize->add_setting( 'sports_league_blog_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sports_league_blog_post_meta_seperator', array(
		'label'       => esc_html__( 'Meta Box Separator','sports-league' ),
		'section'     => 'sports_league_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','sports-league'),
		'type'        => 'text',
		'settings'    => 'sports_league_blog_post_meta_seperator',
	) );

	$wp_customize->add_setting('sports_league_enable_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_enable_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Blog Page Pagination','sports-league'),
       'section' => 'sports_league_post_settings'
   ));

   $wp_customize->add_setting( 'sports_league_post_pagination_position', array(
        'default'			=>  'Bottom',
        'sanitize_callback'	=> 'sports_league_sanitize_choices'
   ));
   $wp_customize->add_control( 'sports_league_post_pagination_position', array(
        'section' => 'sports_league_post_settings',
        'type' => 'select',
        'label' => __( 'Post Pagination Position', 'sports-league' ),
        'choices'		=> array(
            'Top'  => __( 'Top', 'sports-league' ),
            'Bottom' => __( 'Bottom', 'sports-league' ),
            'Both Top & Bottom' => __( 'Both Top & Bottom', 'sports-league' ),
   )));

	$wp_customize->add_setting( 'sports_league_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'sports_league_sanitize_choices'
   ));
   $wp_customize->add_control( 'sports_league_pagination_settings', array(
        'section' => 'sports_league_post_settings',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'sports-league' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'sports-league' ),
            'next-prev' => __( 'Next / Previous', 'sports-league' ),
   )));

   $wp_customize->add_setting('sports_league_post_block_option',array(
        'default' => 'By Block',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_post_block_option',array(
        'type' => 'select',
        'label' => __('Blog Post Shown','sports-league'),
        'section' => 'sports_league_post_settings',
        'choices' => array(
            'By Block' => __('By Block','sports-league'),
            'By Without Block' => __('By Without Block','sports-league'),
        ),
	) );

	//Button Settings
	$wp_customize->add_section('sports_league_button_settings', array(
		'title'    => __('Button Settings', 'sports-league'),
		'panel'    => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_button_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_button_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_button_settings'
	));

	$wp_customize->add_setting('sports_league_button_text',array(
		'default'=> __('Read More','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_button_text',array(
		'label'	=> __('Add Button Text','sports-league'),
		'section'=> 'sports_league_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sports_league_btn_font_size_option',array(
		'default'=> 18,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize,'sports_league_btn_font_size_option',array(
		'label'	=> __('Button Font Size','sports-league'),
		'section'=> 'sports_league_button_settings',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('sports_league_button_font_weight',array(
		'default' => '500',
		'sanitize_callback' => 'sports_league_sanitize_choices'
 	));
 	$wp_customize->add_control('sports_league_button_font_weight',array(
		'type' => 'select',
		'label' => __('Button Font Weight','sports-league'),
		'section' => 'sports_league_button_settings',
		'choices' => array(
			'100' => __('100','sports-league'),
			'200' => __('200','sports-league'),
			'300' => __('300','sports-league'),
			'400' => __('400','sports-league'),
			'500' => __('500','sports-league'),
			'600' => __('600','sports-league'),
			'700' => __('700','sports-league'),
			'800' => __('800','sports-league'),
			'900' => __('900','sports-league'),
		),
	) );

	$wp_customize->add_setting( 'sports_league_post_button_padding_top',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_post_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','sports-league' ),
		'section' => 'sports_league_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_post_button_padding_right',array(
		'default' => 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_post_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','sports-league' ),
		'section' => 'sports_league_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_post_button_border_radius',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_post_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','sports-league' ),
		'section' => 'sports_league_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

   //Single Post Settings
	$wp_customize->add_section('sports_league_single_post_settings', array(
		'title'    => __('Single Post Settings', 'sports-league'),
		'panel'    => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_single_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_single_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_single_post_settings'
	));

	$wp_customize->add_setting('sports_league_single_post_bradcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_single_post_bradcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','sports-league'),
		'section' => 'sports_league_single_post_settings',
	));

	$wp_customize->add_setting('sports_league_single_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Date ','sports-league'),
       'section' => 'sports_league_single_post_settings'
    ));

    $wp_customize->add_setting('sports_league_single_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_single_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','sports-league'),
       'section' => 'sports_league_single_post_settings'
    ));

   $wp_customize->add_setting('sports_league_single_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
      $wp_customize,'sports_league_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_single_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comments','sports-league'),
		'section' => 'sports_league_single_post_settings'
	));

 	$wp_customize->add_setting('sports_league_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer( $wp_customize, 'sports_league_single_post_comment_icon', array(
		'label'	=> __('Single Post Comment Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_single_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('sports_league_single_post_time',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','sports-league'),
       'section' => 'sports_league_single_post_settings',
    ));

    $wp_customize->add_setting('sports_league_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_post_comment_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_post_comment_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable post comment','sports-league'),
       'section' => 'sports_league_single_post_settings',
   ));

	$wp_customize->add_setting('sports_league_single_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_single_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Featured image','sports-league'),
       'section' => 'sports_league_single_post_settings',
   ));

	$wp_customize->add_setting('sports_league_show_hide_single_post_categories',array(
			'default' => true,
			'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_show_hide_single_post_categories',array(
			'type' => 'checkbox',
			'label' => __('Single Post Categories','sports-league'),
			'section' => 'sports_league_single_post_settings'
   ));

	$wp_customize->add_setting('sports_league_single_post_tags',array(
	   'default' => true,
	   'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_single_post_tags',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Tags','sports-league'),
      'section' => 'sports_league_single_post_settings'
   ));

	$wp_customize->add_setting('sports_league_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	) );
	$wp_customize->add_control('sports_league_single_post_layout', array(
        'type' => 'select',
        'label' => __('Select different Single post sidebar layout','sports-league'),
        'section' => 'sports_league_single_post_settings',
        'choices' => array(
            'One Column' => __('One Column','sports-league'),
            'Left Sidebar' => __('Left Sidebar','sports-league'),
            'Right Sidebar' => __('Right Sidebar','sports-league')
        ),
	)   );

	$wp_customize->add_setting( 'sports_league_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sports_league_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','sports-league' ),
		'section'     => 'sports_league_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','sports-league'),
		'type'        => 'text',
		'settings'    => 'sports_league_single_post_meta_seperator',
	) );

	$wp_customize->add_setting( 'sports_league_comment_form_width',array(
		'default' => 100,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_comment_form_width',	array(
		'label' => esc_html__( 'Comment Form Width','sports-league' ),
		'section' => 'sports_league_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('sports_league_title_comment_form',array(
       'default' => __('Leave a Reply','sports-league'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sports_league_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','sports-league'),
       'section' => 'sports_league_single_post_settings'
    ));

    $wp_customize->add_setting('sports_league_comment_form_button_content',array(
       'default' => __('Post Comment','sports-league'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sports_league_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','sports-league'),
       'section' => 'sports_league_single_post_settings'
    ));

	$wp_customize->add_setting('sports_league_enable_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_enable_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Single Post Pagination','sports-league'),
       'section' => 'sports_league_single_post_settings'
   ));

   $wp_customize->add_setting('sports_league_prev_text',array(
       'default' => 'Previous page',
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('sports_league_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','sports-league'),
       'section' => 'sports_league_single_post_settings'
   ));

   $wp_customize->add_setting('sports_league_next_text',array(
       'default' => 'Next page',
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('sports_league_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','sports-league'),
       'section' => 'sports_league_single_post_settings'
   ));

	//Related Post Settings
	$wp_customize->add_section('sports_league_related_settings', array(
		'title'    => __('Related Post Settings', 'sports-league'),
		'panel'    => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_related_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_related_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_related_settings'
	));

	$wp_customize->add_setting( 'sports_league_related_enable_disable',array(
		'default' => true,
      	'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ) );
    $wp_customize->add_control('sports_league_related_enable_disable',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Related Post','sports-league' ),
        'section' => 'sports_league_related_settings'
    ));

    $wp_customize->add_setting('sports_league_related_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_related_title',array(
		'label'	=> __('Add Section Title','sports-league'),
		'section'	=> 'sports_league_related_settings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'sports_league_related_posts_count_number', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sports_league_related_posts_count_number', array(
		'label'       => esc_html__( 'Related Post Count','sports-league' ),
		'section'     => 'sports_league_related_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 10,
		),
	) );

	$wp_customize->add_setting('sports_league_related_posts_taxanomies',array(
        'default' => 'categories',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_related_posts_taxanomies',array(
        'type' => 'radio',
        'label' => __('Post Taxonomies','sports-league'),
        'section' => 'sports_league_related_settings',
        'choices' => array(
            'categories' => __('Categories','sports-league'),
            'tags' => __('Tags','sports-league'),
        ),
	) );

	$wp_customize->add_setting( 'sports_league_related_post_excerpt_number',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));

	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','sports-league' ),
		'section' => 'sports_league_related_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	//Responsive Media Settings
	$wp_customize->add_section('sports_league_responsive_media',array(
		'title'	=> __('Responsive Media','sports-league'),
		'panel' => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_responsive_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_responsive_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_responsive_media'
	));

	$wp_customize->add_setting('sports_league_responsive_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_responsive_menu_open_icon',array(
		'label'	=> __('Responsive Open Menu Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_responsive_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_open_menu_label',array(
       'default' => __('','sports-league'),
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('sports_league_open_menu_label',array(
       'type' => 'text',
       'label' => __('Open Menu Label','sports-league'),
       'section' => 'sports_league_responsive_media'
   ));

	$wp_customize->add_setting('sports_league_responsive_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_responsive_menu_close_icon',array(
		'label'	=> __('Responsive Close Menu Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_responsive_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_close_menu_label',array(
       'default' => __('','sports-league'),
       'sanitize_callback' => 'sanitize_text_field'
   ));
   $wp_customize->add_control('sports_league_close_menu_label',array(
       'type' => 'text',
       'label' => __('Close Menu Label','sports-league'),
       'section' => 'sports_league_responsive_media'
   ));

	// site toggle button color
	$wp_customize->add_setting('sports_league_toggle_button_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_toggle_button_color', array(
		'label'    => __('Toggle Button Color', 'sports-league'),
		'section'  => 'sports_league_responsive_media',
		'settings' => 'sports_league_toggle_button_color',
	)));

	$wp_customize->add_setting('sports_league_display_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_display_post_date',array(
       'type' => 'checkbox',
       'label' => __('Display Post Date','sports-league'),
       'section' => 'sports_league_responsive_media'
    ));

    $wp_customize->add_setting('sports_league_display_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_display_post_author',array(
       'type' => 'checkbox',
       'label' => __('Display Post Author','sports-league'),
       'section' => 'sports_league_responsive_media'
    ));

    $wp_customize->add_setting('sports_league_display_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_display_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Display Post Comment','sports-league'),
       'section' => 'sports_league_responsive_media'
    ));

    $wp_customize->add_setting('sports_league_display_slider',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_display_slider',array(
       'type' => 'checkbox',
       'label' => __('Display Slider','sports-league'),
       'section' => 'sports_league_responsive_media'
    ));

	$wp_customize->add_setting('sports_league_display_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_display_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Display Sidebar','sports-league'),
       'section' => 'sports_league_responsive_media'
    ));

    $wp_customize->add_setting('sports_league_display_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_display_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Display Scroll To Top','sports-league'),
       'section' => 'sports_league_responsive_media'
    ));

    $wp_customize->add_setting('sports_league_display_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_display_preloader',array(
       'type' => 'checkbox',
       'label' => __('Display Preloader','sports-league'),
       'section' => 'sports_league_responsive_media'
    ));

    //404 Page Setting
	$wp_customize->add_section('sports_league_page_not_found',array(
		'title'	=> __('404 Page Not Found / No Result','sports-league'),
		'panel' => 'sports_league_panel_id',
	));

	$wp_customize->add_setting('sports_league_page_not_found_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_page_not_found_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_page_not_found'
	));

	$wp_customize->add_setting('sports_league_page_not_found_heading',array(
		'default'=> __('404 Not Found','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_page_not_found_heading',array(
		'label'	=> __('404 Heading','sports-league'),
		'section'=> 'sports_league_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sports_league_page_not_found_text',array(
		'default'=> __('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_page_not_found_text',array(
		'label'	=> __('404 Content','sports-league'),
		'section'=> 'sports_league_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sports_league_page_not_found_button',array(
		'default'=>  __('Back to Home Page','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_page_not_found_button',array(
		'label'	=> __('404 Button','sports-league'),
		'section'=> 'sports_league_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sports_league_no_search_result_heading',array(
		'default'=> __('Nothing Found','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('sports_league_no_search_result_heading',array(
		'label'	=> __('No Search Results Heading','sports-league'),
		'description'=>__('The search page heading display when no results are found.','sports-league'),
		'section'=> 'sports_league_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sports_league_no_search_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','sports-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_no_search_result_text',array(
		'label'	=> __('No Search Results Text','sports-league'),
		'description'=>__('The search page text display when no results are found.','sports-league'),
		'section'=> 'sports_league_page_not_found',
		'type'=> 'text'
	));

	//Woocommerce Section
	$wp_customize->add_section( 'sports_league_woocommerce_section' , array(
    	'title'      => __( 'Woocommerce Settings', 'sports-league' ),
    	'description'=>__('The below settings are apply on woocommerce pages.','sports-league'),
		'priority'   => null,
		'panel' => 'sports_league_panel_id'
	) );

	$wp_customize->add_setting('sports_league_woocommerce_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_woocommerce_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_woocommerce_section'
	));

	/**
	 * Product Columns
	 */
	$wp_customize->add_setting( 'sports_league_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sports_league_per_columns', array(
		'label'    => __( 'Product per columns', 'sports-league' ),
		'section'  => 'sports_league_woocommerce_section',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('sports_league_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_product_per_page',array(
		'label'	=> __('Product per page','sports-league'),
		'section'	=> 'sports_league_woocommerce_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('sports_league_shop_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_shop_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable shop page sidebar','sports-league'),
       'section' => 'sports_league_woocommerce_section',
    ));

    $wp_customize->add_setting('sports_league_product_page_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_product_page_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable single product page sidebar','sports-league'),
       'section' => 'sports_league_woocommerce_section',
    ));

    $wp_customize->add_setting('sports_league_related_product_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
    ));
    $wp_customize->add_control('sports_league_related_product_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','sports-league'),
       'section' => 'sports_league_woocommerce_section',
    ));

    $wp_customize->add_setting( 'sports_league_woo_product_sale_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_woo_product_sale_border_radius', array(
        'label'  => __('Woocommerce Product Sale Border Radius','sports-league'),
        'section'  => 'sports_league_woocommerce_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('sports_league_wooproduct_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_wooproduct_sale_font_size',array(
		'label'	=> __('Woocommerce Product Sale Font Size','sports-league'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sports_league_woocommerce_section',
	)));

    $wp_customize->add_setting('sports_league_woo_product_sale_top_bottom_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_woo_product_sale_top_bottom_padding',array(
		'label'	=> __('Woocommerce Product Sale Top Bottom Padding ','sports-league'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sports_league_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('sports_league_woo_product_sale_left_right_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_woo_product_sale_left_right_padding',array(
		'label'	=> __('Woocommerce Product Sale Left Right Padding','sports-league'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sports_league_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('sports_league_woo_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_woo_product_sale_position',array(
        'type' => 'select',
        'label' => __('Woocommerce Product Sale Position','sports-league'),
        'section' => 'sports_league_woocommerce_section',
        'choices' => array(
            'Right' => __('Right','sports-league'),
            'Left' => __('Left','sports-league'),
        ),
	));

	$wp_customize->add_setting( 'sports_league_woocommerce_button_padding_top',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','sports-league' ),
		'section' => 'sports_league_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_woocommerce_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_woocommerce_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','sports-league' ),
		'section' => 'sports_league_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_woocommerce_button_border_radius',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','sports-league' ),
		'section' => 'sports_league_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

   $wp_customize->add_setting('sports_league_woocommerce_product_border_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
   ));
   $wp_customize->add_control('sports_league_woocommerce_product_border_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable product border','sports-league'),
      'section' => 'sports_league_woocommerce_section',
   ));

	$wp_customize->add_setting( 'sports_league_woocommerce_product_padding_top',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_woocommerce_product_padding_top',	array(
		'label' => esc_html__( 'Product Top Bottom Padding (px)','sports-league' ),
		'section' => 'sports_league_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_woocommerce_product_padding_right',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_woocommerce_product_padding_right',	array(
		'label' => esc_html__( 'Product Right Left Padding (px)','sports-league' ),
		'section' => 'sports_league_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_woocommerce_product_border_radius',array(
		'default' => 3,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius (px)','sports-league' ),
		'section' => 'sports_league_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_woocommerce_product_box_shadow',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow (px)','sports-league' ),
		'section' => 'sports_league_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('sports_league_wooproducts_nav',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'sports_league_sanitize_choices'
    ));
    $wp_customize->add_control('sports_league_wooproducts_nav',array(
       'type' => 'select',
       'label' => __('Shop Page Products Navigation','sports-league'),
       'choices' => array(
            'Yes' => __('Yes','sports-league'),
            'No' => __('No','sports-league'),
        ),
       'section' => 'sports_league_woocommerce_section',
    ));

	//footer text
	$wp_customize->add_section('sports_league_footer_section',array(
		'title'	=> __('Footer Text','sports-league'),
		'panel' => 'sports_league_panel_id'
	));

	$wp_customize->add_setting('sports_league_footer_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_footer_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','sports-league'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','sports-league') ."</li></ul><a target='_blank' href='". esc_url(SPORTS_LEAGUE_BUY_PRO) ." '>". esc_html('Upgrade to Pro','sports-league') ."</a>",
		'section'=> 'sports_league_footer_section'
	));

	$wp_customize->add_setting('sports_league_show_hide_footer',array(
		'default' => true,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_show_hide_footer',array(
     	'type' => 'checkbox',
      'label' => __('Enable / Disable Footer','sports-league'),
      'section' => 'sports_league_footer_section',
	));

	$wp_customize->add_setting('sports_league_footer_bg_color', array(
		'default'           => '#0d0d0f',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'sports-league'),
		'section'  => 'sports_league_footer_section',
	)));

	$wp_customize->add_setting('sports_league_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sports_league_footer_bg_image',array(
		'label' => __('Footer Background Image','sports-league'),
		'section' => 'sports_league_footer_section'
	)));
	
	$wp_customize->add_setting('sports_league_footer_attatchment',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_footer_attatchment',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','sports-league'),
		'choices' => array(
            'fixed' => __('fixed','sports-league'),
            'scroll' => __('scroll','sports-league'),
        ),
		'section'=> 'sports_league_footer_section',
	));

	$wp_customize->add_setting('sports_league_footer_widget_areas',array(
		'default'           => 4,
		'sanitize_callback' => 'sports_league_sanitize_choices',
	));
	$wp_customize->add_control('sports_league_footer_widget_areas',array(
		'type'        => 'radio',
		'label'       => __('Footer widget area', 'sports-league'),
		'section'     => 'sports_league_footer_section',
		'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'sports-league'),
		'choices' => array(
		   '1'     => __('One', 'sports-league'),
		   '2'     => __('Two', 'sports-league'),
		   '3'     => __('Three', 'sports-league'),
		   '4'     => __('Four', 'sports-league')
		),
	));

	$wp_customize->add_setting('sports_league_footer_heading_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_footer_heading_font_size',array(
		'label' => esc_html__( 'Footer Heading Font Size','sports-league' ),
		'section'=> 'sports_league_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('sports_league_footer_heading_font_weight',array(
		'default' => '500',
		'sanitize_callback' => 'sports_league_sanitize_choices'
 	));
 	$wp_customize->add_control('sports_league_footer_heading_font_weight',array(
		'type' => 'select',
		'label' => __('Footer Heading Font Weight','sports-league'),
		'section' => 'sports_league_footer_section',
		'choices' => array(
			'100' => __('100','sports-league'),
			'200' => __('200','sports-league'),
			'300' => __('300','sports-league'),
			'400' => __('400','sports-league'),
			'500' => __('500','sports-league'),
			'600' => __('600','sports-league'),
			'700' => __('700','sports-league'),
			'800' => __('800','sports-league'),
			'900' => __('900','sports-league'),
		),
	) );

	$wp_customize->add_setting('sports_league_footer_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize,'sports_league_footer_padding',array(
		'label'	=> __('Footer Widget Padding','sports-league'),
		'section'=> 'sports_league_footer_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 100,
      ),
	)));

	$wp_customize->add_setting('sports_league_hide_show_scroll',array(
		'default' => true,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','sports-league'),
      	'section' => 'sports_league_footer_section',
	));

	$wp_customize->add_setting('sports_league_back_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_League_Icon_Changer(
        $wp_customize,'sports_league_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','sports-league'),
		'transport' => 'refresh',
		'section'	=> 'sports_league_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sports_league_scroll_icon_font_size',array(
		'default'=> 22,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','sports-league'),
		'section'=> 'sports_league_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('sports_league_scroll_icon_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_scroll_icon_color', array(
		'label'    => __('Back to Top Icon Color', 'sports-league'),
		'section'  => 'sports_league_footer_section',
	)));

	$wp_customize->add_setting('sports_league_scroll_icon_hover_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_scroll_icon_hover_color', array(
		'label'    => __('Back to Top Icon Hover Color', 'sports-league'),
		'section'  => 'sports_league_footer_section',
	)));

	$wp_customize->add_setting('sports_league_scroll_icon_background', array(
		'default'           => '#fe5900',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_scroll_icon_background', array(
		'label'    => __('Back to Top Background Color', 'sports-league'),
		'section'  => 'sports_league_footer_section',
	)));

	$wp_customize->add_setting('sports_league_scroll_icon_background_hover', array(
		'default'           => '#fe5900',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_scroll_icon_background_hover', array(
		'label'    => __('Back to Top Background Hover Color', 'sports-league'),
		'section'  => 'sports_league_footer_section',
	)));

	$wp_customize->add_setting('sports_league_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top Alignment','sports-league'),
        'section' => 'sports_league_footer_section',
        'choices' => array(
            'Left align' => __('Left Align','sports-league'),
            'Right align' => __('Right Align','sports-league'),
            'Center align' => __('Center Align','sports-league'),
        ),
	) );

	$wp_customize->add_setting( 'sports_league_top_bottom_scroll_padding',array(
		'default' => 7,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_top_bottom_scroll_padding',	array(
		'label' => esc_html__( 'Top Bottom Scroll Padding (px)','sports-league' ),
		'section' => 'sports_league_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_left_right_scroll_padding',array(
		'default' => 17,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_left_right_scroll_padding',	array(
		'label' => esc_html__( 'Left Right Scroll Padding (px)','sports-league' ),
		'section' => 'sports_league_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'sports_league_back_to_top_border_radius',array(
		'default' => 5,
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_back_to_top_border_radius', array(
		'label' => esc_html__( 'Back to Top Border Radius (px)','sports-league' ),
		'section' => 'sports_league_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('sports_league_show_hide_copyright',array(
		'default' => true,
		'sanitize_callback'	=> 'sports_league_sanitize_checkbox'
	));
	$wp_customize->add_control('sports_league_show_hide_copyright',array(
     	'type' => 'checkbox',
      'label' => __('Enable / Disable Copyright','sports-league'),
      'section' => 'sports_league_footer_section',
	));

	$wp_customize->add_setting('sports_league_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_league_footer_copy',array(
		'label'	=> __('Copyright Text','sports-league'),
		'section'	=> 'sports_league_footer_section',
		'description'	=> __('Add some text for footer like copyright etc.','sports-league'),
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sports_league_footer_text_align',array(
        'default' => 'center',
        'sanitize_callback' => 'sports_league_sanitize_choices'
	));
	$wp_customize->add_control('sports_league_footer_text_align',array(
        'type' => 'radio',
        'label' => __('Copyright Text Alignment ','sports-league'),
        'section' => 'sports_league_footer_section',
        'choices' => array(
            'left' => __('Left Align','sports-league'),
            'right' => __('Right Align','sports-league'),
            'center' => __('Center Align','sports-league'),
        ),
	) );

	$wp_customize->add_setting('sports_league_copyright_text_font_size',array(
		'default'=> 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control(new Sports_League_Custom_Control( $wp_customize, 'sports_league_copyright_text_font_size',array(
		'label' => esc_html__( 'Copyright Font Size (px)','sports-league' ),
		'section'=> 'sports_league_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting( 'sports_league_footer_text_padding',array(
		'default' => 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'sports_league_sanitize_integer'
	));
	$wp_customize->add_control( new Sports_League_Custom_Control( $wp_customize, 'sports_league_footer_text_padding',	array(
		'label' => esc_html__( 'Copyright Text Padding (px)','sports-league' ),
		'section' => 'sports_league_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('sports_league_copyright_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_copyright_text_color', array(
		'label'    => __('Copyright Text Color', 'sports-league'),
		'section'  => 'sports_league_footer_section',
	)));

	$wp_customize->add_setting('sports_league_copyright_text_background', array(
		'default'           => '#F6551C',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sports_league_copyright_text_background', array(
		'label'    => __('Copyright background Color', 'sports-league'),
		'section'  => 'sports_league_footer_section',
	)));

}
add_action( 'customize_register', 'sports_league_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Sports_League_Customize {

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
		$manager->register_section_type( 'Sports_League_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Sports_League_Customize_Section_Pro(
				$manager,
				'sports_league_example_1',
				array(
					'title'   =>  esc_html__( 'Sports League Pro', 'sports-league' ),
					'pro_text' => esc_html__( 'Go Pro', 'sports-league' ),
					'pro_url'  => esc_url( 'https://www.buywptemplates.com/products/sports-league-wordpress-theme/' ),
					'priority'   => 9
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

		wp_enqueue_script( 'sports-league-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'sports-league-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}


	//Footer widget areas
	function sports_league_sanitize_choices( $input ) {
		$valid = array(
			'1'     => __('One', 'sports-league'),
			'2'     => __('Two', 'sports-league'),
			'3'     => __('Three', 'sports-league'),
			'4'     => __('Four', 'sports-league')
		);
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
	  		return '';
		}
	}

}

// Doing this customizer thang!
Sports_League_Customize::get_instance();