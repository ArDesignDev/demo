<?php get_header(); ?>

<div class="page-content">
  <div class="page-header">
    <div class="wrapper">
      <div class="page-header--padding">
        <h1 class="page-header__title"><?php wp_title(' ') ?></h1>
        <p class="page-header__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a <br /> volutpat turpis, non facilisis sem. </p>
      </div>
    </div><!-- /wrapper-->
  </div>

<div class="blog-page">
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
              <?php

              if (have_posts()) :
                 while (have_posts()) : the_post();?>
                   <div class="row__large-3 row__medium-4 row__small-6 load-effect2">
                     <div class="blog-page__post">
                        <a href="<?php the_permalink();?>">
                          <?php if(has_post_thumbnail()): ?>
                          <div class="blog-page__image">
                            <?php $thumbnail_id    = get_post_thumbnail_id($post->ID);
                            $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));?>
                            <img class="b-lazy"
                            src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
                            data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt="<?php if ($thumbnail_image && isset($thumbnail_image[0])) {echo $thumbnail_image[0]->post_excerpt;}?>"/>
                          </div>
                        <?php endif; ?>
                        </a>

                        <div class="blog-page__text">
                          <span class="blog-page__category"><?php the_category(' '); ?> </span>
                            <a href="<?php the_permalink();?>"><h2 class="blog-page__title"><?php the_title() ?></h2></a>
                            <a href="<?php the_permalink();?>"> <span class="blog-page__excerpt"> <?php the_excerpt(); ?></span></a>
                        </div><!-- /blog-page__text-->
                          <p class="blog-page__meta"><strong><?php the_author(); ?></strong> | <?php the_time('j. F, Y') ?></p>
                    </div><!-- /blok-page__post-->
                  </div><!-- /row__medium-4-->

                 <?php endwhile;

                 else :
                    echo '<p>No content found</p>';

                 endif;?>
      </div><!-- /row-->
  </div><!-- /wrapper-->
</div><!-- /blog-page-->

</div><!-- /page-content-->
<?php get_footer(); ?>
