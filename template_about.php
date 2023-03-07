<?php
  /*
  *Template name: Template About
   */

  get_header();
?>

        <!-- Page Banner Start Here -->
        <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/page-bannar.jpg');">
            <div class="ab-content">
            <h2 class="ab-heading"><?php echo get_theme_mod('banner_heading'); ?></h2>
            <p class="ab-para"><?php echo get_theme_mod('banner_desc'); ?></p>
            <a class="ab-link" href="<?php echo get_theme_mod('banner_btn_link'); ?>" target="_blank"><?php echo get_theme_mod('banner_btn'); ?></a>
            </div>
        </div>
        <!-- Page Banner End Here -->
        
        <!-- About Start Here -->
        <div class="about fix">
            <div class="about-left">
                <h4>about us</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
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