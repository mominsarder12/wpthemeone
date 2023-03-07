<?php get_header(); ?>
<div class="single_post_view">
<?php get_sidebar(); ?>
    <div class="content">
        <img src="<?php the_post_thumbnail_url() ?>" alt="">
        <h4 class="post_view_title"> <?php the_title(); ?> </h4>
        <p><?php the_excerpt(); ?></p>
    </div>
    
</div>



<?php get_footer(); ?>