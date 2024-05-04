<?php
/**
 * Title: Blogging home template
 * Slug: turanga/template-home-blogging
 * Template Types: front-page, index, home
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"content","layout":{"type":"constrained"}} -->
<main class="wp-block-group content" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"Page Header"},"align":"wide","className":"page-header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide page-header">
		<!-- wp:heading {"level":1,"fontSize":"xxxxx-large"} -->
		<h1 class="wp-block-heading has-xxxxx-large-font-size"><?php echo esc_html_x( 'News', 'Our Team section title', 'turanga' ); ?></h1>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"turanga/posts-list"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer"} /-->
