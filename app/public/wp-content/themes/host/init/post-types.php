<?php

// add_action('init', 'register_blog_post_type');
// function register_blog_post_type()
// {
//     register_post_type('blog', [
//         'label' => 'blog',
//         'labels' => array(
//             'name' => 'blog',
//             'singular_name' => 'blog',
//             'menu_name' => 'blog',
//             'all_items' => 'All blog',
//             'add_new' => 'Add blog',
//             'add_new_item' => 'Add blog',
//             'edit' => 'Edit blog',
//             'edit_item' => 'Edit blog',
//             'new_item' => 'New blog',
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author'),
//         'rewrite' => array('slug' => 'blog'),
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-businessperson',
//         'show_in_rest' => true,
//         'taxonomies' => array('tag'),
//     ]);

//     register_taxonomy('tag', ['blog'], [
//         'label' => 'Tags',
//         'labels' => [
//             'name' => 'Tags',
//             'singular_name' => 'Tag',
//             'search_items' => 'Search Tag',
//             'all_items' => 'All Tags',
//             'view_item ' => 'View Tags',
//             'parent_item' => 'Parent Tags',
//             'parent_item_colon' => 'Parent Tags:',
//             'edit_item' => 'Edit Tag',
//             'update_item' => 'Update Tag',
//             'add_new_item' => 'Add New Tag',
//             'new_item_name' => 'New Tag Name',
//             'menu_name' => 'Tags',
//             'back_to_items' => '← Back to Tags',
//         ],
//         'description' => '',
//         'public' => true,
//         'hierarchical' => true,
//         'rewrite' => true,
//         'capabilities' => array(),
//         'meta_box_cb' => 'post_categories_meta_box',
//         'show_admin_column' => true,
//         'show_in_rest' => null,
//         'rest_base' => null
//     ]);
// }
// add_action('init', 'register_portfolio_post_type');
// function register_portfolio_post_type()
// {
//     register_post_type('portfolio', [
//         'label' => 'portfolio',
//         'labels' => array(
//             'name' => 'portfolio',
//             'singular_name' => 'portfolio',
//             'menu_name' => 'portfolio',
//             'all_items' => 'All portfolio',
//             'add_new' => 'Add portfolio',
//             'add_new_item' => 'Add portfolio',
//             'edit' => 'Edit portfolio',
//             'edit_item' => 'Edit portfolio',
//             'new_item' => 'New portfolio',
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author'),
//         'rewrite' => array('slug' => 'portfolio'),
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-businessperson',
//         'show_in_rest' => true,
//         'taxonomies' => array('type'),
//     ]);

//     register_taxonomy('type', ['portfolio'], [
//         'label' => 'type',
//         'labels' => [
//             'name' => 'type',
//             'singular_name' => 'type',
//             'search_items' => 'Search type',
//             'all_items' => 'All type',
//             'view_item ' => 'View type',
//             'parent_item' => 'Parent type',
//             'parent_item_colon' => 'Parent type:',
//             'edit_item' => 'Edit type',
//             'update_item' => 'Update type',
//             'add_new_item' => 'Add New type',
//             'new_item_name' => 'New type Name',
//             'menu_name' => 'type',
//             'back_to_items' => '← Back to type',
//         ],
//         'description' => '',
//         'public' => true,
//         'hierarchical' => true,
//         'rewrite' => true,
//         'capabilities' => array(),
//         'meta_box_cb' => 'post_categories_meta_box',
//         'show_admin_column' => true,
//         'show_in_rest' => null,
//         'rest_base' => null
//     ]);
// }
