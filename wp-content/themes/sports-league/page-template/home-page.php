<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); 

?>

<main role="main" id="skip_content">

  <?php do_action( 'sports_league_above_slider' ); ?> 

  <?php if( get_theme_mod('sports_league_slider_hide', false) != '' || get_theme_mod( 'sports_league_display_slider',true) != ''){ ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
        <?php $sports_league_slider_page = array();
          for ( $sports_league_count = 1; $sports_league_count <= 4; $sports_league_count++ ) {
            $sports_league_mod = intval( get_theme_mod( 'sports_league_slider' . $sports_league_count ));
            if ( 'page-none-selected' != $sports_league_mod ) {
              $sports_league_slider_page[] = $sports_league_mod;
            }
          }
          if( !empty($sports_league_slider_page) ) :
          $sports_league_args = array(
            'post_type' => 'page',
            'post__in' => $sports_league_slider_page,
            'orderby' => 'post__in'
          );
          $sports_league_query = new WP_Query( $sports_league_args );
          if ( $sports_league_query->have_posts() ) :
            $i = 1;
        ?>     
          <div class="carousel-inner" role="listbox">
          <?php  while ( $sports_league_query->have_posts() ) : $sports_league_query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <div class="slider-bg">
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt="" />
                <?php } ?>
              </div>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <div class="carousel-content">
                    <?php if( get_theme_mod('sports_league_slider_small_title') != '' ){ ?>
                      <div class="mb-1">
                        <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('sports_league_slider_small_title',''));?></span>
                      </div>
                    <?php }?>
                    <?php if( get_theme_mod('sports_league_slider_heading',true) != ''){ ?>
                      <h1><?php the_title(); ?></h1>
                    <?php } ?>
                    <?php if( get_theme_mod('sports_league_slider_text',true) != ''){ ?>
                      <p class="my-3"><?php $sports_league_excerpt = get_the_excerpt(); echo esc_html( sports_league_string_limit_words( $sports_league_excerpt, esc_attr(get_theme_mod('sports_league_slider_excerpt_number','20')))); ?></p>
                    <?php } ?>
                    <?php if( get_theme_mod('sports_league_show_slider_button',true) != ''){ ?>
                        <?php if( get_theme_mod('sports_league_slider_button_text','READ MORE') != '' || get_theme_mod('sports_league_slider_button_link') != ''){ ?>
                          <div class="more-btn my-md-4">
                            <a href="<?php echo esc_url(get_theme_mod('sports_league_slider_button_link')!= '') ? esc_url(get_theme_mod('sports_league_slider_button_link')) : esc_url(get_permalink()); ?>" class="p-3"><?php echo esc_html( get_theme_mod('sports_league_slider_button_text',__('READ MORE','sports-league'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('sports_league_slider_button_text',__('READ MORE','sports-league'))); ?></span></a>
                          </div>
                        <?php } ?>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
          </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('sports_league_slider_previous_icon','fas fa-arrow-left')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','sports-league' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('sports_league_slider_next_icon','fas fa-arrow-right')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','sports-league' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>
  
  <?php do_action( 'sports_league_below_slider' ); ?>

  <?php if( get_theme_mod( 'sports_league_product_enable',false) != false) { ?>
    <section id="our-sports-section" class="py-5">
      <div class="container">
        <div class="events-head">
          <?php if(get_theme_mod('sports_league_section_text') != '') {?>
            <p class="text-center"><?php echo esc_html(get_theme_mod('sports_league_section_text')); ?></p>
          <?php }?>
          <?php if(get_theme_mod('sports_league_section_title') != '') {?>
            <h2 class="text-center mb-lg-4 mb-md-4  mb-0"><?php echo esc_html(get_theme_mod('sports_league_section_title')); ?></h2>
          <?php }?>
        </div>
      
      <div class="container post-section">
        <div class="row">
          <?php if ( get_theme_mod('sports_league_events_category') != '' ) {
          $sports_league_page_query = new WP_Query(array( 'category_name' => esc_html(get_theme_mod('sports_league_events_category')))); ?>
          <?php while( $sports_league_page_query->have_posts() ) : $sports_league_page_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-12 pt-4">
            <div class="events-box">
              <?php the_post_thumbnail(); ?>
              <div class="events-content">
                <div class=" ">
                 <a href="<?php the_permalink(); ?>"> <p><?php the_title(); ?></p> </a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?> 

  <div class="container front-page-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>