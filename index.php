<?php get_header(); ?>

<div class="site-banner">
    <div class="site-banner__inner"></div>
</div>

<div class="container py-4">
    <div class="row">

        <!-- Main Content (8 columns) -->
        <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="mb-4">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                </article>

            <?php endwhile; endif; ?>
        </div>

        <!-- Sidebar (4 columns) -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>