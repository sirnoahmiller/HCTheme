<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Full-width header wrapper -->
<header class="py-3">

    <!-- Inner Bootstrap container for grid -->
    <div class="container">
        <div class="row align-items-center">

            <!-- Logo / Site Title (6 columns) -->
            <div class="col-md-4">
                <a href="<?php echo home_url(); ?>" class="text-decoration-none header-logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="header-logo-img">
                </a>
            </div>

            <!-- Navigation / Menu (6 columns) -->
            <div class="col-md-8 header-nav">
                <?php
                wp_list_pages(array(
                    'title_li' => '',
                    'menu_class' => 'header-nav-list',
                    'echo' => true
                ));
                ?>
            </div>

        </div>
    </div>

</header>

<main>