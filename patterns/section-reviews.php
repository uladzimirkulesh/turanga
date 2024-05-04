<?php
/**
 * Title: Reviews section
 * Slug: turanga/section-reviews
 * Categories: text, turanga-theme
 * Keywords: text, reviews
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Reviews"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"className":"section section--reviews","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<section class="wp-block-group alignwide section section--reviews" id="section-reviews" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section header"},"style":{"spacing":{"blockGap":"0"}},"className":"grid section__header","layout":{"type":"default"}} -->
	<div class="wp-block-group grid section__header">
		<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( 'Reviews', 'Reviews section title', 'turanga' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","fontSize":"xxxxx-large"} -->
		<p class="has-text-align-right has-contrast-color has-text-color has-link-color has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( '/5.0', 'Reviews section title', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:group {"metadata":{"name":"Reviews list"},"style":{"spacing":{"blockGap":"0"}},"className":"grid reviews-list","layout":{"type":"default"}} -->
		<div class="wp-block-group grid reviews-list">
			<!-- wp:group {"metadata":{"name":"Review"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"},"dimensions":{"minHeight":"100%"}},"borderColor":"contrast-borders","className":"review","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group review has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;min-height:100%;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"medium","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-medium is-resized is-style-rounded">
						<img alt="" style="aspect-ratio:1;object-fit:cover;width:80px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1.33"}},"textColor":"contrast","fontSize":"medium"} -->
					<p class="has-contrast-color has-text-color has-link-color has-medium-font-size" style="line-height:1.33"><?php echo esc_html_x( 'It’s your skin, you must decide what to do with it. Like in life, there is always a choice.', 'Reviews section review text', 'turanga' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<p class="has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Bennett Cole', 'Reviews section reviewer name', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Review"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"},"dimensions":{"minHeight":"100%"}},"borderColor":"contrast-borders","className":"review","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group review has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;min-height:100%;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"medium","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-medium is-resized is-style-rounded">
						<img alt="" style="aspect-ratio:1;object-fit:cover;width:80px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1.33"}},"textColor":"contrast","fontSize":"medium"} -->
					<p class="has-contrast-color has-text-color has-link-color has-medium-font-size" style="line-height:1.33"><?php echo esc_html_x( 'There is something in the act of having tattoos done that I love. It can be addictive.', 'Reviews section review text', 'turanga' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<p class="has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Christian Brown', 'Reviews section reviewer name', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Review"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"},"dimensions":{"minHeight":"100%"}},"borderColor":"contrast-borders","className":"review","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group review has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;min-height:100%;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"medium","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-medium is-resized is-style-rounded">
						<img alt="" style="aspect-ratio:1;object-fit:cover;width:80px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1.33"}},"textColor":"contrast","fontSize":"medium"} -->
					<p class="has-contrast-color has-text-color has-link-color has-medium-font-size" style="line-height:1.33"><?php echo esc_html_x( 'I could look at a certain tattoo, it always reminds me of a certain time in my life.', 'Reviews section review text', 'turanga' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<p class="has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Georgie Tingey', 'Reviews section reviewer name', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Review"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"},"dimensions":{"minHeight":"100%"}},"borderColor":"contrast-borders","className":"review","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group review has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;min-height:100%;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"medium","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-medium is-resized is-style-rounded">
						<img alt="" style="aspect-ratio:1;object-fit:cover;width:80px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1.33"}},"textColor":"contrast","fontSize":"medium"} -->
					<p class="has-contrast-color has-text-color has-link-color has-medium-font-size" style="line-height:1.33"><?php echo esc_html_x( 'Really happy my experience. Service is quick as well at a very reasonable price!', 'Reviews section review text', 'turanga' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<p class="has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Edmond Herrera', 'Reviews section reviewer name', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
