<?php
/**
 * The template part for displaying content
 * @package Sports League
 * @subpackage sports_league
 * @since 1.0
 */

$sports_league_archive_year  = get_the_time('Y'); 
$sports_league_archive_month = get_the_time('m'); 
$sports_league_archive_day   = get_the_time('d'); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="layout3">
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php $sports_league_postimg_lay = get_theme_mod( 'sports_league_post_featured_image','Image');
    if($sports_league_postimg_lay == 'Image'){ ?>
      <div class="box-image mb-3">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php }
    if($sports_league_postimg_lay == 'Color'){ ?>
      <div class="post-color text-center"></div>
    <?php }?>
    <?php if( get_theme_mod('sports_league_metafields_date', true) != '' || get_theme_mod('sports_league_metafields_author', true) != '' || get_theme_mod('sports_league_metafields_comment', true) != '' || get_theme_mod('sports_league_metafields_time', true) != '' ||  get_theme_mod('sports_league_display_post_date', true) != '' || get_theme_mod('sports_league_display_post_author', true) != '' || get_theme_mod('sports_league_display_post_comment', true) != '' || get_theme_mod('sports_league_display_post_time', true) != ''){ ?>
      <div class="metabox mb-3">
        <?php if( get_theme_mod( 'sports_league_metafields_date',true) != '' || get_theme_mod( 'sports_league_display_post_date',true) != '') { ?>
          <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('sports_league_post_date_icon','far fa-calendar-alt')); ?> me-1"></i> <a href="<?php echo esc_url( get_day_link( $sports_league_archive_year, $sports_league_archive_month, $sports_league_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('sports_league_blog_post_meta_seperator','|') ); ?></span></span>
        <?php }?>
        <?php if( get_theme_mod( 'sports_league_metafields_author',true) != '' || get_theme_mod( 'sports_league_display_post_author',true) != '') { ?>
          <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('sports_league_post_author_icon','fas fa-user')); ?> me-1"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('sports_league_blog_post_meta_seperator','|') ); ?></span></span>
        <?php }?>
        <?php if( get_theme_mod( 'sports_league_metafields_comment',true) != '' || get_theme_mod( 'sports_league_display_post_comment',true) != '') { ?>
          <span class="entry-comments mx-1"><i class="<?php echo esc_attr(get_theme_mod('sports_league_post_comment_icon','fas fa-comments')); ?> me-1"></i> <?php comments_number( __('0 Comment', 'sports-league'), __('0 Comments', 'sports-league'), __('% Comments', 'sports-league') ); ?><span class="ms-2"><?php echo esc_html( get_theme_mod('sports_league_blog_post_meta_seperator','|') ); ?></span></span>
        <?php }?>
        <?php if( get_theme_mod( 'sports_league_metafields_time',true) != '' || get_theme_mod( 'sports_league_display_post_time',true) != '') { ?>
          <span class="entry-time mx-1"><i class="<?php echo esc_attr(get_theme_mod('sports_league_post_time_icon','fas fa-clock')); ?> me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
        <?php echo esc_html (sports_league_edit_link()); ?>
      </div>
    <?php }?>
    <div class="new-text">
      <p>
        <?php $sports_league_theme_lay = get_theme_mod( 'sports_league_content_settings','Excerpt');
        if($sports_league_theme_lay == 'Content'){ ?>
          <?php the_content(); ?>
        <?php }
        if($sports_league_theme_lay == 'Excerpt'){ ?>
          <?php if(get_the_excerpt()) { ?>
            <?php $sports_league_excerpt = get_the_excerpt(); echo esc_html( sports_league_string_limit_words( $sports_league_excerpt, esc_attr(get_theme_mod('sports_league_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('sports_league_post_discription_suffix','[...]') ); ?>
          <?php }?>
        <?php }?>
      </p>
    </div>
  </div>
</article>