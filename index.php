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
                    <h1 class="display-4">Bem Vindo ba <br /><b>Hope Channel Timor-Leste</b></h1>
                                            
                        <div class="video-wrap">
  <iframe
    src="https://www.youtube.com/embed/QT1md7G8EDA"
    title="YouTube video player"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen>
  </iframe>

  
</div>
                    <div class="row categorylist">
                        <h1 class="mt-3 display-6">Variasaun maka ami nia forsa</h1>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Devosionál</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Labarik</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Evanjelizasaun</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Músika</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Informativu</b>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b> Saúde</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Estudu Bíblia</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Podcast</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Filme</b>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <b>Eskola Sábadu</b>
                                </li>
                            </ul>
                        </div>
                        <h6>Konteúdu Kristaun ba família, oras 24 loron 7 iha semana ida.</h6>
                    </div>
                    
                    
                </div>
                <div class="col-md-6 mb-4">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/HCTL-ColorVertical.png" alt="Hope Channel Timor-Leste" class="img-fluid rounded d-block mx-auto">
                    <p class="lead">Ita-boot nia fonte ba konteúdu ne'ebé hasa'e no inspira iha Timor-Leste. 
                        Ami lori programa oioin ne'ebé promove esperansa, fiar, no valór pozitivu sira.</p>
                    <p class="lead">Lokaliza iha <b>Dili</b> ba mundu tomak!</p>
                  </div>
            </div>
        </div>

        <!-- Sidebar (4 columns) -->
        <div class="col-md-4 text-center">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Suporta Ami!</h4>
                <p>Ajuda ami kontinua fornese konteúdu inspirativu ba povu Timor-Leste. Ita-boot nia 
                    doasaun halo diferensa!</p>
                    <button type="button" class="btn btn-warning btn-lg donate-btn">
    <span class="heart-icon" aria-hidden="true"></span>
    <span>Donate</span>
  </button>
            </div>
            
  
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
