<?php
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form' ) );
wp_enqueue_script( 'masonry' );
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'masonryInit', get_stylesheet_directory_uri().'/js/masonry-init.js', array( 'masonry', 'jquery' ) );
  function slug_script_masonry( ) {
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'masonry-init', get_template_directory_uri().'/js/masonry-init.js', array( 'masonry' ), null, true );
  }
  add_action( 'wp_enqueue_scripts', 'slug_script_masonry' );
?>