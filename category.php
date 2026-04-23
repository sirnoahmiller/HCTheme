<div class="row categorylist">

    <div class="col-6">
        <ul class="list-unstyled">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'devosional', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Devosionál</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'labarik', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Labarik</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'evanjelizasaun', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Evanjelizasaun</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'musica', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Músika</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'informativu', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Informativu</a><?php endif; ?>
            </li>
        </ul>
    </div>

    <div class="col-6">
        <ul class="list-unstyled">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'saude', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Saúde</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'biblia', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Estudu Bíblia</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'podcast', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Podcast</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'filme', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Filme</a><?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php if ( $post = get_page_by_path( 'escola', OBJECT, 'post' ) ) : ?><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Eskola Sábadu</a><?php endif; ?>
            </li>
        </ul>
    </div>

</div>