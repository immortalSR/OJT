<?php

$adventure_trekking_camp_custom_style= "";

//----------------sticky header-------------------//

if (false === get_option('adventure_trekking_camp_sticky_header')) {
    add_option('adventure_trekking_camp_sticky_header', 'off');
}

// Define the custom CSS based on the 'adventure_trekking_camp_sticky_header' option

if (get_option('adventure_trekking_camp_sticky_header', 'off') !== 'on') {
    $adventure_trekking_camp_custom_style .= '.fixed_header.fixed{';
    $adventure_trekking_camp_custom_style .= 'position: static;';
    $adventure_trekking_camp_custom_style .= '}';

    $adventure_trekking_camp_custom_style .= '.page-template-custom-home-page .fixed_header.fixed{';
    $adventure_trekking_camp_custom_style .= 'position: absolute;';
    $adventure_trekking_camp_custom_style .= '}';
}

if (get_option('adventure_trekking_camp_sticky_header', 'off') !== 'off') {
    $adventure_trekking_camp_custom_style .= '.fixed_header.fixed{';
    $adventure_trekking_camp_custom_style .= 'position: fixed; background: #222222;';
    $adventure_trekking_camp_custom_style .= '}';

    $adventure_trekking_camp_custom_style .= '.admin-bar .fixed {';
    $adventure_trekking_camp_custom_style .= ' margin-top: 32px;';
    $adventure_trekking_camp_custom_style .= '}';

    $adventure_trekking_camp_custom_style .= '.page-template-custom-home-page .fixed_header.fixed{';
    $adventure_trekking_camp_custom_style .= 'position: fixed;';
    $adventure_trekking_camp_custom_style .= '}';
}
/*-------------------Scroll-top-position ----------------*/

$adventure_trekking_camp_scroll_options = get_theme_mod( 'adventure_trekking_camp_scroll_options','right_align');

if($adventure_trekking_camp_scroll_options == 'right_align'){

$adventure_trekking_camp_custom_style .='.scroll-top button{';

	$adventure_trekking_camp_custom_style .='';

$adventure_trekking_camp_custom_style .='}';

}else if($adventure_trekking_camp_scroll_options == 'center_align'){

$adventure_trekking_camp_custom_style .='.scroll-top button{';

	$adventure_trekking_camp_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

$adventure_trekking_camp_custom_style .='}';

}else if($adventure_trekking_camp_scroll_options == 'left_align'){

$adventure_trekking_camp_custom_style .='.scroll-top button{';

	$adventure_trekking_camp_custom_style .='right: auto; left:5%; margin: 0 auto';

$adventure_trekking_camp_custom_style .='}';
}

/*-------------------text-transform--------------*/

$adventure_trekking_camp_text_transform = get_theme_mod( 'adventure_trekking_camp_menu_text_transform','CAPITALISE');
if($adventure_trekking_camp_text_transform == 'CAPITALISE'){

$adventure_trekking_camp_custom_style .='nav#top_gb_menu ul li a{';

	$adventure_trekking_camp_custom_style .='text-transform: capitalize ; font-size: 14px;';

$adventure_trekking_camp_custom_style .='}';

}else if($adventure_trekking_camp_text_transform == 'UPPERCASE'){

$adventure_trekking_camp_custom_style .='nav#top_gb_menu ul li a{';

	$adventure_trekking_camp_custom_style .='text-transform: uppercase ; font-size: 14px;';

$adventure_trekking_camp_custom_style .='}';

}else if($adventure_trekking_camp_text_transform == 'LOWERCASE'){

$adventure_trekking_camp_custom_style .='nav#top_gb_menu ul li a{';

	$adventure_trekking_camp_custom_style .='text-transform: lowercase ; font-size: 14px;';

$adventure_trekking_camp_custom_style .='}';
}

//-------------------Logo-Max-height----//	
$adventure_trekking_camp_logo_max_height = get_theme_mod('adventure_trekking_camp_logo_max_height','100');

if($adventure_trekking_camp_logo_max_height != false){

$adventure_trekking_camp_custom_style .='.custom-logo-link img{';

	$adventure_trekking_camp_custom_style .='max-height: '.esc_html($adventure_trekking_camp_logo_max_height).'px;';

$adventure_trekking_camp_custom_style .='}';
}

//related products
if( get_option( 'adventure_trekking_camp_related_product',true) != 'on') {

$adventure_trekking_camp_custom_style .='.related.products{';

	$adventure_trekking_camp_custom_style .='display: none;';
	
$adventure_trekking_camp_custom_style .='}';
}

if( get_option( 'adventure_trekking_camp_related_product',true) != 'off') {

$adventure_trekking_camp_custom_style .='.related.products{';

	$adventure_trekking_camp_custom_style .='display: block;';
	
$adventure_trekking_camp_custom_style .='}';
}

// footer text alignment
$adventure_trekking_camp_footer_content_alignment = get_theme_mod( 'adventure_trekking_camp_footer_content_alignment','CENTER-ALIGN');

if($adventure_trekking_camp_footer_content_alignment == 'LEFT-ALIGN'){

$adventure_trekking_camp_custom_style .='.site-info{';

	$adventure_trekking_camp_custom_style .='text-align:left; padding-left: 30px;';

$adventure_trekking_camp_custom_style .='}';

$adventure_trekking_camp_custom_style .='.site-info a{';

	$adventure_trekking_camp_custom_style .='padding-left: 30px;';

$adventure_trekking_camp_custom_style .='}';


}else if($adventure_trekking_camp_footer_content_alignment == 'CENTER-ALIGN'){

$adventure_trekking_camp_custom_style .='.site-info{';

	$adventure_trekking_camp_custom_style .='text-align:center;';

$adventure_trekking_camp_custom_style .='}';


}else if($adventure_trekking_camp_footer_content_alignment == 'RIGHT-ALIGN'){

$adventure_trekking_camp_custom_style .='.site-info{';

	$adventure_trekking_camp_custom_style .='text-align:right; padding-right: 30px;';

$adventure_trekking_camp_custom_style .='}';

$adventure_trekking_camp_custom_style .='.site-info a{';

	$adventure_trekking_camp_custom_style .='padding-right: 30px;';

$adventure_trekking_camp_custom_style .='}';

}

// scroll button
$mobile_scroll_setting = get_option('adventure_trekking_camp_scroll_enable_mobile', '1');
$main_scroll_setting = get_option('adventure_trekking_camp_scroll_enable', '1');

$adventure_trekking_camp_custom_style .= '.scrollup {';

if ($main_scroll_setting == 'off') {
    $adventure_trekking_camp_custom_style .= 'display: none;';
}

$adventure_trekking_camp_custom_style .= '}';

// Add media query for mobile devices
$adventure_trekking_camp_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_scroll_setting == 'off' || $mobile_scroll_setting == 'off') {
    $adventure_trekking_camp_custom_style .= '.scrollup { display: none; }';
}
$adventure_trekking_camp_custom_style .= '}';

// theme breadcrumb
$mobile_breadcrumb_setting = get_option('adventure_trekking_camp_enable_breadcrumb_mobile', '1');
$main_breadcrumb_setting = get_option('adventure_trekking_camp_enable_breadcrumb', '1');

$adventure_trekking_camp_custom_style .= '.archieve_breadcrumb {';

if ($main_breadcrumb_setting == 'off') {
    $adventure_trekking_camp_custom_style .= 'display: none;';
}

$adventure_trekking_camp_custom_style .= '}';

// Add media query for mobile devices
$adventure_trekking_camp_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_breadcrumb_setting == 'off' || $mobile_breadcrumb_setting == 'off') {
    $adventure_trekking_camp_custom_style .= '.archieve_breadcrumb { display: none; }';
}
$adventure_trekking_camp_custom_style .= '}';

// single post and page breadcrumb
$mobile_single_breadcrumb_setting = get_option('adventure_trekking_camp_single_enable_breadcrumb_mobile', '1');
$main_single_breadcrumb_setting = get_option('adventure_trekking_camp_single_enable_breadcrumb', '1');

$adventure_trekking_camp_custom_style .= '.single_breadcrumb {';

if ($main_single_breadcrumb_setting == 'off') {
    $adventure_trekking_camp_custom_style .= 'display: none;';
}

$adventure_trekking_camp_custom_style .= '}';

// Add media query for mobile devices
$adventure_trekking_camp_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_single_breadcrumb_setting == 'off' || $mobile_single_breadcrumb_setting == 'off') {
    $adventure_trekking_camp_custom_style .= '.single_breadcrumb { display: none; }';
}
$adventure_trekking_camp_custom_style .= '}';

// woocommerce breadcrumb
$mobile_woo_breadcrumb_setting = get_option('adventure_trekking_camp_woocommerce_enable_breadcrumb_mobile', '1');
$main_woo_breadcrumb_setting = get_option('adventure_trekking_camp_woocommerce_enable_breadcrumb', '1');

$adventure_trekking_camp_custom_style .= '.woocommerce-breadcrumb {';

if ($main_woo_breadcrumb_setting == 'off') {
    $adventure_trekking_camp_custom_style .= 'display: none;';
}

$adventure_trekking_camp_custom_style .= '}';

// Add media query for mobile devices
$adventure_trekking_camp_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_woo_breadcrumb_setting == 'off' || $mobile_woo_breadcrumb_setting == 'off') {
    $adventure_trekking_camp_custom_style .= '.woocommerce-breadcrumb { display: none; }';
}
$adventure_trekking_camp_custom_style .= '}';