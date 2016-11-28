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
			<p>- <?php the_field('subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">
		<!-- chardonnay -->
		<div id="chardonnay" class="position-flag"></div>
		<div class="row row-wine section" id="chardonnay-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 horizontal-center">
				<img class="bottle img-responsive" src="img/wines/chardonnay-bottle.png" alt="">
			</div>
			<div class="col-md-9 wine-info">
				<div class="decorator-img"></div>
				<!-- <img class="hidden-xs" src="img/wines/chardonnay-img.jpg" alt=""> -->
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>chardonnay</h2>
						<h3>Aconcagua Costa</h3>
						<div class="download-tecnical-info">
							<span>Ficha Técnica</span>
							<ul class="list-inline">
								<li>
									<a href="#">2013</a>
								</li>
								<li>
									<a href="#">2014</a>
								</li>
								<li>
									<a href="#">2015</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<p>Every vintage of this wine stands out for its great elegance and complexity. The grapes for this Chardonnay come from selected blocks in the Chilhué Vineyard that are characterized by the high content of weathered schist-type rock, which gives the wine a uniquely mineral character.</p>
						<p>The property’s natural soil, climate and topographical conditions lend the wine vivid acidity that stands in perfect balance with the structure, weight and subtle creaminess given by the fermentation and aging in previously used French barrels.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- sauvigon-blanc -->
		<div id="suavignon-blanc" class="position-flag"></div>
		<div class="row row-wine section" id="suavignon-blanc-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 col-md-push-9 horizontal-center">
				<img class="bottle img-responsive" src="img/wines/sauvigon-blanc-bottle.png" alt="">
			</div>
			<div class="col-md-9 col-md-pull-3 wine-info">
				<div class="decorator-img"></div>
				<!-- <img class="hidden-xs" src="img/wines/sauvigon-blanc-img.jpg" alt=""> -->
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Sauvignon Blanc</h2>
						<h3>Aconcagua Costa</h3>
						<div class="download-tecnical-info">
							<span>Ficha Técnica</span>
							<ul class="list-inline">
								<li>
									<a href="#">2013</a>
								</li>
								<li>
									<a href="#">2014</a>
								</li>
								<li>
									<a href="#">2015</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sit libero totam omnis, asperiores amet similique! Enim sapiente beatae velit, nobis, placeat rem impedit ducimus porro sit, ea fugit esse.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ipsa, quidem accusamus, ab itaque veritatis doloremque possimus qui doloribus soluta quae ipsam, officia corrupti. Odio aliquam, voluptatem facilis quae reiciendis.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- pinot noir -->
		<div id="pinot-noir" class="position-flag"></div>
		<div class="row row-wine section" id="pinot-noir-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 horizontal-center">
				<img class="bottle img-responsive" src="img/wines/pinot-noir-bottle.png" alt="">
			</div>
			<div class="col-md-9 wine-info">
				<div class="decorator-img"></div>
				<!-- <img class="hidden-xs" src="img/wines/pinot-noir-img.jpg" alt=""> -->
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Pinot Noir</h2>
						<h3>Aconcagua Costa</h3>
						<div class="download-tecnical-info">
							<span>Ficha Técnica</span>
							<ul class="list-inline">
								<li>
									<a href="#">2013</a>
								</li>
								<li>
									<a href="#">2014</a>
								</li>
								<li>
									<a href="#">2015</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sit libero totam omnis, asperiores amet similique! Enim sapiente beatae velit, nobis, placeat rem impedit ducimus porro sit, ea fugit esse.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ipsa, quidem accusamus, ab itaque veritatis doloremque possimus qui doloribus soluta quae ipsam, officia corrupti. Odio aliquam, voluptatem facilis quae reiciendis.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- carmenere -->
		<div id="carmenere" class="position-flag"></div>
		<div class="row row-wine section" id="carmenere-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 col-md-push-9 horizontal-center">
				<img class="bottle img-responsive" src="img/wines/carmenere-bottle.png" alt="">
			</div>
			<div class="col-md-9 col-md-pull-3 wine-info">
				<div class="decorator-img"></div>
				<!-- <img class="hidden-xs" src="img/wines/carmenere-img.jpg" alt=""> -->
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Carmenere</h2>
						<h3>Aconcagua entre Cordilleras</h3>
						<div class="download-tecnical-info">
							<span>Ficha Técnica</span>
							<ul class="list-inline">
								<li>
									<a href="#">2013</a>
								</li>
								<li>
									<a href="#">2014</a>
								</li>
								<li>
									<a href="#">2015</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sit libero totam omnis, asperiores amet similique! Enim sapiente beatae velit, nobis, placeat rem impedit ducimus porro sit, ea fugit esse.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ipsa, quidem accusamus, ab itaque veritatis doloremque possimus qui doloribus soluta quae ipsam, officia corrupti. Odio aliquam, voluptatem facilis quae reiciendis.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- cabernet -->
		<div id="cabernet-sauvignon" class="position-flag"></div>
		<div class="row row-wine section" id="cabernet-sauvignon-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 horizontal-center">
				<img class="bottle img-responsive" src="img/wines/cabernet-sauvignon-bottle.png" alt="">
			</div>
			<div class="col-md-9 wine-info">
				<div class="decorator-img"></div>
				<!-- <img class="hidden-xs" src="img/wines/cabernet-sauvignon-img.jpg" alt=""> -->
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Cabernet</h2>
						<h3>Aconcagua entre Cordilleras</h3>
						<div class="download-tecnical-info">
							<span>Ficha Técnica</span>
							<ul class="list-inline">
								<li>
									<a href="#">2013</a>
								</li>
								<li>
									<a href="#">2014</a>
								</li>
								<li>
									<a href="#">2015</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sit libero totam omnis, asperiores amet similique! Enim sapiente beatae velit, nobis, placeat rem impedit ducimus porro sit, ea fugit esse.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ipsa, quidem accusamus, ab itaque veritatis doloremque possimus qui doloribus soluta quae ipsam, officia corrupti. Odio aliquam, voluptatem facilis quae reiciendis.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- syrah -->
		<div id="syrah" class="position-flag"></div>
		<div class="row row-wine section" id="syrah-content" data-aos="fade-up" data-aos-once="true">
			<div class="col-md-3 col-md-push-9 horizontal-center">
				<img class="bottle img-responsive" src="img/wines/syrah-bottle.png" alt="">
			</div>
			<div class="col-md-9 col-md-pull-3 wine-info">
				<div class="decorator-img"></div>
				<!-- <img class="hidden-xs" src="img/wines/syrah-img.jpg" alt=""> -->
				<div class="row">
					<div class="col-sm-7 text-center">
						<h2>Syrah</h2>
						<h3>Aconcagua entre Cordilleras</h3>
						<div class="download-tecnical-info">
							<span>Ficha Técnica</span>
							<ul class="list-inline">
								<li>
									<a href="#">2013</a>
								</li>
								<li>
									<a href="#">2014</a>
								</li>
								<li>
									<a href="#">2015</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sit libero totam omnis, asperiores amet similique! Enim sapiente beatae velit, nobis, placeat rem impedit ducimus porro sit, ea fugit esse.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ipsa, quidem accusamus, ab itaque veritatis doloremque possimus qui doloribus soluta quae ipsam, officia corrupti. Odio aliquam, voluptatem facilis quae reiciendis.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide"><img class="img-responsive" src="img/vineyards/aconcagua-costa.jpg" alt=""></div>
		<div class="swiper-slide"><img class="img-responsive" src="img/vineyards/aconcagua-costa.jpg" alt=""></div>
		<div class="swiper-slide"><img class="img-responsive" src="img/vineyards/aconcagua-costa.jpg" alt=""></div>
	</div>
	<div class="swiper-pagination"></div>
</div>

<?php get_footer(); ?>