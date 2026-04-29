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

// Add favicon + Apple touch icons
function mytheme_favicons() {
    $favicon_path = get_stylesheet_directory_uri() . '/assets/img/favicon';  // ← change only this line if needed
    ?>
    <!-- Basic favicon -->
    <link rel="icon" href="<?php echo $favicon_path; ?>/favicon.ico" sizes="any">
    <link rel="icon" href="<?php echo $favicon_path; ?>/favicon.svg" type="image/svg+xml">
    
    <!-- Standard sizes -->
    <link rel="icon" href="<?php echo $favicon_path; ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="<?php echo $favicon_path; ?>/favicon-16x16.png" sizes="16x16">
    
    <!-- Apple Touch Icons (iPhone/iPad) -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon_path; ?>/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo $favicon_path; ?>/apple-touch-icon-167.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $favicon_path; ?>/apple-touch-icon-152.png">
    
    <!-- Manifest (PWA support) -->
    <link rel="manifest" href="<?php echo $favicon_path; ?>/site.webmanifest">
    
    <!-- Windows tiles -->
    <meta name="msapplication-TileColor" content="#0A213E">
    <meta name="msapplication-TileImage" content="<?php echo $favicon_path; ?>/mstile-150x150.png">
    <?php
}
add_action('wp_head', 'mytheme_favicons');