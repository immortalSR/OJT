<?php
 /**
  * Title: Mobile Sticky Icon Menu
  * Slug: sportspot/mobile-sticky-icon-menu
  * Categories: sportspot, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section right-section  wp-mobile-icon-menu","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull right-section  wp-block-section wp-mobile-icon-menu">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"stat-block"} -->
			<div class="wp-block-group stat-block">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"wp-home-button"} -->
					<div class="wp-block-button wp-home-button">
					<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_home_url( '/' ) ); ?>"> <?php esc_html_e ( 'Home', 'sportspot' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
				<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"className":"dummy-icon"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"stat-block"} -->
			<div class="wp-block-group stat-block">
				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"cart-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group cart-row">
				<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","hasHiddenPrice":true} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
