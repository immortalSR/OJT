<?php

	$gamers_hub_tp_color_option = get_theme_mod('gamers_hub_tp_color_option');
	$gamers_hub_tp_color_option_link = get_theme_mod('gamers_hub_tp_color_option_link');
	$gamers_hub_tp_preloader_color1_option = get_theme_mod('gamers_hub_tp_preloader_color1_option');
	$gamers_hub_tp_preloader_color2_option = get_theme_mod('gamers_hub_tp_preloader_color2_option');
	$gamers_hub_tp_preloader_bg_color_option = get_theme_mod('gamers_hub_tp_preloader_bg_color_option');
	$gamers_hub_tp_footer_bg_color_option = get_theme_mod('gamers_hub_tp_footer_bg_color_option');

	$gamers_hub_tp_theme_css = '';

	if($gamers_hub_tp_color_option != false){
		$gamers_hub_tp_theme_css .='#theme-sidebar button[type="submit"], #footer button[type="submit"],.prev.page-numbers, .next.page-numbers,.page-numbers,#comments input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,span.meta-nav ,.log-btn a , .site-info,.more-btn a, #static-blog .fund-box h5 a ,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.error-404 [type="submit"], .wc-block-cart__submit-container a ,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link ,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button, button[type="submit"],#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before{';
			$gamers_hub_tp_theme_css .='background-color: '.esc_attr($gamers_hub_tp_color_option).';';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_color_option != false){
		$gamers_hub_tp_theme_css .='a,p.infotext,a,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a,.main-navigation a:hover,#theme-sidebar h3 ,#about h3, .box-content a,#slider .inner_carousel h2,#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading,.entry-summary a, #theme-sidebar .wp-block-search .wp-block-search__label,#theme-sidebar .tagcloud a:hover, p.wp-block-tag-cloud a:hover,.box-info i,a.added_to_cart.wc-forward,#footer li a:hover,#footer p.wp-block-tag-cloud a:hover  {';
			$gamers_hub_tp_theme_css .='color: '.esc_attr($gamers_hub_tp_color_option).';';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_color_option != false){
		$gamers_hub_tp_theme_css .='.readmore-btn a,#footer p.wp-block-tag-cloud a:hover {';
			$gamers_hub_tp_theme_css .='border-color: '.esc_attr($gamers_hub_tp_color_option).';';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_color_option != false){
	$gamers_hub_tp_theme_css .='.page-box,#theme-sidebar section {';
	    $gamers_hub_tp_theme_css .='border-left-color: '.esc_attr($gamers_hub_tp_color_option).';';
	$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_color_option != false){
	$gamers_hub_tp_theme_css .='.page-box,#theme-sidebar section {';
	    $gamers_hub_tp_theme_css .='border-bottom-color: '.esc_attr($gamers_hub_tp_color_option).';';
	$gamers_hub_tp_theme_css .='}';
	}
	//link 
	if($gamers_hub_tp_color_option_link != false){
		$gamers_hub_tp_theme_css .='a:hover,#theme-sidebar a:hover ,.social-media i:hover,#footer a:hover, .post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,#footer .tagcloud a:hover, #footer p.wp-block-tag-cloud a:hover {';
			$gamers_hub_tp_theme_css .='color: '.esc_attr($gamers_hub_tp_color_option_link).';';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_color_option_link != false){
	$gamers_hub_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.book-tkt-btn a.bar-btn i:hover, .log-btn a:hover,.wc-block-cart__submit-container a:hover{';
		$gamers_hub_tp_theme_css .='background: '.esc_attr($gamers_hub_tp_color_option_link).';';
	$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_color_option_link != false){
		$gamers_hub_tp_theme_css .='#footer .tagcloud a:hover,.search_inner form.search-form,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,.readmore-btn a:hover,#footer .tagcloud a:hover, #footer p.wp-block-tag-cloud a:hover {';
			$gamers_hub_tp_theme_css .='border-color: '.esc_attr($gamers_hub_tp_color_option_link).';';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_preloader_color1_option != false){
		$gamers_hub_tp_theme_css .='.center1{';
			$gamers_hub_tp_theme_css .='border-color: '.esc_attr($gamers_hub_tp_preloader_color1_option).' !important;';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_preloader_color1_option != false){
		$gamers_hub_tp_theme_css .='.center1 .ring::before{';
			$gamers_hub_tp_theme_css .='background: '.esc_attr($gamers_hub_tp_preloader_color1_option).' !important;';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_preloader_color2_option != false){
		$gamers_hub_tp_theme_css .='.center2{';
			$gamers_hub_tp_theme_css .='border-color: '.esc_attr($gamers_hub_tp_preloader_color2_option).' !important;';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_preloader_color2_option != false){
		$gamers_hub_tp_theme_css .='.center2 .ring::before{';
			$gamers_hub_tp_theme_css .='background: '.esc_attr($gamers_hub_tp_preloader_color2_option).' !important;';
		$gamers_hub_tp_theme_css .='}';
	}
	if($gamers_hub_tp_preloader_bg_color_option != false){
		$gamers_hub_tp_theme_css .='.loader{';
			$gamers_hub_tp_theme_css .='background: '.esc_attr($gamers_hub_tp_preloader_bg_color_option).';';
		$gamers_hub_tp_theme_css .='}';
	}

	if($gamers_hub_tp_footer_bg_color_option != false){
		$gamers_hub_tp_theme_css .='#footer{';
			$gamers_hub_tp_theme_css .='background: '.esc_attr($gamers_hub_tp_footer_bg_color_option).';';
		$gamers_hub_tp_theme_css .='}';
	}
