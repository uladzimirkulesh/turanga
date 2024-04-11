<?php
/**
 * Title: Hidden no results content
 * Slug: turanga/hidden-no-results
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-text"}}}},"textColor":"contrast-text"} -->
	<p class="has-contrast-text-color has-text-color has-link-color"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'turanga' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Label', 'turanga' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'Placeholder for search field', 'turanga' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'turanga' ); ?>"} /-->
</div>
<!-- /wp:group -->
