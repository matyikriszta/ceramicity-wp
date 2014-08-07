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
  </head>
  <body>
    <div id="wrapper">
      <header>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . '/images/ceramicity-logo.png'; ?>" alt="Ceramicity logo" title="Ceramicity"></a>
        <div id="categories">
          <?php wp_list_categories( 'title_li=' ); ?> 
        </div>
        <div id="header-right">
          <div id="search">
            <form>
              <input type="text" value="" name="search" placeholder="Search">
            </form>
          </div>
          <div id="social">
            <p>Follow us on:</p>
            <div id="twitter"></div>
            <div id="pinterest"></div>
          </div>
        </div>
      </header>
    <main class="site-content">