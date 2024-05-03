<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage frosty-cake
 * @since frosty-cake 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function frosty_cake_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Frosty_Cake_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Frosty Cake Pro', 'frosty-cake' ),
		'button_text'      => __( 'Upgrade Pro', 'frosty-cake' ),
		'url'              => 'https://www.wpradiant.net/products/cake-wordpress-theme/',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'frosty_cake_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function frosty_cake_custom_control_scripts() {
	wp_enqueue_script( 'frosty-cake-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'frosty_cake_custom_control_scripts' );