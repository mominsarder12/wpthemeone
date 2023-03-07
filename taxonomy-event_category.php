<?php get_header(); ?>


<div class="container">
    <h1 class="event_heading"><?php echo single_cat_title();?></h1>
    <div class="events">

        <?php
        
        while (have_posts()) {
            the_post();
        ?>
            <div class="single_event">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                <h4><?php the_title(); ?></h4>
                <div class="meta">
                    <ul>
                        <li><i class="far fa-map-marker-alt"><?php the_field('location');  ?></i></li>
                        <li><i class="far fa-calendar-alt"><?php the_field('event_date'); ?></i></li>

                    </ul>
                    
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>

            </div>

        <?php

        }

        ?>


    </div>
</div>



<?php get_footer(); ?>