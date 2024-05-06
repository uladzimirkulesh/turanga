<?php
/**
 * Title: About us page
 * Slug: turanga/page-about-us
 * Categories: page, turanga-theme
 * Keywords: about
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"name":"Section About Us"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"section section--about-us section--about-us-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide section section--about-us section--about-us-2" id="section-about-us">
	<!-- wp:group {"metadata":{"name":"Section header"},"style":{"spacing":{"blockGap":"0"}},"className":"section__header grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__header grid">
		<!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xxxxxxx-large"} -->
		<h1 class="wp-block-heading has-xxxxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( 'About Us', 'About us section title', 'turanga' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","className":"about-us__image"} -->
		<figure class="wp-block-image size-full about-us__image">
			<img alt="" style="aspect-ratio:16/9;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","className":"about-us__text--large","fontSize":"xxxxx-large"} -->
		<p class="about-us__text--large has-contrast-color has-text-color has-link-color has-xxxxx-large-font-size" style="text-transform:uppercase"><?php echo esc_html_x( 'Transform your skin with Turanga Studio: the ultimate tattoo solution', 'About us section large text', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-borders","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|contrast-borders","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0"}},"className":"grid about-us__text","layout":{"type":"default"}} -->
		<div class="wp-block-group grid about-us__text" style="border-top-color:var(--wp--preset--color--contrast-borders);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast-borders);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Introducing Turanga Studio - the ultimate destination for all your tattoo needs. Our studio is dedicated to providing a natural and authentic experience for our clients, ensuring that every tattoo is a true reflection of your individuality.', 'About us section text', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'At Turanga Studio, we understand that getting a tattoo is a personal and meaningful decision. That\'s why we have curated a team of talented artists who are passionate about their craft and committed to bringing your vision to life. With years of experience and a keen eye for detail, our artists will work with you to create a one-of-a-kind design that you will be proud to wear for a lifetime.', 'About us section text', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'But it\'s not just about the art - we also prioritize the health and safety of our clients. Our studio follows strict hygiene protocols and uses only the highest quality, natural and vegan-friendly inks and materials. We believe that your tattoo should not only look beautiful, but also be safe for your body.', 'About us section text', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'At Turanga Studio, we offer a wide range of tattoo styles, from traditional to modern, black and grey to vibrant colors. Our artists are versatile and can cater to any design you have in mind. We also welcome custom designs and will work closely with you to bring your ideas to reality.', 'About us section text', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'But our services don\'t end with just tattoos. We also offer tattoo removal and cover-up services, as well as aftercare products to ensure your tattoo heals properly and maintains its vibrancy.', 'About us section text', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Located in the heart of the city, our studio provides a warm and welcoming atmosphere for our clients. We want you to feel comfortable and at ease during your tattoo experience with us.', 'About us section text', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'So why settle for anything less than the best? Visit Turanga Studio today and let us help you create a tattoo that is as unique as you are. Book your appointment now and join the Turanga family.', 'About us section text', 'turanga' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Section Gallery Row"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"section section--gallery-row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide section section--gallery-row" id="section-gallery-row" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"0"}},"className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content grid">
		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium">
			<img alt="" style="aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"turanga/section-cta"} /-->
<!-- wp:pattern {"slug":"turanga/section-contacts"} /-->
<!-- wp:pattern {"slug":"turanga/section-site-title"} /-->
