<?php
/**
 * Title: Default footer
 * Slug: turanga/footer-default
 * Categories: footer, turanga-theme
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|contrast"}},"color":{"text":"var:preset|color|contrast-secondary-text"}}},"border":{"top":{"color":"var:preset|color|contrast-borders","style":"solid","width":"1px"}}},"textColor":"contrast-secondary-text","className":"footer__container","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group alignwide footer__container has-contrast-secondary-text-color has-text-color has-link-color has-small-font-size" style="border-top-color:var(--wp--preset--color--contrast-borders);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:navigation {"overlayMenu":"never","className":"footer__navigation","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /-->

		<!-- wp:paragraph {"className":"footer__code-by"} -->
		<p class="footer__code-by"><?php
		printf(
			/* translators: "Code by" text. */
			esc_html__( 'Code by %s', 'turanga' ),
			'<a href="' . esc_url( __( 'https://uladzimirkulesh.com', 'turanga' ) ) . '">Uladzimir Kulesh</a>' )
		?></p>
		<!-- /wp:paragraph -->

		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '<!-- wp:paragraph {"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|contrast"}}}}}} -->
			<p>', '</p><!-- /wp:paragraph -->' );
		}
		?>

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( '© 2024 all rights reserved', 'Copyright text', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
