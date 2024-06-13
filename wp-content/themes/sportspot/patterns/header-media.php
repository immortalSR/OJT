<?php
 /**
  * Title: Header Media
  * Slug: sportspot/header-media
  * Categories: sportspot, featured
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/header-bg.png' ) ); ?>","id":921,"dimRatio":0,"overlayColor":"secondary-bg-color","align":"full","className":"header-media"} -->
<div class="wp-block-cover alignfull header-media">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-bg-color-background-color has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-921" alt="" src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/header-bg.png' ) ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"header-media-content"} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-center header-media-content">
				<!-- wp:column {"verticalAlignment":"center","className":"media-content","layout":{"type":"default"}} -->
					<div class="wp-block-column is-vertically-aligned-center media-content">
						<!-- wp:heading {"fontSize":"big-heading"} -->
						<h2 class="wp-block-heading has-big-heading-font-size"><?php esc_html_e ( 'Sports', 'sportspot' ); ?>  
							<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-hover-color-color"><?php esc_html_e ( 'Exo', 'sportspot' ); ?></mark>
						</h2>
						<!-- /wp:heading -->
						<!-- wp:heading {"fontSize":"big-heading"} -->
						<h2 class="wp-block-heading has-big-heading-font-size"><?php esc_html_e ( 'Collective', 'sportspot' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e ( 'Sport, educational activities for every occasion with attire and shoes. Learn more about our finest.', 'sportspot' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button -->
							<div class="wp-block-button">
								<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e ( 'View More', 'sportspot' ); ?></a>
							</div>
							<!-- /wp:button -->
							<!-- wp:button {"className":"is-style-outline"} -->
							<div class="wp-block-button is-style-outline">
								<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e ( 'Buy Now', 'sportspot' ); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
				<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","className":"header-image","layout":{"type":"default"}} -->
					<div class="wp-block-column is-vertically-aligned-center header-image">
						<!-- wp:image {"id":933,"sizeSlug":"full","linkDestination":"none"} -->
							<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/athlete.png' ) ); ?>" alt="" class="wp-image-933"/></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
				</div>
				<!-- /wp:group -->
				<!-- wp:social-links {"className":"header-social is-style-logos-only"} -->
					<ul class="wp-block-social-links header-social is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
					<!-- /wp:social-links -->
			</div>
		</div>
		<!-- /wp:cover -->

		