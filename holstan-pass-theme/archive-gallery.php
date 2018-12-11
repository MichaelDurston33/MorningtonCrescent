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
  <div class="centerCircle">
    <div class="slider">
    <div class="slider-inner">
        <div class="slider-origin">

            <?php
            $homepagePosts = new WP_Query(array(
              'post_type' => 'gallery',
            ));
            $counter = 0;
            while($homepagePosts->have_posts()) {
              $counter++;
              $homepagePosts->the_post(); ?>
                <div class="slider-item">
                  <?php
                  echo $counter;
                   ?>
                   <div class="sneaky titleSneak"><?php echo the_title(); ?></div>
                   <div class="sneaky contentSneak"><?php echo the_content(); ?></div>
                   <div class="sneaky imageSneak">
                     <?php
                     $image = get_field('banner_image');

                     echo $image;
                        ?>
                   </div>
                </div>
            <?php }
          ?>

        </div>
    </div>
</div>
  </div>

  <div class="row">
    <div class="col-1-of-2">
      <div class="halfie">
        <div class="gallerySlide">

        </div>
      </div>
    </div>
    <div class="divider"></div>
    <div class="col-1-of-2">
      <div class="halfie">
        <div class="galleryInfo blog">

        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
