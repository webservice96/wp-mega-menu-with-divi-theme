<!-- custom mega menu start -->
<?php
$locations = get_nav_menu_locations();
$mega_menu = wp_get_nav_menu_object($locations['amq_mega_menu']);
$mega_menuitems = wp_get_nav_menu_items($mega_menu->term_id);


$logo = ($user_logo = et_get_option('divi_logo')) && !empty($user_logo)
    ? $user_logo
    : $template_directory_uri . '/images/logo.png';

// Get logo image size based on attachment URL.
$logo_size   = et_get_attachment_size_by_url($logo);
$logo_width  = (!empty($logo_size) && is_numeric($logo_size[0]))
    ? $logo_size[0]
    : '93'; // 93 is the width of the default logo.
$logo_height = (!empty($logo_size) && is_numeric($logo_size[1]))
    ? $logo_size[1]
    : '43'; // 43 is the height of the default logo.
?>
<header id="main-header" class="regicorp-mega-header" data-height-onload="<?php echo esc_attr(et_get_option('menu_height', '66')); ?>">
    <div class="clearfix et_menu_container">
        <div class="regicorp-header-nav">
            <div class="regicorp-nav-content-wrapper">
                <div class="regicorp-nav-content">
                    <div class="regicorp-nav-left">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    </div>

                    <!-- navigation start -->
                    <nav role="navigation" id="regicorp-mega-nav" class="nav-menu-wrapper w-nav-menu">
                        <div class="nav-menu-content">
                            <?php if ($mega_menuitems) { ?>
                                <div class="nav-menu josh-test">
                                    <?php
                                    $menu_items_by_parent = array();
                                    foreach ($mega_menuitems as $menu_item) {
                                        $menu_items_by_parent[$menu_item->menu_item_parent][] = $menu_item;
                                    }
                                    ?>

                                    <?php foreach ($mega_menuitems as $menu_item) { ?>

                                        <?php if (isset($menu_items_by_parent[$menu_item->ID])) { ?>
                                            <div class="nav-dropdown w-dropdown">
                                                <div class="nav-dropdown-button w-dropdown-toggle" role="button">
                                                    <div class="nav-link"><?php echo esc_html($menu_item->title); ?></div>
                                                </div>
                                                <!-- dropdown sub menu items start -->
                                                <?php
                                                $submenu_items = $menu_items_by_parent[$menu_item->ID];
                                                ?>
                                                <nav class="nav-dropdown-list w-dropdown-list" id="w-dropdown-list-0">
                                                    <div class="nav-dropdown-inner">
                                                        <div class="nav-dropdown-wrapper is-4-column">
                                                            <?php foreach ($submenu_items as $submenu_item) {
                                                                $shortDesc = get_post_meta($submenu_item->ID, '_menu_amq_short_desc', true);
                                                                $sub_item_1 = get_post_meta($submenu_item->ID, '_amq_sub_menu_item_1', true);
                                                                $sub_item_2 = get_post_meta($submenu_item->ID, '_amq_sub_menu_item_2', true);
                                                                $sub_item_3 = get_post_meta($submenu_item->ID, '_amq_sub_menu_item_3', true);
                                                                $sub_item_color = get_post_meta($submenu_item->ID, '_amq_menu_color', true);

                                                                $card_color = $sub_item_color ? $sub_item_color : '#00f0ff';
                                                            ?>
                                                                <!-- cards start -->
                                                                <div class="card-hover">
                                                                    <a href="<?php echo esc_url($submenu_item->url); ?>" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: <?php echo $card_color; ?>; background-color: <?php echo $card_color; ?>;">
                                                                        <div class="flex vertical align-left gap-s position-relative">
                                                                            <div class="headline xs">
                                                                                <?php echo esc_html($submenu_item->title); ?>
                                                                            </div>

                                                                            <div class="body-small line-height-125 balanced"><?php echo $shortDesc; ?></div>

                                                                            <?php if ($sub_item_1) { ?>
                                                                                <div class="nav-copilot-items">
                                                                                    <div class="pill-icon w-embed">
                                                                                        <?php get_template_part('icons/campaign-svg'); ?>
                                                                                    </div>
                                                                                    <div class="headline xxs"><?php echo esc_html($sub_item_1); ?></div>
                                                                                </div>
                                                                            <?php } ?>

                                                                            <?php if ($sub_item_2) { ?>
                                                                                <div class="nav-copilot-items">
                                                                                    <div class="pill-icon w-embed">
                                                                                        <?php get_template_part('icons/campaign-svg'); ?>
                                                                                    </div>
                                                                                    <div class="headline xxs"><?php echo esc_html($sub_item_2); ?></div>
                                                                                </div>
                                                                            <?php } ?>

                                                                            <?php if ($sub_item_3) { ?>
                                                                                <div class="nav-copilot-items">
                                                                                    <div class="pill-icon w-embed">
                                                                                        <?php get_template_part('icons/campaign-svg'); ?>
                                                                                    </div>
                                                                                    <div class="headline xxs"><?php echo esc_html($sub_item_3); ?></div>
                                                                                </div>
                                                                            <?php } ?>

                                                                        </div>
                                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                                    </a>
                                                                </div>
                                                                <!-- cards end -->
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </nav>
                                            </div>
                                        <?php } elseif ($menu_item->menu_item_parent == 0) { ?>
                                            <div class="nav-dropdown">
                                                <a href="<?php echo esc_url($menu_item->url); ?>" class="nav-link w-nav-link"><?php echo esc_html($menu_item->title); ?></a>
                                            </div>
                                        <?php } ?>

                                    <?php } ?>
                                </div>
                            <?php } else {
                            ?>
                                <span>please select a menu to <a href="<?php echo admin_url('nav-menus.php'); ?>" target="_blank">Designed Mega Menu</a></span>
                            <?php
                            } ?>
                        </div>
                    </nav>
                    <!-- navigation end -->

                    <!-- search form start -->
                    <div class="regicorp-search" style="display: none; margin-top: -88px">
                        <form role="search" method="get" class="regicorp-search-form" action="<?php echo esc_url(home_url('/')); ?>">
                            <?php
                            printf(
                                '<input type="search" class="regicorp-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
                                esc_attr__('Search &hellip;', 'Divi'),
                                get_search_query(),
                                esc_attr__('Search for:', 'Divi')
                            );
                            ?>
                        </form>
                    </div>
                    <!-- search form end -->

                    <div class="regicorp-nav-buttons">
                        <span id="et_search_icon" class="amq-mega-menu-s-icon"></span>
                        <span class="et_close_search_field amq-mega-menu-close-icon" style="display: none; margin-top: -88px"></span>

                        <!-- mobile menu icon -->
                        <span class="mobile_menu_bar regicorp-mobile-menu-icon"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- custom mega menu end -->