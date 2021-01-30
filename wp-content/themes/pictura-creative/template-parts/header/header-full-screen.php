<header id="masthead" class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 ">
                <div class="site-branding"> <a href="<?php echo site_url(); ?>" class="logo main_logo"
                        style="z-index:9999;">
                        <?php if (get_field("banner") || is_front_page() || is_home()) {?>
                        <img src="<?php echo get_field("logo", "option") ?>" />
                        <?php } else if (is_single() || is_search() || (!get_field("banner"))) {?>
                        <img src="<?php echo get_field("logo", "option") ?>" />
                        <?php } else {?>
                        <img src="<?php echo get_field("logo", "option") ?>" />
                        <?php }?>
                    </a>
                    <a href="<?php echo site_url(); ?>" class="logo sticky_logo"> <img
                            src="<?php echo get_field("sticky_logo", "option") ?>" /> </a>
                </div>
                <!-- .site-branding -->
                <div class="divheader-number"><a class="header-number" href="tel:0281882369">(02) 8188
                        2369</a> 7am-5pm
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-8">
                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <?php esc_html_e('Primary Menu', 'pictura-creative');?>
                    </button>
                    <?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu',
));
?>
                </nav>
                <nav id="site-navigation-mobile" class="main-navigation nav-mobile">
                    <ul id="mobile-menu">
                        <li style="list-style-type:none;padding-top:3px;padding-right: 12px;"><a
                                href="tel:(02) 8188 2369"><img
                                    src="<?php echo site_url() ?>/wp-content/uploads/2020/09/Phone_header@2x.svg"
                                    style="width:76%;"></a>
                        </li>
                        <li style="list-style-type:none;padding-top:5px"><a href="#" class="burger"><img
                                    src="<?php echo site_url() ?>/wp-content/uploads/2020/09/menu-yellow@2x.svg" /></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php echo get_template_part('template-parts/header/inner', 'page-banner'); ?>
