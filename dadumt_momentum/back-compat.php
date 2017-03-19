<?php

/**
 * Prevent switching to Momentum dadumt on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Momentum dadumt 3.2
 */
function momentum_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'momentum_upgrade_notice' );
}
add_action( 'after_switch_theme', 'momentum_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Momentum dadumt on WordPress versions prior to 4.7.
 *
 * @since Momentum dadumt 3.2
 *
 * @global string $wp_version WordPress version.
 */
function momentum_upgrade_notice() {
	$message = sprintf( __( 'Momentum dadumt requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'momentum' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Momentum dadumt 3.2
 *
 * @global string $wp_version WordPress version.
 */
function momentum_customize() {
	wp_die( sprintf( __( 'Momentum dadumt requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'momentum' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'momentum_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Momentum dadumt 3.2
 *
 * @global string $wp_version WordPress version.
 */
function momentum_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Momentum dadumt requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'momentum' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'momentum_preview' );
