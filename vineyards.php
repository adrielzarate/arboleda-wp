<?php
/*
Template Name: Vineyards
*/
?>

<?php get_header(); ?>

<article id="vineyards">

	<!-- Intro -->
	<div class="intro">
		<div>
			<h1><?php the_title(); ?></h1>
			<p>- <?php the_field('intro_subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">

		<div id="aconcagua-valley" class="position-flag"></div>
		<div class="row align-middle section" id="aconcagua-valley-content">
			<figure class="col-md-8" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/the-aconcagua-valley.jpg" alt="The Aconcagua Valley">
				<figcaption><?php the_field('aconcagua_valley_figcaption'); ?></figcaption>
			</figure>
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true">
				<h2><?php the_field('aconcagua_valley_title'); ?></h2>
				<p><?php the_field('aconcagua_valley_content'); ?></p>
			</div>
		</div>

		<div class="row align-middle">
			<div class="col-sm-8" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-valley-map.jpg" alt="Aconcagua Valley map">
			</div>
			<div class="col-sm-4" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/chile-map.jpg" alt="Chile map">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-valley-map-big.jpg" alt="Aconcagua Valley map">
			</div>
		</div>

		<div id="chilhue-vineyard" class="position-flag"></div>
		<div class="row align-middle section" id="chilhue-vineyard-content" data-aos="fade-up" data-aos-once="true">

			<div class="col-sm-8">

				<?php if(get_field('aconcagua_gallery')): ?>
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php while(has_sub_field('aconcagua_gallery')): ?>
								<div class="swiper-slide">
									<img class="img-responsive" src="<?php the_sub_field('aconcagua_gallery_image'); ?>"/>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				<?php endif; ?>

<!-- 				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
						<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
						<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
					</div>
					<div class="swiper-pagination"></div>
				</div> -->

			</div>

			<div class="col-sm-4 text-center">

				<?php if(get_field('aconcagua_gallery_text')): ?>
					<ul class="slider-references">
						<?php while(has_sub_field('aconcagua_gallery_text')): ?>
							<li>
								<h2><?php the_sub_field('aconcagua_gallery_image_title'); ?></h2>
								<span class="italic-highlighted">-<?php the_sub_field('aconcagua_gallery_image_subtitle'); ?>-</span>
								<p class="italic-highlighted phrase"><?php the_sub_field('aconcagua_gallery_image_phrase'); ?></p>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

<!-- 				<ul class="slider-references">
					<li class="active">
						<h2>Aconcagua Costa</h2>
						<span class="italic-highlighted">-Chilhue Vineyard-</span>
						<p class="italic-highlighted phrase">In the local indigenous language, Chilhué means “place of seagulls”, alluding to its proximity to the sea.</p>
					</li>
					<li>
						<h2>Aconcagua Costa 2</h2>
						<span class="italic-highlighted">-Chilhue Vineyard-</span>
						<p class="italic-highlighted phrase">Chilhué means “place of seagulls”, alluding to its proximity to the sea. In the local indigenous language.</p>
					</li>
					<li>
						<h2>Aconcagua Costa 3</h2>
						<span class="italic-highlighted">-Chilhue Vineyard-</span>
						<p class="italic-highlighted phrase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut saepe, quam deleniti obcaecati.</p>
					</li>
				</ul> -->

			</div>
		</div>

		<div id="las-vertientes" class="position-flag"></div>
		<div class="row col-3-mag section" id="las-vertientes-content">
			<div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-once="true">
				<h3><?php the_field('property_title'); ?></h3>
				<p><?php the_field('property_content'); ?></p>
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/property.jpg" alt="">
			</div>
			<div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/climate.jpg" alt="">
				<h3><?php the_field('climate_title'); ?></h3>
				<p><?php the_field('climate_content'); ?></p>
			</div>
			<div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-once="true"  data-aos-delay="400">
				<h3><?php the_field('soils_title'); ?></h3>
				<p><?php the_field('soils_content'); ?></p>
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/soils.jpg" alt="">
			</div>

			<div class="col-sm-12 text-center quote quote-with-logo" data-aos="fade-up" data-aos-once="true">
				<p class="italic-highlighted"><?php the_field('quote_content'); ?></p>
			</div>

			<div class="col-sm-12" id="lots" data-aos="fade-up" data-aos-once="true">

				<div class="lots-references">
					<h3><?php the_field('lots_title'); ?></h3>
					<ul class="list-unstyled click-list radio-lots">
						<li>
							<input id="chardonay" type="radio" name="lots" value="chardonay" checked>
							<label class="italic-highlighted" for="chardonay">Chardonay</label>
						</li>
						<li>
							<input id="sauvignon-blanc" type="radio" name="lots" value="sauvignon-blanc">
							<label class="italic-highlighted" for="sauvignon-blanc">sauvignon Blanc</label>
						</li>
						<li>
							<input id="pinot-noir" type="radio" name="lots" value="pinot-noir">
							<label class="italic-highlighted" for="pinot-noir">Pinot Noir</label>
						</li>
						<li>
							<input id="all-lots" type="radio" name="lots" value="all-lots">
							<label class="italic-highlighted" for="all-lots"><?php the_field('all_lots_btn'); ?></label>
						</li>
					</ul>
				</div>

				<ul class="list-unstyled lots-maps list-inline">
					<li class="row chardonay active">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-chardonay.jpg" alt="">
						</div>
						<div class="col-md-3 quote">
							<h3>Chardonay</h3>
							<p><?php the_field('lots_chardonay_content'); ?></p>
						</div>
					</li>
					<li class="row sauvignon-blanc">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x-.jpg" alt="">
						</div>
						<div class="col-md-3 quote">
							<h3>sauvignon Blanc</h3>
							<p><?php the_field('lots_sauvignon_blanc_content'); ?></p>
						</div>
					</li>
					<li class="row pinot-noir">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x.jpg" alt="">
						</div>
						<div class="col-md-3 quote">
							<h3>Pinot Noir</h3>
							<p><?php the_field('lots_pinot_noir_content'); ?></p>
						</div>
					</li>
					<li class="row all-lots">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-chardonay.jpg" alt="">
						</div>
						<div class="col-md-3 quote">
							<h3>Todos los lotes</h3>
							<p><?php the_field('all_lots_content'); ?></p>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>

</article>

<?php get_footer(); ?>