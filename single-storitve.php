<?php get_header(); ?>

<div class="page-content">

  <div class="page-header">
    <div class="wrapper">
      <div class="page-header--padding">
          <h1 class="page-header__title page-header__title--smaller"><?php wp_title(' ') ?></h1>
          <span class="page-header__text"> <?php the_excerpt(); ?></span>
      </div>
    </div><!-- /wrapper-->
  </div>

<div class="service-single">
  <div class="section__angle display-on-deskop">
    <div class="section__angle--upleft section__angle--upleft--less-deg gray-background"></div>
  	<div class="section__angle--upright gray-background"></div>
  </div>
    <div class="wrapper">
      <div class="row">
      <a href="http://localhost/demo/aneway/storitve/"><div class="service-single__breadcrum display-on-mobile">< Nazaj na storitve</div></a>
    </div>
      <div class="row">

         <div class="row__medium-9 load-effect2">
            <div class="service-single__main-content">
              <?php
              if (have_posts()) :
               while (have_posts()) : the_post(); ?>
               <!--<h2 class="service-single__title"><?php the_title() ?></h2>-->
               <div class="service-single__text"><?php the_content(); ?></div>
               <?php endwhile;

               else :
                  echo '<p>No content found</p>';

               endif;  ?>

            </div><!-- / main-content-->
          </div><!-- /medium-8-->

          <div class="row__medium-3 load-effect2">
            <div class="blog-single__sidebar">

               <div class="service-single__navigation">
                 <h4> Storitve: </h4>
                 <?php
                 $args = array(
                      'post_type' => 'storitve'
                      );

                    $topPosts = new WP_Query($args);

                    if ($topPosts->have_posts()) :
                    while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                        <a href="<?php the_permalink();?>"><div class="service-single__navigation__item"><?php the_title();?></div></a>

                    <?php endwhile;
                 endif;
                 wp_reset_postdata();  ?>
               </div>

               <div class="service-single__blog-posts">
                 <h4> Preveri naš blog:  </h4>
                <?php
                	$args = array(

                	 	'posts_per_page' => 4,
                	 	'orderby' => 'rand',
                	 	);

                  $topPosts = new WP_Query($args);

                	if ($topPosts->have_posts()) :
                	while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                      <div class="blog-single__sidebar__content">

                        <a href="<?php the_permalink();?>"><div class="blog-single__sidebar__image"> <?php the_post_thumbnail(); ?></div></a>
                        <div class="blog-single__sidebar__text">
                        <a href="<?php the_permalink();?>"><h3 class="blog-single__sidebar__title"><?php the_title();?></h3></a>
                         <span class="blog-single__sidebar__excerpt"><?php the_excerpt(); ?></span>
                       </div>

                     </div><!-- /content-->
                   <?php
                   endwhile;

                 else:
               		 echo '<p> Ni postov </p>';

                 endif;
                wp_reset_postdata(); ?>

              </div>

            </div><!-- / sidebar-->
          </div><!-- /medium-3-->


      </div><!-- /row-->

    </div><!--/ wrapper-->
</div><!-- / blog-single-->

</div><!-- /page-content-->
<?php get_footer(); ?>
