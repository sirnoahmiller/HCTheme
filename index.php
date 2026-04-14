<?php get_header(); ?>

<!-- Full-width dark background -->
<div class="full-width-wrapper text-bg-dark min-vh-100 py-4 w-100">

    <div class="container">
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
            <div class="col-md-4 text-bg-light p-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>