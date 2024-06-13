<?php

	$sports_league_first_color = get_theme_mod('sports_league_first_color');

	$sports_league_custom_css ='';

	/*------------------ Global First Color -----------*/
	$sports_league_custom_css .='.cart-button a, .primary-navigation ul ul a, .header-box .notice-section, #slider .more-btn a, #our-sports-section .events-head h2:after, .footer-wp h3:after, .footer-wp input[type="submit"], .footer-wp button, .postbtn a, .metabox i:before, .pagination .current, #sidebar button, .tags a:hover, .nav-previous a, .nav-next a, #comments input[type="submit"].submit, .woocommerce span.onsale, .woocommerce a.button, a.added_to_cart.wc-forward, .woocommerce button.button.alt, .woocommerce #respond input#submit, #sidebar button:hover, .footer-wp button:hover, .bradcrumbs a, .bradcrumbs span, .woocommerce button.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.button.alt, nav.woocommerce-MyAccount-navigation ul li, #sidebar ul li:before, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a:hover, #slider .carousel-control-prev-icon i:hover, #slider .carousel-control-next-icon i:hover, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .widget_calendar tbody a, #comments a.comment-reply-link, .page-links .post-page-numbers.current span, input[type="submit"], input[type="submit"]:hover, #sidebar .widget_block .wp-block-tag-cloud a:hover, .content_box .tag-test-tag .wp-block-tag-cloud a:hover, .single-post-page .category a, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a, .wp-block-woocommerce-cart .wc-block-cart__submit-container a, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a{';
			$sports_league_custom_css .='background-color: '.esc_attr($sports_league_first_color).';';
	$sports_league_custom_css .='}';

	$sports_league_custom_css .='.copyright-wrapper, #scrollbutton{';
			$sports_league_custom_css .='background-color: '.esc_attr($sports_league_first_color).'!important;';
	$sports_league_custom_css .='}';

	$sports_league_custom_css .='.social-icon i:hover, .logo .site-title a:hover, .primary-navigation .current_page_item > a, .primary-navigation .current-menu-item > a, .primary-navigation ul li a:hover, .footer-wp h3, #sidebar ul li a:hover, .category span, .category a:hover, .tags, p.logged-in-as a, td.product-name a, .woocommerce .quantity .qty, .footer-wp li a:hover, .new-text p a, .bradcrumbs a:hover, .pagination a:hover, .widget_calendar caption, #sidebar h3.widget-title a.rsswidget, #comments a time, .primary-navigation .current_page_ancestor > a, .page-links a:hover{';
			$sports_league_custom_css .='color: '.esc_attr($sports_league_first_color).';';
	$sports_league_custom_css .='}';

	$sports_league_custom_css .='.middle-header, #scrollbutton, .related-inner-box, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a:hover{';
			$sports_league_custom_css .='border-color: '.esc_attr($sports_league_first_color).';';
	$sports_league_custom_css .='}';

	$sports_league_custom_css .='#scrollbutton{';
			$sports_league_custom_css .='border-color: '.esc_attr($sports_league_first_color).'!important;';
	$sports_league_custom_css .='}';

	$sports_league_custom_css .='.header-box .notice-section:before, .header-box .notice-section:after{';
			$sports_league_custom_css .='border-top:46px solid'.esc_attr($sports_league_first_color).';';
	$sports_league_custom_css .='}';

	$sports_league_custom_css .='a:focus, .logo a:focus, .woocommerce a:focus, #comments textarea:focus, input[type="submit"]:focus, .footer-wp input[type="search"]:focus, #sidebar-footer input:focus, .footer-wp button:focus, input:focus, button:focus, .woocommerce form .form-row input:focus.input-text, textarea:focus, .woocommerce ul.products li.product a:focus, #sidebar a:focus{';
			$sports_league_custom_css .='outline:2px solid'.esc_attr($sports_league_first_color).'!important;';
	$sports_league_custom_css .='}';

	$sports_league_custom_css .='
	@media screen and (max-width:1000px) {
		.toggle-menu i{';
			$sports_league_custom_css .='background-color: '.esc_attr($sports_league_first_color).' !important;';
	$sports_league_custom_css .='} }';

	/*---------------------------Width Layout -------------------*/
	$sports_league_theme_lay = get_theme_mod( 'sports_league_width_layout_options','Default');
    if($sports_league_theme_lay == 'Default'){
		$sports_league_custom_css .='body{';
			$sports_league_custom_css .='max-width: 100%;';
		$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == 'Container Layout'){
		$sports_league_custom_css .='body{';
			$sports_league_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$sports_league_custom_css .='}';
		$sports_league_custom_css .='.page-template-home-page #header{';
			$sports_league_custom_css .='position: static; background-color: #000;';
		$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == 'Box Layout'){
		$sports_league_custom_css .='body{';
			$sports_league_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$sports_league_custom_css .='}';
		$sports_league_custom_css .='.page-template-home-page #header{';
			$sports_league_custom_css .='position: static; background-color: #000;';
		$sports_league_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$sports_league_footer_text_align = get_theme_mod('sports_league_footer_text_align');
	$sports_league_custom_css .='.copyright-wrapper{';
		$sports_league_custom_css .='text-align: '.esc_attr($sports_league_footer_text_align).';';
	$sports_league_custom_css .='}';
	$sports_league_custom_css .='
	@media screen and (max-width:575px) {
		.copyright-wrapper{';
			$sports_league_custom_css .='text-align: center;'.esc_attr($sports_league_footer_text_align).'';
	$sports_league_custom_css .='} }';

	$sports_league_footer_text_padding = get_theme_mod('sports_league_footer_text_padding');
	$sports_league_custom_css .='.copyright-wrapper{';
		$sports_league_custom_css .='padding-top: '.esc_attr($sports_league_footer_text_padding).'px !important; padding-bottom: '.esc_attr($sports_league_footer_text_padding).'px !important;';
	$sports_league_custom_css .='}';

	$sports_league_footer_bg_color = get_theme_mod('sports_league_footer_bg_color');
	$sports_league_custom_css .='.footer-wp{';
		$sports_league_custom_css .='background-color: '.esc_attr($sports_league_footer_bg_color).';';
	$sports_league_custom_css .='}';

	$sports_league_footer_bg_image = get_theme_mod('sports_league_footer_bg_image');
	if($sports_league_footer_bg_image != false){
		$sports_league_custom_css .='.footer-wp{';
			$sports_league_custom_css .='background: url('.esc_attr($sports_league_footer_bg_image).'); background-size: cover;';
		$sports_league_custom_css .='}';
	}

	// Footer Attatchment
	$sports_league_theme_lay = get_theme_mod( 'sports_league_footer_attatchment','scroll');
	if($sports_league_theme_lay == 'fixed'){
		$sports_league_custom_css .='.footer-wp{';
			$sports_league_custom_css .='background-attachment: fixed;';
		$sports_league_custom_css .='}';
	}elseif ($sports_league_theme_lay == 'scroll'){
		$sports_league_custom_css .='.footer-wp{';
			$sports_league_custom_css .='background-attachment: scroll;';
		$sports_league_custom_css .='}';
	}

	// footer heading font size
	$sports_league_footer_heading_font_size = get_theme_mod('sports_league_footer_heading_font_size');
	$sports_league_custom_css .='.footer-wp h3{';
		$sports_league_custom_css .='font-size: '.esc_attr($sports_league_footer_heading_font_size).'px;';
	$sports_league_custom_css .='}';

	$sports_league_footer_heading_font_weight = get_theme_mod( 'sports_league_footer_heading_font_weight','500');
	if($sports_league_footer_heading_font_weight != ''){
		$sports_league_custom_css .='.footer-wp h3, .footer-wp .wp-block-heading{';
			$sports_league_custom_css .='font-weight: '.esc_attr($sports_league_footer_heading_font_weight).';';
		$sports_league_custom_css .='}';
	}

	// footer padding
	$sports_league_footer_padding = get_theme_mod('sports_league_footer_padding');
	$sports_league_custom_css .='.footer-wp{';
		$sports_league_custom_css .='padding: '.esc_attr($sports_league_footer_padding).'px;';
	$sports_league_custom_css .='}';
	
	$sports_league_copyright_text_font_size = get_theme_mod('sports_league_copyright_text_font_size', 15);
	$sports_league_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$sports_league_custom_css .='font-size: '.esc_attr($sports_league_copyright_text_font_size).'px;';
	$sports_league_custom_css .='}';

	/*------------- Back to Top  -------------------*/
	$sports_league_back_to_top_border_radius = get_theme_mod('sports_league_back_to_top_border_radius');
	$sports_league_custom_css .='#scrollbutton {';
		$sports_league_custom_css .='border-radius: '.esc_attr($sports_league_back_to_top_border_radius).'px;';
	$sports_league_custom_css .='}';

	$sports_league_scroll_icon_font_size = get_theme_mod('sports_league_scroll_icon_font_size', 22);
	$sports_league_custom_css .='#scrollbutton {';
		$sports_league_custom_css .='font-size: '.esc_attr($sports_league_scroll_icon_font_size).'px;';
	$sports_league_custom_css .='}';

	// back to top icon color
	$sports_league_scroll_icon_color = get_theme_mod('sports_league_scroll_icon_color');
	$sports_league_custom_css .='#scrollbutton{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_scroll_icon_color).';';
	$sports_league_custom_css .='}';

	// back to top icon hover color
	$sports_league_scroll_icon_hover_color = get_theme_mod('sports_league_scroll_icon_hover_color');
	$sports_league_custom_css .='#scrollbutton:hover{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_scroll_icon_hover_color).';';
	$sports_league_custom_css .='}';

	// back to top bg color
	$sports_league_scroll_icon_background = get_theme_mod('sports_league_scroll_icon_background');
	$sports_league_custom_css .='#scrollbutton{';
		$sports_league_custom_css .='background-color: '.esc_attr($sports_league_scroll_icon_background).';';
		$sports_league_custom_css .='border-color: '.esc_attr($sports_league_scroll_icon_background).';';
	$sports_league_custom_css .='}';

	// back to top bg hover color
	$sports_league_scroll_icon_background_hover = get_theme_mod('sports_league_scroll_icon_background_hover');
	$sports_league_custom_css .='#scrollbutton:hover{';
		$sports_league_custom_css .='background-color: '.esc_attr($sports_league_scroll_icon_background_hover).';';
		$sports_league_custom_css .='border-color: '.esc_attr($sports_league_scroll_icon_background_hover).';';
	$sports_league_custom_css .='}';

	$sports_league_top_bottom_scroll_padding = get_theme_mod('sports_league_top_bottom_scroll_padding', 7);
	$sports_league_custom_css .='#scrollbutton {';
		$sports_league_custom_css .='padding-top: '.esc_attr($sports_league_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($sports_league_top_bottom_scroll_padding).'px;';
	$sports_league_custom_css .='}';

	$sports_league_left_right_scroll_padding = get_theme_mod('sports_league_left_right_scroll_padding', 17);
	$sports_league_custom_css .='#scrollbutton {';
		$sports_league_custom_css .='padding-left: '.esc_attr($sports_league_left_right_scroll_padding).'px; padding-right: '.esc_attr($sports_league_left_right_scroll_padding).'px;';
	$sports_league_custom_css .='}';

	//First Cap
	$sports_league_show_first_caps = get_theme_mod('sports_league_show_first_caps', 'false');
	if($sports_league_show_first_caps == 'true' ){
	$sports_league_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter{';
	$sports_league_custom_css .=' font-size: 55px; font-weight: 600;';
	$sports_league_custom_css .=' margin-right: 6px;';
	$sports_league_custom_css .=' line-height: 1;';
	$sports_league_custom_css .='}';
	}elseif($sports_league_show_first_caps == 'false' ){
	$sports_league_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter {';
	$sports_league_custom_css .='display: none;';
	$sports_league_custom_css .='}';
	}

	/*-------------- Post Button  -------------------*/

	$sports_league_btn_font_size_option = get_theme_mod('sports_league_btn_font_size_option');
	$sports_league_custom_css .='.postbtn a{';
		$sports_league_custom_css .='font-size: '.esc_attr($sports_league_btn_font_size_option).'px !important;';
	$sports_league_custom_css .='}';

	// button font weight
	$sports_league_button_font_weight = get_theme_mod( 'sports_league_button_font_weight','500');
	if($sports_league_button_font_weight != ''){
		$sports_league_custom_css .='.postbtn a{';
			$sports_league_custom_css .='font-weight: '.esc_attr($sports_league_button_font_weight).';';
		$sports_league_custom_css .='}';
	}
	
	$sports_league_post_button_padding_top = get_theme_mod('sports_league_post_button_padding_top');
	$sports_league_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$sports_league_custom_css .='padding-top: '.esc_attr($sports_league_post_button_padding_top).'px !important; padding-bottom: '.esc_attr($sports_league_post_button_padding_top).'px !important;';
	$sports_league_custom_css .='}';

	$sports_league_post_button_padding_right = get_theme_mod('sports_league_post_button_padding_right');
	$sports_league_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$sports_league_custom_css .='padding-left: '.esc_attr($sports_league_post_button_padding_right).'px !important; padding-right: '.esc_attr($sports_league_post_button_padding_right).'px !important;';
	$sports_league_custom_css .='}';

	$sports_league_post_button_border_radius = get_theme_mod('sports_league_post_button_border_radius');
	$sports_league_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$sports_league_custom_css .='border-radius: '.esc_attr($sports_league_post_button_border_radius).'px;';
	$sports_league_custom_css .='}';

	$sports_league_post_comment_enable = get_theme_mod('sports_league_post_comment_enable',true);
	if($sports_league_post_comment_enable == false){
		$sports_league_custom_css .='#comments{';
			$sports_league_custom_css .='display: none;';
		$sports_league_custom_css .='}';
	}

	/*----------- Preloader Background Image  ----------------*/
	$sports_league_preloader_bg_image = get_theme_mod('sports_league_preloader_bg_image');
	if($sports_league_preloader_bg_image != false){
		$sports_league_custom_css .='.frame{';
			$sports_league_custom_css .='background: url('.esc_attr($sports_league_preloader_bg_image).'); background-size: cover;';
		$sports_league_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$sports_league_preloader_bg_color_option = get_theme_mod('sports_league_preloader_bg_color_option');
	$sports_league_preloader_icon_color_option = get_theme_mod('sports_league_preloader_icon_color_option');
	$sports_league_custom_css .='.frame{';
		$sports_league_custom_css .='background-color: '.esc_attr($sports_league_preloader_bg_color_option).';';
	$sports_league_custom_css .='}';
	$sports_league_custom_css .='.dot-1,.dot-2,.dot-3{';
		$sports_league_custom_css .='background-color: '.esc_attr($sports_league_preloader_icon_color_option).';';
	$sports_league_custom_css .='}';

	// preloader type
	$sports_league_theme_lay = get_theme_mod( 'sports_league_preloader_type','First Preloader Type');
    if($sports_league_theme_lay == 'First Preloader Type'){
		$sports_league_custom_css .='.dot-1, .dot-2, .dot-3{';
			$sports_league_custom_css .='';
		$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == 'Second Preloader Type'){
		$sports_league_custom_css .='.dot-1, .dot-2, .dot-3{';
			$sports_league_custom_css .='border-radius:0;';
		$sports_league_custom_css .='}';
	}

	/*------------------ Skin Option  -------------------*/
	$sports_league_theme_lay = get_theme_mod( 'sports_league_background_skin','Without Background');
    if($sports_league_theme_lay == 'With Background'){
		$sports_league_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$sports_league_custom_css .='background-color: #fff; padding:20px;';
		$sports_league_custom_css .='}';
		$sports_league_custom_css .='.login-box a{';
			$sports_league_custom_css .='background-color: #fff;';
		$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == 'Without Background'){
		$sports_league_custom_css .='{';
			$sports_league_custom_css .='background-color: transparent;';
		$sports_league_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$sports_league_woocommerce_button_padding_top = get_theme_mod('sports_league_woocommerce_button_padding_top',12);
	$sports_league_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$sports_league_custom_css .='padding-top: '.esc_attr($sports_league_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($sports_league_woocommerce_button_padding_top).'px;';
	$sports_league_custom_css .='}';
	

	$sports_league_woocommerce_button_padding_right = get_theme_mod('sports_league_woocommerce_button_padding_right',15);
	$sports_league_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$sports_league_custom_css .='padding-left: '.esc_attr($sports_league_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($sports_league_woocommerce_button_padding_right).'px;';
	$sports_league_custom_css .='}';

	$sports_league_woocommerce_button_border_radius = get_theme_mod('sports_league_woocommerce_button_border_radius',0);
	$sports_league_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart{';
		$sports_league_custom_css .='border-radius: '.esc_attr($sports_league_woocommerce_button_border_radius).'px;';
	$sports_league_custom_css .='}';

	$sports_league_related_product_enable = get_theme_mod('sports_league_related_product_enable',true);
	if($sports_league_related_product_enable == false){
		$sports_league_custom_css .='.related.products{';
			$sports_league_custom_css .='display: none;';
		$sports_league_custom_css .='}';
	}

	$sports_league_woocommerce_product_border_enable = get_theme_mod('sports_league_woocommerce_product_border_enable',false);
	if($sports_league_woocommerce_product_border_enable == false){
		$sports_league_custom_css .='.products li{';
			$sports_league_custom_css .='border: none;';
		$sports_league_custom_css .='}';
	}else if($sports_league_woocommerce_product_border_enable == true){
		$sports_league_custom_css .='.products li{';
			$sports_league_custom_css .='border: 1px solid #ccc;';
		$sports_league_custom_css .='}';
	}

	$sports_league_woocommerce_product_padding_top = get_theme_mod('sports_league_woocommerce_product_padding_top',0);
	$sports_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sports_league_custom_css .='padding-top: '.esc_attr($sports_league_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($sports_league_woocommerce_product_padding_top).'px !important;';
	$sports_league_custom_css .='}';

	$sports_league_woocommerce_product_padding_right = get_theme_mod('sports_league_woocommerce_product_padding_right',0);
	$sports_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sports_league_custom_css .='padding-left: '.esc_attr($sports_league_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($sports_league_woocommerce_product_padding_right).'px !important;';
	$sports_league_custom_css .='}';

	$sports_league_woocommerce_product_border_radius = get_theme_mod('sports_league_woocommerce_product_border_radius',3);
	$sports_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sports_league_custom_css .='border-radius: '.esc_attr($sports_league_woocommerce_product_border_radius).'px;';
	$sports_league_custom_css .='}';

	$sports_league_woocommerce_product_box_shadow = get_theme_mod('sports_league_woocommerce_product_box_shadow', 0);
	$sports_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sports_league_custom_css .='box-shadow: '.esc_attr($sports_league_woocommerce_product_box_shadow).'px '.esc_attr($sports_league_woocommerce_product_box_shadow).'px '.esc_attr($sports_league_woocommerce_product_box_shadow).'px #ddd;';
	$sports_league_custom_css .='}';

	$sports_league_woo_product_sale_top_bottom_padding = get_theme_mod('sports_league_woo_product_sale_top_bottom_padding', 0);
	$sports_league_woo_product_sale_left_right_padding = get_theme_mod('sports_league_woo_product_sale_left_right_padding', 0);
	$sports_league_custom_css .='.woocommerce span.onsale{';
		$sports_league_custom_css .='padding-top: '.esc_attr($sports_league_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($sports_league_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($sports_league_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($sports_league_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$sports_league_custom_css .='}';

	$sports_league_woo_product_sale_border_radius = get_theme_mod('sports_league_woo_product_sale_border_radius',0);
	$sports_league_custom_css .='.woocommerce span.onsale {';
		$sports_league_custom_css .='border-radius: '.esc_attr($sports_league_woo_product_sale_border_radius).'px;';
	$sports_league_custom_css .='}';

	$sports_league_woo_product_sale_position = get_theme_mod('sports_league_woo_product_sale_position', 'Left');
	if($sports_league_woo_product_sale_position == 'Right' ){
		$sports_league_custom_css .='.woocommerce ul.products li.product .onsale{';
			$sports_league_custom_css .=' left:auto; right:0;';
		$sports_league_custom_css .='}';
	}elseif($sports_league_woo_product_sale_position == 'Left' ){
		$sports_league_custom_css .='.woocommerce ul.products li.product .onsale{';
			$sports_league_custom_css .=' left:0; right:auto;';
		$sports_league_custom_css .='}';
	}

	$sports_league_wooproduct_sale_font_size = get_theme_mod('sports_league_wooproduct_sale_font_size',14);
	$sports_league_custom_css .='.woocommerce span.onsale{';
		$sports_league_custom_css .='font-size: '.esc_attr($sports_league_wooproduct_sale_font_size).'px;';
	$sports_league_custom_css .='}';

	// Responsive Media
	$sports_league_post_date = get_theme_mod( 'sports_league_display_post_date',true);
	if($sports_league_post_date == true && get_theme_mod( 'sports_league_metafields_date',true) != true){
    	$sports_league_custom_css .='.metabox .entry-date{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_post_date == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='.metabox .entry-date{';
			$sports_league_custom_css .='display:inline-block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_post_date == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='.metabox .entry-date{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_post_author = get_theme_mod( 'sports_league_display_post_author',true);
	if($sports_league_post_author == true && get_theme_mod( 'sports_league_metafields_author',true) != true){
    	$sports_league_custom_css .='.metabox .entry-author{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_post_author == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='.metabox .entry-author{';
			$sports_league_custom_css .='display:inline-block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_post_author == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='.metabox .entry-author{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_post_comment = get_theme_mod( 'sports_league_display_post_comment',true);
	if($sports_league_post_comment == true && get_theme_mod( 'sports_league_metafields_comment',true) != true){
    	$sports_league_custom_css .='.metabox .entry-comments{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_post_comment == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='.metabox .entry-comments{';
			$sports_league_custom_css .='display:inline-block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_post_comment == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='.metabox .entry-comments{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_post_time = get_theme_mod( 'sports_league_display_post_time',true);
	if($sports_league_post_time == true && get_theme_mod( 'sports_league_metafields_time',true) != true){
    	$sports_league_custom_css .='.metabox .entry-time{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_post_time == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='.metabox .entry-time{';
			$sports_league_custom_css .='display:inline-block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_post_time == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='.metabox .entry-time{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	if($sports_league_post_date == false && $sports_league_post_author == false && $sports_league_post_comment == false && $sports_league_post_time == false){
		$sports_league_custom_css .='@media screen and (max-width:575px) {';
    	$sports_league_custom_css .='.metabox {';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_metafields_date = get_theme_mod( 'sports_league_metafields_date',true);
	$sports_league_metafields_author = get_theme_mod( 'sports_league_metafields_author',true);
	$sports_league_metafields_comment = get_theme_mod( 'sports_league_metafields_comment',true);
	$sports_league_metafields_time = get_theme_mod( 'sports_league_metafields_time',true);
	if($sports_league_metafields_date == false && $sports_league_metafields_author == false && $sports_league_metafields_comment == false && $sports_league_metafields_time == false){
		$sports_league_custom_css .='@media screen and (min-width:576px) {';
    	$sports_league_custom_css .='.metabox {';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_slider = get_theme_mod( 'sports_league_display_slider',true);
	if($sports_league_slider == true && get_theme_mod( 'sports_league_slider_hide', false) == false){
    	$sports_league_custom_css .='#slider{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_slider == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='#slider{';
			$sports_league_custom_css .='display:block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_slider == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='#slider{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_sidebar = get_theme_mod( 'sports_league_display_sidebar',true);
    if($sports_league_sidebar == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='#sidebar{';
			$sports_league_custom_css .='display:block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_sidebar == false){
		$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='#sidebar{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_scroll = get_theme_mod( 'sports_league_display_scrolltop',true);
	if($sports_league_scroll == true && get_theme_mod( 'sports_league_hide_show_scroll',true) != true){
    	$sports_league_custom_css .='#scrollbutton {';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_scroll == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='#scrollbutton {';
			$sports_league_custom_css .='display:block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_scroll == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='#scrollbutton {';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_preloader = get_theme_mod( 'sports_league_display_preloader',false);
	if($sports_league_preloader == true && get_theme_mod( 'sports_league_preloader',false) == false){
		$sports_league_custom_css .='@media screen and (min-width:575px) {';
    	$sports_league_custom_css .='.frame{';
			$sports_league_custom_css .=' visibility: hidden;';
		$sports_league_custom_css .='} }';
	}
    if($sports_league_preloader == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='.frame{';
			$sports_league_custom_css .='visibility:visible;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_preloader == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='.frame{';
			$sports_league_custom_css .='visibility: hidden;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_search = get_theme_mod( 'sports_league_display_search_category',true);
	if($sports_league_search == true && get_theme_mod( 'sports_league_search_enable_disable',true) != true){
    	$sports_league_custom_css .='.search-cat-box{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_search == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='.search-cat-box{';
			$sports_league_custom_css .='display:block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_search == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='.search-cat-box{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	$sports_league_myaccount = get_theme_mod( 'sports_league_display_myaccount',true);
	if($sports_league_myaccount == true && get_theme_mod( 'sports_league_myaccount_enable_disable',true) != true){
    	$sports_league_custom_css .='.login-box{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} ';
	}
    if($sports_league_myaccount == true){
    	$sports_league_custom_css .='@media screen and (max-width:575px) {';
		$sports_league_custom_css .='.login-box{';
			$sports_league_custom_css .='display:block;';
		$sports_league_custom_css .='} }';
	}else if($sports_league_myaccount == false){
		$sports_league_custom_css .='@media screen and (max-width:575px){';
		$sports_league_custom_css .='.login-box{';
			$sports_league_custom_css .='display:none;';
		$sports_league_custom_css .='} }';
	}

	// menu settings
	$sports_league_menu_font_size_option = get_theme_mod('sports_league_menu_font_size_option');
	$sports_league_custom_css .='.primary-navigation ul li a{';
		$sports_league_custom_css .='font-size: '.esc_attr($sports_league_menu_font_size_option).'px;';
	$sports_league_custom_css .='}';

	$sports_league_menu_padding = get_theme_mod('sports_league_menu_padding');
	$sports_league_custom_css .='.primary-navigation ul li a{';
		$sports_league_custom_css .='padding: '.esc_attr($sports_league_menu_padding).'px;';
	$sports_league_custom_css .='}';

	//  comment form width
	$sports_league_comment_form_width = get_theme_mod( 'sports_league_comment_form_width');
	$sports_league_custom_css .='#comments textarea{';
		$sports_league_custom_css .='width: '.esc_attr($sports_league_comment_form_width).'%;';
	$sports_league_custom_css .='}';

	$sports_league_title_comment_form = get_theme_mod('sports_league_title_comment_form', 'Leave a Reply');
	if($sports_league_title_comment_form == ''){
		$sports_league_custom_css .='#comments h2#reply-title {';
			$sports_league_custom_css .='display: none;';
		$sports_league_custom_css .='}';
	}

	$sports_league_comment_form_button_content = get_theme_mod('sports_league_comment_form_button_content', 'Post Comment');
	if($sports_league_comment_form_button_content == ''){
		$sports_league_custom_css .='#comments p.form-submit {';
			$sports_league_custom_css .='display: none;';
		$sports_league_custom_css .='}';
	}

	// featured image setting
	$sports_league_image_border_radius = get_theme_mod('sports_league_image_border_radius', 0);
	$sports_league_custom_css .='.box-image img, .content_box img{';
		$sports_league_custom_css .='border-radius: '.esc_attr($sports_league_image_border_radius).'%;';
	$sports_league_custom_css .='}';

	$sports_league_image_box_shadow = get_theme_mod('sports_league_image_box_shadow',0);
	$sports_league_custom_css .='.box-image img, .content_box img{';
		$sports_league_custom_css .='box-shadow: '.esc_attr($sports_league_image_box_shadow).'px '.esc_attr($sports_league_image_box_shadow).'px '.esc_attr($sports_league_image_box_shadow).'px #b5b5b5;';
	$sports_league_custom_css .='}';

	// Post Block
	$sports_league_post_block_option = get_theme_mod( 'sports_league_post_block_option','By Block');
    if($sports_league_post_block_option == 'By Without Block'){
		$sports_league_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$sports_league_custom_css .='border:none; margin:30px 0;';
		$sports_league_custom_css .='}';
	}

	// post image 
	$sports_league_post_featured_color = get_theme_mod('sports_league_post_featured_color', '#F6551C');
	$sports_league_post_featured_image = get_theme_mod('sports_league_post_featured_image','Image');
	if($sports_league_post_featured_image == 'Color'){
		$sports_league_custom_css .='.post-color{';
			$sports_league_custom_css .='background-color: '.esc_attr($sports_league_post_featured_color).';';
		$sports_league_custom_css .='}';
	}

	// featured image dimention
	$sports_league_post_featured_image_dimention = get_theme_mod('sports_league_post_featured_image_dimention', 'Default');
	$sports_league_post_featured_image_custom_width = get_theme_mod('sports_league_post_featured_image_custom_width');
	$sports_league_post_featured_image_custom_height = get_theme_mod('sports_league_post_featured_image_custom_height');
	if($sports_league_post_featured_image_dimention == 'Custom'){
		$sports_league_custom_css .='.box-image img{';
			$sports_league_custom_css .='width: '.esc_attr($sports_league_post_featured_image_custom_width).'px; height: '.esc_attr($sports_league_post_featured_image_custom_height).'px;';
		$sports_league_custom_css .='}';
	}

	// featured image dimention
	$sports_league_custom_post_color_width = get_theme_mod('sports_league_custom_post_color_width');
	$sports_league_custom_post_color_height = get_theme_mod('sports_league_custom_post_color_height');
	if($sports_league_post_featured_image == 'Color'){
		$sports_league_custom_css .='.post-color{';
			$sports_league_custom_css .='width: '.esc_attr($sports_league_custom_post_color_width).'px; height: '.esc_attr($sports_league_custom_post_color_height).'px;';
		$sports_league_custom_css .='}';
	}

	// site title font size
	$sports_league_site_title_font_size = get_theme_mod('sports_league_site_title_font_size', 25);
	$sports_league_custom_css .='.logo .site-title{';
	$sports_league_custom_css .='font-size: '.esc_attr($sports_league_site_title_font_size).'px;';
	$sports_league_custom_css .='}';

	// site tagline font size
	$sports_league_site_tagline_font_size = get_theme_mod('sports_league_site_tagline_font_size', 13);
	$sports_league_custom_css .='p.site-description{';
	$sports_league_custom_css .='font-size: '.esc_attr($sports_league_site_tagline_font_size).'px;';
	$sports_league_custom_css .='}';

	// woocommerce Product Navigation
	$sports_league_wooproducts_nav = get_theme_mod('sports_league_wooproducts_nav', 'Yes');
	if($sports_league_wooproducts_nav == 'No'){
		$sports_league_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$sports_league_custom_css .='display: none;';
		$sports_league_custom_css .='}';
	}

	// site title color
	$sports_league_site_title_color = get_theme_mod('sports_league_site_title_color');
	$sports_league_custom_css .='.site-title a{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_site_title_color).' !important;';
	$sports_league_custom_css .='}';

	// site tagline color
	$sports_league_site_tagline_color = get_theme_mod('sports_league_site_tagline_color');
	$sports_league_custom_css .='.site-description{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_site_tagline_color).' !important;';
	$sports_league_custom_css .='}';

	// logo padding
	$sports_league_logo_padding = get_theme_mod('sports_league_logo_padding');
	$sports_league_custom_css .='.logo{';
		$sports_league_custom_css .='padding: '.esc_attr($sports_league_logo_padding).'px;';
	$sports_league_custom_css .='}';

	// logo margin
	$sports_league_logo_margin = get_theme_mod('sports_league_logo_margin', 20);
	$sports_league_custom_css .='.logo{';
		$sports_league_custom_css .='margin: '.esc_attr($sports_league_logo_margin).'px;';
	$sports_league_custom_css .='}';
	
	// site toggle button color
	$sports_league_toggle_button_color = get_theme_mod('sports_league_toggle_button_color');
	$sports_league_custom_css .='.toggle-menu i{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_toggle_button_color).' !important;';
	$sports_league_custom_css .='}';

	//Copyright text css
	$sports_league_copyright_text_color = get_theme_mod('sports_league_copyright_text_color');
	$sports_league_custom_css .='.copyright-wrapper p, .copyright-wrapper p a{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_copyright_text_color).';';
	$sports_league_custom_css .='}';

	//Copyright background css
	$sports_league_copyright_text_background = get_theme_mod('sports_league_copyright_text_background');
	$sports_league_custom_css .='.copyright-wrapper{';
		$sports_league_custom_css .='background-color: '.esc_attr($sports_league_copyright_text_background).';';
	$sports_league_custom_css .='}';

	// menu font weight
	$sports_league_font_weight_option_menu = get_theme_mod( 'sports_league_font_weight_option_menu','500');
	if($sports_league_font_weight_option_menu != ''){
		$sports_league_custom_css .='.primary-navigation ul li a{';
			$sports_league_custom_css .='font-weight: '.esc_attr($sports_league_font_weight_option_menu).';';
		$sports_league_custom_css .='}';
	}

	// menu color
	$sports_league_menu_color = get_theme_mod('sports_league_menu_color');

	$sports_league_custom_css .='.primary-navigation a, .primary-navigation ul li a, #site-navigation li a{';
			$sports_league_custom_css .='color: '.esc_attr($sports_league_menu_color).' !important;';
	$sports_league_custom_css .='}';

// Sub menu color
	$sports_league_sub_menu_color = get_theme_mod('sports_league_sub_menu_color');

	$sports_league_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a, .primary-navigation ul.children a, .primary-navigation ul.children li a, #site-navigation ul.children li a{';
			$sports_league_custom_css .='color: '.esc_attr($sports_league_sub_menu_color).' !important;';
	$sports_league_custom_css .='}';

// menu hover color
	$sports_league_menu_hover_color = get_theme_mod('sports_league_menu_hover_color');

	$sports_league_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$sports_league_custom_css .='color: '.esc_attr($sports_league_menu_hover_color).' !important;';
	$sports_league_custom_css .='}';

// Sub menu hover color
	$sports_league_sub_menu_hover_color = get_theme_mod('sports_league_sub_menu_hover_color');

	$sports_league_custom_css .='.primary-navigation ul.sub-menu a:hover, .primary-navigation ul.sub-menu li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation ul.sub-menu li a:hover, .primary-navigation ul.children a:hover, .primary-navigation ul.children li a:hover, #site-navigation ul.children li a:hover{';
			$sports_league_custom_css .='color: '.esc_attr($sports_league_sub_menu_hover_color).' !important;';
	$sports_league_custom_css .='}';	

	/*----------------- Slider -----------------*/

	$sports_league_slider_hide = get_theme_mod('sports_league_slider_hide');
	if($sports_league_slider_hide == false){
		$sports_league_custom_css .='.page-template-home-page #header{';
			$sports_league_custom_css .='position: static; background-color: #000;';
		$sports_league_custom_css .='}';
	}

	//slider heading color
	$sports_league_slider_heading_color = get_theme_mod('sports_league_slider_heading_color');
	$sports_league_custom_css .='#slider .inner_carousel h1{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_slider_heading_color).';';
	$sports_league_custom_css .='}';

	//slider text color
	$sports_league_slider_text_color = get_theme_mod('sports_league_slider_text_color');
	$sports_league_custom_css .='#slider .inner_carousel p{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_slider_text_color).';';
	$sports_league_custom_css .='}';

	//slider button text color
	$sports_league_slider_btn_text_color = get_theme_mod('sports_league_slider_btn_text_color');
	$sports_league_custom_css .='#slider .more-btn a{';
		$sports_league_custom_css .='color: '.esc_attr($sports_league_slider_btn_text_color).';';
	$sports_league_custom_css .='}';

	//slider button bg color
	$sports_league_slider_btn_bg_color = get_theme_mod('sports_league_slider_btn_bg_color');
	$sports_league_custom_css .='#slider .more-btn a{';
		$sports_league_custom_css .='background-color: '.esc_attr($sports_league_slider_btn_bg_color).';';
	$sports_league_custom_css .='}';

	/*----------Slider Content Layout --------------*/
	$sports_league_theme_lay = get_theme_mod( 'sports_league_slider_content_layout','Left');
    if($sports_league_theme_lay == 'Left'){
		$sports_league_custom_css .='#slider .carousel-caption, #slider .carousel-content, #slider .carousel-content h1, #slider .carousel-content p, #slider .carousel-content .more-btn {';
			$sports_league_custom_css .='text-align:left; ';
		$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == 'Center'){
		$sports_league_custom_css .='#slider .carousel-caption, #slider .carousel-content, #slider .carousel-content h1, #slider .carousel-content p, #slider .carousel-content .more-btn {';
			$sports_league_custom_css .='right: 0; left:0; text-align:center; ';
		$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == 'Right'){
		$sports_league_custom_css .='#slider .carousel-caption, #slider .carousel-content, #slider .carousel-content h1, #slider .carousel-content p, #slider .carousel-content .more-btn {';
			$sports_league_custom_css .='right: 12%; text-align:right; ';
		$sports_league_custom_css .='}';
	}

	/*------------ Slider Opacity -------------------*/
	$sports_league_theme_lay = get_theme_mod( 'sports_league_slider_opacity','');
	if($sports_league_theme_lay == '0'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.1'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.1';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.2'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.2';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.3'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.3';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.4'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.4';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.5'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.5';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.6'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.6';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.7'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.7';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.8'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.8';
	$sports_league_custom_css .='}';
	}else if($sports_league_theme_lay == '0.9'){
	$sports_league_custom_css .='#slider .slider-bg img{';
		$sports_league_custom_css .='opacity:0.9';
	$sports_league_custom_css .='}';
	}

	/*----------------- Topbar -----------------*/

	$sports_league_show_topbar = get_theme_mod('sports_league_show_topbar');
	if($sports_league_show_topbar == false){
		$sports_league_custom_css .='.logo{';
			$sports_league_custom_css .='padding: 15px;';
		$sports_league_custom_css .='}';
		$sports_league_custom_css .='.page-template-home-page #header, #header{';
			$sports_league_custom_css .='padding: 0px;';
		$sports_league_custom_css .='}';
	}

	// social icon size
	$sports_league_social_icon_size = get_theme_mod('sports_league_social_icon_size');
	$sports_league_custom_css .='.topbar .social-icon i{';
		$sports_league_custom_css .='font-size: '.esc_attr($sports_league_social_icon_size).'px;';
	$sports_league_custom_css .='}';

	/*----------------- Call us -----------------*/

	$sports_league_phone_number = get_theme_mod('sports_league_phone_number');
	if($sports_league_phone_number == false){
		$sports_league_custom_css .='.main-header{';
			$sports_league_custom_css .='padding: 10px;';
		$sports_league_custom_css .='}';
	}

	// notice css
	$sports_league_show_header = get_theme_mod( 'sports_league_notice_section_text');
	if($sports_league_show_header == false){
	$sports_league_custom_css .='.header-box .notice-section:before, .header-box .notice-section:after, .header-box .notice-section{';
	$sports_league_custom_css .='display:none;';
	$sports_league_custom_css .='}';
	}