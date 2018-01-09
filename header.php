<!DOCTYPE html>
<html <?php language_attributes();?> >
  <head>
     <meta charset="<?php bloginfo('charset');?>">
	 <meta name="viewport" content="width=device-width">
	 <title> <?php bloginfo('name'); ?> </title>
	 <meta name="description" content="<?php bloginfo('description'); ?>"></meta>
	 <?php wp_head(); ?>
  </head>

<body id="topPage" <?php body_class(); ?> onload="loadFunction()">


<header class="site-header">

    <div class="site-header__container">
      <!--mobile nav-->
      <div class="site-header__menu-icon-wrapper">
        <div class="site-header__menu-icon">
              <div class="site-header__menu-icon__middle"></div>
        </div>
      </div>

      <div class="wrapper">
        <!--header image-->
        <a class="site-header__header-title" href="<?php echo home_url(); ?>"><strong>Infinity</strong></a>
        <!--nav-->
      	<nav class="primary-nav">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
      </div>
    </div> <!-- /site-header__container-->


</header>

<!-- Back to top -->
<a href="#topPage">
<button class="back-to-top" id="toTop">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
</button>
</a>

<!-- Loading page -->
<div class="load-screen">
  <div class="loader">
    <div class="inner one"></div>
    <div class="inner two"></div>
    <div class="inner three"></div>
  </div>
</div>
