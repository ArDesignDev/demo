<?php get_header(); ?>

<div class="page-content">
<div class="page-header page-header--projects-background">
  <div class="wrapper">
    <div class="page-header--padding">
      <h1 class="page-header__title">Naši projekti</h1>
      <p class="page-header__text">Samo naši rezultati nas lahko pohvalijo! Oglejte si naše reference<br /> v nadaljevanju strani.</p>
    </div>


  </div><!-- /wrapper-->
</div><!-- /page-header-->


  <div class="projects-page last-projects-section">
    <div class="wrapper">
        <div class="projects-page__nav">
            <?php wp_nav_menu(array('theme_location' => 'projects_cat')); ?>

        </div><!-- /nav-->
        <div class="last-projects-section__container">

            <div class="row">
              <?php

              if (have_posts()) :
                 while (have_posts()) : the_post();?>
                   <div class="row__small-6 row__large-4 row__medium-6 load-effect2" id="post-<?php the_ID(); ?>">
                     <a href="<?php echo get_post_meta($post->ID, 'project-link', true); ?>" target="_blank">
                       <div class="last-projects-section__project">

                           <div class="last-projects-section__project__image">
                             <?php the_post_thumbnail(); ?>
                           </div>

                           <div class="last-projects-section__content">
                             <h4 class="last-projects-section__content__title last-projects-section__content--opacity"><?php the_title();?></h4>
                             <div class="last-projects-section__content__subtitle last-projects-section__content--opacity">
                                 <?php the_excerpt(); ?>
                             </div><!-- /_subtitle-->
                           </div>

                     </div><!-- /_project-->
                    </a>
                  </div><!-- /row__medium-4-->

                 <?php endwhile;

                 else :
                    echo '<p>No content found</p>';

                 endif;?>

            </div><!-- /row-->

          </div><!-- /container-->

  </div><!-- /wrapper-->
</div><!-- /services-page-->


</div><!-- /page-content-->
<?php get_footer(); ?>
