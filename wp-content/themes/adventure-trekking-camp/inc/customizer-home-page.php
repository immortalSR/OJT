<?php
/**
 * Adventure Trekking Camp: Customizer-home-page
 *
 * @subpackage Adventure Trekking Camp
 * @since 1.0
 */

	//  Home Page Panel
	$wp_customize->add_panel( 'adventure_trekking_camp_custompage_panel', array(
		'title' => esc_html__( 'Custom Page Settings', 'adventure-trekking-camp' ),
		'priority' => 2,
	));
	// Header
    $wp_customize->add_section('adventure_trekking_camp_header',array(
        'title' => __('Header', 'adventure-trekking-camp'),
        'priority' => 3,
        'panel' => 'adventure_trekking_camp_custompage_panel',
    ) );
    $wp_customize->add_setting( 'adventure_trekking_camp_section_contact_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_contact_heading', array(
		'label'       => esc_html__( 'Header Settings', 'adventure-trekking-camp' ),	
		'description' => __( 'Add header information in the below feilds', 'adventure-trekking-camp' ),		
		'section'     => 'adventure_trekking_camp_header',
		'settings'    => 'adventure_trekking_camp_section_contact_heading',
	) ) );
	$wp_customize->add_setting('adventure_trekking_camp_location_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_location_text',array(
		'label' => esc_html__('Location Text','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_header',
		'setting' => 'adventure_trekking_camp_location_text',
		'type'    => 'text'
	));
	$wp_customize->add_setting('adventure_trekking_camp_location_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_location_address',array(
		'label' => esc_html__('Location Adreess','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_header',
		'setting' => 'adventure_trekking_camp_location_address',
		'type'    => 'text'
	));
	$wp_customize->add_setting('adventure_trekking_camp_location_icon',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_location_icon',array(
		'label'	=> __('Add location Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_header',
		'setting'	=> 'adventure_trekking_camp_location_icon',
		'type'		=> 'icon'
	))); 
	$wp_customize->add_setting('adventure_trekking_camp_button_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_button_text',array(
		'label' => esc_html__('Button Text','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_header',
		'setting' => 'adventure_trekking_camp_button_text',
		'type'    => 'text'
	));
	$wp_customize->add_setting('adventure_trekking_camp_button_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('adventure_trekking_camp_button_link',array(
		'label' => esc_html__('Button Link','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_header',
		'setting' => 'adventure_trekking_camp_button_link',
		'type'    => 'url'
	));
	$wp_customize->add_setting('adventure_trekking_camp_call_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_call_text',array(
		'label' => esc_html__('Call Text','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_header',
		'setting' => 'adventure_trekking_camp_call_text',
		'type'    => 'text'
	));
	$wp_customize->add_setting('adventure_trekking_camp_call_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'adventure_trekking_camp_sanitize_phone_number'
	));
	$wp_customize->add_control('adventure_trekking_camp_call_phone_number',array(
		'label' => esc_html__('Phone Number','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_header',
		'setting' => 'adventure_trekking_camp_call_phone_number',
		'type'    => 'text'
	));
	$wp_customize->add_setting('adventure_trekking_camp_call_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Adventure_Trekking_Camp_Fontawesome_Icon_Chooser(
        $wp_customize,'adventure_trekking_camp_call_icon',array(
		'label'	=> __('Add Phone Number Icon','adventure-trekking-camp'),
		'transport' => 'refresh',
		'section'	=> 'adventure_trekking_camp_header',
		'setting'	=> 'adventure_trekking_camp_call_icon',
		'type'		=> 'icon'
	)));

    //Slider
	$wp_customize->add_section( 'adventure_trekking_camp_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'adventure-trekking-camp' ),
    	'priority'   => 3,
    	'panel' => 'adventure_trekking_camp_custompage_panel',
	) );
	$wp_customize->add_setting( 'adventure_trekking_camp_section_slide_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_slide_heading', array(
		'label'       => esc_html__( 'Slider Settings', 'adventure-trekking-camp' ),
		'description' => __( 'Slider Image Dimension ( 1600px x 650px )', 'adventure-trekking-camp' ),		
		'section'     => 'adventure_trekking_camp_slider_section',
		'settings'    => 'adventure_trekking_camp_section_slide_heading',
		'priority'=> 1,
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_slider_arrows',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_slider_arrows',
			array(
				'settings'        => 'adventure_trekking_camp_slider_arrows',
				'section'         => 'adventure_trekking_camp_slider_section',
				'label'           => __( 'Check To show Slider', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
				'priority'   => 1,
			)
		)
	);
	$wp_customize->add_setting('adventure_trekking_camp_slider_counter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_slider_counter',array(
		'label'	=> esc_html__('Slider Increament','adventure-trekking-camp'),
		'section'	=> 'adventure_trekking_camp_slider_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 3,
		),
		'active_callback' => 'adventure_trekking_camp_slider_dropdown',
	));

	$adventure_trekking_camp_slider = get_theme_mod('adventure_trekking_camp_slider_counter');
	for ($adventure_trekking_camp_i=1; $adventure_trekking_camp_i <= $adventure_trekking_camp_slider ; $adventure_trekking_camp_i++) {
		
	    $wp_customize->add_setting( 'adventure_trekking_camp_slider_images'.$adventure_trekking_camp_i, array(
	       'default' => '',
	       'transport' => 'refresh',
	       'sanitize_callback' => 'esc_url_raw'
	    ));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'adventure_trekking_camp_slider_images'.$adventure_trekking_camp_i, array(
	       'label'	=> esc_html__('Slider Image ','adventure-trekking-camp').$adventure_trekking_camp_i,
	       'section' => 'adventure_trekking_camp_slider_section',
	       'active_callback' => 'adventure_trekking_camp_slider_dropdown',
	    ) ) );
	    $wp_customize->add_setting('adventure_trekking_camp_slider_sub_heading'.$adventure_trekking_camp_i,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('adventure_trekking_camp_slider_sub_heading'.$adventure_trekking_camp_i,array(
			'label'   => esc_html__('Slider Sub Title ','adventure-trekking-camp').$adventure_trekking_camp_i,
			'section' => 'adventure_trekking_camp_slider_section',
			'type'    => 'text',
			'active_callback' => 'adventure_trekking_camp_slider_dropdown',
		));
	    $wp_customize->add_setting('adventure_trekking_camp_slider_main_heading'.$adventure_trekking_camp_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('adventure_trekking_camp_slider_main_heading'.$adventure_trekking_camp_i,array(
			'label'	=> esc_html__('Slider Title ','adventure-trekking-camp').$adventure_trekking_camp_i,
			'section'	=> 'adventure_trekking_camp_slider_section',
			'type'		=> 'text',
			'active_callback' => 'adventure_trekking_camp_slider_dropdown',
		));
		$wp_customize->add_setting('adventure_trekking_camp_slider_button_text'.$adventure_trekking_camp_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('adventure_trekking_camp_slider_button_text'.$adventure_trekking_camp_i,array(
			'label'	=> esc_html__('Slider Button Text ','adventure-trekking-camp').$adventure_trekking_camp_i,
			'section'	=> 'adventure_trekking_camp_slider_section',
			'type'		=> 'text',
			'active_callback' => 'adventure_trekking_camp_slider_dropdown',
		));
		$wp_customize->add_setting('adventure_trekking_camp_slider_button_url'.$adventure_trekking_camp_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('adventure_trekking_camp_slider_button_url'.$adventure_trekking_camp_i,array(
			'label'	=> esc_html__('Slider Button Url ','adventure-trekking-camp').$adventure_trekking_camp_i,
			'section'	=> 'adventure_trekking_camp_slider_section',
			'type'		=> 'url',
			'active_callback' => 'adventure_trekking_camp_slider_dropdown',
		));
	}

	$wp_customize->add_setting('adventure_trekking_camp_search_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_search_heading',array(
		'label' => esc_html__('Search Form Text','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_slider_section',
		'setting' => 'adventure_trekking_camp_search_heading',
		'type'    => 'text',
		'active_callback' => 'adventure_trekking_camp_slider_dropdown',
	));

	// Project Section
	$wp_customize->add_section( 'adventure_trekking_camp_our_activities_section' , array(
    	'title'      => __( 'Explore Activities Section Settings', 'adventure-trekking-camp' ),
		'priority'   => 4,
		'panel' => 'adventure_trekking_camp_custompage_panel',
	) );
	$wp_customize->add_setting( 'adventure_trekking_camp_section_activities_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_activities_heading', array(
		'label'       => esc_html__( 'Explore Activities Section Settings', 'adventure-trekking-camp' ),
		'section'     => 'adventure_trekking_camp_our_activities_section',
		'settings'    => 'adventure_trekking_camp_section_activities_heading',
	) ) );
	$wp_customize->add_setting(
		'adventure_trekking_camp_services_enable',
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
		new Adventure_Trekking_Camp_Customizer_Customcontrol_Switch(
			$wp_customize,
			'adventure_trekking_camp_services_enable',
			array(
				'settings'        => 'adventure_trekking_camp_services_enable',
				'section'         => 'adventure_trekking_camp_our_activities_section',
				'label'           => __( 'Check To show Section', 'adventure-trekking-camp' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'adventure-trekking-camp' ),
					'off'    => __( 'Off', 'adventure-trekking-camp' ),
				),
				'active_callback' => '',
			)
		)
	);
    $wp_customize->add_setting('adventure_trekking_camp_activities_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_activities_text',array(
		'label'	=> esc_html__('Add Short Heading','adventure-trekking-camp'),
		'section'	=> 'adventure_trekking_camp_our_activities_section',
		'type'		=> 'text',
		'active_callback' => 'adventure_trekking_camp_service_dropdown',
	));
	$wp_customize->add_setting('adventure_trekking_camp_activities_heading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_activities_heading',array(
		'label'	=> esc_html__('Add Heading','adventure-trekking-camp'),
		'section'	=> 'adventure_trekking_camp_our_activities_section',
		'type'		=> 'text',
		'active_callback' => 'adventure_trekking_camp_service_dropdown',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	  $default = $category->slug;
	  $i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('adventure_trekking_camp_activities_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'adventure_trekking_camp_sanitize_select',
	));
	$wp_customize->add_control('adventure_trekking_camp_activities_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display projects','adventure-trekking-camp'),
		'section' => 'adventure_trekking_camp_our_activities_section',
		'active_callback' => 'adventure_trekking_camp_service_dropdown',
	));

	//Footer
    $wp_customize->add_section( 'adventure_trekking_camp_footer_copyright', array(
    	'title' => esc_html__( 'Footer Text', 'adventure-trekking-camp' ),
    	'priority' => 6,
    	'panel' => 'adventure_trekking_camp_custompage_panel',
	) );
    $wp_customize->add_setting( 'adventure_trekking_camp_section_footer_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Adventure_Trekking_Camp_Customizer_Customcontrol_Section_Heading( $wp_customize, 'adventure_trekking_camp_section_footer_heading', array(
		'label'       => esc_html__( 'Footer Settings', 'adventure-trekking-camp' ),		
		'section'     => 'adventure_trekking_camp_footer_copyright',
		'settings'    => 'adventure_trekking_camp_section_footer_heading',
		'priority' => 1,
	) ) );
    $wp_customize->add_setting('adventure_trekking_camp_footer_text',array(
		'default'	=> 'Adventure WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('adventure_trekking_camp_footer_text',array(
		'label'	=> esc_html__('Copyright Text','adventure-trekking-camp'),
		'section'	=> 'adventure_trekking_camp_footer_copyright',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting( 'adventure_trekking_camp_footer_content_alignment',
		array(
			'default' => 'CENTER-ALIGN',
			'transport' => 'refresh',
			'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Adventure_Trekking_Camp_Text_Radio_Button_Custom_Control( $wp_customize, 'adventure_trekking_camp_footer_content_alignment',
		array(
			'type' => 'select',
			'label' => esc_html__( 'Footer Content Alignment', 'adventure-trekking-camp' ),
			'section' => 'adventure_trekking_camp_footer_copyright',
			'choices' => array(
				'LEFT-ALIGN' => __('LEFT','adventure-trekking-camp'),
	            'CENTER-ALIGN' => __('CENTER','adventure-trekking-camp'),
	            'RIGHT-ALIGN' => __('RIGHT','adventure-trekking-camp'),
			),
			'active_callback' => '',
		)
	) );
	$wp_customize->add_setting( 'adventure_trekking_camp_footer_widget',
		array(
			'default' => '4',
			'transport' => 'refresh',
			'sanitize_callback' => 'adventure_trekking_camp_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Adventure_Trekking_Camp_Text_Radio_Button_Custom_Control( $wp_customize, 'adventure_trekking_camp_footer_widget',
		array(
			'type' => 'select',
			'label' => esc_html__('Footer Per Column','adventure-trekking-camp'),
			'section' => 'adventure_trekking_camp_footer_copyright',
			'choices' => array(
				'1' => __('1','adventure-trekking-camp'),
	            '2' => __('2','adventure-trekking-camp'),
	            '3' => __('3','adventure-trekking-camp'),
	            '4' => __('4','adventure-trekking-camp'),
			)
		)
	) );