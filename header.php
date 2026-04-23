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

            <!-- Logo / Site Title (8 columns) -->
            <div class="col-md-4 text-center text-md-start">
                <a href="<?php echo home_url(); ?>" class="text-decoration-none header-logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_horizontal.png" alt="Logo" class="header-logo-img">
                </a>
            </div>

            <!-- Navigation / Menu (4 columns) -->
            <div class="col-md-8 d-flex justify-content-center">
                <nav class="navbar navbar-light p-0">
                    <div class="justify-content-end w-100" id="navbarMenu">
                        <ul class="navbar-nav">
                            <?php
                            $pages = get_pages();
                            foreach ($pages as $page) {
                                echo '<li class="nav-item"><a class="nav-link" href="' . get_page_link($page->ID) . '">' . $page->post_title . '</a></li>';
                            }
                            ?>
                            <a href="<?php echo home_url(); ?>" class="btn btn-outline-success">Donate</a>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>

</header>

<main>