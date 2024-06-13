<?php
/**
 * The Header for our theme.
 * @package Sports League
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <?php if(get_theme_mod('sports_league_preloader',false) != '' || get_theme_mod( 'sports_league_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <header role="banner" class="header-box">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'sports-league' ); ?></a>

  <div id="header">
    <?php if( get_theme_mod('sports_league_show_topbar',false) != ''){ ?>
      <div class="topbar">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-9 col-md-8 col-12 align-self-center text-contents">
              <?php if(get_theme_mod('sports_league_get_tickets') != '' || get_theme_mod('sports_league_get_tickets_url') != ''){ ?>
                  <a href="<?php echo esc_url(get_theme_mod('sports_league_get_tickets_url')) ?>" class="ticket-text me-3"><?php echo esc_html(get_theme_mod('sports_league_get_tickets',''));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sports_league_get_tickets')) ?></span></a>
              <?php }?>
              <?php if(get_theme_mod('sports_league_track_delivery') != '' || get_theme_mod('sports_league_track_delivery_url') != ''){ ?>
                  <a href="<?php echo esc_url(get_theme_mod('sports_league_track_delivery_url')) ?>" class="me-3 delivery-text"><?php echo esc_html(get_theme_mod('sports_league_track_delivery',''));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sports_league_track_delivery')) ?></span></a>
              <?php }?>
              <?php if(get_theme_mod('sports_league_news_text') != ''){ ?>
                  <a class="me-3"><?php echo esc_html('NEWS :', 'sports-league'); ?><?php echo esc_html(get_theme_mod('sports_league_news_text',''));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sports_league_news_text')) ?></span></a>
              <?php }?>
            </div>  
            <div class="col-lg-3 col-md-4 col-12 align-self-center text-center">   
                <?php if( get_theme_mod('sports_league_facebook_url') != '' || get_theme_mod( 'sports_league_twitter_url') != '' || get_theme_mod( 'sports_league_instagram_url') != '' || get_theme_mod( 'sports_league_pinterest_url') != ''){ ?>
                  <div class="outer-social-icon ">
                      <div class="social-icon">
                        <?php if(get_theme_mod('sports_league_facebook_url') != ''){ ?>
                          <a target="_blank" href="<?php echo esc_url(get_theme_mod('sports_league_facebook_url')); ?>"><?php echo esc_html('FOLLOW US :', 'sports-league'); ?><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'sports-league'); ?></span></a>
                        <?php }?>
                        <?php if(get_theme_mod('sports_league_twitter_url') != ''){ ?>
                          <a target="_blank" href="<?php echo esc_url(get_theme_mod('sports_league_twitter_url')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'sports-league'); ?></span></a>
                        <?php }?>
                        <?php if(get_theme_mod('sports_league_instagram_url') != ''){ ?>
                          <a target="_blank" href="<?php echo esc_url(get_theme_mod('sports_league_instagram_url')); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'sports-league'); ?></span></a>
                        <?php }?>
                        <?php if(get_theme_mod('sports_league_pinterest_url') != ''){ ?>
                          <a target="_blank" href="<?php echo esc_url(get_theme_mod('sports_league_pinterest_url')); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'sports-league'); ?></span></a>
                        <?php }?>
                      </div>
                  </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
    <!-- Middle Header -->
  <div class="middle-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-12 align-self-center">
          <div class="logo">
            <div class="row">
              <div class="<?php if( get_theme_mod( 'sports_league_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
              </div>
              <div class="<?php if( get_theme_mod( 'sports_league_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if( get_theme_mod('sports_league_site_title_enable',true) != ''){ ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <?php if( get_theme_mod('sports_league_site_tagline_enable',false) != ''){ ?>
                    <p class="site-description"><?php echo esc_html($description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- menus -->
        <div class="col-lg-6 col-md-2 col-4 align-self-center text-center py-2">
          <div class="<?php if( get_theme_mod( 'sports_league_display_search', true) == true ) ?>align-self-center">
              <div class="toggle-menu responsive-menu text-center">
                <button role="tab" onclick="sports_league_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('sports_league_responsive_menu_open_icon','fas fa-bars')); ?>"></i><?php echo esc_html( get_theme_mod('sports_league_open_menu_label')); ?><span class="screen-reader-text"><?php esc_html_e('Open Menu','sports-league'); ?></span>
                </button>
              </div>
              <div id="navbar-header" class="menu-brand primary-nav">
                <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'sports-league' ); ?>">
                  <?php
                    wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'main-menu-navigation clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) );
                  ?>
                </nav>
                <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="sports_league_menu_close()"><?php echo esc_html( get_theme_mod('sports_league_close_menu_label')); ?><i class="<?php echo esc_attr(get_theme_mod('sports_league_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','sports-league'); ?></span></a>
              </div>
          </div>
        </div>
        <!-- Search -->
        <?php if( get_theme_mod( 'sports_league_display_search', true) == true ) { ?>
          <div class="col-lg-1 col-md-2 col-4 align-self-center text-center">
            <div class="main-search d-inline-block">
              <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('sports_league_slider_search_icon','fas fa-search')); ?>"></i></a></span>
            </div>
            <div class="searchform_page w-100 h-100">
              <div class="close w-100 text-end me-lg-4 me-3"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
              <div class="search_input">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>
        <?php }?>
        <!-- myaccount -->
        <div class="col-lg-1 col-md-2 col-4 align-self-center account-icon text-center">
            <div class="my-account">
              <?php if(class_exists('woocommerce')){ ?>
               <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="myaccount-link"><i class="fas fa-user"></i><span class="screen-reader-text"><?php esc_html_e( 'My Account','sports-league' );?></span></a>
              <?php }?>
            </div>
        </div>
        <!-- Cart Button -->
        <?php if( get_theme_mod( 'sports_league_display_cart', true) == true ) { ?>
          <div class="col-lg-2 col-md-3 col-6 align-self-center text-center cart-btn">
            <div class="cart-button">
              <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>">
                <i class="fas fa-shopping-bag"></i>
                 <?php if(class_exists('woocommerce')){ ?>
                 <span class="items-text"><?php echo esc_html (wp_kses_data( WC()->cart->get_cart_contents_count() ) );?>
                <?php esc_html_e('ITEMS','sports-league'); ?></span>
                 <?php } ?></a>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>

  <!-- notice text -->
  <div class="container position-relative">
    <div class="notice-section">
     <?php if(get_theme_mod('sports_league_notice_section_text') != '') {?>
       <p class="mb-0"><span><?php echo esc_html(' ', 'sports-league'); ?></span><?php echo esc_html(get_theme_mod('sports_league_notice_section_text')); ?><?php echo esc_html(get_theme_mod('sports_league_notice_section_btn_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sports_league_notice_section_btn_text')); ?></span></p>
      <?php }?>
    </div> 
  </div>
  </header>
