<div class="blogs">
    <?php
    // if (have_posts()) {
        while (have_posts()) {
            the_post();
        // }
    ?>
        <div class="single-blog">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php echo the_post_thumbnail('medium_large', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
            <div class="blog-meta">
                <a href=""><?php the_author_posts_link(); ?></a>
                <a href=""><?php the_date(); ?></a>
                <a href=""> <?php the_category(); ?></a>
            </div>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">read more</a>
        </div>

    <?php
        wp_reset_postdata();
    }
    ?>



</div>