<?php
/**
 * Title: Latest projects section
 * Slug: turanga/section-latest-projects
 * Categories: portfolio, gallery, turanga-theme
 * Keywords: portfolio, projects
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Latest Projects"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"className":"section section--latest-projects","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<section class="wp-block-group alignwide section section--latest-projects" id="section-latest-projects" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section header"},"style":{"spacing":{"blockGap":"0"}},"className":"grid section__header","layout":{"type":"default"}} -->
	<div class="wp-block-group grid section__header">
		<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( 'Gallery', 'Latest Projects section title', 'turanga' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","fontSize":"xxxxx-large"} -->
		<p class="has-text-align-right has-contrast-color has-text-color has-link-color has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( '/67', 'Latest Projects section title', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:group {"metadata":{"name":"Projects list"},"style":{"spacing":{"blockGap":"0"}},"className":"grid projects-list","layout":{"type":"default"}} -->
		<div class="wp-block-group grid projects-list">
			<!-- wp:group {"metadata":{"name":"Project card"},"className":"project-card","layout":{"type":"default"}} -->
			<div class="wp-block-group project-card">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Project card"},"className":"project-card","layout":{"type":"default"}} -->
			<div class="wp-block-group project-card">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Project card"},"className":"project-card","layout":{"type":"default"}} -->
			<div class="wp-block-group project-card">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Project card"},"className":"project-card","layout":{"type":"default"}} -->
			<div class="wp-block-group project-card">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Project card"},"className":"project-card","layout":{"type":"default"}} -->
			<div class="wp-block-group project-card">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Project card"},"className":"project-card","layout":{"type":"default"}} -->
			<div class="wp-block-group project-card">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Project card"},"className":"project-card","layout":{"type":"default"}} -->
			<div class="wp-block-group project-card">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
					<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"View more"},"className":"project-card view-more-projects","layout":{"type":"constrained"}} -->
			<div class="wp-block-group project-card view-more-projects">
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"xxx-large"} -->
				<p class="has-contrast-color has-text-color has-link-color has-xxx-large-font-size" style="text-transform:uppercase"><a href="#"><span><?php echo wp_kses_post( _x( 'View<br>more', 'Latest Projects section view more link text', 'turanga' ) ); ?></span></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
