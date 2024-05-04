<?php
/**
 * Title: Latest Posts section
 * Slug: turanga/section-latest-posts
 * Categories: query, turanga-theme
 * Block Types: core/query
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Latest Posts"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"className":"section section--latest-posts","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<section class="wp-block-group alignwide section section--latest-posts" id="section-latest-posts" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section header"},"style":{"spacing":{"blockGap":"0"}},"className":"grid section__header","layout":{"type":"default"}} -->
	<div class="wp-block-group grid section__header">
		<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( 'News', 'Latest Posts section title', 'turanga' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","fontSize":"xxxxx-large"} -->
		<p class="has-text-align-right has-contrast-color has-text-color has-link-color has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( '/32', 'Latest Posts section title', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"border":{"top":{"color":"var:preset|color|contrast-borders","style":"solid","width":"1px"}}},"className":"grid section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group grid section__content" style="border-top-color:var(--wp--preset--color--contrast-borders);border-top-style:solid;border-top-width:1px">
		<!-- wp:group {"metadata":{"name":"Posts List"},"className":"posts-list","layout":{"type":"default"}} -->
		<div class="wp-block-group posts-list">
			<!-- wp:query {"query":{"perPage":"7","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
					<!-- wp:columns {"style":{"border":{"bottom":{"color":"var:preset|color|contrast-borders","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"4px"}}}} -->
					<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--contrast-borders);border-bottom-style:solid;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:column {"width":"80%"} -->
						<div class="wp-block-column" style="flex-basis:80%">
							<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"width":"20%"} -->
						<div class="wp-block-column" style="flex-basis:20%">
							<!-- wp:post-date {"format":"M j, Y"} /-->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->

			<!-- wp:paragraph {"metadata":{"name":"Read all link"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"0.2em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"},":hover":{"color":{"text":"var:preset|color|contrast"}}}},"spacing":{"margin":{"top":"2.25rem"}}},"textColor":"contrast-secondary-text","className":"read-all-link","fontSize":"x-small"} -->
			<p class="read-all-link has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="margin-top:2.25rem;font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><a href="#"><?php echo esc_html_x( 'Read All', 'Latest Posts section read all link text', 'turanga' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
