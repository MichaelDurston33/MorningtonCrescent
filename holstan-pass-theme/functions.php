<?php

function loadFiles() {
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyBqMrtWfG-GmbUXzMrE0-UFZo7DsH1dLhM', NULL, '1.0', true);
  wp_enqueue_script('main-university-js', get_theme_file_uri('./js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('mainStyling', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'loadFiles');

function fakeFeatures() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size( 'custom-size', 220, 180, true );
}

add_action('after_setup_theme', 'fakeFeatures');

function MapKey($api) {
  $api['key'] = "AIzaSyBqMrtWfG-GmbUXzMrE0-UFZo7DsH1dLhM";
  return $api;
}

add_filter('acf/fields/google_map/api', 'MapKey');
