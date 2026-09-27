<div class="side-navbar bg-theme py-3 flex-wrap flex-column" id="sidebar">
    <div class="d-md-none d-block text-end p-0">
        <a class="btn border-0 text-white px-3" id="close-btn" role="button" aria-label="Tutup menu"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/></svg></a>
    </div>
    <?php $sitelogo = get_theme_mod('custom_logo'); ?>
    <div class="logo-header text-center">
        <?php if ($sitelogo) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img width="150" class="img-fluid" src="<?php echo esc_url(wp_get_attachment_image_url($sitelogo, 'full')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" loading="lazy">
            </a>
        <?php endif;  ?>
    </div>
    <?php
    wp_nav_menu(
        [
            'theme_location'  => 'sidebar_menu',
            'container_class' => 'sidebar-body-menu',
            'container_id'    => '',
            'menu_class'      => 'nav flex-column',
            'fallback_cb'     => '',
            'menu_id'         => 'sidebar-menu',
            'depth'           => 4,
            'walker'          => new justg_WP_Bootstrap_Navwalker(),
        ]
    );
    ?>
    <div class="d-flex align-items-center justify-content-between m-0 py-2">
        <div class="profile-icons px-2 order-1">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="p-2"><?php echo velocity_toko20_profil(); ?></div>
                <div class="p-2"><?php echo do_shortcode('[wp_store_cart size="16"]'); ?></div>
            </div>
        </div>
    </div>
</div>