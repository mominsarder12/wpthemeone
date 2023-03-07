<!-- header calling -->
<?php get_header(); ?>
<!-- Blog Start Here -->
<div class="blog fix" id="about">
    <div class="blog-left">
        <h4> category: <?php echo single_cat_title(); ?> </h4>
        
        <?php get_template_part("template-parts/content", "blogs"); ?>

    </div>
    <!-- calling sidebar -->
    <?php get_sidebar(); ?>

</div>
<!-- Blog End Here -->






<!-- footer calling -->
<?php get_footer(); ?>