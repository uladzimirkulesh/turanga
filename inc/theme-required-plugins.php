<?php
/**
 * Register the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @version    2.6.1 for parent theme Turanga
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'turanga_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function turanga_register_required_plugins() {
	$plugins = array(
		array(
			'name'     => esc_html__( 'Contact Form 7', 'turanga' ),
			'slug'     => 'contact-form-7',
			'required' => false,
		)
	);

	tgmpa( $plugins );
}
