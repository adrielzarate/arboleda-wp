<?php
/*
Template Name: Wines
*/
?>

<?php get_header(); ?>

<article id="wines">

	<!-- Intro -->
	<div class="intro">
		<div>
			<h1><?php the_title(); ?></h1>
			<p>- <?php the_field('intro_subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">
		<!-- sauvigon-blanc -->
		<div id="sauvignon-blanc" class="position-flag"></div>
		<div class="row row-wine section" id="sauvignon-blanc-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 col-md-push-9 horizontal-center">
				<img class="bottle img-responsive" src="<?php bloginfo('template_url'); ?>/img/wines/sauvigon-blanc-bottle.png" alt="">
			</div>
			<div class="col-md-9 col-md-pull-3 wine-info">
				<div class="decorator-img"></div>
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Sauvignon Blanc</h2>
						<h3><?php the_field('sauvignon_blanc_place'); ?></h3>
						<?php if(get_field('sauvignon_blanc_data_sheet')): ?>
							<div class="download-tecnical-info">
								<span>
						          <?php _e('
						          <!--:es-->Ficha Técnica<!--:-->
						          <!--:en-->Technical Sheet<!--:-->
						          <!--:fr-->Fiche Technique<!--:-->'); ?>
								</span>
								<ul class="list-inline">
									<?php while(has_sub_field('sauvignon_blanc_data_sheet')): ?>
										<li>
											<a href="<?php the_sub_field('sauvignon_blanc_file'); ?>" target="_blank"><?php the_sub_field('sauvignon_blanc_file_year'); ?></a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-5">
						<p><?php the_field('sauvignon_blanc_content'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- chardonnay -->
		<div id="chardonnay" class="position-flag"></div>
		<div class="row row-wine section" id="chardonnay-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 horizontal-center">
				<img class="bottle img-responsive" src="<?php bloginfo('template_url'); ?>/img/wines/chardonnay-bottle.png" alt="">
			</div>
			<div class="col-md-9 wine-info">
				<div class="decorator-img"></div>
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>chardonnay</h2>
						<h3><?php the_field('chardonnay_place'); ?></h3>
						<?php if(get_field('chardonnay_data_sheet')): ?>
							<div class="download-tecnical-info">
								<span>
						          <?php _e('
						          <!--:es-->Ficha Técnica<!--:-->
						          <!--:en-->Technical Sheet<!--:-->
						          <!--:fr-->Fiche Technique<!--:-->'); ?>
								</span>
								<ul class="list-inline">
									<?php while(has_sub_field('chardonnay_data_sheet')): ?>
										<li>
											<a href="<?php the_sub_field('chardonnay_file'); ?>" target="_blank"><?php the_sub_field('chardonnay_file_year'); ?></a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-5">
						<p><?php the_field('chardonnay_content'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- pinot noir -->
		<div id="pinot-noir" class="position-flag"></div>
		<div class="row row-wine section" id="pinot-noir-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 horizontal-center">
				<img class="bottle img-responsive" src="<?php bloginfo('template_url'); ?>/img/wines/pinot-noir-bottle.png" alt="">
			</div>
			<div class="col-md-9 wine-info">
				<div class="decorator-img"></div>
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Pinot Noir</h2>
						<h3><?php the_field('pinot_noir_place'); ?></h3>
						<?php if(get_field('pinot_noir_data_sheet')): ?>
							<div class="download-tecnical-info">
								<span>
								<?php _e('
									<!--:es-->Ficha Técnica<!--:-->
									<!--:en-->Technical Sheet<!--:-->
									<!--:fr-->Fiche Technique<!--:-->'); ?>
								</span>

								<ul class="list-inline">
									<?php while(has_sub_field('pinot_noir_data_sheet')): ?>
										<li>
											<a href="<?php the_sub_field('pinot_noir_file'); ?>" target="_blank"><?php the_sub_field('pinot_noir_file_year'); ?></a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-5">
						<p><?php the_field('pinot_noir_content'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- carmenere -->
		<div id="carmenere" class="position-flag"></div>
		<div class="row row-wine section" id="carmenere-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 col-md-push-9 horizontal-center">
				<img class="bottle img-responsive" src="<?php bloginfo('template_url'); ?>/img/wines/carmenere-bottle.png" alt="">
			</div>
			<div class="col-md-9 col-md-pull-3 wine-info">
				<div class="decorator-img"></div>
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Carmenere</h2>
						<h3><?php the_field('carmenere_place'); ?></h3>
						<?php if(get_field('carmenere_data_sheet')): ?>
							<div class="download-tecnical-info">
								<span>
								<?php _e('
									<!--:es-->Ficha Técnica<!--:-->
									<!--:en-->Technical Sheet<!--:-->
									<!--:fr-->Fiche Technique<!--:-->'); ?>
								</span>
								<ul class="list-inline">
									<?php while(has_sub_field('carmenere_data_sheet')): ?>
										<li>
											<a href="<?php the_sub_field('carmenere_file'); ?>" target="_blank"><?php the_sub_field('carmenere_file_year'); ?></a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-5">
						<p><?php the_field('carmenere_content'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- cabernet -->
		<div id="cabernet-sauvignon" class="position-flag"></div>
		<div class="row row-wine section" id="cabernet-sauvignon-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 horizontal-center">
				<img class="bottle img-responsive" src="<?php bloginfo('template_url'); ?>/img/wines/cabernet-sauvignon-bottle.png" alt="">
			</div>
			<div class="col-md-9 wine-info">
				<div class="decorator-img"></div>
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Cabernet Sauvignon</h2>
						<h3><?php the_field('cabernet_place'); ?></h3>
						<?php if(get_field('cabernet_data_sheet')): ?>
							<div class="download-tecnical-info">
								<span>
								<?php _e('
									<!--:es-->Ficha Técnica<!--:-->
									<!--:en-->Technical Sheet<!--:-->
									<!--:fr-->Fiche Technique<!--:-->'); ?>
								</span>
								<ul class="list-inline">
									<?php while(has_sub_field('cabernet_data_sheet')): ?>
										<li>
											<a href="<?php the_sub_field('cabernet_file'); ?>" target="_blank"><?php the_sub_field('cabernet_file_year'); ?></a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-5">
						<p><?php the_field('cabernet_content'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- syrah -->
		<div id="syrah" class="position-flag"></div>
		<div class="row row-wine section" id="syrah-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 col-md-push-9 horizontal-center">
				<img class="bottle img-responsive" src="<?php bloginfo('template_url'); ?>/img/wines/syrah-bottle.png" alt="">
			</div>
			<div class="col-md-9 col-md-pull-3 wine-info">
				<div class="decorator-img"></div>
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Syrah</h2>
						<h3><?php the_field('syrah_place'); ?></h3>
						<?php if(get_field('syrah_data_sheet')): ?>
							<div class="download-tecnical-info">
								<span>
						          <?php _e('
						          <!--:es-->Ficha Técnica<!--:-->
						          <!--:en-->Technical Sheet<!--:-->
						          <!--:fr-->Fiche Technique<!--:-->'); ?>
								</span>
								<ul class="list-inline">
									<?php while(has_sub_field('syrah_data_sheet')): ?>
										<li>
											<a href="<?php the_sub_field('syrah_file'); ?>" target="_blank"><?php the_sub_field('syrah_file_year'); ?></a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-5">
						<p><?php the_field('syrah_content'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>