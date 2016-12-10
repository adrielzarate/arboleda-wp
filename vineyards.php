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

			<figure class="col-md-6 col-lg-8" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/the-aconcagua-valley.jpg" alt="The Aconcagua Valley">
				<figcaption><?php the_field('aconcagua_valley_figcaption'); ?></figcaption>
			</figure>

			<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-once="true">
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

		<!--  -->

		<div id="chilhue-vineyard" class="position-flag"></div>
		<div class="row">
			<div class="col-sm-12" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-valley-map-big.jpg" alt="Aconcagua Valley map">
			</div>
		</div>
		<div class="row align-middle section" id="chilhue-vineyard-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-sm-7 col-md-8">
				<?php if(get_field('chilhue_gallery')): ?>
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php while(has_sub_field('chilhue_gallery')): ?>
								<div class="swiper-slide">
									<img class="img-responsive" src="<?php the_sub_field('chilhue_gallery_image'); ?>"/>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-5 col-md-4 text-center">
				<?php if(get_field('chilhue_gallery_text')): ?>
					<ul class="slider-references">
						<?php while(has_sub_field('chilhue_gallery_text')): ?>
							<li>
								<h2><?php the_sub_field('chilhue_gallery_image_title'); ?></h2>
								<span class="italic-highlighted">-<?php the_sub_field('chilhue_gallery_image_subtitle'); ?>-</span>
								<p class="italic-highlighted phrase"><?php the_sub_field('chilhue_gallery_image_phrase'); ?></p>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

		<!--  -->

		<div class="row col-3-mag section" id="las-vertientes-content">
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<h3><?php the_field('chilhue_property_title'); ?></h3>
						<p><?php the_field('chilhue_property_content'); ?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/property.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/climate.jpg" alt="">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<h3><?php the_field('chilhue_climate_title'); ?></h3>
						<p><?php the_field('chilhue_climate_content'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true"  data-aos-delay="400">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<h3><?php the_field('chilhue_soils_title'); ?></h3>
						<p><?php the_field('chilhue_soils_content'); ?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/soils.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="col-sm-12 text-center quote quote-with-logo" data-aos="fade-up" data-aos-once="true">
				<p class="italic-highlighted"><?php the_field('chilhue_quote_content'); ?></p>
			</div>

			<div class="col-sm-12" id="lots" data-aos="fade-up" data-aos-once="true">

				<div class="lots-references">
					<h3><?php the_field('lots_aconcacua_costa_title'); ?></h3>
					<ul class="list-unstyled click-list radio-lots">
						<li>
							<input id="chardonay" type="radio" name="lots-aconcagua" value="chardonay" checked>
							<label class="italic-highlighted" for="chardonay">Chardonay</label>
						</li>
						<li>
							<input id="sauvignon-blanc" type="radio" name="lots-aconcagua" value="sauvignon-blanc">
							<label class="italic-highlighted" for="sauvignon-blanc">sauvignon Blanc</label>
						</li>
						<li>
							<input id="pinot-noir" type="radio" name="lots-aconcagua" value="pinot-noir">
							<label class="italic-highlighted" for="pinot-noir">Pinot Noir</label>
						</li>
						<li>
							<input id="all-aconcacua-costa-lots" type="radio" name="lots-aconcagua" value="all-aconcacua-costa-lots">
							<label class="italic-highlighted" for="all-aconcacua-costa-lots"><?php the_field('all_lots_btn'); ?></label>
						</li>
					</ul>
				</div>

				<ul class="list-unstyled lots-maps list-inline">
					<li class="row chardonay active">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-chardonay.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>Chardonay</h3>
							<p><?php the_field('lots_chardonay_content'); ?></p>
						</div>
					</li>
					<li class="row sauvignon-blanc">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x-.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>sauvignon Blanc</h3>
							<p><?php the_field('lots_sauvignon_blanc_content'); ?></p>
						</div>
					</li>
					<li class="row pinot-noir">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>Pinot Noir</h3>
							<p><?php the_field('lots_pinot_noir_content'); ?></p>
						</div>
					</li>
					<li class="row all-aconcacua-costa-lots">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-chardonay.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>Todos los lotes</h3>
							<p><?php the_field('all_aconcagua_costa_lots_content'); ?></p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!--  -->

		<div id="las-vertientes" class="position-flag"></div>
		<div class="row">
			<div class="col-sm-12" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-valley-map-big.jpg" alt="Aconcagua Valley map">
			</div>
		</div>
		<div class="row align-middle section" id="chilhue-vineyard-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-sm-7 col-md-8">

				<?php if(get_field('vertientes_gallery')): ?>
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php while(has_sub_field('vertientes_gallery')): ?>
								<div class="swiper-slide">
									<img class="img-responsive" src="<?php the_sub_field('vertientes_gallery_image'); ?>"/>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-5 col-md-4 text-center">

				<?php if(get_field('vertientes_gallery_text')): ?>
					<ul class="slider-references">
						<?php while(has_sub_field('vertientes_gallery_text')): ?>
							<li>
								<h2><?php the_sub_field('vertientes_gallery__image_title'); ?></h2>
								<span class="italic-highlighted">-<?php the_sub_field('vertientes_gallery_image_subtitle'); ?>-</span>
								<p class="italic-highlighted phrase"><?php the_sub_field('vertientes_gallery_image_prhase'); ?></p>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

		<!--  -->

		<div class="row col-3-mag section" id="las-vertientes-content">
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<h3><?php the_field('vertientes_property_title'); ?></h3>
						<p><?php the_field('vertientes_property_content'); ?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/property.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/climate.jpg" alt="">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<h3><?php the_field('vertientes_climate_title'); ?></h3>
						<p><?php the_field('vertientes_climate_content'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true"  data-aos-delay="400">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<h3><?php the_field('vertientes_soils_title'); ?></h3>
						<p><?php the_field('vertientes_soils_content'); ?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/soils.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="col-sm-12 text-center quote quote-with-logo" data-aos="fade-up" data-aos-once="true">
				<p class="italic-highlighted"><?php the_field('vertientes_quote_content'); ?></p>
			</div>

			<div class="col-sm-12" id="lots" data-aos="fade-up" data-aos-once="true">

				<div class="lots-references">
					<h3><?php the_field('lots_vertientes_title'); ?></h3>
					<ul class="list-unstyled click-list radio-lots">
						<li>
							<input id="carmenere" type="radio" name="lots-vertientes" value="carmenere" checked>
							<label class="italic-highlighted" for="carmenere">Carmenere</label>
						</li>
						<li>
							<input id="cabernet-sauvignon" type="radio" name="lots-vertientes" value="cabernet-sauvignon">
							<label class="italic-highlighted" for="cabernet-sauvignon">Cabernet Sauvignon</label>
						</li>
						<li>
							<input id="syrah" type="radio" name="lots-vertientes" value="syrah">
							<label class="italic-highlighted" for="syrah">Syrah</label>
						</li>
						<li>
							<input id="all-vertientes-lots" type="radio" name="lots-vertientes" value="all-vertientes-lots">
							<label class="italic-highlighted" for="all-vertientes-lots"><?php the_field('all_lots_btn'); ?></label>
						</li>
					</ul>
				</div>

				<ul class="list-unstyled lots-maps list-inline">
					<li class="row carmenere active">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-chardonay.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>Carmenere</h3>
							<p><?php the_field('lots_carmenere_content'); ?></p>
						</div>
					</li>
					<li class="row cabernet-sauvignon">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x-.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>Cabernet Sauvignon</h3>
							<p><?php the_field('lots_cabernet_content'); ?></p>
						</div>
					</li>
					<li class="row syrah">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>Syrah</h3>
							<p><?php the_field('lots_syrah_content'); ?></p>
						</div>
					</li>
					<li class="row all-vertientes-lots">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-chardonay.jpg" alt="">
						</div>
						<div class="col-md-4 col-lg-3 quote">
							<h3>Todos los lotes</h3>
							<p><?php the_field('all_vertientes_lots_content'); ?></p>
						</div>
					</li>
				</ul>
			</div>
		</div>

	</div>

</article>

<?php get_footer(); ?>