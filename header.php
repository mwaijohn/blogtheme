<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo( 'description' );?>">
  <meta name="author" content="">

  <title><?php bloginfo( 'name' )?> | <?php 
      is_front_page() ? bloginfo('description'): wp_title(); ?>
  </title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?> /vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">
  <?php wp_head(  )?>

  <!-- Custom styles for this template -->
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?> /css/blog-post.css" rel="stylesheet">

</head>

<body>
    <?php wp_head( );?>
  <nav nav class="navbar navbar-expand-lg navbar-dark fixed-top" role="navigation" style="background-color: #000000;color:white">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url() ?>">WeCODE</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
