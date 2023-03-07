<?php
/*
*Template Name: Template Home
 */
get_header();
?>

<!-- books custom posts -->
<div class="container">
    <h1 class="event_heading">Ashabul kahaf</h1>
    <div class="events">

        <?php
        $args = array(
            "post_type" => "books",
            "posts_per_page" => 3

        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="single_event">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                <h4><?php the_title(); ?></h4>
                <div class="meta">
                    <ul>
                        <li><i class="far fa-map-marker-alt"><?php the_field('location');  ?></i></li>
                        <li><i class="far fa-calendar-alt"><?php the_field('date'); ?></i></li>


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

<!-- services custom posts -->
<div class="container">
    <h1 class="event_heading"> Services custom posts</h1>
    <div class="events">

        <?php
        $args = array(
            "post_type" => "services",
            "posts_per_page" => 3

        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="single_event">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                <h4><?php the_title(); ?></h4>
                <div class="meta">
                    <ul>
                        <li><i class="far fa-map-marker-alt"><?php the_field('location');  ?></i></li>
                        <li><i class="far fa-calendar-alt"><?php the_field('date'); ?></i></li>
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


<!-- events custom posts -->
<div class="container">
    <h1 class="event_heading">Events</h1>
    <div class="events">

        <?php
        $args = array(
            "post_type" => "events",
            "posts_per_page" => 3

        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="single_event">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                <h4><?php the_title(); ?></h4>
                <div class="meta">
                    <ul>
                        <li><i class="far fa-map-marker-alt"><?php the_field('location');  ?></i></li>
                        <li><i class="far fa-calendar-alt"><?php the_field('event_date'); ?></i></li>

                    </ul>
                    <div class="cat">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'event_category');
                        foreach ($terms as $term) {
                            $name = $term -> name ;
                           $link = get_term_link($term);
                        //    $name = $term->name;
                        
                            ?>
                            <a href="<?php echo $link  ?>"><?php echo $name. " ";?> </a>
                            <?php
                        }

                        ?>

                    </div>
                    
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