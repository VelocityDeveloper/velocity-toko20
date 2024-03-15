<div class="side-navbar bg-theme py-3 flex-wrap flex-column" id="sidebar">
    <div class="d-md-none d-block text-end p-0">
        <a class="btn border-0 text-white px-3" id="close-btn"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
    <?php $sitelogo = velocitytheme_option('custom_logo'); ?>
    <div class="logo-header text-center">
        <?php if ($sitelogo) : ?>
            <a href="<?php echo get_home_url(); ?>">
                <img width="150px" src="<?php echo wp_get_attachment_image_url($sitelogo, 'full'); ?>" alt="Site Logo" loading="lazy">
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
                <div class="p-2"><?php echo do_shortcode('[profile]'); ?></div>
                <div class="p-2"><?php echo do_shortcode('[cart]'); ?></div>
            </div>
        </div>
    </div>
</div>