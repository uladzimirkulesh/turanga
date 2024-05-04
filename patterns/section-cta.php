<?php
/**
 * Title: CTA section
 * Slug: turanga/section-cta
 * Categories: call-to-action, turanga-theme
 * Keywords: cta, numbers
 */
?>

<!-- wp:group {"metadata":{"name":"Section CTA"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"className":"section section--cta","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide section section--cta" id="section-cta" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section content"},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:buttons {"align":"wide"} -->
		<div class="wp-block-buttons alignwide">
			<!-- wp:button {"width":100,"className":"is-style-large"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-large">
				<a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Make an appointment', 'CTA section button text', 'turanga' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
