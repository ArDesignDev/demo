<?php get_header(); ?>

<!-- HERO LANDING PAGE -->
<section id="hero" class="hero-section">
    <div class="hero-section__hero-img hero-section__hero-img--zoomin-effect"></div>


          <div class="hero-section__main-content">
              <h2 class="hero-section__title load-effect">
                Z nami stopite v digitalni
                svet spletnih strani
              </h2>

              <div class="hero-section__buttons load-effect">
                  <a href="http://localhost/demo/aneway/kontakt/"><button class="btn btn--red btn--wide"> Začni projekt</button></a>
                  <a href="#services"><button class="btn btn--wide"> Izvedi več</button></a>
              </div>

          </div>

          <section id="scroll-down" class="hero-section__remove-when-scroll">
            <a href="#services"><span></span></a>
          </section>

       <!--<span class="hero-section__remove-stars-scroll">
         <div id="stars"></div>
         <div id="stars2"></div>
         <div id="stars3"></div>
       </span>-->
</section><!-- /hero-section-->




<!-- SERVICES -->
<section id="services" class="services-section section">
  <div class="section__angle">
    <div class="section__angle--upleft"></div>
  	<div class="section__angle--upright"></div>
  </div>
  <div class="wrapper services-section--z-index">

      <h2 class="section__title scroll-effect">Zakaj izbrati nas?</h2>
      <div class="section__separator scroll-service-width"></div>

      <div class="section__description scroll-effect">
        <p>Za vas izdelomo spletno stran z unikatnim dizajnom in uporabniško izkušnjo, ki bo navdušila vaše stranke.
          Vse skupaj prenesemo v spletno okolje Wordpress, ki vam omogoča samostojno urejanje vsebine.
           <a href="/storitve" class="services-section__link">Izvedi več...</a> </p>
      </div><!-- /description-->

      <div class="services-section__content scroll-effect">
        <div class="row">
          <a href="#">
            <div class="row__medium-3 row__small-6 services-section__col">
                <span class="services-section__icon-border"><i class="fa fa-desktop services-section__icon" aria-hidden="true"></i></span>
                <h3 class="services-section__content__title">Izdelava</h3>
                <div class="services-section__separator"></div>
                <p class="services-section__content__text">Nudimo vam celotno izdelavo spletne strani. Načrtovanje in vzpostavitev, oblikovanje strani, razvoj, optimizacija ter vzdrževanje. </p>
            </div>
          </a>
          <a href="#">
            <div class="row__medium-3 row__small-6 services-section__col">
                <i class="fa fa-line-chart services-section__icon" aria-hidden="true"></i>
                <h3 class="services-section__content__title">Optimizacija</h3>
                <div class="services-section__separator"></div>
                <p class="services-section__content__text">Nudimo on-site in off-site optimizacijo za boljšo pozicijo na iskalniku Google. Optimiziramo hitrost delovanja vaše strani in izboljšamo uporabniško izkušnjo. </p>
            </div>
          </a>
          <a href="#">
            <div class="row__medium-3 row__small-6 services-section__col">
                <i class="fa fa-bullhorn services-section__icon" aria-hidden="true"></i>
                <h3 class="services-section__content__title">Oglaševanje</h3>
                <div class="services-section__separator"></div>
                <p class="services-section__content__text">There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered. </p>
            </div>
          </a>
          <a href="#">
            <div class="row__medium-3 row__small-6 services-section__col">
                <i class="fa fa-bar-chart services-section__icon" aria-hidden="true"></i>
                <h3 class="services-section__content__title">Analiza</h3>
                <div class="services-section__separator"></div>
                <p class="services-section__content__text">There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form.</p>
            </div>
          </a>
        </div><!-- /row-->
      </div><!-- /content-->


  </div><!-- /wrapper-->
  <div class="section__angle section__angle--second">
    <div class="section__angle--upleft section__angle--upleft--second"></div>
  </div>
</section><!-- /services-section-->

<!-- Service description-->
<section id="service-description" class="service-description">
    <div class="wrapper">
      <div class="row">
        <div class="row__medium-4 service-description__content">
          <h2 class="section__title service-description__title scroll-effect3">Storitve</h2>
          <div class="section__separator service-description__separator"></div>
          <h3 class="service-description__subtitle scroll-effect3">Features & Specifications</h3>
          <p class="service-description__text scroll-effect3">Nam quam nunc, blandit vel, luctus pulvinar, hend lorem. Maecenas nec odioet ante tincidunt tempus luctus pulvinar, hendrerit id, lorem.</p>
          <p class="service-description__text scroll-effect3">Maecenas nec odio et ante tincidunt tempus natoque penatibuset magnis dis parturient nascetur ridiculus mus.</p>
        </div>
        <div class="row__medium-8 service-description__image image-fadin">
          <img class="b-lazy"
          src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
          data-src="<?php echo get_template_directory_uri(); ?>/img/storitve-opis.png"
          alt="storitve"/>
        </div>
      </div>
    </div><!-- /wrapper-->
    <div class="section__angle section__angle--third">
      <div class="section__angle--upleft section__angle--upleft--second section__angle--upleft--third"></div>
      <div class="section__angle--upright section__angle--upright--third"></div>
    </div>
</section>


<!-- LAST PROJECTS -->
<section id="last-projects" class="section last-projects-section">
    <div class="wrapper">
      <h2 class="section__title scroll-effect2">Zadnji projekti</h2>
      <div class="section__separator scroll-project-width"></div>

      <div class="section__description scroll-effect2">
        <p>Za vas izdelomo spletno stran z unikatnim dizajnom in uporabniško izkušnjo, ki bo navdušila vaše stranke.
          Vse skupaj prenesemo v spletno okolje Wordpress, ki vam omogoča samostojno urejanje vsebine. </p>
      </div><!-- /description-->

      <div class="last-projects-section__container last-projects-section__container--active" id="panel1">
            <div class="row">

              <?php
               $args = array(

                 'posts_per_page' => 9,
                 'post_type' => 'projekti',
                 );

               $topPosts = new WP_Query($args);

               if ($topPosts->have_posts()) :
               while ($topPosts->have_posts()) : $topPosts->the_post(); ?>

                      <div class="row__small-6 row__large-4 row__medium-6 scroll-effect2" id="post-<?php the_ID(); ?>">

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


    </div><!-- /wrapper-->
</section>

<!-- HIRE US BANNER
<section class="hire-us-banner">
    <div class="wrapper">
      <div class="row">
          <div class="row__medium-3">&nbsp;</div>
          <div class="row__medium-6">
              <h2 class="hire-us-banner__title">Želite sodelovati z nami?</h2>
              <p class="hire-us-banner__text">At vero eos et accusamus et iusto odio dignissimos ducimus qui ditqs praesentium
                voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
              <div class="hire-us-banner__buttons">
                <a href="http://localhost/demo/aneway/kontakt/"><button class="btn btn--red btn--small"> Začni projekt</button></a>
                <a href="http://localhost/demo/aneway/storitve/"><button class="btn btn--small"> Vse storitve</button></a>
              </div>
          </div>
          <div class="row__medium-3">&nbsp;</div>
      </div>

    </div>
</section>-->

<?php get_footer(); ?>
