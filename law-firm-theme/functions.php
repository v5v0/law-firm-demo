<?php
/**
 * Law Firm Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Law_Firm_Theme
 * @since 1.0.0
 */

if ( ! function_exists( 'law_firm_theme_support' ) ) :
	function law_firm_theme_support() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'law_firm_theme_support' );

