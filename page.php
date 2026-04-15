<?php get_header(); ?>

<div class="container py-4">
    <div class="row">

        <!-- Sidebar (4 columns) -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

        <!-- Main Content (8 columns) -->
        <div class="col-md-8">
            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

            <?php endwhile; ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>