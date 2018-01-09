<?php get_header(); ?>

<div class="page-content">
  <div class="page-header">
    <div class="wrapper">
      <h1 class="page-header__title">Storitve</h1>
      <p class="page-header__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum eget quam eu condimentum. <br />
         viverra diam et tristique pulvinar. Phasellus rutrum aliquet ultricies. </p>
    </div><!-- /wrapper-->
  </div>

  <h2>hey hey</h2>


  <?php

  if (have_posts()) :
     while (have_posts()) : the_post();

     endwhile;

     else :
        echo '<p>No content found</p>';

     endif;

  ?>


</div><!-- /page-content-->
<?php get_footer(); ?>
