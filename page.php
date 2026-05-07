<?php get_header(); ?>

<div class="container py-4">
    <div class="row">
		
		<div class="col-md-8">

			<?php if (is_page('hope-kids')) : ?>

				<div class="row">
					<div class="col-md-6">
						<div>Column 1</div>
					</div>
					<div class="col-md-6">
						<div>Column 2</div>
					</div>
				</div>

			<?php else : ?>

				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

			<?php endif; ?>

		</div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
