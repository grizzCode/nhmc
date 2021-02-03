<?php
/* Template Name: Blog Page */
get_header();
?>

<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
            <!-- DISPLAY INFO -->

            
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>


            <!-- ____________  -->
            <?php
            wp_reset_postdata();
            }
        }
?>

<?php get_footer(); ?>