<?php
 /**
  * Title: Best Seller Product
  * Slug: sportspot/best-seller-product
  * Categories: sportspot, featured
  */
?>
<!-- wp:group {"align":"full","className":"product best-seller-section wp-block-section scroller-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull product best-seller-section wp-block-section scroller-section">
	<!-- wp:group {"align":"wide","className":"section-heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section-heading">
		<!-- wp:group {"align":"wide","className":"section-heading","layout":{"className":"section-heading","type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide section-heading">
			<!-- wp:heading {"fontSize":"section-title"} -->
			<h2 class="wp-block-heading has-section-title-font-size"><?php esc_html_e ( 'Best Seller Products', 'sportspot' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-sportspot-button"} -->
				<div class="wp-block-button is-style-sportspot-button">
					<a class="wp-block-button__link wp-element-button" href=""><?php esc_html_e ( 'See All', 'sportspot' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:woocommerce/featured-product /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:woocommerce/featured-product /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:woocommerce/featured-product /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:woocommerce/featured-product /-->
			</div>
			<!-- /wp:column -->
		</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->	