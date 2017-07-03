<?php get_header(); ?>

<div class="intro-parallax">
  <div id="trigger-start"></div>
  <div id="trigger-ending"></div>

  <div id="home-start">
    <div class="start" id="arbol"></div>
    <div class="start" id="parras"></div>
    <div class="start" id="ending"></div>
    <div class="start intro visible" id="intro-title">
      <img src="<?php bloginfo('template_url'); ?>/img/arboleda-logo-mobile.jpg" width="146" height="35" style="width:1px; height=1px;" alt="Arboleda">
      <!-- <div> -->
        <!-- <h1>Viña Arboleda</h1> -->
      <button class="arrow arrow-down-white" id="startDown"></button>
      <!-- </div> -->
    </div>
  </div>
</div>


<article id="home">
  <div class="black-wall"></div>

  <div class="container first-look">

      <?php
      if( have_rows('home_sections') ):
          while ( have_rows('home_sections') ) : the_row();
      ?>
        <div class="row-home home-section text-center equal-heights" data-aos="fade-up" data-aos-once="true">
          <div class="half-home align-middle">
            <div>
              <h2><?php the_sub_field('section_title'); ?></h2>
              <p><?php the_sub_field('section_content'); ?></p>
              <p><a class="arrow arrow-right-gray text-italic" href="<?php the_sub_field('section_link_url'); ?>"><?php the_sub_field('section_link_text'); ?></a></p>
            </div>
          </div>
          <div class="half-home home-section-img">
            <img src="<?php the_sub_field('section_image'); ?>" alt="">
          </div>
        </div>
      <?php
          endwhile;
      endif;
      ?>

  </div>

</article>

<?php get_footer(); ?>

  <?php
  	$usr_country = 'enable Geolocator plugin in Wordpress admin and remove the comment in the next line';
    // $usr_country = geolocator_country();
    if( $usr_country == 'CL' ):
  ?>

  <div class="modal fade" id="CountryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-body text-center">
          <img class="" src="<?php bloginfo('template_url'); ?>/img/country-modal/corcho-arbol.jpg" alt="un corcho arboleda por un árbol nativo">
          <a class="btn btn-primary btn-lg text-uppercase" href="https://www.descorchaunarbol.com/" target="_blank">Participa Aquí</a>
        </div>
      </div>
    </div>
  </div>
  <script>
    $( document ).on("introAnimationEnd", function() {
      $('#CountryModal').modal('show');
    });
  </script>

<?php endif; ?>