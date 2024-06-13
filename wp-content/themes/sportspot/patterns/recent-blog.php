<?php
 /**
  * Title: Recent Blog
  * Slug: sportspot/recent-blog
  * Categories: sportspot, query
  */
?>
<!-- wp:group {"align":"full","className":"blog-section","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull blog-section">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"72.856%"} -->
		<div class="wp-block-column" style="flex-basis:72.856%">
			<!-- wp:query {"queryId":3,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"align":"full"} -->
				<!-- wp:group {"layout":{"inherit":true}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->
					<!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
					<div class="wp-block-group alignfull wp-block-post-container">
						<!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
						<div class="wp-block-group wp-block-post-meta">
							<!-- wp:post-terms {"term":"category"} /-->
                			<!-- wp:post-date {"isLink":true} /-->
						</div>
						<!-- /wp:group -->
						<!-- wp:post-title {"isLink":true} /-->
						<!-- wp:post-excerpt {"moreText":"Continue Reading"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- /wp:post-template -->
				<!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next {"fontSize":"small"} /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"30.144%"} -->
		<div class="wp-block-column" style="flex-basis:30.144%">
			<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar">
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Search</h2>
		<!-- /wp:heading -->
		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Follow us</h2>
		<!-- /wp:heading -->
		<!-- wp:social-links {"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

			<!-- wp:social-link {"url":"#","service":"wordpress"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Category</h2>
		<!-- /wp:heading -->
		<!-- wp:categories {"showPostCounts":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Recent Post</h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts {"excerptLength":10,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Tags</h2>
		<!-- /wp:heading -->
		<!-- wp:tag-cloud {"numberOfTags":15} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->