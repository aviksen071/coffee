<?php

add_action('init', 'work_register');

function work_register()
{

  $labels = array(
    'name' => _x('Offer', 'post type general name'),
    'singular_name' => _x('Offer Item', 'post type singular name'),
    'add_new' => _x('Add New', 'work item'),
    'add_new_item' => __('Add New Offer Item'),
    'edit_item' => __('Edit Offer Item'),
    'new_item' => __('New Offer Item'),

    'view_item' => __('View Offer Item'),
    'search_items' => __('Search Offer'),
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
    'menu_icon' => 'dashicons-smiley',
    'rewrite' => array('slug' => 'offers', 'with_front' => false),
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
  );

  register_post_type('offers', $args);

  register_taxonomy("categories", array("offers"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Category", "rewrite" => array('slug' => 'offers', 'with_front' => false)));
}
