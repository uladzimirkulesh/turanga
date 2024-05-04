<?php
/**
 * Title: Contacts section
 * Slug: turanga/section-contacts
 * Categories: text, turanga-theme
 * Keywords: text, contacts
 */
?>

<!-- wp:group {"metadata":{"name":"Section Contacts"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"className":"section section--contacts","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide section section--contacts" id="section-contacts" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section content"},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:group {"metadata":{"name":"Contacts list"},"style":{"spacing":{"blockGap":"0"}},"className":"grid contacts-list","layout":{"type":"default"}} -->
		<div class="wp-block-group grid contacts-list">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}}},"textColor":"contrast-secondary-text","fontSize":"medium"} -->
			<p class="has-contrast-secondary-text-color has-text-color has-link-color has-medium-font-size"><?php echo wp_kses_post( _x( '2118 Thornridge Cir. Syracuse,<br>Connecticut 35624', 'Contacts section text', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}}},"textColor":"contrast-secondary-text","fontSize":"medium"} -->
			<p class="has-contrast-secondary-text-color has-text-color has-link-color has-medium-font-size"><?php echo wp_kses_post( _x( 'Tel.: (209) 555-0104<br>Email: hello@turanga.com', 'Contacts section text', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}}},"textColor":"contrast-secondary-text","fontSize":"medium"} -->
			<p class="has-contrast-secondary-text-color has-text-color has-link-color has-medium-font-size"><?php echo wp_kses_post( _x( 'Mon-Sat : 9am to 5pm<br>Sunday – Closed', 'Contacts section text', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
