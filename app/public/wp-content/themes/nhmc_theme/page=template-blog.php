<?php
/* Template Name: Blog Page */
get_header();
?>

<?php
$args = array(
  'post_type' => 'post'
);

$post_query = new WP_Query($args); ?>
 <div class="blog-wrapper">
   
   <?php if ($post_query->have_posts()) {
     while ($post_query->have_posts()) {
       $post_query->the_post();
       ?>
      <!-- DISPLAY INFO -->
      <div class="blog-post-wrapper">
        <div class="blog-thumbnail-wrapper">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog-thumbnail' ); } ?>
        </div>
          <h3><?php the_title(); ?></h3>
          <div class="blog-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <div class="blog-button-wrapper">
            <a href="<?php echo the_permalink();?>" class="blog-button">VIEW POST</a>
          </div>
        </div>
      <!-- ____________  -->
  <?php
      wp_reset_postdata();
    }
  }
  ?>
</div>

<?php get_footer(); ?>