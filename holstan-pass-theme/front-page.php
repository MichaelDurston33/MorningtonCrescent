<?php get_header(); ?>


<div class="backscene"></div>
<div class="scene">
  <div class="cube">
    <div class="cube__face cube__face--front">
      <div class="buttonContainer">
        <p class="clickable">About</p>
      </div>
    </div>
    <div class="cube__face cube__face--back">
      <div class="buttonContainer">
        <p class="clickable">Staff</p>
      </div>
    </div>
    <div class="cube__face cube__face--right">

      <div class="buttonContainer">

        <p class="clickable">Gallery</p>
      </div>
    </div>
    <div class="cube__face cube__face--left">
      <div class="buttonContainer">
        <p class="clickable">Blog</p>
      </div>
    </div>
    <div class="cube__face cube__face--top">
      <div class="buttonContainer">
        <p class="clickable">Events</p>
      </div>
    </div>
    <div class="cube__face cube__face--bottom">
      <div class="buttonContainer">
        <p class="clickable">Contact</p>
      </div>
    </div>
  </div>
</div>

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

  <!-- //END OF SATELLITE TEXT -->
<div class="row">
  <!-- ABOUT -->
  <div class="col-1-of-2">
    <div class="naviBox naviBox--About" id="About">
      <p class="aboutSection">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae laudantium mollitia optio suscipit reprehenderit recusandae sit, voluptatum? Repudiandae cum perspiciatis sint iure, enim ipsum tempora repellat dicta voluptates, sunt unde.</p>
    </div>
  </div>

  <!-- SHOP -->
  <div class="col-1-of-2">
    <div class="naviBox naviBox--Staff">
      <div class="StaffBody" onClick="window.location.href='/staff/'">
        <div class="StaffTile"></div>
        <div class="StaffTile">Staff</div>
        <div class="StaffTile">Staff</div>
        <div class="StaffTile">Staff</div>
        <div class="StaffTile">Staff</div>
      </div>
  <div class="titleTriangleBorder">
    <div class="titleTriangle">
        <h1 class="titleName">Mornington <br> Crescent Architecture</h1>
    </div>
  </div>
    </div>
  </div>
</div>

<!-- END OF FIRST ROW -->
<!-- START OF SECOND ROW -->

<div class="row">
  <!-- GALLERY -->
  <div class="col-1-of-2">
    <div class="naviBox naviBox--Gallery">
      <div class="row">
        <div class="col-1-of-4">
          <div class="backgroundDeco"></div>
        </div>
        <div class="col-3-of-4" onClick="window.location.href='<?php echo get_post_type_archive_link('gallery') ?>'">
          <p class="galleryBody" >
            <p class="galleryText" >Our Gallery ></p>
            <p class="galleryText">Our Gallery ></p>
            <p class="galleryText">Our Gallery ></p>
            <p class="galleryText">Our Gallery ></p>
            <p class="galleryText">Our Gallery ></p>
            <p class="galleryText">Our Gallery ></p>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- BLOG -->

  <div class="col-1-of-2">
      <div class="naviBox naviBox--Tours">
        <?php
        $homepagePosts = new WP_Query(array(
          'post_type' => 'post',
        ));

        while($homepagePosts->have_posts()) {

          $homepagePosts->the_post(); ?>
          <div class="blogPostContainer">
            <div class="blogPost" onclick="window.location.href='<?php echo the_permalink(); ?>'">
              <?php
              echo wp_trim_words(get_the_title(), 4, '') . '  >';
               ?>
            </div>
          </div>
        <?php }
      ?>
    </div>
    </div>

<!-- END OF SECOND ROW -->
<!-- START OF THIRD ROW -->

<div class="row">
  <!-- EVENTS -->
    <div class="col-1-of-2">
      <div class="naviBox naviBox--Events">
        <div class="eventBox">
          <?php
            $today = date('Ymd');
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));

          while($homepageEvents->have_posts()) {

            $homepageEvents->the_post(); ?>

            <div class="event" onClick="window.location.href='<?php the_permalink(); ?>'">
                <div class="eventCirclediv">
                  <?php
                    $eventDate = DateTime :: createFromFormat('d/m/Y', get_field('event_date'));
                    echo $eventDate->format('d M')
                   ?>
                </div>
              <div class="eventText">
                <?php the_title(); ?>
              </div>
            </div>
          <?php }
        ?>
      </div>
    </div>
  </div>

  <!-- CONTACTS -->

      <div class="col-1-of-2">
        <div class="naviBox naviBox--Contacts">
          <div class="emailContainer">
            <h1><i class="fas fa-envelope"></i></h1>
            <h3>info@morningtoncrescentarchitecture.com</h3>
          </div>
          <div class="locationContainer">
            <h1><i class="fas fa-map-marker-alt"></i></h1>
            <h3>Morningtoncrescent, London, UK, NW1 4ER</h3>
          </div>
            <div class="socialMedia">
            <div class="facebook"><i class="fab fa-facebook-f"></i></div>
            <div class="twitter"><i class="fab fa-weixin"></i></div>
            <div class="instagram"><i class="fab fa-instagram"></i></div>
        </div>
        </div>
      </div>
    </div>
</div>
<?php

get_footer();
 ?>
