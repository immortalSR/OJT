<?php
/**
 * Template part for displaying blog section
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

?>
<?php $gamers_hub_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>

<?php if( get_theme_mod( 'gamers_hub_blog_show_hide') != '') { ?>
<section id="static-blog">
  <div class="container">
    <?php if( get_theme_mod('gamers_hub_blog_tittle') != ''){ ?>
      <h3 class="mt-5"><?php echo esc_html(get_theme_mod('gamers_hub_blog_tittle','')); ?></h3>
    <?php }?>
    <?php if( get_theme_mod('gamers_hub_blog_sub_tittle') != ''){ ?>
      <p><?php echo esc_html(get_theme_mod('gamers_hub_blog_sub_tittle','')); ?></p>
    <?php }?>
    <div class="row mt-5">
        <?php
          $gamers_hub_post_category = get_theme_mod('gamers_hub_our_fund_section_category');
          if($gamers_hub_post_category){
            $gamers_hub_page_query = new WP_Query(array( 'category_name' => esc_html( $gamers_hub_post_category ,'gamers-hub')));?>
            <?php while( $gamers_hub_page_query->have_posts() ) : $gamers_hub_page_query->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 fun-box">
                <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php }else {echo ('<img src="'.$gamers_hub_static_image.'">'); } ?>
                <div class="fund-box mb-4">
                  <h5 class="mb-0 mt-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          }
        ?>
      </div>
  </div>
</section>
<?php }?>