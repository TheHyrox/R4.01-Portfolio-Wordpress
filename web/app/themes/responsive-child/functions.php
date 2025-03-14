<?php
function responsive_child_enqueue_styles() {
    wp_enqueue_style('responsive-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('responsive-child-style', get_stylesheet_directory_uri() . '/style.css', ['responsive-parent-style']);
}
add_action('wp_enqueue_scripts', 'responsive_child_enqueue_styles');

require_once get_stylesheet_directory() . '/cpt-portfolio.php';