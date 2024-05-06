<?php
/**
 * Title: About us section
 * Slug: turanga/section-about-us
 * Categories: text, turanga-theme
 * Keywords: text, about
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section About Us"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"section section--about-us","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<section class="wp-block-group alignwide section section--about-us" id="section-about-us">
	<!-- wp:group {"metadata":{"name":"Section header"},"style":{"spacing":{"blockGap":"0"}},"className":"section__header grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__header grid">
		<!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xxxxxxx-large"} -->
		<h1 class="wp-block-heading has-xxxxxxx-large-font-size" style="text-transform:uppercase"><?php echo wp_kses_post( _x( 'Tattoo with<br>a special touch', 'About us section title', 'turanga' ) ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"textTransform":"uppercase"}},"textColor":"contrast","fontSize":"xxxxxxx-large"} -->
		<p class="has-text-align-right has-contrast-color has-text-color has-link-color has-xxxxxxx-large-font-size" style="text-transform:uppercase"><?php echo wp_kses_post( _x( 'Estd<br>/12', 'About us section title', 'turanga' ) ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","className":"about-us__image"} -->
		<figure class="wp-block-image size-full about-us__image">
			<img alt="" style="aspect-ratio:16/9;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","className":"about-us__text--large"} -->
		<p class="about-us__text--large has-contrast-color has-text-color has-link-color"><?php echo esc_html_x( 'Established in 2012, Turanga Studio have stamped their mark on Czech Republic. We have won multiple awards in international tattoo conventions and built a strong reputation.', 'About us section large text', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast-borders","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|contrast-borders","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0"}},"className":"grid about-us__text","layout":{"type":"default"}} -->
		<div class="wp-block-group grid about-us__text" style="border-top-color:var(--wp--preset--color--contrast-borders);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast-borders);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Our tattoo artists regularly attend tattoo courses to improve their skills. In addition, every year we participate in tattoo conventions, European and international. In a cozy ambience, you get the opportunity to fulfill your wishes for small and large tattoos, modifications and body decorations. Cleanliness, hygiene and a sterile ambience are a matter of course for our tattoo studio.', 'About us section text', 'turanga' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Our priority is to satisfy your expectations and an individual approach to each customer. During the visit we will be happy to offer you water, tea or coffee to make you feel comfortable. There is nothing to worry about, a friendly atmosphere is always our priority. Turanda Studio fulfill all standards and is regularly checked by Hygiene control.', 'About us section text', 'turanga' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'If you don\'t have a specific idea about tattoo, during the free consultation our team will take care of the perfect embodiment of your ideals. Experienced tattoo artists will draw a tattoo design for you, which you can change together and optimize according to your ideas and wishes.', 'About us section text', 'turanga' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
