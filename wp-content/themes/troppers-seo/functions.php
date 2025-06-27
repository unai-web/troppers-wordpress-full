<?php
function troppers_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'troppers_theme_setup');

function troppers_enqueue_scripts() {
  wp_enqueue_style('troppers-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'troppers_enqueue_scripts');
?>