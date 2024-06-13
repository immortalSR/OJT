<?php

$adventure_trekking_camp_custom_style= "";



$trekking_sports_slider_content_alignment = get_theme_mod( 'trekking_sports_slider_content_alignment','CENTER-ALIGN');

if($trekking_sports_slider_content_alignment == 'LEFT-ALIGN'){

	   $adventure_trekking_camp_custom_style .='.slide-inner{';

		   $adventure_trekking_camp_custom_style .='text-align:left; left:15%; right:50%';

	   $adventure_trekking_camp_custom_style .='}';


   }else if($trekking_sports_slider_content_alignment == 'CENTER-ALIGN'){

	   $adventure_trekking_camp_custom_style .='.slide-inner{';

		   $adventure_trekking_camp_custom_style .='text-align:center; left: 15%; right: 15%';

	   $adventure_trekking_camp_custom_style .='}';


   }else if($trekking_sports_slider_content_alignment == 'RIGHT-ALIGN'){

	   $adventure_trekking_camp_custom_style .='.slide-inner{';

		   $adventure_trekking_camp_custom_style .='text-align:right;left: 50%; right: 15%';

	   $adventure_trekking_camp_custom_style .='}';

   }

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
    $adventure_trekking_camp_custom_style .= 'position: fixed; background: #000 !important;';
    $adventure_trekking_camp_custom_style .= '}';

    $adventure_trekking_camp_custom_style .= '.admin-bar .fixed {';
    $adventure_trekking_camp_custom_style .= ' margin-top: 32px;';
    $adventure_trekking_camp_custom_style .= '}';

    $adventure_trekking_camp_custom_style .= '.page-template-custom-home-page .fixed_header.fixed{';
    $adventure_trekking_camp_custom_style .= 'position: fixed;';
    $adventure_trekking_camp_custom_style .= '}';
}












// slider button
$mobile_button_setting = get_option('trekking_sports_slider_button_mobile_show_hide', '1');
$main_button_setting = get_option('trekking_sports_slider_button_show_hide', '1');

$adventure_trekking_camp_custom_style .= '#slider .home-btn {';

if ($main_button_setting == 'off') {
    $adventure_trekking_camp_custom_style .= 'display: none;';
}

$adventure_trekking_camp_custom_style .= '}';

// Add media query for mobile devices
$adventure_trekking_camp_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_button_setting == 'off' || $mobile_button_setting == 'off') {
    $adventure_trekking_camp_custom_style .= '#slider .home-btn { display: none; }';
}
$adventure_trekking_camp_custom_style .= '}';