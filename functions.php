<?php
/**
 * _s-child-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

/**
 * Enqueue style
 */
function _s_child_theme_scripts() {
  wp_enqueue_style( '_s-child-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', '_s_child_theme_scripts' );
