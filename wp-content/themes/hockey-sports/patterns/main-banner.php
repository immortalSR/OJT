<?php

/**
 * Title: Header Media
 * Slug: hockey-sports/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":8,"dimRatio":0,"minHeight":600,"minHeightUnit":"px","isDark":false,"align":"full","style":{"border":{"radius":"0px"}},"className":"slide2"} -->
<div class="wp-block-cover alignfull is-light slide2" style="border-radius:0px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-8" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary-bg-color","className":"cr-animated animate__bounceIn delay-1s"} -->
<div class="wp-block-column is-vertically-aligned-center cr-animated animate__bounceIn delay-1s has-secondary-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:40%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"45px"},"color":{"text":"#181719"}},"fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-text-color has-poppins-font-family" style="color:#181719;font-size:45px;font-style:normal;font-weight:700"><?php esc_html_e('Best Coaching','hockey-sports'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"foreground","fontSize":"medium","fontFamily":"poppins"} -->
<p class="has-foreground-color has-text-color has-poppins-font-family has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Lorem Ipsum has been the industrys tandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','hockey-sports'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"color":{"background":"#003466"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:0px;background-color:#003466"><?php esc_html_e('Join Now','hockey-sports'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->