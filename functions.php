<?php
function my_theme_enqueue_styles() {
    $parent_style = 'simple_bootstrap_styles';
    wp_enqueue_style( 'simple-bootstrap-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
