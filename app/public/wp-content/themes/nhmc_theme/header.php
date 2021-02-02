<html>
<head>
<?php
    wp_head(); 
?>
<!-- PHP FUNCTION TO GET IMAGE PATH TO THEME FOLDERS -->
<?php
if (!defined('THEME_IMG_PATH')) {
  define('THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images');
} 
?>

  <title>NHMC</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
 
</head>

<div class="head-container">
  <div class="head-logo">
    <img src="<?php echo THEME_IMG_PATH; ?>/New-Logo.png"/>
  </div>
</div>

<div class="nav-container">
  <a title="HOME" href="/">HOME</a>
  <a title="NHMC BOD" href="/nhmc-bod">NHMC BOD</a>
  <a title="NHMC PROGRAMS" href="/nhmc-programs">NHMC PROGRAMS</a>
  <a title="SUPPORT" href="/support">SUPPORT</a>
  <a title="BLOG" href="/blog">BLOG</a>
  <a title="CONTACT NHMC" href="index.html#keep-in-touch">CONTACT NHMC</a>
</div>


<body>