<?php
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form' ) );

  if (! function_exists('slug_masonry') ) :
  if ( ! is_admin() ) :
  function slug_masonry() {
      wp_enqueue_script('masonry');
      wp_enqueue_script( 'jquery' );
      wp_enqueue_script( 'masonryInit', get_stylesheet_directory_uri().'/js/masonry-init.js', array( 'masonry' ),  null, true );
  }
  add_action( 'wp_enqueue_scripts', 'slug_masonry' );
  endif; //! is_admin()
  endif; //! slug_scripts_masonry exists

  function app() {
    wp_enqueue_script( 'appInit', get_stylesheet_directory_uri() .'/js/app.js', array( 'jquery' ), null, false);
  }
  add_action( 'wp_enqueue_scripts', 'app' );

  function new_excerpt_more($more) {
     global $post;
     return '';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

?>