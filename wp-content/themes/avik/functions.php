<?php

add_theme_support('post-thumbnails');


$post_type_path = get_template_directory() . '/inc/post-types/';


require_once($post_type_path . 'offer.php');
require_once($post_type_path . 'news.php');



if (function_exists('acf_add_options_page')) {

    // Main "Theme Settings" page
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    // General
    acf_add_options_sub_page(array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'General',
        'parent_slug'   => 'theme-general-settings',
    ));

    // Header
    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    // Footer
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}
