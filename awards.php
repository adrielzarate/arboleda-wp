<?php
/*
Template Name: Awards
*/
?>

<?php get_header(); ?>

<article id="awards">

	<!-- Intro -->
	<div class="intro">
		<div>
			<h1><?php the_title(); ?></h1>
			<p>- <?php the_field('intro_subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">

	<?php if( have_rows('awarded_wine') ): ?>

		<?php while( have_rows('awarded_wine') ): the_row(); ?>

			<div id="<?php the_sub_field('awarded_wine_select'); ?>" class="position-flag"></div>

			<div class="row row-wine wine-award">

				<div class="col-md-3 bottle-container">
					<img class="bottle" src="<?php the_sub_field('awarded_wine_bottle'); ?>" alt="">
				</div>

				<div class="col-md-8">

					<h2 class="text-center"><?php the_sub_field('awarded_wine_name'); ?></h2>
					<h3 class="text-center"><?php the_sub_field('awarded_wine_place'); ?></h3>
					<a class="arrow arrow-down-gray download-pdf text-center" href="<?php the_sub_field('awarded_wine_year_pdf'); ?>">See All (PDF)</a>

					<?php if( have_rows('awarded_wine_year_gallery') ): ?>
						<div class="years-awards-container">
							<ul>
							<?php while( have_rows('awarded_wine_year_gallery') ): the_row(); ?>

								<li class="row swiper-slide" data-year="<?php the_sub_field('awarded_wine_year'); ?>">

									<?php if( have_rows('awards_gallery') ): ?>
										<div class="awards-container">
											<div class="swiper-wrapper">

											<?php while( have_rows('awards_gallery') ): the_row(); ?>
												<div class="swiper-slide">
													<img class="img-responsive" src="<?php the_sub_field('awards_gallery_picture'); ?>" alt="">
												</div>
											<?php endwhile; ?>

											</div>
										</div>
										<div class="col-xs-2 next-prev-menu">
											<div class="swiper-button-next"></div>
											<div class="swiper-button-prev"></div>
										</div>
									<?php endif; ?>
								</li>
							<?php endwhile; ?>
							</ul>
						</div>

					<?php endif; ?>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

	</div>
</article>

<?php get_footer(); ?>