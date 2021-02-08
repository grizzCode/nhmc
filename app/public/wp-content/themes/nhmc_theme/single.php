<?php
 get_header();
  while(have_posts()) {
      the_post(); ?>
        <h2 class="single-title"><?php the_title(); ?></h2>
        <h5 class="single-date"><?php the_date()?></h5>
        <div class="single-content">
          <?php the_content(); ?>
        </div>
      <?php 
      }
  get_footer();
?>

<?php  ?>