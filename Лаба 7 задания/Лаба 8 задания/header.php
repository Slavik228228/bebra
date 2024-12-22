<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/cat-logo1.jpg" alt="Cat Logo">
      <span>Meow World</span>
    </div>
    <div class="header-buttons">
      <button>About Us</button>
      <button>Contact</button>
    </div>
  </header>