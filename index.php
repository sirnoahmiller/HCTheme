<?php get_header(); ?>

<div class="site-banner">
    <div class="site-banner__inner"></div>
</div>

<div class="container py-4">
    <div class="row">
        <!-- Main Content (8 columns) -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h1 class="display-4">
                        Bem Vindo ba <br />
                        <b>Hope Channel Timor-Leste</b>
                    </h1>

                    <div class="row">
                        <div class="col-4">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/HCTL-ColorVertical.png"
                                alt="Welcome Image"
                                class="img-fluid mt-3">
                        </div>

                        <div class="col-8 mt-3">
                            <p class="lead text-secondary">
                                Ita-boot nia fonte ba konteúdu ne'ebé hasa'e no inspira iha Timor-Leste.
                                Ami lori programa oioin ne'ebé promove esperansa, fiar, no valór pozitivu sira.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">

                    <div class="text-center">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner5.jpg"
                        alt="Welcome Image"
                        class="img-fluid mb-4">

                    </div>

                    <h6 class="display-6">Konteúdu Kristaun ba família, oras 24 loron 7 iha semana ida.</h6>
                    <?php get_template_part( 'category' ); ?>

                </div>
            </div>
        </div>

        <!-- Sidebar (4 columns) -->
        <div class="col-md-4 text-center">
            <?php get_template_part( 'donate' ); ?>
            <?php get_template_part( 'programs' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>