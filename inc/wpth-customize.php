<?php
// customize option start here
function wpth_option_customize_register($wp_customize)
{

  //banner title customize option start here
  $wp_customize->add_section('banner_section', array(
    'title' => __('Banner Section', 'wpthtd') // for section title
  ));

  //banner heading setting
  $wp_customize->add_setting('banner_heading', array(
    'default' => __('lorem ipsum text', 'wpthtd'), //for default show
    'transport' => 'postMessage' //for live preview
  ));

  //  banner heading control
  $wp_customize->add_control('banner_heading_ctrl', array(
    'label' => __('Write Heading', 'wpthtd'), //for control label
    'type' => 'text', //for text field
    'settings' => 'banner_heading', //for connect with related settings
    "section" => 'banner_section' //for connect with related section
  ));

  // banner title customize option end here

  // banner description start here
  //  banner description setting
  $wp_customize->add_setting('banner_desc', array(
    'default' => __('default description', 'wpthtd'), //for default show
    'transport' => 'postMessage' //for live preview
  ));
  //  banner description control 
  $wp_customize->add_control('banner_desc_ctrl', array(
    'label' => __('Write Banner Description', 'wpthtd'), //for control label
    'type' => 'textarea', //for text field
    'settings' => 'banner_desc', //for connect with related settings
    "section" => 'banner_section' //for connect with related section
  ));
  // banner description end here

  // banner button start here
  // banner button setting 
  $wp_customize->add_setting('banner_btn', array(
    'default' => __('default description', 'wpthtd'), //for default show
    'transport' => 'postMessage' //for live preview
  ));
  //banner button control
  $wp_customize->add_control('banner_btn_ctrl', array(
    'label' => __('Write Button text', 'wpthtd'), //for control label
    'type' => 'text', //for text field
    'settings' => 'banner_btn', //for connect with related settings
    "section" => 'banner_section' //for connect with related section
  ));
  // banner button end here


  //banner button link start here
  // banner button setting 
  $wp_customize->add_setting('banner_btn_link', array(
    'default' => 'google.com', //for default show
    'transport' => 'postMessage' //for live preview
  ));
  //banner button link control
  $wp_customize->add_control('banner_btn_link_ctrl', array(
    'label' => __('Button Link', 'wpthtd'), //for control label
    'type' => 'text', //for text field
    'settings' => 'banner_btn_link', //for connect with related settings
    "section" => 'banner_section' //for connect with related section
  ));
  // banner button link end here

  //header color setting
  $wp_customize->add_setting('banner_heading_color', array(
    'default'   => '#333',
    // 'transport' => 'postMessage',
  ));
  // header color control
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'banner_heading_color', array(
    'label'      => __('Heading Color', 'wpthtd'),
    'settings'   => 'banner_heading_color',
    'section'    => 'banner_section'
  )));

  //description color setting
  $wp_customize->add_setting('banner_desc_color', array(
    'default'   => '#fff',
    // 'transport' => 'postMessage',
  ));
  //description color control
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'banner_desc_color', array(
    'label'      => __('Description Color', 'wpthtd'),
    'settings'   => 'banner_desc_color',
    'section'    => 'banner_section'
  )));

  //btn color setting
  $wp_customize->add_setting('banner_btn_color', array(
    'default'   => '#fff',
    // 'transport' => 'postMessage',
  ));
  //btn color control
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'banner_btn_color', array(
    'label'      => __('Button Color', 'wpthtd'),
    'settings'   => 'banner_btn_color',
    'section'    => 'banner_section'
  )));

  //section background image part start here
  $wp_customize->add_setting('banner_image', array(
    'default'           => '',
    // 'transport' => 'postMessage',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'banner_image_ctrl',
    array(
      'label'    => __('Upload Banner image', 'wpthtd'),
      'section'  => 'banner_section',
      'settings' => 'banner_image',
      'button_labels' => array(
        'select' => 'Select Back Image',
        'remove' => 'Remove Back Image',
        'change' => 'Change Back Image'
      )
    )
  ));

  //section background image part start here

  //checkbox customize start here

  $wp_customize->add_section('checkbox_section', array(
    'title' => __('Checkbox Section', 'wpthtd') // for section title
  ));
  // checkbox setting 
  $wp_customize->add_setting('checkbox_setting', array(
    'default' => 1, //for default show
    // 'transport' => 'postMessage' //for live preview
  ));
  //checkbox control
  $wp_customize->add_control('checkbox_ctrl', array(
    'label' => __('Show heading', 'wpthtd'), //for control label
    'type' => 'checkbox', //for checkbox field
    'settings' => 'checkbox_setting', //for connect with related settings
    "section" => 'checkbox_section' //for connect with related section
  ));

  //check box customize end here

  // radio button setting 
  $wp_customize->add_setting('radio_setting', array(
    'transport' => 'refresh' //for live preview
    // 'default' => 1, //for default show
  ));
  //radio button control
  $wp_customize->add_control('radio_setting_ctrl', array(
    'label' => __('Services Columns', 'wpthtd'), //for control label
    'type' => 'radio', //for checkbox field
    'settings' => 'radio_setting', //for connect with related settings
    "section" => 'checkbox_section', //for connect with related section
    'choices' => array(
      'red' => __('red','wpthtd'),
      'green' => __('green','wpthtd'),
      'blue' => __('blue','wpthtd'),

    )
  ));

  // radio button setting 
  $wp_customize->add_setting('select_setting', array(
    'transport' => 'refresh' //for live preview
    // 'default' => 1, //for default show
  ));
  //radio button control
  $wp_customize->add_control('select_setting_ctrl', array(
    'label' => __('select options', 'wpthtd'), //for control label
    'type' => 'select', //for checkbox field
    'settings' => 'select_setting', //for connect with related settings
    "section" => 'checkbox_section', //for connect with related section
    'choices' => array(
      'Dhaka' => __('dhaka','wpthtd'),
      'Rangpur' => __('rangpur','wpthtd'),
      'Dinajpur' => __('dinajpur','wpthtd'),
      'Rajshahi' => __('rajshahi','wpthtd'),
      'choice' => __('choice','wpthtd')

    )
  ));

  // partial refreshing for heading
  $wp_customize -> selective_refresh -> add_partial('banner_heading_selective',array(
    'selector' => '.ab-content h2',
    'settings' => 'banner_heading',
    'section' => "banner_section",
    'render_callback' => function(){
      return get_theme_mod('banner_heading');
    }

  ));

  // partial refreshing for description
  $wp_customize -> selective_refresh -> add_partial('banner_desc_selective',array(
    'selector' => '.ab-content .ab-para',
    'settings' => 'banner_desc',
    'section' => "banner_section",
    'render_callback' => function(){
      return get_theme_mod('banner_desc');
    }

  ));

  // partial refreshing for description
  $wp_customize -> selective_refresh -> add_partial('banner_btn_selective',array(
    'selector' => '.ab-content .ab-link',
    'settings' => 'banner_btn',
    'section' => "banner_section",
    'render_callback' => function(){
      return get_theme_mod('banner_btn');
    }

  ));

}
add_action('customize_register', 'wpth_option_customize_register');
 // Customize Option End Here
