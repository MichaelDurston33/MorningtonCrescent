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
    <p class="naviBox--Contacts--satelliteText rotate90">Contact</p>
  </div>

<div class="tileContainerStaff">
  <?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
	?>
  <a href="<?php echo the_permalink()?>">
  <div class="tileStaff">
    <h2><?php echo the_title() ?></h2>
    <h3 class="jobTitle"><?php echo get_field('job_title') ?></h3>
    <footer>Joined <?php echo get_field('date_joined') ?></footer>
  </div>
</a>
  <?php
	}
}
?>
</div>

</div>

<?php get_footer(); ?>
