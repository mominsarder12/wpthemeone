
<?php
/*
*Template Name: Template Home
 */
get_header(); 
?>

<!-- Banner Start Here -->
<div class="banner owl-carousel">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="Banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="Banner">
</div>
<!-- Banner End Here -->

<!-- calling services -->
<?php get_template_part("template-parts/content", "services"); ?>

<!-- calling bogs -->
<?php get_template_part("template-parts/content", "blogs"); ?>



<!-- footer calling -->
<?php get_footer(); ?>