<?php
/**
 * Builds theme admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('TURANGA_THEME_URI','https://uladzimirkulesh.com/portfolio/turanga');
define('TURANGA_THEME_LIVE_URI','https://turanga.uladzimirkulesh.com');
define('TURANGA_THEME_GIST_URI','https://gist.github.com/uladzimirkulesh/09cbc4fc7730f6e6ee332b1dbf18e0d1');

if ( ! function_exists( 'turanga_admin_page_styles' ) ) {

	/**
	 * Enqueue theme admin page styles.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_admin_page_styles( $hook ){

		if ( 'appearance_page_turanga-theme' != $hook ) {
			return;
		}

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register admin stylesheets.
		wp_register_style(
			'turanga-theme-admin-page',
			get_template_directory_uri() . '/assets/css/admin.css',
			array(),
			$version_string
		);

		// Enqueue admin stylesheets.
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
		<div class="wrap turanga__wrap">
			<h1><?php echo esc_html_x( 'Turanga Theme', 'Theme admin page title', 'turanga' ); ?></h1>

			<p class="turanga__theme-description"><?php echo esc_html_x( 'Introducing Turanga - the ultimate WordPress theme for tattoo agencies!', 'Theme admin page text', 'turanga' ); ?></p>

			<p class="turanga__theme-description"><?php echo esc_html_x( 'With its sleek and modern design, Turanga is the perfect choice for any tattoo studio looking to make a bold statement online. This theme is packed with all the features you need to showcase your unique style and attract new clients.', 'Theme admin page text', 'turanga' ); ?></p>

			<p class="turanga__theme-description"><?php echo esc_html_x( 'Turanga\'s fully customizable layout allows you to effortlessly create a website that truly reflects your brand. Plus, with its responsive design, your website will look amazing on any device, ensuring a seamless user experience for your visitors.', 'Theme admin page text', 'turanga' ); ?></p>

			<p class="turanga__theme-description"><?php echo esc_html_x( 'Let Turanga elevate your online presence and attract more clients to your tattoo agency. Get Turanga today and watch your business soar!', 'Theme admin page text', 'turanga' ); ?></p>

			<h2><?php echo esc_html_x( 'Theme settings', 'Theme admin page title', 'turanga' ); ?></h2>

			<p><?php echo esc_html_x( 'To set up Contact Form 7 plugin you can use ', 'Theme admin page text', 'turanga' ); ?><a href="<?php echo esc_url( TURANGA_THEME_GIST_URI ); ?>" target="_blank"><?php echo esc_html_x( ' this code', 'Theme admin page text', 'turanga' ); ?></a></p>

			<p class="submit">
				<a href="<?php echo esc_url( TURANGA_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Theme Homepage', 'Theme admin page button text', 'turanga' ); ?></a>

				<a href="<?php echo esc_url( TURANGA_THEME_LIVE_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Live Preview', 'Theme admin page button text', 'turanga' ); ?></a>
			</p>

			<div class="clear"></div>
		</div>
		<?php
	}

}
