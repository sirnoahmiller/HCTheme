<?php get_header(); ?>

<div class="container py-4">
    <div class="row">

        <!-- Sidebar (4 columns) -->
        <div class="col-md-4 text-bg-warning">
            <?php get_sidebar(); ?>
        </div>

        <!-- Main Content (8 columns) -->
        <div class="col-md-8 text-bg-info">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="mb-4">
                    <h1><?php the_title(); ?></h1>
                    <p class="text-muted">
                        Posted on <?php the_date(); ?> by <?php the_author(); ?>
                    </p>
                    <?php the_content(); ?>
                </article>

                <!-- Comments -->
                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>

            <?php endwhile; else : ?>
                <p>No content found.</p>
            <?php endif; ?>

        </div>

    </div>
</div>

<?php get_footer(); ?>