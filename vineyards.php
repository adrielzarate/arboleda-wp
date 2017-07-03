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

		<!-- <iframe class="virtual-tour tour-aconcagua" src="http://ww2.arboledawines.cl/tour-virtual/tour-aconcagua/tour.html" frameborder="0"></iframe> -->

		<div class="row align-middle">
			<div class="col-sm-4" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/chile-map.jpg" alt="Chile map">
			</div>
			<div class="col-sm-8" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-valley-map.jpg" alt="Aconcagua Valley map">
			</div>
		</div>

		<!-- CHILUE -->

		<div id="chilhue-vineyard" class="position-flag"></div>
		<div class="row">
			<div class="col-sm-12" data-aos="fade-up" data-aos-once="true">
				<a id="chilhue-map" href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/chilhue-map.jpg" alt="Chilhue map"></a>
			</div>
		</div>
		<div id="chilhue-content" class="position-flag"></div>
		<div class="row align-middle section" data-aos="fade-up" data-aos-once="true">
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

		<!-- CHILUE MAPS -->

		<div class="row col-3-mag section">
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<h3><?php the_field('chilhue_property_title'); ?></h3>
						<p><?php the_field('chilhue_property_content'); ?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/chilhue-property.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/climate-colihue.jpg" alt="">
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
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/suelo-colihue.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="col-sm-12 text-center quote quote-with-logo" data-aos="fade-up" data-aos-once="true">
				<p class="italic-highlighted"><?php the_field('chilhue_quote_content'); ?></p>
			</div>

			<div class="col-sm-12" data-aos="fade-up" data-aos-once="true">

				<div class="lots-references">
					<h3><?php the_field('lots_aconcacua_costa_title'); ?></h3>
					<ul class="list-unstyled click-list radio-lots">
						<li>
							<input id="chardonay" type="radio" name="lots-aconcagua" value="chardonay" checked>
							<label class="italic-highlighted lot-chardonnay" for="chardonay">
							<?php _e('
							<!--:es-->Chardonnay<!--:-->
							<!--:en-->Chardonnay<!--:-->
							<!--:fr-->Chardonnay<!--:-->
							<!--:zh-->霞多丽<!--:-->');
							?>
							</label>
						</li>
						<li>
							<input id="sauvignon-blanc" type="radio" name="lots-aconcagua" value="sauvignon-blanc">
							<label class="italic-highlighted lot-sauvignon-blanc" for="sauvignon-blanc">
							<?php _e('
							<!--:es-->Sauvignon Blanc<!--:-->
							<!--:en-->Sauvignon Blanc<!--:-->
							<!--:fr-->Sauvignon Blanc<!--:-->
							<!--:zh-->长相思<!--:-->');
							?>
							</label>
						</li>
						<li>
							<input id="pinot-noir" type="radio" name="lots-aconcagua" value="pinot-noir">
							<label class="italic-highlighted lot-pinot-noir" for="pinot-noir">
							<?php _e('
							<!--:es-->Pinot Noir<!--:-->
							<!--:en-->Pinot Noir<!--:-->
							<!--:fr-->Pinot Noir<!--:-->
							<!--:zh-->黑皮诺<!--:-->');
							?>
							</label>
						</li>
						<li>
							<button class="btn-open-tour-virtual" data-toggle="modal" data-target="#modal-tour-aconcagua">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="23px" height="17px" viewBox="0 0 23 17" style="enable-background:new 0 0 23 17;" xml:space="preserve">
								<style type="text/css">
									.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#999;stroke:#999;stroke-width:0.3;stroke-miterlimit:10;}
								</style>
								<path class="st0" d="M22.3,11.5c-0.3-1.4-1-2.9-1.5-4.6c-0.6-1.9-0.9-3.5-1.4-4.7c-1.6-3.1-7-1.5-6,2.7C12.1,4.8,10.7,5,9.6,4.8
								c0.9-4.5-4.5-5.5-6-2.7C3,3.1,2.7,4.8,2.1,6.7C1.6,8.3,1,10,0.7,11.2c-0.9,4.5,4.5,6.6,7.3,4.1c1.6-1.4,1.4-3.7,1.6-6.6
								c1.3,0,2.6,0,3.9,0c0,3,0,5.3,1.5,6.7C17.9,18,23.1,15.5,22.3,11.5z M8.6,12.9c-0.9,4.2-7.7,3.4-7.2-1.3c0.2-1.5,1.3-2.8,3-3.1
								C7,8.1,9.2,10.1,8.6,12.9z M8.8,9.5C8.2,9.3,7.9,8.6,7.2,8.2C5.9,7.5,3.8,7.6,2.5,8.5c0,0,0,0-0.1,0c0.7-1.7,0.9-4.6,1.9-6.2
								c1.1-1.8,4.3-1.3,4.6,1C9.2,5.5,8.5,7.5,8.8,9.5z M13.4,8c-1.3,0-2.6,0-3.9,0c0-0.8,0-1.6,0.1-2.3c1.2,0,2.5,0,3.7,0
								C13.5,6.4,13.4,7.2,13.4,8z M14.2,5.7c0-0.8-0.2-1.7-0.1-2.5c0.5-2.4,3.8-2.4,4.7-0.5c0.8,1.6,1,4.3,1.8,5.9
								c-0.7-0.3-1.6-0.8-2.7-0.8c-1.7,0-3,1.1-3.8,1.9C14.1,8.3,14.2,7,14.2,5.7z M21.6,12.7c-0.1,1-0.8,2-1.5,2.5c-2,1.4-5.3,0.3-5.8-2.2
								c-0.5-2.6,1.1-4,3-4.3C19.8,8.2,21.9,10,21.6,12.7z"/>
								</svg>
								<em>Tour virtual</em>
							</button>
						</li>
					</ul>
				</div>

			<ul class="list-unstyled lots-maps list-inline">
				<li class="row chardonay active">
					<div class="col-md-12">
						<?php if( get_field('lots_chardonay_map') ): ?>
							<img class="img-responsive" src="<?php the_field('lots_chardonay_map'); ?>" alt="">
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-lg-3 quote">
						<h3>
						<?php _e('
						<!--:es-->Chardonnay<!--:-->
						<!--:en-->Chardonnay<!--:-->
						<!--:fr-->Chardonnay<!--:-->
						<!--:zh-->霞多丽<!--:-->');
						?>
						</h3>
						<p><?php the_field('lots_chardonay_content'); ?></p>
					</div>
				</li>
				<li class="row sauvignon-blanc">
					<div class="col-md-12">
						<?php if( get_field('lots_sauvignon_blanc_map') ): ?>
							<img class="img-responsive" src="<?php the_field('lots_sauvignon_blanc_map'); ?>" alt="">
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-lg-3 quote">
						<h3>
						<?php _e('
						<!--:es-->Sauvignon Blanc<!--:-->
						<!--:en-->Sauvignon Blanc<!--:-->
						<!--:fr-->Sauvignon Blanc<!--:-->
						<!--:zh-->长相思<!--:-->');
						?>
						</h3>
						<p><?php the_field('lots_sauvignon_blanc_content'); ?></p>
					</div>
				</li>
				<li class="row pinot-noir">
					<div class="col-md-12">
						<?php if( get_field('lots_pinot_noir_map') ): ?>
							<img class="img-responsive" src="<?php the_field('lots_pinot_noir_map'); ?>" alt="">
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-lg-3 quote">
						<h3>
						<?php _e('
						<!--:es-->Pinot Noir<!--:-->
						<!--:en-->Pinot Noir<!--:-->
						<!--:fr-->Pinot Noir<!--:-->
						<!--:zh-->黑皮诺<!--:-->');
						?>
						</h3>
						<p><?php the_field('lots_pinot_noir_content'); ?></p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<!-- LAS VERTIENTES -->

	<div id="las-vertientes" class="position-flag"></div>
	<div class="row">
		<div class="col-sm-12" data-aos="fade-up" data-aos-once="true">
			<a id="las-vertientes-map" href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/las-vertientes-map.jpg" alt="Aconcagua Valley map"></a>
		</div>
	</div>
	<!-- <iframe class="virtual-tour" src="http://ww2.arboledawines.cl/tour-virtual/tour-vertiente/tour.html" frameborder="0"></iframe> -->
	<div id="las-vertientes-content" class="position-flag"></div>
	<div class="row align-middle section" data-aos="fade-up" data-aos-once="true">
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

	<!-- LAS VERTIENTES MAPS -->

	<div class="row col-3-mag section">
		<div class="col-md-4" data-aos="fade-up" data-aos-once="true">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-12">
					<h3><?php the_field('vertientes_property_title'); ?></h3>
					<p><?php the_field('vertientes_property_content'); ?></p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-12">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/vertientes-property.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-12">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/climate-vertientes.jpg" alt="">
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

		<div class="col-sm-12" data-aos="fade-up" data-aos-once="true">

			<div class="lots-references">
				<h3><?php the_field('lots_vertientes_title'); ?></h3>
				<ul class="list-unstyled click-list radio-lots">
					<li>
						<input id="carmenere" type="radio" name="lots-vertientes" value="carmenere" checked>
						<label class="italic-highlighted lot-carmenere" for="carmenere">
						<?php _e('
						<!--:es-->Carmenere<!--:-->
						<!--:en-->Carmenere<!--:-->
						<!--:fr-->Carmenere<!--:-->
						<!--:zh-->佳美娜<!--:-->');
						?>
						</label>
					</li>
					<li>
						<input id="cabernet-sauvignon" type="radio" name="lots-vertientes" value="cabernet-sauvignon">
						<label class="italic-highlighted lot-cabernet-sauvignon" for="cabernet-sauvignon">
						<?php _e('
						<!--:es-->Cabernet Sauvignon<!--:-->
						<!--:en-->Cabernet Sauvignon<!--:-->
						<!--:fr-->Cabernet Sauvignon<!--:-->
						<!--:zh-->赤霞珠<!--:-->');
						?>
						</label>
					</li>
					<li>
						<input id="syrah" type="radio" name="lots-vertientes" value="syrah">
						<label class="italic-highlighted lot-syrah" for="syrah">
						<?php _e('
						<!--:es-->Syrah<!--:-->
						<!--:en-->Syrah<!--:-->
						<!--:fr-->Syrah<!--:-->
						<!--:zh-->西拉<!--:-->');
						?>
						</label>
					</li>
					<li>
						<button class="btn-open-tour-virtual" data-toggle="modal" data-target="#modal-tour-vertiente">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="23px" height="17px" viewBox="0 0 23 17" style="enable-background:new 0 0 23 17;" xml:space="preserve">
							<style type="text/css">
								.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#999;stroke:#999;stroke-width:0.3;stroke-miterlimit:10;}
							</style>
							<path class="st0" d="M22.3,11.5c-0.3-1.4-1-2.9-1.5-4.6c-0.6-1.9-0.9-3.5-1.4-4.7c-1.6-3.1-7-1.5-6,2.7C12.1,4.8,10.7,5,9.6,4.8
							c0.9-4.5-4.5-5.5-6-2.7C3,3.1,2.7,4.8,2.1,6.7C1.6,8.3,1,10,0.7,11.2c-0.9,4.5,4.5,6.6,7.3,4.1c1.6-1.4,1.4-3.7,1.6-6.6
							c1.3,0,2.6,0,3.9,0c0,3,0,5.3,1.5,6.7C17.9,18,23.1,15.5,22.3,11.5z M8.6,12.9c-0.9,4.2-7.7,3.4-7.2-1.3c0.2-1.5,1.3-2.8,3-3.1
							C7,8.1,9.2,10.1,8.6,12.9z M8.8,9.5C8.2,9.3,7.9,8.6,7.2,8.2C5.9,7.5,3.8,7.6,2.5,8.5c0,0,0,0-0.1,0c0.7-1.7,0.9-4.6,1.9-6.2
							c1.1-1.8,4.3-1.3,4.6,1C9.2,5.5,8.5,7.5,8.8,9.5z M13.4,8c-1.3,0-2.6,0-3.9,0c0-0.8,0-1.6,0.1-2.3c1.2,0,2.5,0,3.7,0
							C13.5,6.4,13.4,7.2,13.4,8z M14.2,5.7c0-0.8-0.2-1.7-0.1-2.5c0.5-2.4,3.8-2.4,4.7-0.5c0.8,1.6,1,4.3,1.8,5.9
							c-0.7-0.3-1.6-0.8-2.7-0.8c-1.7,0-3,1.1-3.8,1.9C14.1,8.3,14.2,7,14.2,5.7z M21.6,12.7c-0.1,1-0.8,2-1.5,2.5c-2,1.4-5.3,0.3-5.8-2.2
							c-0.5-2.6,1.1-4,3-4.3C19.8,8.2,21.9,10,21.6,12.7z"/>
							</svg>
							<em>Tour virtual</em>
					</button>
				</li>
			</ul>
		</div>

		<ul class="list-unstyled lots-maps list-inline">
			<li class="row carmenere active">
				<div class="col-md-12">
					<?php if( get_field('lots_carmenere_map') ): ?>
						<img class="img-responsive" src="<?php the_field('lots_carmenere_map'); ?>" alt="">
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-lg-3 quote">
					<h3>
					<?php _e('
					<!--:es-->Carmenere<!--:-->
					<!--:en-->Carmenere<!--:-->
					<!--:fr-->Carmenere<!--:-->
					<!--:zh-->佳美娜<!--:-->');
					?>
					</h3>
					<p><?php the_field('lots_carmenere_content'); ?></p>
				</div>
			</li>
			<li class="row cabernet-sauvignon">
				<div class="col-md-12">
					<?php if( get_field('lots_cabernet_map') ): ?>
						<img class="img-responsive" src="<?php the_field('lots_cabernet_map'); ?>" alt="">
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-lg-3 quote">
					<h3>
					<?php _e('
					<!--:es-->Cabernet Sauvignon<!--:-->
					<!--:en-->Cabernet Sauvignon<!--:-->
					<!--:fr-->Cabernet Sauvignon<!--:-->
					<!--:zh-->赤霞珠<!--:-->');
					?>
					</h3>
					<p><?php the_field('lots_cabernet_content'); ?></p>
				</div>
			</li>
			<li class="row syrah">
				<div class="col-md-12">
					<?php if( get_field('lots_syrah_map') ): ?>
						<img class="img-responsive" src="<?php the_field('lots_syrah_map'); ?>" alt="">
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-lg-3 quote">
					<h3>
					<?php _e('
					<!--:es-->Syrah<!--:-->
					<!--:en-->Syrah<!--:-->
					<!--:fr-->Syrah<!--:-->
					<!--:zh-->西拉<!--:-->');
					?>
					</h3>
					<p><?php the_field('lots_syrah_content'); ?></p>
				</div>
			</li>
		</ul>
	</div>
</div>

</div>

</article>

<div class="modal fade modal-tour-virtual" id="modal-tour-aconcagua" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close-tour-virtual" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<iframe class="tour-virtual tour-aconcagua" src="http://ww2.arboledawines.cl/tour-virtual/tour-aconcagua/tour.html" frameborder="0"></iframe>
		</div>
	</div>
</div>

<div class="modal fade modal-tour-virtual" id="modal-tour-vertiente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close-tour-virtual" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<iframe class="tour-virtual" src="http://ww2.arboledawines.cl/tour-virtual/tour-vertiente/tour.html" frameborder="0"></iframe>
		</div>
	</div>
</div>

<?php get_footer(); ?>