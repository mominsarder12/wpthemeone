<!-- header calling -->
<?php get_header(); ?>
<!-- Blog Start Here -->
<div class="blog fix" id="about">
    <div class="blog-left">
        <h4> Posts By: <?php the_author(); ?> </h4>
        <div class="author-info">
        <p><?php get_the_author_meta('status'); ?></p>
        <p><?php get_the_author_meta('url'); ?></p>
            <p> Description : <?php the_author_meta('description'); ?></p>
            <?php echo "Email : "; the_author_meta('email'); ?>

        </div>
        <?php get_template_part("template-parts/content", "blogs"); ?>

    </div>
    <!-- calling sidebar -->
    <?php get_sidebar(); ?>

</div>
<!-- Blog End Here -->






<!-- footer calling -->
<?php get_footer(); ?>