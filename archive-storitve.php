<?php get_header(); ?>

<div class="page-content">

<div class="page-header">
  <div class="wrapper">
    <div class="page-header--padding">
      <h1 class="page-header__title">Storitve</h1>
      <p class="page-header__text">Za vas izdelomo spletno stran z unikatnim dizajnom in uporabniško izkušnjo, ki bo navdušila vaše stranke. <span class="display-text-on-deskop">Vse skupaj prenesemo v spletno okolje Wordpress.</span></p>
    </div>
  </div><!-- /wrapper-->
</div><!-- /page-header-->


<div class="services-page">
  <div class="section__angle display-on-deskop">
    <div class="section__angle--upleft section__angle--upleft--less-deg"></div>
  	<div class="section__angle--upright"></div>
  </div>

  <div class="wrapper">
    <div class="row">
      <?php

      if (have_posts()) :
         while (have_posts()) : the_post();?>
           <div class="row__small-6 load-effect2 equal-heights" id="post-<?php the_ID(); ?>">
             <a href="<?php the_permalink();?>">
               <div class="services-page__post">
                 <div class="row">

                   <div class="row__xsmall-4">
                     <div class="services-page__image">
                       <?php $thumbnail_id    = get_post_thumbnail_id($post->ID);
                       $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));?>
                       <img class="b-lazy"
                       src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
                       data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                       alt="<?php if ($thumbnail_image && isset($thumbnail_image[0])) {echo $thumbnail_image[0]->post_excerpt;}?>"/>
                     </div>
                   </div><!-- /xsmall-4-->

                   <div class="row__xsmall-8">
                     <div class="services-page__content">
                       <h4 class="services-page__content__title"><?php the_title();?></h4>
                       <div class="services-page__content__text">
                           <?php the_excerpt(); ?>
                       </div>
                       <button class="btn btn--red btn--small btn--small-text">Izvedi več</button>
                     </div>
                   </div><!-- /xsmall-8-->

                 </div><!-- /row-->

             </div><!-- /_post-->
            </a>
          </div><!-- /row__medium-4-->

         <?php endwhile;

         else :
            echo '<p>No content found</p>';

         endif;?>

    </div><!-- /row-->

  </div><!-- /wrapper-->
</div><!-- /services-page-->


</div><!-- /page-content-->
<?php get_footer(); ?>
