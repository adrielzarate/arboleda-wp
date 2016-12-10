<!DOCTYPE html>
<html lang="en" class="first-time">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Arboleda</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <!--[if lte IE9]>
  <link rel="stylesheet" type="text/css" href="css/ie9.css">
  <![endif]-->
</head>
<body <?php body_class(); ?> >

  <!-- Fixed navbar -->
  <header>

    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" id="hmgr-mobile-menu" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="pull-left mobile mobile-home" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/arboleda-logo-mobile.jpg" alt="Arboleda"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'container' => 'ul',
              'menu_class'=> 'nav navbar-nav main-nav',
              'depth' => 2,
              'walker' => new wp_bootstrap_navwalker()
            ));
          ?>

          <div>
            <?php if (function_exists('qts_language_menu') ) qts_language_menu('text'); ?>
          </div>

        </div>
      </div>
    </nav>

  </header>