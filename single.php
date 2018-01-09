<?php get_header(); ?>

<div class="page-content">

  <div class="page-header page-header--single">
    <div class="wrapper">
      <h2 class="page-header__title page-header__title--small-font"> <?php the_excerpt(); ?></h2>
    </div><!-- /wrapper-->
  </div>

<div class="blog-single">
  <div class="section__angle display-on-deskop">
    <div class="section__angle--upleft section__angle--upleft--less-deg gray-background"></div>
    <div class="section__angle--upright gray-background"></div>
  </div>
    <div class="wrapper">

     <div class="row">
        <div class="blog-page__search-block">
                  <div class="blog-page__search-block__categories">
                    <p class="blog-page__search-block__dropdown">Kategorije <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <?php wp_list_categories( array(
                          'orderby' => 'name',
                          'title_li' => ' '
                      ) ); ?>
                  </div>
              <!--
              <div class="row__small-6">
                  <div class="blog-page__search-block__search">
                      <p><?php get_search_form(); ?></p>
                  </div>
              </div>-->
        </div><!-- /_search-block-->
     </div>
     
      <div class="row">

         <div class="row__medium-9 load-effect2">
            <div class="blog-single__main-content">

              <?php
              if (have_posts()) :
               while (have_posts()) : the_post(); ?>
               <h1 class="blog-single__title"><?php the_title() ?></h1>
              <p class="blog-single__meta"><?php the_time('j. F, Y') ?></p>

               <div class="blog-single__text">
                 <?php the_content(); ?>
               </div>
               <?php endwhile;

               else :
                  echo '<p>No content found</p>';

               endif;  ?>

            </div><!-- / main-content-->
          </div><!-- /medium-8-->

          <div class="row__medium-3 load-effect2">
            <div class="blog-single__sidebar">
              <div class="row row--margin-fix-m">

                <?php
                	$args = array(

                	 	'posts_per_page' => 4,
                	 	'orderby' => 'rand',
                	 	);

                  $topPosts = new WP_Query($args);

                	if ($topPosts->have_posts()) :
                	while ($topPosts->have_posts()) : $topPosts->the_post(); ?>


                       <div class="row__medium-12 row__small-6">
                          <div class="blog-single__sidebar__content">

                            <a href="<?php the_permalink();?>"><div class="blog-single__sidebar__image"> <?php the_post_thumbnail(); ?></div></a>
                            <div class="blog-single__sidebar__text">
                              <a href="<?php the_permalink();?>"><h3 class="blog-single__sidebar__title"><?php the_title();?></h3></a>
                               <span class="blog-single__sidebar__excerpt"><?php the_excerpt(); ?></span>
                            </div>

                         </div><!-- /content-->
                      </div><!-- /medium-12-->

                   <?php
                   endwhile;

                 else:
               		 echo '<p> Ni postov </p>';

                 endif;
                wp_reset_postdata(); ?>

              </div><!-- /row-->
            </div><!-- / sidebar-->
          </div><!-- /medium-3-->

      </div><!-- /row-->

    </div><!--/ wrapper-->
</div><!-- / blog-single-->

</div><!-- /page-content-->
<?php get_footer(); ?>
