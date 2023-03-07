<?php

// books function
add_action('init', 'custom_post_book_func');
function custom_post_book_func()
{
    //post type name = books
    $labels = array(
        'name' => _x('books', 'books'),
        'singular_name' => _x('books','books'),
        'add_new' => _x('Add New', 'books'),
        'add_new_item' => _x('Add New books', 'books'),
        'edit_item' => _x('Edit books', 'books'),
        'new_item' => _x('New books', 'books'),
        'view_item' => _x('View books', 'books'),
        'search_items' => _x('Search books', 'books'),
        'not_found' => _x('No books found', 'books'),
        'not_found_in_trash' => _x('No books found in Trash', 'books'),
        'parent_item_colon' => _x('Parent books:', 'books'),
        'menu_name' => _x('books',  'books'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Hi, this is my custom post type.',
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
        'taxonomies' => array('category', 'post_tag', 'page-category'),
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

?>
<?php echo "this is nothing" ; ?>