<?php get_header(); ?>

<div class="page-content">
  <div class="page-header page-header--info-pages">
    <div class="wrapper">
      <h1 class="page-header__title"><?php wp_title(' ') ?></h1>
    </div><!-- /wrapper-->
  </div>

<div class="info-pages">
  <div class="section__angle display-on-deskop">
    <div class="section__angle--upleft section__angle--upleft--less-deg"></div>
    <div class="section__angle--upright"></div>
  </div>
  <div class="wrapper">
    <?php
    if (have_posts()) :
       while (have_posts()) : the_post();?>

        <?php the_content(); ?>

     <?php endwhile;

       else :
          echo '<p>No content found</p>';

       endif;  ?>

  </div><!-- /wrapper-->
</div><!-- /info-pages-->

</div><!-- /page-content-->


<?php get_footer(); ?>
