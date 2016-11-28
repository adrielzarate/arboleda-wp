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
			<p>- <?php the_field('subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">

		<div id="aconcagua-valley" class="position-flag"></div>
		<div class="row align-middle section" id="aconcagua-valley-content">
			<figure class="col-md-8" data-aos="fade-up" data-aos-once="true">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/the-aconcagua-valley.jpg" alt="The Aconcagua Valley">
				<figcaption>The snow-covered Mount Aconcagua, the highest peak in the western hemisphere, lends its name to the river that irrigates the valley below.</figcaption>
			</figure>
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true">
				<h2>The Aconcagua Valley</h2>
				<p>The Aconcagua Valley is located 100 km north of Santiago (Chile’s capital city) and it stretches all the way from the Andes to the Pacific Ocean. Two properties supply the exceptional grapes for Arboleda’s wines.</p>
				<p>The Chilhué property in Aconcagua Costa is directly influenced by the sea, just 12 km away, and is where our cool climate varieties are grown. The second property, Las Vertientes, is further inland in the Aconcagua’s Entre Cordilleras zone, 40 km from the coast where the red varieties with longer growing cycles are planted. The cold maritime winds that blow in from the sea cool the vineyards and allow the grapes to ripen slowly. This intensifies both elegance and freshness in Arboleda’s wines.</p>
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
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
						<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
						<div class="swiper-slide"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/aconcagua-costa.jpg" alt=""></div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>

			<div class="col-sm-4 text-center">
				<ul class="slider-references">
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
				</ul>
			</div>
		</div>

		<div id="las-vertientes" class="position-flag"></div>
		<div class="row col-3-mag section" id="las-vertientes-content">
			<div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-once="true">
				<h3>The Property</h3>
				<p>Arboleda’s Chilhué Vineyard is located in the Aconcagua Costa zone, and its westernmost point is only 12 km from the Pacific Ocean, which lends this terroir its cool climate characteristics. The 860 hectare property extends over 4 km from west to east. A vast extension of native forests, ravines and endemic wildlife surround 113 hectares of vineyards, all planted 100–200 meters above sea level and provide the grapes for Arboleda’s Sauvignon Blanc, Chardonnay and Pinot Noir.</p>
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/property.jpg" alt="">
			</div>
			<div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/climate.jpg" alt="">
				<h3>Climate</h3>
				<p>Chilhué’s maritime climate features mild, wet winters followed by long, cool and dry summers. The historic accumulated rainfall between January and December is 276 mm on average. Heat summation during the growing season (Oct–Apr) averages 1,230 degree days. The Humboldt Current bringsmasses of frigid water from the deep south, cooling the sea air that flows through the valley. This has a considerable impact on the climate of the vineyard, lowering the temperatures during the growing season and promoting morning fog. Its proximity to the coast also has an effect on winter temperatures, which are milder in comparison to those further inland, and as a consequence, the phenological stages of the vines start earlier.</p>
			</div>
			<div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-once="true"  data-aos-delay="400">
				<h3>Soils</h3>
				<p>The property’s unique soils are very diverse, and profiles vary with respect to the proportion of clay and loam in its texture as well as percentage of rocks, including schist in different stages of weathering. The terrain ranges from gently rolling hills to steep slopes, which affects soil depths (with fluctuations between 60 and 150 cm), capacity for water retention, exposure to sunlight, and ultimately, viticultural practices.</p>
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/soils.jpg" alt="">
			</div>

			<div class="col-sm-12 text-center quote quote-with-logo" data-aos="fade-up" data-aos-once="true">
				<p class="italic-highlighted">All of these factors result in spectacularly vibrant and elegant wines with the unique personality of each individual block, which lends great character and complexity to the final blend of each variety</p>
			</div>

			<div class="col-sm-12" id="lots" data-aos="fade-up" data-aos-once="true">

				<div class="lots-references">
					<h3>Lots Aconcagua Costa</h3>
					<ul class="list-unstyled click-list radio-lots">
						<li>
							<input id="chardonay" type="radio" name="lots" value="chardonay" checked>
							<label class="italic-highlighted" for="chardonay">Chardonay</label>
						</li>
						<li>
							<input id="suavignon-blanc" type="radio" name="lots" value="suavignon-blanc">
							<label class="italic-highlighted" for="suavignon-blanc">Suavignon Blanc</label>
						</li>
						<li>
							<input id="pinot-noir" type="radio" name="lots" value="pinot-noir">
							<label class="italic-highlighted" for="pinot-noir">Pinot Noir</label>
						</li>
						<li>
							<input id="all-lots" type="radio" name="lots" value="all-lots">
							<label class="italic-highlighted" for="all-lots">Ver todos los lotes</label>
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
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur excepturi quisquam quae. Ut quis dignissimos, earum quae praesentium tempora quam magni sapiente esse recusandae vitae explicabo numquam doloribus commodi!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, qui minus quo accusamus animi aliquam facilis quas doloribus quis, error totam unde ducimus deserunt laboriosam voluptatum non accusantium explicabo fuga.</p>
						</div>
					</li>
					<li class="row suavignon-blanc">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x-.jpg" alt="">
						</div>
						<div class="col-md-3 quote">
							<h3>Suavignon Blanc</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur excepturi quisquam quae. Ut quis dignissimos, earum quae praesentium tempora quam magni sapiente esse recusandae vitae explicabo numquam doloribus commodi!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, qui minus quo accusamus animi aliquam facilis quas doloribus quis, error totam unde ducimus deserunt laboriosam voluptatum non accusantium explicabo fuga.</p>
						</div>
					</li>
					<li class="row pinot-noir">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-x.jpg" alt="">
						</div>
						<div class="col-md-3 quote">
							<h3>Pinot Noir</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur excepturi quisquam quae. Ut quis dignissimos, earum quae praesentium tempora quam magni sapiente esse recusandae vitae explicabo numquam doloribus commodi!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, qui minus quo accusamus animi aliquam facilis quas doloribus quis, error totam unde ducimus deserunt laboriosam voluptatum non accusantium explicabo fuga.</p>
						</div>
					</li>
					<li class="row all-lots">
						<div class="col-md-12">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/vineyards/lots-chardonay.jpg" alt="">
						</div>
						<div class="col-md-3 quote">
							<h3>Todos los lotes</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur excepturi quisquam quae. Ut quis dignissimos, earum quae praesentium tempora quam magni sapiente esse recusandae vitae explicabo numquam doloribus commodi!</p>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>

</article>

<?php get_footer(); ?>