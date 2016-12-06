<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<article id="work">

	<!-- Intro -->
	<div class="intro">
		<div>
			<h1><?php the_title(); ?></h1>
			<p>- <?php the_field('intro_subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>
	<div class="container">

		<div id="sustainability" class="position-flag"></div>
		<div class="row align-middle section" id="sustainability-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-4 text-right">
				<img class="sustainable-wine-logo" src="<?php bloginfo('template_url'); ?>/img/work/sustainable-wine.jpg" alt="sustainable wine logo">
				<h2><?php the_field('sustaintability_title'); ?></h2>
				<br>
				<p><?php the_field('sustaintability_content'); ?></p>
			</div>
			<div class="col-md-8">
				<img src="<?php bloginfo('template_url'); ?>/img/work/sustentability.jpg" alt="sustentability">
			</div>
		</div>

		<div class="row" data-aos="fade-up" data-aos-once="true">
			<div class="col-sm-12 text-center quote quote-with-logo">
				<p class="italic-highlighted"><?php the_field('work_quote_content'); ?></p>
			</div>
		</div>

		<div class="row nature-pics equal-heights">

			<div class="col-md-4 vertical-distribution">

				<div class="row equal-heights hidden-sm" style="margin-bottom:20px;"  data-aos="fade-up" data-aos-once="true">
					<div class="col-md-12 equal-heights">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-1.jpg" alt="nature-1">
					</div>
				</div>

				<div class="row equal-heights">

					<div class="col-md-4 equal-heights hidden-sm" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-2.jpg" alt="nature-2">
					</div>

					<div class="col-md-8 equal-heights" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
						<div class="hover-show nature-3 equal-heights">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-3.jpg" alt="nature-3">
							<p class="hidden-element italic-highlighted phrase"><?php the_field('fox_pic_quote'); ?></p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-md-8 equal-heights"  data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
				<div class="hover-show nature-4 equal-heights">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-4.jpg" alt="nature-4">
					<p class="hidden-element italic-highlighted phrase"><?php the_field('bird_pic_quote'); ?></p>
				</div>
			</div>
		</div>

		<div class="row nature-pics equal-heights" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
			<div class="col-md-4 equal-heights">
				<div class="hover-show nature-5 equal-heights">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-5.jpg" alt="nature-5">
					<p class="hidden-element italic-highlighted phrase"><?php the_field('lake_pic_quote'); ?></p>
				</div>
			</div>
			<div class="col-md-5 equal-heights" data-aos="fade-up" data-aos-once="true" data-aos-delay="150">
				<div class="hover-show nature-6 equal-heights">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-6.jpg" alt="nature-6">
					<p class="hidden-element italic-highlighted phrase"><?php the_field('forest_pic_quote'); ?></p>
				</div>
			</div>
			<div class="col-md-3 equal-heights hidden-sm" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-7.jpg" alt="nature-7">
			</div>
		</div>

		<div id="winemaking" class="position-flag"></div>
		<div class="row align-middle section" id="winemaking-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-8">
				<img src="<?php bloginfo('template_url'); ?>/img/work/winemaking.jpg" alt="Winemaking">
			</div>
			<div class="col-md-4">
				<h2><?php the_field('winemaking_tile'); ?></h2>
				<p><?php the_field('winemaking_content'); ?></p>
			</div>
		</div>
	</div>
</article>
<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
		<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
		<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
	</div>
	<div class="swiper-pagination"></div>
</div>

<?php get_footer(); ?>