<?php
/**
 * Title: Our team section
 * Slug: turanga/section-our-team
 * Categories: text, turanga-theme
 * Keywords: text, team
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Our Team"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"className":"section section--our-team","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<section class="wp-block-group alignwide section section--our-team" id="section-our-tean" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section header"},"style":{"spacing":{"blockGap":"0"}},"className":"grid section__header","layout":{"type":"default"}} -->
	<div class="wp-block-group grid section__header">
		<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( 'Our Team', 'Our Team section title', 'turanga' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","fontSize":"xxxxx-large"} -->
		<p class="has-text-align-right has-contrast-color has-text-color has-link-color has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( '/04', 'Our Team section title', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:group {"metadata":{"name":"Artists list"},"style":{"spacing":{"blockGap":"0"}},"className":"grid artists-list","layout":{"type":"default"}} -->
		<div class="wp-block-group grid artists-list">
			<!-- wp:group {"metadata":{"name":"Artist card"},"style":{"spacing":{"blockGap":"12px"}},"className":"artist-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
			<div class="wp-block-group artist-card">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<h5 class="wp-block-heading has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Richard Mason', 'Our Team section artist name', 'turanga' ); ?></h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Artist card"},"style":{"spacing":{"blockGap":"12px"}},"className":"artist-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
			<div class="wp-block-group artist-card">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"0.2em"}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<h5 class="wp-block-heading has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Tom Adams', 'Our Team section artist name', 'turanga' ); ?></h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Artist card"},"style":{"spacing":{"blockGap":"12px"}},"className":"artist-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
			<div class="wp-block-group artist-card">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"0.2em"}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<h5 class="wp-block-heading has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Peter Woods', 'Our Team section artist name', 'turanga' ); ?></h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Artist card"},"style":{"spacing":{"blockGap":"12px"}},"className":"artist-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
			<div class="wp-block-group artist-card">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary-text"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"contrast-secondary-text","fontSize":"x-small"} -->
				<h5 class="wp-block-heading has-contrast-secondary-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( 'Robin Colins', 'Our Team section artist name', 'turanga' ); ?></h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Large text"},"style":{"border":{"top":{"color":"var:preset|color|contrast-borders","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|contrast-borders","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"text--large","layout":{"type":"default"}} -->
		<div class="wp-block-group text--large" style="border-top-color:var(--wp--preset--color--contrast-borders);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast-borders);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
			<p class="has-text-align-center has-contrast-color has-text-color has-link-color"><?php echo esc_html_x( 'Whether you want a tattoo on your arm, leg, back or side, colored or black, we’ve got you covered. We will be happy to help you with the choice and subsequent consultation on tattoos to achieve the best result. Original tattoo right for you and to your taste.', 'Our Team section large text', 'turanga' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
