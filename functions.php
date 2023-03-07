<?php
require_once(get_theme_file_path('/inc/wpth-customize.php'));
// after setup theme function start here

function wpth_nav_setup()
{
  //theme title support start here
  add_theme_support('title-tag');
  //theme title support end here


  // post image support start here
  add_theme_support('title-tag','post-thumbnails', array("books", "post", "events", "services"));
  // post image support end here


  //theme textdomain start here
  load_theme_textdomain("wpthtd");
  //theme textdomain end here


  // register theme menu start here
  register_nav_menus(array(
    "main-menu" => __("Header Menu", "wpthtd"),
    "footer-menu" => __("footer Menu", "wpthtd"),
    "mobile-menu" => __("Mobile Menu", "wpthtd")
  ));
  // register theme menu end here

}
add_action("after_setup_theme", "wpth_nav_setup");
// after setup theme function end here



//  calling style and script start here
function wpthone_scripts()
{

  // font awesome CSS
  wp_enqueue_style('wpth_fontawesome', get_template_directory_uri() . '//assets/css/owl.carousel.min.css', array(), '5.15.3', "all");

  // owl carousel default CSS
  wp_enqueue_style("wpth_owl_default", get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), "2.3.4", "all");

  // owl carousel CSS
  wp_enqueue_style("wpth_owl_min", get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), "2.3.4", "all");

  // main CSS
  wp_enqueue_style("wpth_main", get_template_directory_uri() . '/assets/css/style.css', array(), "1.0.0", "all");

  //responsive CSS
  wp_enqueue_style("wpth_responsive", get_template_directory_uri() . '/assets/css/responsive.css', array(), "1.0.0", "all");

  // theme css
  wp_enqueue_style('wpth_theme_style', get_stylesheet_uri());


  // awl carousel jquery
  wp_enqueue_script('wpth_awl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array("jquery"), '2.3.4', true);

  // awl active jquery
  wp_enqueue_script('wpth_awl_active', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'wpthone_scripts');

//  calling style and script end here

// activate code preview js start here
function wpth_customize_live_preview(){
  wp_enqueue_script(
    'live-js', get_template_directory_uri().'/assets/js/customize.js',array('customize-preview'), '', true
  );
}
  add_action('customize_preview_init', 'wpth_customize_live_preview');
// activate code preview js end here



// register main sidebar start here
function wpth_register_widgets()
{
  register_sidebar(array(
    'name'          => __('Main Sidebar', 'wpthtd'),
    'id'            => 'sidebar-1',
    'description'   => __('our main sidebar.', 'wpthtd'),
    'before_widget' => '<div class="single-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}
add_action("widgets_init", "wpth_register_widgets");
// register main sidebar end here


// custom post type function including here
include('custom-post.php');



/**
 * Register a 'genre' taxonomy for post type 'book'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function events_taxonomy()
{
  register_taxonomy('event_category', 'events', array(
    'label'        => __('Event Category', 'wpthtd'),
    'rewrite'      => array('slug' => 'event-category'),
    'hierarchical' => true,
    'public'       => true
  ));
}
add_action('init', 'events_taxonomy');


// adding  admin column start here
function add_acf_columns($columns)
{
  return array_merge($columns, array(
    'location' => __('Location'),
    'event_date'   => __('Event Date')
  ));
}
add_filter('manage_events_posts_columns', 'add_acf_columns');
// adding  admin column end here



// Add columns to post type CPT start here
function hosting_custom_column($column, $post_id)
{
  switch ($column) {
    case 'location':
      echo get_post_meta($post_id, 'location', true);
      break;
    case 'event_date':
      echo get_post_meta($post_id, 'event_date', true);
      break;
  }
}
add_action('manage_events_posts_custom_column', 'hosting_custom_column', 10, 2);
//  Add columns to post type CPT end here


//widget function calling start here
include('widget-function.php');
//widget function calling end here


