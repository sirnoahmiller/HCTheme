<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Support us!</h4>
    <p>
        Help us continue to provide inspiring content for the people of Timor-Leste.
        Your donation makes a difference!
    </p>

    <?php $donate_page = get_page_by_path('donate'); ?>

    <?php if ($donate_page) : ?>
        <a href="<?php echo esc_url( get_permalink($donate_page->ID) ); ?>" class="btn btn-warning btn-lg donate-btn">
            <span class="heart-icon" aria-hidden="true"></span>
            <span>Donate</span>
        </a>
    <?php endif; ?>

</div>