<?php

// after setup theme function start here

function wpth_nav_setup()
{
  //theme title support start here
  add_theme_support('title-tag');
  //theme title support end here


  // post image support start here
  add_theme_support('title-tag', 'post-thumbnails', array("books", "post", "events", "services"));
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


// custom post type function included here
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


// todo: adding cpt to admin dashboard
// Add the custom columns to the Event Date post type:
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

// Todo: connect widget file
//widget function calling start here
include('widget-function.php');
//widget function calling end here

// Todo: connect customize file
// customize file required here
require_once(get_theme_file_path('/inc/wpth-customize.php'));

// Todo:connect the js refresh file
// activate code preview js start here
function wpth_customize_live_preview()
{
  wp_enqueue_script(
    'live-js',
    get_template_directory_uri() . '/assets/js/customize.js',
    array('customize-preview'),
    '',
    true
  );
}
add_action('customize_preview_init', 'wpth_customize_live_preview');
// activate code preview js end here


// todo: apply the customize css in the page
// resister header color section start here 
function wpth_customize_css()
{
?>
  <style type="text/css">
    .ab-heading {
      color: <?php echo get_theme_mod('banner_heading_color'); ?> !important
    }

    .ab-para {
      color: <?php echo get_theme_mod('banner_desc_color'); ?> !important
    }

    .ab-link {
      color: <?php echo get_theme_mod('banner_btn_color'); ?> !important
    }
  </style>
<?php
}
add_action('wp_head', "wpth_customize_css");
// resister header color section end here



//todo: create custom meta box for books post type

// to register custom box function start here
function book_meta_box()
{
  add_meta_box(
    'book_meta', //id
    __('Book Meta box', 'wpthtd'), //title
    'books_metabox', //callback function
    'books', //post type
    'normal', //context
    'default'

  );
}
add_action('add_meta_boxes', 'book_meta_box');
// to register custom box function end here

//! create the fields 
function books_metabox()
{
  global $post;
  $author = get_post_meta($post->ID, 'author', true);
  $price = get_post_meta($post->ID, 'price', true);
  $description = get_post_meta($post->ID, 'description', true);
  $select_date = get_post_meta($post->ID, 'select_date', true);
?>
  <p>
    <label for="author">Author Name:</label>
    <input type="text" name="author" id="author" value="<?php echo $author;  ?>">
  </p>
  <p>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" value="<?php echo $price; ?>">
  </p>
  <p>
    <label for="description">description:</label>
    <textarea name="description" id="description" cols="" rows=""><?php echo $description; ?></textarea>
  </p>
  <p>
    <label for="select_date">publish Date</label>
    <select name="select_date" id="select_date">
      <option> --Select-- </option>
      
      <option value="2001" <?php if($select_date == "2001"){echo "selected";} ?>>2001</option>
      <option value="2002" <?php if($select_date == "2002"){echo "selected";} ?> >2002</option>
      <option value="2003" <?php if($select_date == "2003"){echo "selected";} ?> >2003</option>
      <option value="2004"<?php if($select_date == "2004"){echo "selected";} ?> >2004</option>
      <option value="2005" <?php if($select_date == "2005"){echo "selected";} ?> >2005</option>
      <option value="2006" <?php if($select_date == "2006"){echo "selected";} ?> >2006</option>
      <option value="2007" <?php if($select_date == "2007"){echo "selected";} ?> >2007</option>
    </select>
  </p>

<?php

}

// ! upadate or save the filed value
function books_metabox_update()
{
  global $post;
  if (isset($_POST['author'])) {
    update_post_meta($post->ID, 'author', $_POST['author']);
  }


  if (isset($_POST['price'])) {
    update_post_meta($post->ID, 'price', $_POST['price']);
  }

  if (isset($_POST['description'])) {
    update_post_meta($post->ID, 'description', $_POST['description']);
  }
  if (isset($_POST['select_date'])) {
    update_post_meta($post->ID, 'select_date', $_POST['select_date']);
  }
}
add_action('save_post', 'books_metabox_update');
