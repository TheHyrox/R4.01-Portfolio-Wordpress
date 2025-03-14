<?php
function create_portfolio_cpt() {
    $labels = array(
        'name' => 'Portfolios',
        'singular_name' => 'Portfolio',
        'menu_name' => 'Portfolios',
        'name_admin_bar' => 'Portfolio',
    );

    $args = array(
        'label' => 'Portfolio',
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');