<?php
/*
  *Template name: Template About
   */

get_header();
?>

<!-- Page Banner Start Here -->
<div class="page-banner" style="background-image: url('<?php echo get_theme_mod('banner_image'); ?>">
    <div class="ab-content">
        <?php
        if (get_theme_mod('checkbox_setting')) {
        ?>
            <h2 class="ab-heading"><?php echo get_theme_mod('banner_heading'); ?></h2>

        <?php
        } ?>
        <p class="ab-para"><?php echo get_theme_mod('banner_desc'); ?></p>
        <a class="ab-link" href="<?php echo get_theme_mod('banner_btn_link'); ?>" target="_blank"><?php echo get_theme_mod('banner_btn'); ?></a>
    <!-- just for check the value for radio and select customizer section -->
        <p><?php echo get_theme_mod('radio_setting'); ?></p>
        <p><?php echo get_theme_mod('select_setting'); ?></p>
        
    </div>
</div>
<!-- Page Banner End Here -->

<!-- About Start Here -->
<div class="about fix">
    <div class="about-left">
        <h4>about us</h4>
        <p>Lorem ipsum dolor sit amen consenter adipisicing elite. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehended soluta officiis minima tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
    </div>
    <div class="about-menu">

        <?php

        dynamic_sidebar("sidebar-1");

        ?>
    </div>
</div>
<!-- About End Here -->
<?php
// footer added
get_footer();
?>