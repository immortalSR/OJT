<?php
/**
 * The template part for displaying content
 * @package Sports League
 * @subpackage sports_league
 * @since 1.0
 */
?>

<?php $sports_league_theme_lay = get_theme_mod( 'sports_league_post_layouts','Layout 2');
if($sports_league_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($sports_league_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($sports_league_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}