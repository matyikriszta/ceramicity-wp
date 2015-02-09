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
        <div class="menu-button">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
            <g><path d="M15.055 2.554c4.378 0 8.757-0.001 13.1 0.001c1.326 0 1.7 0.4 1.7 1.691c0.006 0.6 0 1.277-0.007 1.9 c-0.035 0.902-0.444 1.308-1.346 1.373c-0.231 0.017-0.464 0.007-0.696 0.007c-8.583 0-17.165 0.001-25.748 0 c-1.738 0-2.032-0.293-2.032-2.008c0-0.464-0.004-0.928 0.001-1.392c0.013-1.142 0.438-1.581 1.574-1.583 C6.124 2.6 10.6 2.6 15.1 2.554z"/><path d="M14.967 17.524c-4.378 0-8.757 0.001-13.135-0.001c-1.365-0.001-1.744-0.385-1.747-1.759 c-0.002-0.609-0.014-1.218 0.004-1.827c0.026-0.881 0.453-1.318 1.334-1.391c0.202-0.017 0.406-0.008 0.609-0.008 c8.641 0 17.281-0.001 25.9 0c1.666 0 2 0.3 2 1.989c0.001 0.5 0 0.986-0.003 1.5 c-0.027 1.089-0.452 1.513-1.549 1.515C23.897 17.5 19.4 17.5 15 17.524z"/><path d="M14.96 27.446c-4.378 0-8.757 0.001-13.135-0.001c-1.362-0.001-1.737-0.384-1.74-1.764 c-0.002-0.609-0.015-1.218 0.004-1.827c0.027-0.877 0.457-1.314 1.339-1.385c0.202-0.016 0.406-0.008 0.609-0.008 c8.641 0 17.282-0.001 25.9 0c1.637 0 2 0.3 2 1.91c0.001 0.5 0 1.044-0.003 1.6 c-0.027 1.087-0.452 1.506-1.555 1.507C23.891 27.4 19.4 27.4 15 27.446z"/></g>
          </svg>
        </div>
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
          <!-- <h3>Archives</h3> -->
          <span class="custom-dropdown">
            <select class="custom-dropdown-select" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
              <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
              <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
            </select>
          </span>
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
              <path d="M15 0C6.716 0 0 6.7 0 15c0 8.3 6.7 15 15 15s15-6.716 15-15C30 6.7 23.3 0 15 0z M24.619 9.2 c-0.46 0.488-0.894 1.006-1.399 1.442c-0.296 0.256-0.401 0.494-0.395 0.875c0.074 4.567-3.149 10.041-8.913 11.2 c-2.913 0.588-5.689 0.233-8.29-1.256c-0.076-0.043-0.151-0.088-0.224-0.134c-0.031-0.02-0.057-0.047-0.18-0.153 c2.213 0.2 4.131-0.315 5.853-1.638c-2.139-0.475-3.268-1.339-3.691-2.857c0.557 0 1.1 0 1.6 0 c-2.016-0.828-3.171-2.317-3.054-3.991c0.549 0.2 1.1 0.3 1.7 0.47c0.017-0.029 0.035-0.059 0.052-0.088 c-0.805-0.638-1.388-1.419-1.604-2.433C5.853 9.6 6 8.7 6.5 7.75c2.197 2.6 4.9 4 8.2 4.2 c0.054-0.685 0.019-1.343 0.17-1.955c0.711-2.901 4.376-3.997 6.571-1.98c0.23 0.2 0.4 0.3 0.7 0.2 c0.686-0.25 1.372-0.5 2.085-0.76c-0.264 0.843-0.815 1.487-1.526 2.075c0.218-0.037 0.438-0.064 0.653-0.113 c0.23-0.052 0.456-0.12 0.682-0.19c0.223-0.069 0.443-0.149 0.73-0.247C24.71 9.1 24.7 9.2 24.6 9.217z" class="style0"/>
            </svg>
          </a>
          <a href="https://www.pinterest.com/ceramicity/">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
              <title>Follow us on pinterest</title>
              <path d="M9.002 28.511c-5.896-2.405-10.953-9.891-8.017-18.45C3.665 2.2 12.406-1.814 20.2 1.1 c7.739 2.9 11.7 11.6 8.7 19.285c-3.107 7.894-11.421 10.96-17.867 8.879c0.47-1.163 1.002-2.311 1.397-3.504 c0.388-1.175 0.637-2.396 0.953-3.62c2.476 2.3 5.7 2.3 8.363-0.059c2.926-2.557 4.186-8.051 2.586-11.589 c-1.405-3.107-3.958-4.72-7.252-5.209c-2.135-0.317-4.221-0.02-6.22 0.8c-3.777 1.549-6.055 5.118-5.814 9.1 c0.087 1.5 0.5 2.8 1.6 3.876c0.395 0.4 0.9 0.7 1.4 0.977c0.41 0.2 0.7 0.1 0.818-0.384 c0.099-0.371 0.225-0.741 0.265-1.12c0.026-0.247-0.003-0.564-0.139-0.756c-1.64-2.317-1.271-4.649 0.095-6.863 c1.628-2.637 4.165-3.507 7.158-3.2c2.441 0.2 4.3 1.4 4.9 3.859c0.285 1 0.2 2.2 0.2 3.3 c-0.1 1.693-0.63 3.281-1.627 4.679c-0.638 0.894-1.463 1.508-2.592 1.661c-1.808 0.245-3.132-1.162-2.697-2.936 c0.366-1.491 0.81-2.963 1.2-4.448c0.072-0.274 0.084-0.573 0.069-0.858c-0.043-0.835-0.324-1.57-1.14-1.924 c-0.851-0.369-1.666-0.199-2.371 0.395c-0.809 0.681-1.252 1.599-1.279 2.623c-0.024 0.9 0.2 1.8 0.3 2.7 c0.028 0.3 0.1 0.5 0 0.771c-0.622 2.735-1.294 5.459-1.881 8.201C9.062 26.6 9.1 27.6 9 28.511z"/>
            </svg>
          </a>
        </div>
      </header>
    <main class="site-content">