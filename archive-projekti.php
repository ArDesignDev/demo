<?php get_header(); ?>

<div class="page-content">
<div class="page-header">
  <div class="wrapper">
    <div class="page-header--padding">
      <h1 class="page-header__title">Naši projekti</h1>
      <p class="page-header__text">Samo naši rezultati nas lahko pohvalijo! Oglejte si naše reference <br />v nadaljevanju strani.</p>
    </div>


  </div><!-- /wrapper-->
</div><!-- /page-header-->


  <div class="projects-page last-projects-section">
    <div class="section__angle display-on-deskop">
      <div class="section__angle--upleft section__angle--upleft--less-deg"></div>
    	<div class="section__angle--upright"></div>
    </div>
    <!-- LAST PROJECTS -->
    <section id="last-projects" class="section last-projects-section">
        <div class="wrapper">

          <div class="last-projects-section__nav">
            <ul>
              <li class="last-projects-section__menu last-projects-section__menu--active" data-panelid="panel1">Vsi projekti</li>
              <li class="last-projects-section__menu" data-panelid="panel2">Dizajn</li>
              <li class="last-projects-section__menu" data-panelid="panel3">Izdelava</li>
              <li class="last-projects-section__menu" data-panelid="panel4">Optimizacija</li>
              <li class="last-projects-section__menu" data-panelid="panel5">Obnova</li>
            </ul>
          </div>

          <div class="last-projects-section__container last-projects-section__container--active" id="panel1">
                <div class="row">

                  <?php
                   $args = array(

                     'posts_per_page' => 12,
                     'post_type' => 'projekti',
                     );

                   $topPosts = new WP_Query($args);

                   if ($topPosts->have_posts()) :
                   while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                          <div id="post-<?php the_ID(); ?>"  <?php post_class('row__small-6 row__large-4 row__medium-6 load-effect2'); ?>>

                            <a href="<?php echo get_post_meta($post->ID, 'project-link', true); ?>" target="_blank">
                              <div class="last-projects-section__project">

                                  <div class="last-projects-section__project__image">
                                    <?php $thumbnail_id    = get_post_thumbnail_id($post->ID);
                                    $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));?>
                                    <img class="b-lazy"
                                    src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
                                    data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="<?php if ($thumbnail_image && isset($thumbnail_image[0])) {echo $thumbnail_image[0]->post_excerpt;}?>"/>
                                  </div>

                                  <div class="last-projects-section__content">
                                    <h4 class="last-projects-section__content__title last-projects-section__content--opacity"><?php the_title();?></h4>
                                    <div class="last-projects-section__content__subtitle last-projects-section__content--opacity">
                                      <p> <?php if(get_post_meta($post->ID, 'subtitle')) :?>
                                                  <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
                                       <?php endif; ?></p>
                                    </div><!-- /_subtitle-->
                                  </div>

                            </div><!-- /_project-->
                           </a>

                         </div><!-- /row__medium-4-->

                    <?php
                    endwhile;

                  else:
                    echo '<p> Ni postov </p>';
                  endif;
                  wp_reset_postdata();  ?>

                </div><!-- /row-->
          </div><!-- /container-->

          <div class="last-projects-section__container" id="panel2">
                <div class="row">

                  <?php
                   $args = array(

                     'posts_per_page' => 12,
                     'post_type' => 'projekti',
                     'tax_query' => array(
                          array(
                            'taxonomy' => 'projekti-kategorije',
                            'field'    => 'slug',
                            'terms'    => 'design',
                          ),
                        ),
                     );

                   $topPosts = new WP_Query($args);

                   if ($topPosts->have_posts()) :
                   while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                          <div class="row__small-6 row__large-4 row__medium-6" id="post-<?php the_ID(); ?>">

                            <a href="<?php echo get_post_meta($post->ID, 'project-link', true); ?>" target="_blank">
                              <div class="last-projects-section__project">

                                  <div class="last-projects-section__project__image">
                                    <?php the_post_thumbnail(); ?>
                                  </div>

                                  <div class="last-projects-section__content">
                                    <h4 class="last-projects-section__content__title last-projects-section__content--opacity"><?php the_title();?></h4>
                                    <div class="last-projects-section__content__subtitle last-projects-section__content--opacity">
                                      <p> <?php if(get_post_meta($post->ID, 'subtitle')) :?>
                                                  <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
                                       <?php endif; ?></p>
                                    </div><!-- /_subtitle-->
                                  </div>

                            </div><!-- /_project-->
                           </a>

                         </div><!-- /row__medium-4-->

                    <?php
                    endwhile;

                  else:
                    echo '<p> Ni postov </p>';
                  endif;
                  wp_reset_postdata();  ?>

                </div><!-- /row-->
          </div><!-- /container-->

          <div class="last-projects-section__container" id="panel3">
                <div class="row">

                  <?php
                   $args = array(

                     'posts_per_page' => 12,
                     'post_type' => 'projekti',
                     'tax_query' => array(
                          array(
                            'taxonomy' => 'projekti-kategorije',
                            'field'    => 'slug',
                            'terms'    => 'izdelava',
                          ),
                        ),
                     );

                   $topPosts = new WP_Query($args);

                   if ($topPosts->have_posts()) :
                   while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                          <div class="row__small-6 row__large-4 row__medium-6" id="post-<?php the_ID(); ?>">

                            <a href="<?php echo get_post_meta($post->ID, 'project-link', true); ?>" target="_blank">
                              <div class="last-projects-section__project">

                                  <div class="last-projects-section__project__image">
                                    <?php the_post_thumbnail(); ?>
                                  </div>

                                  <div class="last-projects-section__content">
                                    <h4 class="last-projects-section__content__title last-projects-section__content--opacity"><?php the_title();?></h4>
                                    <div class="last-projects-section__content__subtitle last-projects-section__content--opacity">
                                      <p> <?php if(get_post_meta($post->ID, 'subtitle')) :?>
                                                  <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
                                       <?php endif; ?></p>
                                    </div><!-- /_subtitle-->
                                  </div>

                            </div><!-- /_project-->
                           </a>

                         </div><!-- /row__medium-4-->

                    <?php
                    endwhile;

                  else:
                    echo '<p> Ni postov </p>';
                  endif;
                  wp_reset_postdata();  ?>

                </div><!-- /row-->
          </div><!-- /container-->


          <div class="last-projects-section__container" id="panel4">
                <div class="row">

                  <?php
                   $args = array(

                     'posts_per_page' => 12,
                     'post_type' => 'projekti',
                     'tax_query' => array(
                          array(
                            'taxonomy' => 'projekti-kategorije',
                            'field'    => 'slug',
                            'terms'    => 'optimizacija',
                          ),
                        ),
                     );

                   $topPosts = new WP_Query($args);

                   if ($topPosts->have_posts()) :
                   while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                          <div class="row__small-6 row__large-4 row__medium-6" id="post-<?php the_ID(); ?>">

                            <a href="<?php echo get_post_meta($post->ID, 'project-link', true); ?>" target="_blank">
                              <div class="last-projects-section__project">

                                  <div class="last-projects-section__project__image">
                                    <?php the_post_thumbnail(); ?>
                                  </div>

                                  <div class="last-projects-section__content">
                                    <h4 class="last-projects-section__content__title last-projects-section__content--opacity"><?php the_title();?></h4>
                                    <div class="last-projects-section__content__subtitle last-projects-section__content--opacity">
                                      <p> <?php if(get_post_meta($post->ID, 'subtitle')) :?>
                                                  <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
                                       <?php endif; ?></p>
                                    </div><!-- /_subtitle-->
                                  </div>

                            </div><!-- /_project-->
                           </a>

                         </div><!-- /row__medium-4-->

                    <?php
                    endwhile;

                  else:
                    echo '<p> Ni postov </p>';
                  endif;
                  wp_reset_postdata();  ?>

                </div><!-- /row-->
          </div><!-- /container-->


          <div class="last-projects-section__container" id="panel5">
                <div class="row">

                  <?php
                   $args = array(

                     'posts_per_page' => 12,
                     'post_type' => 'projekti',
                     'tax_query' => array(
                          array(
                            'taxonomy' => 'projekti-kategorije',
                            'field'    => 'slug',
                            'terms'    => 'obnova',
                          ),
                        ),
                     );

                   $topPosts = new WP_Query($args);

                   if ($topPosts->have_posts()) :
                   while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                          <div class="row__small-6 row__large-4 row__medium-6" id="post-<?php the_ID(); ?>">

                            <a href="<?php echo get_post_meta($post->ID, 'project-link', true); ?>" target="_blank">
                              <div class="last-projects-section__project">

                                  <div class="last-projects-section__project__image">
                                    <?php the_post_thumbnail(); ?>
                                  </div>

                                  <div class="last-projects-section__content">
                                    <h4 class="last-projects-section__content__title last-projects-section__content--opacity"><?php the_title();?></h4>
                                    <div class="last-projects-section__content__subtitle last-projects-section__content--opacity">
                                      <p> <?php if(get_post_meta($post->ID, 'subtitle')) :?>
                                                  <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
                                       <?php endif; ?></p>
                                    </div><!-- /_subtitle-->
                                  </div>

                            </div><!-- /_project-->
                           </a>

                         </div><!-- /row__medium-4-->

                    <?php
                    endwhile;

                  else:
                    echo '<p> Ni projektov </p>';
                  endif;
                  wp_reset_postdata();  ?>

                </div><!-- /row-->
          </div><!-- /container-->


        </div><!-- /wrapper-->
    </section>
</div><!-- /services-page-->


</div><!-- /page-content-->
<?php get_footer(); ?>
