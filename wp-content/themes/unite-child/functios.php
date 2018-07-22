<?php
/*
	Theme Name:   Unite Child
	Theme URI:	  http://colorlib.com/wp/unite-child
	Description:  Unite Child Theme
	Author:       Sartaj
	Author URI:   http://example.com
	Template:     unite
	Version:      1.0.0
	License:      GNU General Public License v2 or later
	License URI:  http://www.gnu.org/licenses/gpl-2.0.html
	Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
	Text Domain:  unite-child
*/

function my_theme_enqueue_styles() {

    $parent_style = 'unite-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>