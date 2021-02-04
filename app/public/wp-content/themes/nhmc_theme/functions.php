<?php 
  function pull_theme_files() {
    wp_enqueue_style('nhmc_main_style', get_stylesheet_uri());
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
    // wp_enqueue_style( 'bod-styles', get_stylesheet_directory_uri().'/bod-styles.css', 'all' );

}
function my_excerpt_length($length){
  return 80;
  }

  add_image_size( 'blog-thumbnail', 460, 324 );



  add_filter('excerpt_length', 'my_excerpt_length');
  add_action('wp_enqueue_scripts', 'pull_theme_files');
  add_theme_support( 'post-thumbnails' );
?>