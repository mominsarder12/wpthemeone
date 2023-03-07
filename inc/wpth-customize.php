<?php 
// customize option start here
function wpth_option_customize_register( $wp_customize ) {

  //banner title customize option start here
   $wp_customize -> add_section('banner_section', array(
    'title' => __('Banner Section', 'wpthtd') // for section title
   ));

   //banner heading setting
   $wp_customize -> add_setting('banner_heading',array(
    'default' => __('lorem ipsum','wpthtd'), //for default show
    'transport' => 'postMessage' //for live preview
   ));

  //  banner heading control
   $wp_customize -> add_control('banner_heading_ctrl', array(
    'label' => __('Write Heading','wpthtd'), //for control label
    'type' => 'text', //for text field
    'settings' => 'banner_heading', //for connect with related settings
    "section" => 'banner_section' //for connect with related section
   ));

  // banner title customize option end here

  // banner description start here
  //  banner description setting
  $wp_customize -> add_setting('banner_desc',array(
    'default' => __('default description','wpthtd'), //for default show
    'transport' => 'postMessage' //for live preview
   ));
  //  banner description control 
   $wp_customize -> add_control('banner_desc_ctrl', array(
    'label' => __('Write Banner Description','wpthtd'), //for control label
    'type' => 'textarea', //for text field
    'settings' => 'banner_desc', //for connect with related settings
    "section" => 'banner_section' //for connect with related section
   ));
  // banner description end here

   // banner button start here
   // banner button setting 
   $wp_customize -> add_setting('banner_btn',array(
    'default' => __('default description','wpthtd'), //for default show
    'transport' => 'postMessage' //for live preview
   ));
   //banner button control
   $wp_customize -> add_control('banner_btn_ctrl', array(
    'label' => __('banner button','wpthtd'), //for control label
    'type' => 'text', //for text field
    'settings' => 'banner_btn', //for connect with related settings
    "section" => 'banner_section' //for connect with related section
   ));
   // banner button end here



 }
 add_action( 'customize_register', 'wpth_option_customize_register' );
 // Customize Option End Here


 ?>