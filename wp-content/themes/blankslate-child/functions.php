<?php
/**
 * Enqueue scripts and styles.
 */
function planty_theme_scripts()
{

	/*Theme Css*/
	wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', [], '1.0');

}
add_action('wp_enqueue_scripts', 'planty_theme_scripts');