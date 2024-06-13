<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_option('trekking_sports_slide_enable') == '1'){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $mod =  get_theme_mod( 'trekking_sports_post_setting' . $i );
            if ( 'page-none-selected' != $mod ) {
              $trekking_sports_slide_post[] = $mod;
            }
          }
           if( !empty($trekking_sports_slide_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $trekking_sports_slide_post,
            'ignore_sticky_posts'  => true, // Exclude sticky posts by default
          );

          // Check if specific posts are selected
          if (empty($trekking_sports_slide_post) && is_sticky()) {
              $args['post__in'] = get_option('sticky_posts');
          }

          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="slid-bg">
          <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php if(has_post_thumbnail()){ ?>
              <img src="<?php (the_post_thumbnail_url('full')); ?>"/>
            <?php }else { ?><div class="bg-color"></div> <?php } ?>
            <div class="carousel-caption slide-inner">
              <?php if( get_theme_mod('trekking_sports_slide_small_heading') != ''){ ?>
                <h3 class="slid-sub-head"><?php echo esc_html(get_theme_mod('trekking_sports_slide_small_heading','')); ?></h3>
              <?php }?>
              <h2 class="slide-title"><?php the_title();?></h2>
              <?php if( get_option('trekking_sports_slider_excerpt_show_hide',true) != 'off'){ ?>
                <p class="slider-excerpt mb-0"><?php echo wp_trim_words(get_the_content(), get_theme_mod('trekking_sports_slider_excerpt_count',20) );?></p>
              <?php } ?>
              <div class="home-btn my-4">
                <a class="slid-btn" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('trekking_sports_slider_read_more',__('READ MORE','trekking-sports'))); ?></a>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        </div>        
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon px-3 py-2" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon px-3 py-2" aria-hidden="true"></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php if( get_option('trekking_sports_ideas_enable') == '1'){ ?>
    <section id="section_ideas" class="pb-5">
      <?php if( get_theme_mod('trekking_sports_ideas_main_heading') != '' ){ ?>
        <h2 class="idea-main-hd text-center pb-4"><?php echo esc_html(get_theme_mod('trekking_sports_ideas_main_heading')); ?></h2>
      <?php }?>
      <div class="container">       
        <div class="row">
          <?php
            for ( $trekking_sports_s = 1; $trekking_sports_s <= 4; $trekking_sports_s++ ) {
              $trekking_sports_post_mod =  get_theme_mod( 'trekking_sports_ideas_sec_settigs'.$trekking_sports_s );
              if ( 'post-none-selected' != $trekking_sports_post_mod ) {
                $trekking_sports_post[] = $trekking_sports_post_mod;
              }
            }
             if( !empty($trekking_sports_post) ) :
            $trekking_sports_args = array(
              'post_type' =>'post',
              'post__in' => $trekking_sports_post,
              'ignore_sticky_posts'  => true, // Exclude sticky posts by default
            );

            // Check if specific posts are selected
            if (empty($trekking_sports_post) && is_sticky()) {
                $trekking_sports_args['post__in'] = get_option('sticky_posts');
            }
            $trekking_sports_post_query = new WP_Query( $trekking_sports_args );
            if ( $trekking_sports_post_query->have_posts() ) :
              $trekking_sports_m = 1;
          ?>
          <?php while ( $trekking_sports_post_query->have_posts() ) : $trekking_sports_post_query->the_post(); ?>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="idea-box text-center">
                <div class="idea-img-border wow rotateIn" data-wow-duration="2s">
                  <?php
                  if(has_post_thumbnail()) { ?>
                  <div class="idea-img-box first">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <?php }?>
                </div>
                <h3 class="idea-head py-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
              </div>
            </div>
          <?php $trekking_sports_m++; endwhile;
          wp_reset_postdata();?>
          <?php else : ?>
          <div class="no-postfound"></div>
            <?php endif;
          endif;?>
        </div>
      </div>
    </section>
  <?php }?>
  <section id="custom-page-content" <?php if ( have_posts() && trim( get_the_content() ) !== '' ) echo 'class="pt-3"'; ?>>
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>