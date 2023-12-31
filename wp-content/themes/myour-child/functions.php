<?php
/**
 * myour-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myour-child
 */

/**
 * Enqueue styles.
 */


if ( ! function_exists( 'myour_child_stylesheets' ) ) {

    function myour_child_stylesheets() {
        $parenthandle = 'myour-style';
        $theme = wp_get_theme();

        wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get('Version'));
        wp_enqueue_style( 'myour-child-style', get_stylesheet_uri(), array( $parenthandle ), $theme->get('Version'));
    }
    add_action( 'wp_enqueue_scripts', 'myour_child_stylesheets' );

}