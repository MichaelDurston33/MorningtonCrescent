<?php
  get_header();
?>

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


  <div class="row">
    <div class="col-1-of-2">
      <div class="halfie">
        <img class="stretchBack" src="<?php echo get_the_post_thumbnail() ?>"
          />
      </div>
    </div>
    <div class="col-1-of-2">
      <div class="halfie">
        <div class="blog">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
              endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>

        </div>
      </div>
    </div>
  </div>


</div>

<?php get_footer(); ?>
