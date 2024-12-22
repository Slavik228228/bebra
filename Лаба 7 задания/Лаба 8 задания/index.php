<?php get_header(); ?>

<section class="slider">
  <button class="slider-arrow left-arrow">❮</button>
  <div class="slides">
    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/cat1.jpeg" alt="Cat 1"></div>
    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/cat2.jpeg" alt="Cat 2"></div>
    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/cat3.jpeg" alt="Cat 3"></div>
  </div>
  <button class="slider-arrow right-arrow">❯</button>
</section>

<section class="info-section">
  <img src="<?php echo get_template_directory_uri(); ?>/cat4.jpeg" alt="Cat Info Image">
  <div class="info-text">
    <h2>Why Cats?</h2>
    <p>Cats are amazing companions and bring joy to millions of people around the world. Learn more about their unique behaviors and loving nature.</p>
    <button>Learn More</button>
  </div>
</section>

<section class="gallery">
  <div class="gallery-item">
    <img src="<?php echo get_template_directory_uri(); ?>/cat5.jpeg" alt="Cat 5">
  </div>
  <div class="gallery-item">
    <img src="<?php echo get_template_directory_uri(); ?>/cat6.jpeg" alt="Cat 6">
  </div>
  <div class="gallery-item">
    <img src="<?php echo get_template_directory_uri(); ?>/cat7.jpeg" alt="Cat 7">
  </div>
  <div class="gallery-item">
    <img src="<?php echo get_template_directory_uri(); ?>/cat8.jpeg" alt="Cat 8">
  </div>
  <p>Choose one from us.</p>
  <div><button>See More</button></div>
</section>

<?php get_footer(); ?>