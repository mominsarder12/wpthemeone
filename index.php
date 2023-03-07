<!-- header calling -->
<?php get_header(); ?>

<!-- Banner Start Here -->
<div class="banner owl-carousel">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="Banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="Banner">
</div>
<!-- Banner End Here -->

<!-- calling services -->
<?php get_template_part("template-parts/content", "services"); ?>



<!-- Blog Start Here -->
<div id="about" <?php post_class(array("blog","fix") ); ?>>
<div class="search">
    <?php get_search_form(); ?>
</div>
    <div class="blog-left">
        <h4>latest blog</h4>

        <?php get_template_part("template-parts/content", "blogs"); ?>

    </div>
    <!-- calling sidebar -->
    <?php get_sidebar(); ?>

</div>
<!-- Blog End Here -->






<!-- footer calling -->
<?php get_footer(); ?>