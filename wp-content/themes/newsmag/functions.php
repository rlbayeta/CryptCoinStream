<?php
/**
 * Newsmag functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Newsmag
 */

/**
 * Start Newsmag theme framework
 */

add_filter( 'wp_nav_menu_items', 'add_last_nav_item', 10, 2 );

require_once dirname( __FILE__ ) . '/inc/class-newsmag-autoloader.php';

$newsmag = new Newsmag_Lite();

require_once dirname( __FILE__ ) . '/inc/newsmag-deprecated.php';