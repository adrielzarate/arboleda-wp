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
			<p>- <?php the_field('subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>
	<div class="container">

		<div id="sustainability" class="position-flag"></div>
		<div class="row align-middle section" id="sustainability-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-4 text-right">
				<img class="sustainable-wine-logo" src="<?php bloginfo('template_url'); ?>/img/work/sustainable-wine.jpg" alt="sustainable wine logo">
				<h2>Sustaintability</h2>
				<br>
				<p>Viña Arboleda is certified under Chile’s National Code of Sustainability, which guarantees environmentally friendly practices and social responsibility with the surrounding communities.</p>
				<p>Within our sustainable philosophy we have focused in Integrated Vineyard Management to ensure sustainable practices, Efficient Water Use with the latest technology in irrigation systems, Recycling policies, and Efficient Energy Use to reduce energy consumption and the emission of greenhouse gases in our vineyard and winery installations.</p>
				<p>Our commitment to conserving biodiversity in the Aconcagua Valley includes actions such as retaining 1,450 hectares of virgin forest, protecting natural biological corridors, and preserving water in a 14-hectare reservoir.</p>
			</div>
			<div class="col-md-8">
				<img src="<?php bloginfo('template_url'); ?>/img/work/sustentability.jpg" alt="sustentability">
			</div>
		</div>

		<div class="row" data-aos="fade-up" data-aos-once="true">
			<div class="col-sm-12 text-center quote quote-with-logo">
				<p class="italic-highlighted">The results of a study conducted by the Chilean Institute for Biology and Biodiversity in 2011 showed that our properties have more than 65 types of birds, 8 different species of mammals and 96 species of plants, 41% of which are native to Chile.</p>
			</div>
		</div>

		<div class="row nature-pics equal-heights">

			<div class="col-md-4 vertical-distribution">

				<div class="row equal-heights hidden-sm" style="height: 55%; margin-bottom:20px;"  data-aos="fade-up" data-aos-once="true">
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
							<p class="hidden-element italic-highlighted phrase">Wild animals coexist within the vineyard.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-md-8 equal-heights"  data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
				<div class="hover-show nature-4 equal-heights">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-4.jpg" alt="nature-4">
					<p class="hidden-element italic-highlighted phrase">Ravines work as natural corridors of plant life in the valley and help minimize soil erosion caused by rain.</p>
				</div>
			</div>
		</div>

		<div class="row nature-pics equal-heights" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
			<div class="col-md-4 equal-heights">
				<div class="hover-show nature-5 equal-heights">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-5.jpg" alt="nature-5">
					<p class="hidden-element italic-highlighted phrase">The 800,000m3 reservoir supplied by the Aconcagua River is a resting place for migratory birds including the giant coot, pied-billed grebe and the white-necked cocoi heron that are difficult to find in other wetlands.</p>
				</div>
			</div>
			<div class="col-md-5 equal-heights" data-aos="fade-up" data-aos-once="true" data-aos-delay="150">
				<div class="hover-show nature-6 equal-heights">
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/work/nature-6.jpg" alt="nature-6">
					<p class="hidden-element italic-highlighted phrase">The native forest includes species such as quillay, boldo, peumo, litre, tevo, molle, sclerophyllous brush and cactus.</p>
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
				<h2>Winemaking</h2>
				<p>Viña Arboleda’s winemaking and viticultural team is committed to intervene the environment the least possible, allowing the vines to yield fruit with the purest expression of the terroir’s intrinsic characteristics.</p>
				<p>To produce Arboleda’s exceptional wines, the team closely follows the progress of the vines and fruit throughout the entire season to understand the terroir and be able to make accurate decisions, especially during the harvest period, which is key for grape health and analytics. Their meticulous work is fundamental to picking each lot at the precise time, avoiding degraded skins and obtaining moderate alcohol and good acidity levels.</p>
				<p>After the harvest, they very carefully select the grapes and use specific vinification processes with latest technologies for each lot, always focusing on maintaining the special characteristics of the grapes in every wine.</p>
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