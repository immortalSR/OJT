<?php

$gamers_hub_tp_theme_css="";

	$gamers_hub_scroll_position = get_theme_mod( 'gamers_hub_scroll_top_position','Right');
	if($gamers_hub_scroll_position == 'Right'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='right: 20px;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_scroll_position == 'Left'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='left: 20px;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_scroll_position == 'Center'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='right: 50%;left: 50%;';
		$gamers_hub_tp_theme_css .='}';
	}

// site title and tagline font size option
$gamers_hub_site_title_font_size = get_theme_mod('gamers_hub_site_title_font_size', 30);{
$gamers_hub_tp_theme_css .='.logo h1 a, .logo p a{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_site_title_font_size).'px;';
	$gamers_hub_tp_theme_css .='}';
}

$gamers_hub_site_tagline_font_size = get_theme_mod('gamers_hub_site_tagline_font_size', 15);{
$gamers_hub_tp_theme_css .='.logo p{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_site_tagline_font_size).'px;';
	$gamers_hub_tp_theme_css .='}';
}

$gamers_hub_related_product = get_theme_mod('gamers_hub_related_product',true);
if($gamers_hub_related_product == false){
$gamers_hub_tp_theme_css .='.related.products{';
$gamers_hub_tp_theme_css .='display: none;';
$gamers_hub_tp_theme_css .='}';
}

$gamers_hub_footer_widget_image = get_theme_mod('gamers_hub_footer_widget_image');
if($gamers_hub_footer_widget_image != false){
$gamers_hub_tp_theme_css .='#footer{';
$gamers_hub_tp_theme_css .='background: url('.esc_attr($gamers_hub_footer_widget_image).');';
$gamers_hub_tp_theme_css .='}';
}

// related post
$gamers_hub_related_post_mob = get_theme_mod('gamers_hub_related_post_mob', true);
$gamers_hub_related_post = get_theme_mod('gamers_hub_remove_related_post', true);
$gamers_hub_tp_theme_css .= '.related-post-block {';
if ($gamers_hub_related_post == false) {
    $gamers_hub_tp_theme_css .= 'display: none;';
}
$gamers_hub_tp_theme_css .= '}';
$gamers_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($gamers_hub_related_post == false || $gamers_hub_related_post_mob == false) {
    $gamers_hub_tp_theme_css .= '.related-post-block { display: none; }';
}
$gamers_hub_tp_theme_css .= '}';

// slider btn
$gamers_hub_slider_button_mob = get_theme_mod('gamers_hub_slider_button_mob', true);
$gamers_hub_slider_button = get_theme_mod('gamers_hub_slider_button', true);
$gamers_hub_tp_theme_css .= '#slider .more-btn {';
if ($gamers_hub_slider_button == false) {
    $gamers_hub_tp_theme_css .= 'display: none;';
}
$gamers_hub_tp_theme_css .= '}';
$gamers_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($gamers_hub_slider_button == false || $gamers_hub_slider_button_mob == false) {
    $gamers_hub_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$gamers_hub_tp_theme_css .= '}';

//return to header mobile				
$gamers_hub_return_to_header_mob = get_theme_mod('gamers_hub_return_to_header_mob', true);
$gamers_hub_return_to_header = get_theme_mod('gamers_hub_return_to_header', true);
$gamers_hub_tp_theme_css .= '.return-to-header{';
if ($gamers_hub_return_to_header == false) {
    $gamers_hub_tp_theme_css .= 'display: none;';
}
$gamers_hub_tp_theme_css .= '}';
$gamers_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($gamers_hub_return_to_header == false || $gamers_hub_return_to_header_mob == false) {
    $gamers_hub_tp_theme_css .= '.return-to-header{ display: none; }';
}
$gamers_hub_tp_theme_css .= '}';
	
	//Social icon Font size
$gamers_hub_social_icon_fontsize = get_theme_mod('gamers_hub_social_icon_fontsize');
$gamers_hub_tp_theme_css .='.social-media a i{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_social_icon_fontsize).'px;';
$gamers_hub_tp_theme_css .='}';


//menu font size
$gamers_hub_menu_font_size = get_theme_mod('gamers_hub_menu_font_size', 15);{
$gamers_hub_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_menu_font_size).'px;';
$gamers_hub_tp_theme_css .='}';
}

// menu text tranform
$gamers_hub_menu_text_tranform = get_theme_mod( 'gamers_hub_menu_text_tranform','Capitalize');
if($gamers_hub_menu_text_tranform == 'Uppercase'){
$gamers_hub_tp_theme_css .='.main-navigation a {';
	$gamers_hub_tp_theme_css .='text-transform: uppercase;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_text_tranform == 'Lowercase'){
$gamers_hub_tp_theme_css .='.main-navigation a {';
	$gamers_hub_tp_theme_css .='text-transform: lowercase;';
$gamers_hub_tp_theme_css .='}';
}
else if($gamers_hub_menu_text_tranform == 'Capitalize'){
$gamers_hub_tp_theme_css .='.main-navigation a {';
	$gamers_hub_tp_theme_css .='text-transform: capitalize;';
$gamers_hub_tp_theme_css .='}';
}
//======================= slider Content layout ===================== //

$gamers_hub_slider_content_layout = get_theme_mod('gamers_hub_slider_content_layout', 'CENTER-ALIGN'); 
$gamers_hub_tp_theme_css .= '#slider .carousel-caption{';
switch ($gamers_hub_slider_content_layout) {
    case 'LEFT-ALIGN':
        $gamers_hub_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $gamers_hub_tp_theme_css .= 'text-align:center; right: 50%; left: 15%';
        break;
    case 'RIGHT-ALIGN':
        $gamers_hub_tp_theme_css .= 'text-align:right; right: 50%; left: 15%';
        break;
    default:
        $gamers_hub_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
}
$gamers_hub_tp_theme_css .= '}';


//sale position
$gamers_hub_scroll_position = get_theme_mod( 'gamers_hub_sale_tag_position','right');
if($gamers_hub_scroll_position == 'right'){
$gamers_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $gamers_hub_tp_theme_css .='right: 25px !important;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_scroll_position == 'left'){
$gamers_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $gamers_hub_tp_theme_css .='left: 25px !important;';
$gamers_hub_tp_theme_css .='}';
}

//Font Weight
$gamers_hub_menu_font_weight = get_theme_mod( 'gamers_hub_menu_font_weight','400');
if($gamers_hub_menu_font_weight == '100'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 100;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '200'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 200;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '300'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 300;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '400'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 400;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '500'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 500;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '600'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 600;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '700'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 700;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '800'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 800;';
$gamers_hub_tp_theme_css .='}';
}else if($gamers_hub_menu_font_weight == '900'){
$gamers_hub_tp_theme_css .='.main-navigation a{';
    $gamers_hub_tp_theme_css .='font-weight: 900;';
$gamers_hub_tp_theme_css .='}';
}