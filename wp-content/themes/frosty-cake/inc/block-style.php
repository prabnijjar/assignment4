<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage frosty-cake
 * @since frosty-cake 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since frosty-cake 1.0
	 *
	 * @return void
	 */
	function frosty_cake_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'frosty-cake-border',
				'label' => esc_html__( 'Borders', 'frosty-cake' ),
			)
		);

		
	}
	add_action( 'init', 'frosty_cake_register_block_styles' );
}