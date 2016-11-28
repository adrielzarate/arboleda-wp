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
      <p>- <?php the_field('subtitle'); ?> -</p>
      <button class="arrow arrow-down-white" id="down"></button>
    </div>
  </div>

  <div class="container">

    <div id="philosophy" class="position-flag"></div>
    <div class="row align-middle section" id="philosophy-content" data-aos="fade-up" data-aos-once="true">
      <div class="col-sm-4 col-sm-push-8">
        <div>
          <h2>Our Philosophy</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi itaque, corrupti repellat quo doloribus nostrum sunt eos veniam iste! Delectus ad expedita quasi aliquid porro! Est nemo quibusdam facere!</p>
        </div>
      </div>
      <div class="col-sm-8 col-sm-pull-4">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about/philosophy.jpg" alt=""></div>
            <div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about/philosophy.jpg" alt=""></div>
            <div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about/philosophy.jpg" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <div id="founder" class="position-flag"></div>
    <div class="row align-middle section" id="founder-content" data-aos="fade-up" data-aos-once="true">
      <div class="col-sm-4 text-right">
        <h2>The Founder</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi itaque, corrupti repellat quo doloribus nostrum sunt eos veniam iste! Delectus ad expedita quasi aliquid porro! Est nemo quibusdam facere!</p>
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
            <h2>The Team</h2>
            <p>The Arboleda team is fully committed to the quest for excellence and working in harmony with nature, caring for every detail of the process, from the respect for the land where the vines are grown to the final presentation of each wine to our customers and wine-lovers around the globe.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 emily-faulconer " data-aos="fade-up" data-aos-once="true">
        <figure>
          <div class="hover-show">
            <img src="<?php bloginfo('template_url'); ?>/img/about/emily-faulconer.jpg" alt="">
            <p class="hidden-element italic-highlighted phrase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore debitis perferendis mollitia cumque dolorem blanditiis. Minima necessitatibus mollitia consequuntur, doloribus autem expedita est officia nulla aut blanditiis accusamus ducimus, hic.</p>
          </div>
          <figcaption>
            <h3>Emily Faulconer</h3>
            <span class="italic-highlighted">- Winemaker -</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat consectetur aliquam cupiditate tempora vero. Beatae vel distinctio, dolor nesciunt natus? Numquam temporibus hic nihil minima, architecto obcaecati repellendus odio saepe!</p>
          </figcaption>
        </figure>
      </div>

      <div class="col-sm-6 col-md-4 carlos-carrasco" data-aos="fade-up" data-aos-once="true">
        <figure>
          <div class="hover-show">
            <img src="<?php bloginfo('template_url'); ?>/img/about/carlos-carrasco.jpg" alt="">
            <p class="hidden-element italic-highlighted phrase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore debitis perferendis mollitia cumque dolorem blanditiis. Minima necessitatibus mollitia consequuntur, doloribus autem expedita est officia nulla aut blanditiis accusamus ducimus, hic.</p>
          </div>
          <figcaption>
            <h3>Carlos Carrasco</h3>
            <span class="italic-highlighted">- Viticulturist -</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat consectetur aliquam cupiditate tempora vero. Beatae vel distinctio, dolor nesciunt natus? Numquam temporibus hic nihil minima, architecto obcaecati repellendus odio saepe!</p>
          </figcaption>
        </figure>
      </div>

      <div class="col-sm-6 col-md-4 maria-chadwick" data-aos="fade-up" data-aos-once="true">
        <figure>
          <div class="hover-show">
            <img src="<?php bloginfo('template_url'); ?>/img/about/maria-chadwick.jpg" alt="">
            <p class="hidden-element italic-highlighted phrase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore debitis perferendis mollitia cumque dolorem blanditiis. Minima necessitatibus mollitia consequuntur, doloribus autem expedita est officia nulla aut blanditiis accusamus ducimus, hic.</p>
          </div>
          <figcaption>
            <h3>Maria Eugenia Chadwick</h3>
            <span class="italic-highlighted">- Brand Anbassador -</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat consectetur aliquam cupiditate tempora vero. Beatae vel distinctio, dolor nesciunt natus? Numquam temporibus hic nihil minima, architecto obcaecati repellendus odio saepe!</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>