<?php
/**
 * Title: Site title section
 * Slug: turanga/section-site-title
 * Categories: text, turanga-theme
 * Keywords: text
 */
?>

<!-- wp:group {"metadata":{"name":"Section Site Title"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"className":"section section--site-title","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide section section--site-title" id="section-site-title" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section content"},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:paragraph {"metadata":{"name":"Site Title"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","className":"site-title"} -->
		<p class="site-title has-contrast-color has-text-color has-link-color" style="text-transform:uppercase"><?php echo esc_html_x( 'Turanga', 'Site Title section text', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
