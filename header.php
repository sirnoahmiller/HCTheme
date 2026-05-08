<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-H2LTFQP0CT"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-H2LTFQP0CT');
	</script>
	
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
								$current_page_id = get_queried_object_id();
								$pages = get_pages();

								foreach ($pages as $page) {
									if ($page->post_name === 'donate') {
										continue;
									}

									$active_class = ((int) $page->ID === (int) $current_page_id) ? ' active' : '';

									echo '<li class="nav-item">';
									echo '<a class="nav-link' . esc_attr($active_class) . '" href="' . esc_url(get_page_link($page->ID)) . '">' . esc_html($page->post_title) . '</a>';
									echo '</li>';
								}
							?>
							
							<?php
								$donate_page = get_page_by_path('donate');
								$donate_active = $donate_page && (int) $donate_page->ID === (int) get_queried_object_id();
								?>

								<?php if ($donate_page) : ?>
									<a
										href="<?php echo esc_url(get_permalink($donate_page->ID)); ?>"
										class="btn <?php echo $donate_active ? 'btn-success' : 'btn-outline-success'; ?>"
									>
										Donate
									</a>
							<?php endif; ?>

                            </li>
                        </ul>

                    </div>
                </nav>
            </div> <!-- End of Navigation / Menu (4 columns) -->

        </div>
    </div>

</header>

<main>