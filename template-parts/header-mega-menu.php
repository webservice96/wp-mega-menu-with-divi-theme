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
<!-- <pre>
	<?php // print_r($menuitems); 
    ?>
</pre> -->
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

                    <nav role="navigation" id="regicorp-mega-nav" class="nav-menu-wrapper w-nav-menu">
                        <div class="nav-menu-content">
                            <div class="nav-menu josh-test">

                                <div class="nav-dropdown w-dropdown">
                                    <div class="nav-dropdown-button w-dropdown-toggle" role="button">
                                        <div class="nav-link">Features</div>
                                    </div>
                                    <nav class="nav-dropdown-list w-dropdown-list" id="w-dropdown-list-0">
                                        <div class="nav-dropdown-inner">
                                            <div class="nav-dropdown-wrapper is-4-column">

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Company<br />
                                                                Knowledge
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Company<br />
                                                                Knowledge
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                            </div>
                                        </div>
                                    </nav>
                                </div>

                                <div class="nav-dropdown w-dropdown">
                                    <div class="nav-dropdown-button w-dropdown-toggle" role="button">
                                        <div class="nav-link">Corporation</div>
                                    </div>
                                    <nav class="nav-dropdown-list w-dropdown-list" id="w-dropdown-list-0">
                                        <div class="nav-dropdown-inner">
                                            <div class="nav-dropdown-wrapper is-4-column">

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Corp
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Company<br />
                                                                Knowledge
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                            </div>
                                        </div>
                                    </nav>
                                </div>

                                <div class="nav-dropdown w-dropdown">
                                    <div class="nav-dropdown-button w-dropdown-toggle" role="button">
                                        <div class="nav-link">Team</div>
                                    </div>
                                    <nav class="nav-dropdown-list w-dropdown-list" id="w-dropdown-list-0">
                                        <div class="nav-dropdown-inner">
                                            <div class="nav-dropdown-wrapper is-4-column">

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Ins Team
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Company<br />
                                                                Knowledge
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                            </div>
                                        </div>
                                    </nav>
                                </div>

                                <div class="nav-dropdown">
                                    <a href="#" class="nav-link w-nav-link">Enterprise</a>
                                </div>

                                <div class="nav-dropdown">
                                    <a href="#" class="nav-link w-nav-link">Bussiness</a>
                                </div>

                                <div class="nav-dropdown w-dropdown">
                                    <div class="nav-dropdown-button w-dropdown-toggle" role="button">
                                        <div class="nav-link">Fillings</div>
                                    </div>
                                    <nav class="nav-dropdown-list w-dropdown-list" id="w-dropdown-list-0">
                                        <div class="nav-dropdown-inner">
                                            <div class="nav-dropdown-wrapper is-4-column">

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Ins Team
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Company<br />
                                                                Knowledge
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                            </div>
                                        </div>
                                    </nav>
                                </div>

                                <div class="nav-dropdown w-dropdown">
                                    <div class="nav-dropdown-button w-dropdown-toggle" role="button">
                                        <div class="nav-link">Branding</div>
                                    </div>
                                    <nav class="nav-dropdown-list w-dropdown-list" id="w-dropdown-list-0">
                                        <div class="nav-dropdown-inner">
                                            <div class="nav-dropdown-wrapper is-4-column">

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Ins Team
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #00f0ff; background-color: #00f0ff">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Al-Content
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #3cf7a2; background-color: #9dfbd1;">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Company<br />
                                                                Knowledge
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ffcc29; background-color: #ffcc29">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Feature Four Ready
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                                <!-- cards start -->
                                                <div class="card-hover">
                                                    <a href="/features/company-knowledge" class="regicorp-mega-card is-homepage is-1 w-inline-block" style="border-color: #ec6fab; background-color: #ec6fab">
                                                        <div class="flex vertical align-left gap-s position-relative">
                                                            <div class="headline xs">
                                                                Team Access
                                                            </div>
                                                            <div class="body-small line-height-125 balanced">Tap into a central nervous system for all your content</div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                            <div class="nav-copilot-items">
                                                                <div class="pill-icon w-embed">
                                                                    <?php get_template_part('icons/campaign-svg'); ?>
                                                                </div>
                                                                <div class="headline xxs">Brand Voice &amp; Style Guide</div>
                                                            </div>

                                                        </div>
                                                        <div class="colorful-card-gradient pointer-none"></div>
                                                    </a>
                                                </div>
                                                <!-- cards end -->

                                            </div>
                                        </div>
                                    </nav>
                                </div>

                                <div class="nav-dropdown">
                                    <a href="#" class="nav-link w-nav-link">Contact</a>
                                </div>

                            </div>
                        </div>
                    </nav>

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