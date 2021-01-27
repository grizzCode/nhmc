<?php 
  function pull_theme_files() {
    wp_enqueue_style('nhmc_main_style', get_stylesheet_uri());
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
  }

  add_action('wp_enqueue_scripts', 'pull_theme_files');

?>