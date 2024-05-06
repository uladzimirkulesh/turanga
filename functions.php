<?php
/**
 * Turanga functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Turanga
 * @since Turanga 1.0.0
 */

if ( ! function_exists( 'turanga_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_support() {

		// Enqueue editor styles.
		add_editor_style( array(
			'style.css',
			'assets/css/grid.css',
			'assets/css/patterns.css',
			'assets/css/contact-form.css'
		) );

	}

endif;

add_action( 'after_setup_theme', 'turanga_support' );

if ( ! function_exists( 'turanga_scripts' ) ) :

	/**
	 * Enqueue styles and scripts.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_scripts() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register main stylesheet.
		wp_register_style(
			'turanga-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue main stylesheet.
		wp_enqueue_style( 'turanga-style' );

		// Register other stylesheets.
		wp_register_style(
			'turanga-grid',
			get_template_directory_uri() . '/assets/css/grid.css',
			array( 'turanga-style' ),
			$version_string
		);

		wp_register_style(
			'turanga-patterns',
			get_template_directory_uri() . '/assets/css/patterns.css',
			array( 'turanga-style' ),
			$version_string
		);

		// Enqueue other stylesheets.
		wp_enqueue_style( 'turanga-grid' );
		wp_enqueue_style( 'turanga-patterns' );

		// Register plugins stylesheets.
		wp_register_style(
			'turanga-contact-form',
			get_template_directory_uri() . '/assets/css/contact-form.css',
			array( 'turanga-style' ),
			$version_string
		);

		// Enqueue plugins stylesheets.
		wp_enqueue_style( 'turanga-contact-form' );

		// Register global scripts.
		wp_register_script(
			'turanga-global',
			get_template_directory_uri() . '/assets/js/global.js',
			array( 'jquery' ),
			$version_string,
			array(
				'strategy' => 'defer',
				'in_footer' => true
			)
		);

		// Enqueue global scripts.
		wp_enqueue_script( 'turanga-global' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'turanga_scripts' );

if ( ! function_exists( 'turanga_block_styles' ) ) :

	/**
	 * Enqueue block style scripts.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_block_styles() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_script(
			'turanga-block-styles',
			get_theme_file_uri( '/assets/js/block-styles.js' ),
			array(
				'wp-blocks',
				'wp-dom-ready',
				'wp-edit-post',
				'wp-i18n'
			),
			$version_string,
			true
		);

		wp_set_script_translations( 'turanga-block-styles', 'turanga' );

	}

endif;

add_action( 'enqueue_block_editor_assets', 'turanga_block_styles' );

if ( ! function_exists( 'turanga_block_stylesheets' ) ) :

	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_block_stylesheets() {

		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */

		$theme_version  = wp_get_theme( get_template() )->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'turanga-button',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/button.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/button.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/comment-content',
			array(
				'handle' => 'turanga-comment-content',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/comment-content.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/comment-content.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/comments-pagination',
			array(
				'handle' => 'turanga-comments-pagination',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/comments-pagination.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/comments-pagination.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/heading',
			array(
				'handle' => 'turanga-heading',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/heading.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/heading.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/navigation',
			array(
				'handle' => 'turanga-navigation',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/navigation.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/navigation.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-comments-form',
			array(
				'handle' => 'turanga-post-comments-form',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-comments-form.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-comments-form.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-date',
			array(
				'handle' => 'turanga-post-date',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-date.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-date.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-terms',
			array(
				'handle' => 'turanga-post-terms',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-terms.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-terms.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/pullquote',
			array(
				'handle' => 'turanga-pullquote',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/pullquote.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/pullquote.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/query-pagination',
			array(
				'handle' => 'turanga-query-pagination',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/query-pagination.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/query-pagination.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/query',
			array(
				'handle' => 'turanga-query',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/query.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/query.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/quote',
			array(
				'handle' => 'turanga-quote',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/quote.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/quote.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/search',
			array(
				'handle' => 'turanga-search',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/search.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/search.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/separator',
			array(
				'handle' => 'turanga-separator',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/separator.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/separator.css' ),
			)
		);

	}

endif;

add_action( 'init', 'turanga_block_stylesheets' );

if ( ! function_exists( 'turanga_register_block_pattern_categories' ) ) :

	/**
	 * Registers block pattern categories.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return void
	 */
	function turanga_register_block_pattern_categories() {

		$block_pattern_categories = array(
			'turanga-theme' => array( 'label' => esc_html__( 'Turanga Theme', 'turanga' ) ),
			'portfolio' => array( 'label' => esc_html__( 'Portfolio', 'turanga' ) ),
			'page' => array( 'label' => esc_html__( 'Pages', 'turanga' ) )
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Turanga 1.0.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'turanga_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

	}

endif;

add_action( 'init', 'turanga_register_block_pattern_categories', 9 );

if ( ! function_exists( 'turanga_head_meta_tags' ) ) :

	/**
	 * Adds meta tags to head section.
	 *
	 * @since Turanga 1.0.0
	 *
	 * @return html
	 */
	function turanga_head_meta_tags() {
		echo '<meta name="theme-color" content="rgb(16, 16, 16)" />';
	}

endif;

add_action( 'wp_head', 'turanga_head_meta_tags' );

// Load theme admin page file.
require get_template_directory() . '/inc/theme.php';
