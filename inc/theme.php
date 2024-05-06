<?php
/**
 * Builds theme admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('ANOKA_THEME_URI','https://uladzimirkulesh.com/portfolio/turanga');
define('ANOKA_THEME_LIVE_URI','https://turanga.uladzimirkulesh.com');

if ( ! function_exists( 'turanga_admin_page_styles' ) ) {

	/**
	 * Enqueue theme admin page styles.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_admin_page_styles( $hook ){

		if ( 'appearance_page_turanga' != $hook ) {
			return;
		}

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register plugins stylesheets.
		wp_register_style(
			'turanga-theme-admin-page',
			get_template_directory_uri() . '/assets/css/admin.css',
			array( 'turanga-style' ),
			$version_string
		);

		// Enqueue plugins stylesheets.
		wp_enqueue_style( 'turanga-theme-admin-page' );

	}

}

add_action( 'admin_enqueue_scripts', 'turanga_admin_page_styles');

if ( ! function_exists( 'turanga_create_admin_menu_item' ) ) {

	/**
	 * Adds theme admin menu item.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_create_admin_menu_item() {
		add_theme_page( 'Turanga Theme', 'Turanga Theme', 'edit_theme_options', 'turanga-theme', 'turanga_theme_admin_page' );
	}

}

add_action( 'admin_menu', 'turanga_create_admin_menu_item' );

if ( ! function_exists( 'turanga_theme_admin_page' ) ) {

	/**
	 * Adds theme admin page.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return html
	 */
	function turanga_theme_admin_page() {
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'Turanga Theme', 'turanga' ); ?></h1>

			<p><?php esc_html_e( 'Thank You for using Turanga!', 'turanga' ); ?></p>

			<p><a href="https://gist.github.com/uladzimirkulesh/09cbc4fc7730f6e6ee332b1dbf18e0d1" target="_blank"><?php esc_html_e( 'Code example for Contact Form 7 plugin', 'turanga' ); ?></a></p>

			<p class="submit">
				<a href="<?php echo esc_url( ANOKA_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Theme Homepage', 'turanga' ); ?></a>

				<a href="<?php echo esc_url( ANOKA_THEME_LIVE_URI ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Live Preview', 'turanga' ); ?></a>
			</p>

			<div class="clear"></div>
		</div>
		<?php
	}

}
