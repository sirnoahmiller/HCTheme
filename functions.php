<?php

function clean_theme_scripts() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'
    );

    // Theme CSS
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'clean_theme_scripts');

// Enable features
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function clean_widgets_init() {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="mb-3">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init', 'clean_widgets_init');