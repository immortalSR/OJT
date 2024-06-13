<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'gamers_hub_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'gamers_hub_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/blog' ); ?>
	<?php do_action( 'gamers_hub_after_blog' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'gamers_hub_after_home_content' ); ?>
</main>

<?php get_footer();