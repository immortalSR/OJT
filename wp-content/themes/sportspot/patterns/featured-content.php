<?php
 /**
  * Title: Featured Content
  * Slug: sportspot/featured-content
  * Categories: sportspot, header
  */
?>
<!-- wp:group {"align":"full","className":"featured-section wp-block-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull featured-section wp-block-section">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:group {"align":"wide","className":"section-heading","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide section-heading">
				<!-- wp:heading {"fontSize":"section-title"} -->
				<h2 class="wp-block-heading has-section-title-font-size"><?php esc_html_e ( 'Sports Blogging', 'sportspot' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e ( 'Predefined chunks as necessary, make
					first true generator on the Internet. It’s
						onary.', 'sportspot' ); ?>
						</p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button -->
							<div class="wp-block-button">
								<a class="wp-block-button__link wp-element-button"  href="#"><?php esc_html_e ( 'View More', 'sportspot' ); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:query {"queryId":17,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
					<div class="wp-block-query">
						<!-- wp:post-template -->
						<!-- wp:group {"layout":{"inherit":false}} -->
						<div class="wp-block-group">
							<!-- wp:post-featured-image /-->
							<!-- wp:group {"className":"featured-content","layout":{"type":"constrained"}} -->
							<div class="wp-block-group featured-content">
								<!-- wp:post-title {"level":4,"isLink":true} /-->
								<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
								<div class="wp-block-group wp-block-post-meta">
									<!-- wp:post-date {"format":"F j, Y","isLink":true} /-->
									<!-- wp:post-author {"showAvatar":false} /-->
								</div>
								<!-- /wp:group -->
								<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":15} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
						<!-- /wp:post-template -->
					</div>
					<!-- /wp:query -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->