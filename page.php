<?php get_header(); ?>

<div class="blogs">
    <div class="blog-left">
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>

    </div>
    <div class="blog-sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</div>


<?php get_footer(); ?>