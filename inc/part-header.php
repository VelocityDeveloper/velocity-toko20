<div class="container p-0 header-top">
    <div class="row bg-theme align-items-center justify-content-md-end px-2 m-0">
        <div class="col-md-10 kontak-seller text-end py-2 p-0"><?php echo velocity_toko20_kontak('btn btn-sm btn-link', false); ?></div>
        <div class="col-md-2 py-2 px-1">
            <form action="<?php echo esc_url(get_post_type_archive_link('store_product') ?: home_url('/')); ?>" class="d-flex float-end bg-white rounded-1" method="get" style="max-width:300px;" role="search">
                <input class="form-control form-control-sm px-2 py-1 h-auto rounded-start border-0" style="font-size: 12px;" type="text" name="s" placeholder="Cari.." aria-label="Cari produk" value="<?php echo esc_attr(get_search_query()); ?>">
                <input type="hidden" name="post_type" value="store_product">
                <button type="submit" class="border-0 btn bg-dark btn-sm py-1 h-auto rounded-0 rounded-end border-0" aria-label="Cari">
                    <?php echo str_replace('<svg ', '<svg class="text-white" ', velocity_toko20_ikon('cari')); ?>
                </button>
            </form>
        </div>
    </div>
</div>
<div class="container py-3 p-0">
    <nav id="main-nav" class="navbar navbar-expand-md d-block navbar-light p-0" aria-labelledby="main-nav-label">

        <h2 id="main-nav-label" class="screen-reader-text">
            <?php esc_html_e('Main Navigation', 'justg'); ?>
        </h2>

        <button class="navbar-toggler p-0 text-start text-white w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
            <span class="navbar-toggler-icon pe-2"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!-- The WordPress Menu goes here -->
            <?php
            wp_nav_menu(
                [
                    'theme_location'  => 'primary',
                    'container_class' => 'offcanvas-body',
                    'container_id'    => '',
                    'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
                    'fallback_cb'     => '',
                    'menu_id'         => 'main-menu',
                    'depth'           => 4,
                    'walker'          => new justg_WP_Bootstrap_Navwalker(),
                ]
            );
            ?>
        </div><!-- .offcanvas -->
    </nav>
</div>