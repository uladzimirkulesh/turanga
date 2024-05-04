<?php
/**
 * Title: List of posts
 * Slug: turanga/posts-list
 * Categories: query, turanga-theme
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","className":"alignwide grid posts-list","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide grid posts-list">
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

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"turanga/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
