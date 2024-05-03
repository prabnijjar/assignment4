<?php
/**
 * Admin functions.
 *
 * @package Frosty Cake
 */

define('FROSTY_CAKE_SUPPORT',__('https://wordpress.org/support/theme/frosty-cake/','frosty-cake'));
define('FROSTY_CAKE_REVIEW',__('https://wordpress.org/support/theme/frosty-cake/reviews/#new-post','frosty-cake'));
define('FROSTY_CAKE_BUY_NOW',__('https://www.wpradiant.net/products/cake-wordpress-theme/','frosty-cake'));
define('FROSTY_CAKE_LIVE_DEMO',__('https://preview.wpradiant.net/frosty-cake/','frosty-cake'));
define('FROSTY_CAKE_PRO_DOC',__('https://preview.wpradiant.net/tutorial/frosty-cake-blocks-pro/','frosty-cake'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function frosty_cake_admin_menu_page() {

	$frosty_cake_theme = wp_get_theme( get_template() );

	add_theme_page(
		$frosty_cake_theme->display( 'Name' ),
		$frosty_cake_theme->display( 'Name' ),
		'manage_options',
		'frosty-cake',
		'frosty_cake_do_admin_page'
	);

}
add_action( 'admin_menu', 'frosty_cake_admin_menu_page' );

function frosty_cake_admin_theme_style() {
	wp_enqueue_style('frosty-cake-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'frosty_cake_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function frosty_cake_do_admin_page() {

	$frosty_cake_theme = wp_get_theme( get_template() );
	?>
	<div class="frosty-cake-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $frosty_cake_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( FROSTY_CAKE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'frosty-cake' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( FROSTY_CAKE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'frosty-cake' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( FROSTY_CAKE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'frosty-cake' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $frosty_cake_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $frosty_cake_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $frosty_cake_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade to Pro', 'frosty-cake' ); ?></h3>

				<p>
					<?php esc_html_e( 'To gain access to extra theme options and more interesting features, upgrade to pro version.', 'frosty-cake' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( FROSTY_CAKE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro', 'frosty-cake' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'frosty-cake' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'frosty-cake' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'frosty-cake' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'frosty-cake' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'frosty-cake' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( FROSTY_CAKE_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'frosty-cake' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'frosty-cake' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'frosty-cake' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( FROSTY_CAKE_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'frosty-cake' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->

	</div><!-- .wrap -->
	<?php

}