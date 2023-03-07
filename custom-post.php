<?php
// custom post type books start here;
add_action('init', 'custom_post_book_func');
function custom_post_book_func()
{
    //post type name = books
    $labels = array(
        'name' => _x('books', 'wpthtd'),
        'singular_name' => _x('books','wpthtd'),
        'add_new' => _x('Add New', 'wpthtd'),
        'add_new_item' => _x('Add New books', 'wpthtd'),
        'edit_item' => _x('Edit books', 'wpthtd'),
        'new_item' => _x('New books', 'wpthtd'),
        'view_item' => _x('View books', 'wpthtd'),
        'search_items' => _x('Search books', 'wpthtd'),
        'not_found' => _x('No books found', 'wpthtd'),
        'not_found_in_trash' => _x('No books found in Trash', 'wpthtd'),
        'parent_item_colon' => _x('Parent books:', 'wpthtd'),
        'menu_name' => _x('Books',  'wpthtd'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Hi, this is my custom post type.',
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
        // 'taxonomies' => array('category', 'post_tag', 'page-category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type('books', $args);
}


// custom post type services start here
add_action('init', 'custom_post_type_func');
function custom_post_type_func()
{
    //post type name = services
    $labels = array(
        'name' => _x('Services', 'wpthtd'),
        'singular_name' => _x('services', 'wpthtd'),
        'add_new' => _x('Add New', 'wpthtd'),
        'add_new_item' => _x('Add New services', 'wpthtd'),
        'edit_item' => _x('Edit services', 'wpthtd'),
        'new_item' => _x('New services', 'wpthtd'),
        'view_item' => _x('View services', 'wpthtd'),
        'search_items' => _x('Search services', 'wpthtd'),
        'not_found' => _x('No services found', 'wpthtd'),
        'not_found_in_trash' => _x('No services found in Trash', 'wpthtd'),
        'parent_item_colon' => _x('Parent services:', 'wpthtd'),
        'menu_name' => _x('Services', 'wpthtd'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Hi, this is my custom post type.',
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
        // 'taxonomies' => array('category', 'post_tag', 'page-category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type('services', $args);
}


// custom post type events start here
add_action('init', 'custom_post_event_func');
function custom_post_event_func()
{
    //post type name = events
    $labels = array(
        'name' => _x('events', 'wpthtd'),
        'singular_name' => _x('events','wpthtd'),
        'add_new' => _x('Add New', 'wpthtd'),
        'add_new_item' => _x('Add New events', 'wpthtd'),
        'edit_item' => _x('Edit events', 'wpthtd'),
        'new_item' => _x('New events', 'wpthtd'),
        'view_item' => _x('View events', 'wpthtd'),
        'search_items' => _x('Search events', 'wpthtd'),
        'not_found' => _x('No events found', 'wpthtd'),
        'not_found_in_trash' => _x('No events found in Trash', 'wpthtd'),
        'parent_item_colon' => _x('Parent events:', 'wpthtd'),
        'menu_name' => _x('Events',  'wpthtd'),
        
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Hi, this is my custom post type.',
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
        // 'taxonomies' => array('category', 'post_tag', 'page-category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type('events', $args);
}

?>