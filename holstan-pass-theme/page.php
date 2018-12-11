<?php get_header(); ?>

<div class="placemat" id="placemat">
  <!-- //SATELLITE TEXT OUTSIDE OF PLACEMAT  -->
  <div class="satellite About">
    <p class="naviBox--about--satelliteText rotate90back"><a href="/">Home</a></p>
  </div>

  <div class="satellite Staff">
    <p class="naviBox--staff--satelliteText rotate90"><a href="<?php echo get_post_type_archive_link('staff') ?>">Staff</a></p>
  </div>
    <div class="satellite Date">
    <p class="naviBox--date--satelliteText"><?php echo date('jS F Y'); ?></p>
  </div>

  <div class="satellite Gallery">
    <p class="naviBox--Gallery--satelliteText rotate90back"><a href="<?php echo get_post_type_archive_link('gallery') ?>">Gallery</a></p>
  </div>

  <div class="satellite Blog">
    <p class="naviBox--Tours--satelliteText rotate90"><a href="/blog-page">Blog</a></p>
  </div>

  <div class="satellite Events">
    <p class="naviBox--Events--satelliteText rotate90back"><a href="<?php echo get_post_type_archive_link('event') ?>">Events</a></p>
  </div>

  <div class="satellite Contacts">
    <p class="naviBox--Contacts--satelliteText rotate90"><a href="/contact-page/">Contact</a></p>
  </div>

  <h1>How did you get here?!</h1>

</div>

<?php

get_footer();
 ?>
