<?php
 /**
  * Title: Footer Three Columns
  * Slug: sportspot/footer-three-columns
  * Categories: sportspot, footer
  */
?>
<!-- wp:group {"align":"full","className":"footer three-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull footer three-columns">
	<!-- wp:columns {"align":"wide","className":"upper-footer"} -->
	<div class="wp-block-columns alignwide upper-footer">
		<!-- wp:column {"className":"footer-contact"} -->
		<div class="wp-block-column footer-contact">
		<!-- wp:paragraph {"className":"footer-title footer-site-title"} -->
		<p class="footer-title footer-site-title">
				<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-hover-color-color">Sport</mark> Spot
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php esc_html_e ( 'The most friendliest and mostly company I have every cross. The
						thing takes less time to ntroduce aterwards effect on them.', 'sportspot' ); ?>
						</p>
						<!-- /wp:paragraph -->
						<!-- wp:social-links {"iconBackgroundColor":{},"className":"is-style-default"} -->
							<ul class="wp-block-social-links is-style-default">
								<!-- wp:social-link {"url":"#","service":"twitter"} /-->

								<!-- wp:social-link {"url":"#","service":"facebook"} /-->

								<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

								<!-- wp:social-link {"url":"#","service":"instagram"} /-->

								<!-- wp:social-link {"url":"#","service":"youtube"} /-->
							</ul>
						<!-- /wp:social-links -->
					</div>
					<!-- /wp:group -->
				</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"normal"} -->
			<p class="footer-title has-normal-font-size"><?php esc_html_e( 'About', 'sportspot' );?></p>
			<!-- /wp:paragraph -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"detail"} -->
		<div class="wp-block-column detail">
					<!-- wp:paragraph {"className":"footer-title","fontSize":"upper-heading"} -->
					<p class="footer-title has-upper-heading-font-size"><?php esc_html_e ( 'Help', 'sportspot' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group" >
						<!-- wp:image {"id":1048,"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full">
							<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/message.png' ) ); ?>" alt="" class="wp-image-1048"/>
						</figure>
						<!-- /wp:image -->
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:heading -->
							<h2 class="wp-block-heading"><?php esc_html_e ( 'Business inquiries', 'sportspot' ); ?></h2>
							<!-- /wp:heading -->
							<!-- wp:paragraph -->
							<p><?php esc_html_e ( 'sales@exocompany.com', 'sportspot' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"id":1048,"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full">
							<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/paperplane.png' ) ); ?>" alt="" class="wp-image-1048"/>
						</figure>
						<!-- /wp:image -->
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:heading -->
							<h2 class="wp-block-heading"><?php esc_html_e ( 'PR or Media', 'sportspot' ); ?></h2>
							<!-- /wp:heading -->
							<!-- wp:paragraph -->
							<p><?php esc_html_e ( 'marketing@exocompany.com', 'sportspot' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:group {"align":"wide","className":"wp-block-footer  wp-block-site-generator bottom-footer","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide wp-block-footer wp-block-site-generator bottom-footer">
			<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
				<div class="wp-block-group alignwide wp-block-site-info">
					<!-- wp:paragraph -->
						<p><?php printf( 
						_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'sportspot' ), 
						esc_attr( date_i18n( __( 'Y', 'sportspot' ) ) ), 
						'<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> | </span>Sportspot by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:navigation {"overlayMenu":"never","fontSize":"extra-small"} /-->
				</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->