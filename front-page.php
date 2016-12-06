<?php get_header(); ?>

<div id="home-start">
  <div class="spacer s2"></div>
  <div id="trigger" class="spacer s0"></div>
  <div class="start" id="nube"></div>
  <div class="start" id="montana"></div>
  <div class="start" id="arbol"></div>
  <div class="start" id="parras"></div>
  <div class="start" id="hoja"></div>
  <div class="spacer s2"></div>
</div>

<article id="about">

  <!-- Intro -->
  <div class="intro">
    <div>
      <h1><?php the_title(); ?></h1>
      <p>- <?php the_field('intro_subtitle'); ?> -</p>
      <button class="arrow arrow-down-white" id="down"></button>
    </div>
  </div>

  <div class="container">

    <div id="philosophy" class="position-flag"></div>
    <div class="row align-middle section" id="philosophy-content" data-aos="fade-up" data-aos-once="true">
      <div class="col-sm-4 col-sm-push-8">
        <div>
          <h2><?php the_field('philosophy_title'); ?></h2>
          <p><?php the_field('philosophy_content'); ?></p>
        </div>
      </div>
      <div class="col-sm-8 col-sm-pull-4">

        <?php if(get_field('philosophy_gallery')): ?>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php while(has_sub_field('philosophy_gallery')): ?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('philosophy_gallery_image'); ?>"/>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div id="founder" class="position-flag"></div>
    <div class="row align-middle section" id="founder-content" data-aos="fade-up" data-aos-once="true">
      <div class="col-sm-4 text-right">
        <h2><?php the_field('founder_title'); ?></h2>
        <p><?php the_field('founder_content'); ?></p>
      </div>
      <div class="col-sm-8">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about/founder.jpg" alt="">
      </div>
    </div>

    <div id="team" class="position-flag"></div>
    <div class="row col-3-mag section" id="team-content">
      <div class="col-sm-12 team-header" data-aos="fade-up" data-aos-once="true">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h2><?php the_field('team_title'); ?></h2>
            <p><?php the_field('team_content'); ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 emily-faulconer " data-aos="fade-up" data-aos-once="true">
        <figure>
          <div class="hover-show">
            <img src="<?php bloginfo('template_url'); ?>/img/about/emily-faulconer.jpg" alt="">
            <p class="hidden-element italic-highlighted phrase"><?php the_field('emily_phrase'); ?></p>
          </div>
          <figcaption>
            <h3>Emily Faulconer</h3>
            <span class="italic-highlighted">- <?php the_field('emily_position'); ?> -</span>
            <p><?php the_field('emily_description'); ?></p>
          </figcaption>
        </figure>
      </div>

      <div class="col-sm-6 col-md-4 people-working" data-aos="fade-up" data-aos-once="true">
        <figure>
          <div class="hover-show">
            <img src="<?php bloginfo('template_url'); ?>/img/about/people-working.jpg" alt="">
          </div>
        </figure>
      </div>

      <div class="col-sm-6 col-md-4 carlos-carrasco" data-aos="fade-up" data-aos-once="true">
        <figure>
          <div class="hover-show">
            <img src="<?php bloginfo('template_url'); ?>/img/about/carlos-carrasco.jpg" alt="">
            <p class="hidden-element italic-highlighted phrase"><?php the_field('carlos_phrase'); ?></p>
          </div>
          <figcaption>
            <h3>Carlos Carrasco</h3>
            <span class="italic-highlighted">- <?php the_field('carlos_position'); ?> -</span>
            <p><?php the_field('carlos_description'); ?></p>
          </figcaption>
        </figure>
      </div>

      <!--div class="col-sm-6 col-md-4 maria-chadwick" data-aos="fade-up" data-aos-once="true">
        <figure>
          <div class="hover-show">
            <img src="<?php bloginfo('template_url'); ?>/img/about/maria-chadwick.jpg" alt="">
            <p class="hidden-element italic-highlighted phrase"><?php the_field('maria_phrase'); ?></p>
          </div>
          <figcaption>
            <h3>Maria Eugenia Chadwick</h3>
            <span class="italic-highlighted">- <?php the_field('maria_position'); ?> -</span>
            <p><?php the_field('maria_description'); ?></p>
          </figcaption>
        </figure>
      </div-->

    </div>
  </div>
</article>

<?php get_footer(); ?>