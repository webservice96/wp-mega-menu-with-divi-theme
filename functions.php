<?php
/*
 * This is the child theme for Divi theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action('wp_enqueue_scripts', 'divi_child_enqueue_styles');
function divi_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/**
 * register the mega menu
 *
 * @return void
 */
function regicorp_register_custom_mega_menus()
{
    register_nav_menus(
        array(
            'amq_mega_menu' => __('Designed Mega Menu', 'divi'),
        )
    );
}
add_action('init', 'regicorp_register_custom_mega_menus');

function regicorp_enqueue_child_scripts()
{
    // Enqueue parent theme stylesheet first
    wp_enqueue_style('amq-mega-menu-responsive', get_stylesheet_directory_uri() . '/assets/css/mega-menu-responsive.css', null, time());
    wp_enqueue_style('amq-mega-menu', get_stylesheet_directory_uri() . '/assets/css/mega-menu.css', null, time());
    wp_enqueue_script('amq-mega-menu-js', get_stylesheet_directory_uri() . '/assets/js/amq-mega-menu.js', ['jquery'], time(), true);
}
add_action('wp_enqueue_scripts', 'regicorp_enqueue_child_scripts');


require_once get_theme_file_path() . '/inc/menu-metabox/menu-metabox.php';
