<!DOCTYPE html>
<html <?php language_attributes();?> >
  <head>
     <meta charset="<?php bloginfo('charset');?>">
	 <meta name="viewport" content="width=device-width">
	 <title> <?php bloginfo('name'); ?> </title>
	 <meta name="description" content="<?php bloginfo('description'); ?>"></meta>
	 <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<header>
	<nav>
  		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
  	</nav>

  	<!--mobile nav-->
  	 <div id="nav-bar">
  	 	<i class="fa fa-bars" aria-hidden="true"></i>
  	 </div><!-- /nav-bar-->

</header>