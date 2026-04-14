<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Full-width header wrapper -->
<header class="text-bg-danger py-3">

    <!-- Inner Bootstrap container for grid -->
    <div class="container">
        <div class="row align-items-center">

            <!-- Logo / Site Title (6 columns) -->
            <div class="col-md-6">
                <h1 class="m-0">
                    <a href="<?php echo home_url(); ?>" class="text-decoration-none text-dark">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            </div>

            <!-- Navigation / Menu (6 columns) -->
            <div class="col-md-6 text-end">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'nav justify-content-end',
                    'container' => false,
                    'fallback_cb' => false
                ));
                ?>
            </div>

        </div>
    </div>

</header>

<main>