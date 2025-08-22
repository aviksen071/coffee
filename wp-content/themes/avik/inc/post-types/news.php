<?php
add_action('init', 'news_register');

function news_register()
{
  $labels = array(
    'name' => _x('News', 'post type general name'),
    'singular_name' => _x('News Item', 'post type singular name'),
    'add_new' => _x('Add New', 'news item'),
    'add_new_item' => __('Add New News Item'),
    'edit_item' => __('Edit News Item'),
    'new_item' => __('New News Item'),
    'view_item' => __('View News Item'),
    'search_items' => __('Search News'),
    'not_found' => __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-format-aside',
    'rewrite' => array('slug' => 'news', 'with_front' => false),
    'capability_type' => 'post',
    'hierarchical' => false, // ✅ should be false
    'has_archive' => true,   // ✅ important for archive
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
  );

  register_post_type('news', $args);

  // ✅ Use a unique taxonomy slug (avoid 'news')
  register_taxonomy("news_category", array("news"), array(
    "hierarchical" => true,
    "label" => "News Categories",
    "singular_label" => "News Category",
    "rewrite" => array('slug' => 'news-category', 'with_front' => false)
  ));
}
