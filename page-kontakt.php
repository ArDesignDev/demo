<?php get_header(); ?>

<div class="page-content">
  <div class="page-header">
    <div class="wrapper">
      <div class="page-header--padding">
        <h1 class="page-header__title">Kontakt</h1>
        <p class="page-header__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a <br />
volutpat turpis, non facilisis sem.</p>
      </div>
    </div><!-- /wrapper-->
  </div>



<div class="contact-page">
  <div class="section__angle display-on-deskop">
    <div class="section__angle--upleft section__angle--upleft--less-deg gray-background"></div>
    <div class="section__angle--upright gray-background"></div>
  </div>
  <div class="wrapper load-effect2">

    <?php
    if (have_posts()) :
       while (have_posts()) : the_post();?>

        <?php the_content(); ?>

     <?php endwhile;

       else :
          echo '<p>No content found</p>';

       endif;  ?>

  </div><!-- /wrapper-->
</div><!-- /contact page-->

</div><!-- /page-content-->

<?php get_footer(); ?>
