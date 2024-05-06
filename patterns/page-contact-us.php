<?php
/**
 * Title: Contact us page
 * Slug: turanga/page-contact-us
 * Categories: page, turanga-theme
 * Keywords: contact
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"name":"Page Header"},"align":"wide","className":"page-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide page-header">
	<!-- wp:heading {"level":1,"fontSize":"xxxxxxx-large"} -->
	<h1 class="wp-block-heading has-xxxxxxx-large-font-size"><?php echo esc_html_x( 'Contact Us', 'Contact us page pattern title', 'turanga' ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Page Content"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"0"}},"className":"page-content grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide page-content grid" style="margin-top:var(--wp--preset--spacing--30)">
	<!-- wp:group {"metadata":{"name":"Contact Form"},"className":"contact-form","layout":{"type":"default"}} -->
	<div class="wp-block-group contact-form">
		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"2.25rem"}}},"textColor":"contrast","fontSize":"x-large"} -->
		<p class="has-contrast-color has-text-color has-link-color has-x-large-font-size" style="margin-top:2.25rem"><?php echo esc_html_x( 'Do you have a question about a tattoo, want to make an appointment, write a review, or have an idea for improvement? Fill out the form and tell us more details. We will contact you within 1 business day.', 'Contact us page pattern text', 'turanga' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"metadata":{"name":"Contact Form Wrapper"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"backgroundColor":"contrast-secondary-bg","className":"contact-form__wrapper","layout":{"type":"default"}} -->
		<div class="wp-block-group contact-form__wrapper has-contrast-secondary-bg-background-color has-background" style="margin-top:var(--wp--preset--spacing--30)">
			<!-- wp:shortcode -->
			[contact-form-7 id="f81fd39" title="Contact form 1"]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Conact Info"},"style":{"spacing":{"blockGap":"0"}},"className":"contact-info","layout":{"type":"default"}} -->
	<div class="wp-block-group contact-info">
		<!-- wp:group {"metadata":{"name":"Contact Info Block"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0.5rem"}},"borderColor":"contrast-borders","className":"contact-info__block","layout":{"type":"default"}} -->
		<div class="wp-block-group contact-info__block has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Adress', 'Contact us page pattern contact block title', 'turanga' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo wp_kses_post( _x( '2118 Thornridge Cir. Syracuse,<br>Connecticut 35624', 'Contact us page pattern contact block text', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Contact Info Block"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0.5rem"}},"borderColor":"contrast-borders","className":"contact-info__block","layout":{"type":"default"}} -->
		<div class="wp-block-group contact-info__block has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Contact details', 'Contact us page pattern contact block title', 'turanga' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo wp_kses_post( _x( 'Tel.: (209) 555-0104<br>Email: hello@turanga.com', 'Contact us page pattern contact block text', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Contact Info Block"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0.5rem"}},"borderColor":"contrast-borders","className":"contact-info__block","layout":{"type":"default"}} -->
		<div class="wp-block-group contact-info__block has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Working Hours', 'Contact us page pattern contact block title', 'turanga' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo wp_kses_post( _x( 'Mon-Sat : 9am to 5pm<br>Sunday – Closed', 'Contact us page pattern contact block text', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Contact Info Block"},"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0.5rem"}},"borderColor":"contrast-borders","className":"contact-info__block","layout":{"type":"default"}} -->
		<div class="wp-block-group contact-info__block has-border-color has-contrast-borders-border-color" style="border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Socials', 'Contact us page pattern contact block title', 'turanga' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo wp_kses_post( _x( '<a href="#" target="_blank" rel="noreferrer noopener">Instagram</a>', 'Contact us page social links', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0"><?php echo wp_kses_post( _x( '<a href="#" target="_blank" rel="noreferrer noopener">Facebook</a>', 'Contact us page social links', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0"><?php echo wp_kses_post( _x( '<a href="#" target="_blank" rel="noreferrer noopener">YouTube</a>', 'Contact us page social links', 'turanga' ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
