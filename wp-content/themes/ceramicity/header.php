<!doctype html>
<html lang="en-gb">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ceramicity</title>
    <meta name="description" content="Modern and contemporary ceramic design">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/stylesheets/screen.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/stylesheets/print.css'; ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrapper">
      <header class="header">
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() . '/images/ceramicity-logo.png'; ?>" alt="Ceramicity logo" title="Ceramicity">
          </a>
        </div>
        <div class="categories">
          <ul>
            <?php wp_list_categories( 'title_li=' ); ?> 
          </ul>
        </div>
        <div class="archives">
          <h3>Archives</h3>
          <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
            <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
            <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
          </select>
          </ul>
        </div>
        <div class="site-search">
          <?php get_search_form(); ?>
        </div>
        <div class="social-follow">
          <h3>Follow us on:</h3>
          <a href="https://twitter.com/Ceramic_Citi">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
              <title>Follow us on twitter</title>
              <style>.style0{fill: #3E3E3E;}</style>
              <path d="M15 0C6.716 0 0 6.7 0 15c0 8.3 6.7 15 15 15s15-6.716 15-15C30 6.7 23.3 0 15 0z M24.619 9.2 c-0.46 0.488-0.894 1.006-1.399 1.442c-0.296 0.256-0.401 0.494-0.395 0.875c0.074 4.567-3.149 10.041-8.913 11.2 c-2.913 0.588-5.689 0.233-8.29-1.256c-0.076-0.043-0.151-0.088-0.224-0.134c-0.031-0.02-0.057-0.047-0.18-0.153 c2.213 0.2 4.131-0.315 5.853-1.638c-2.139-0.475-3.268-1.339-3.691-2.857c0.557 0 1.1 0 1.6 0 c-2.016-0.828-3.171-2.317-3.054-3.991c0.549 0.2 1.1 0.3 1.7 0.47c0.017-0.029 0.035-0.059 0.052-0.088 c-0.805-0.638-1.388-1.419-1.604-2.433C5.853 9.6 6 8.7 6.5 7.75c2.197 2.6 4.9 4 8.2 4.2 c0.054-0.685 0.019-1.343 0.17-1.955c0.711-2.901 4.376-3.997 6.571-1.98c0.23 0.2 0.4 0.3 0.7 0.2 c0.686-0.25 1.372-0.5 2.085-0.76c-0.264 0.843-0.815 1.487-1.526 2.075c0.218-0.037 0.438-0.064 0.653-0.113 c0.23-0.052 0.456-0.12 0.682-0.19c0.223-0.069 0.443-0.149 0.73-0.247C24.71 9.1 24.7 9.2 24.6 9.217z" class="style0"/>
            </svg>
          </a>
          <a href="">

          </a>
        </div>
      </header>
    <main class="site-content">