<?php get_header(); ?>

<div class="container py-4">
    <div class="row">

        <!-- Main Content (8 columns) -->
        <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else : ?>

                <p>No content found.</p>

            <?php endif; ?>
        </div>

        <!-- Sidebar (4 columns) -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>