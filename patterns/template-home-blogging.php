<?php
/**
 * Title: Blogging home template
 * Slug: turanga/template-home-blogging
 * Template Types: front-page, index, home
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"content","layout":{"type":"constrained"}} -->
<main class="wp-block-group content" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"Page Header"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"className":"page-header grid","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide page-header grid">
		<!-- wp:heading {"level":1,"fontSize":"xxxxxxx-large"} -->
		<h1 class="wp-block-heading has-xxxxxxx-large-font-size"><?php echo esc_html_x( 'News', 'Blog page title', 'turanga' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","fontSize":"xxxxxxx-large"} -->
		<p class="has-text-align-right has-contrast-color has-text-color has-link-color has-xxxxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( '/32', 'Blog page title', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->
	</header>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"turanga/posts-list"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer"} /-->
