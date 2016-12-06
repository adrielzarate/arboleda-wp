<?php
/*
Single Post Template: Post page
Description: This part is optional, but helpful for describing the Post Template
*/

get_header(); ?>
<article id="post">
	<div class="container">

		<div class="row">
			<div class="col-md-3 hidden-xs hidden-sm">
				<a class="next-prev-post" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"></a>
			</div>
			<div class="col-md-6">
				<header>
					<h1 class="text-center"><?php single_post_title(); ?></h1>
				</header>

				<?php if(get_field('post_main_slider')): ?>

					<div class="swiper-container">
						<div class="swiper-wrapper">

							<?php while(has_sub_field('post_main_slider')): ?>

								<div class="swiper-slide">
									<img src="<?php the_sub_field('post_main_slider_image'); ?>"/>
								</div>

							<?php endwhile; ?>

						</div>
						<div class="swiper-pagination"></div>
					</div>

				<?php else: ?>
					<figure class="featured-image">
						<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
					</figure>
				<?php endif; ?>
			</div>
			<div class="col-md-3 hidden-xs hidden-sm text-right">
				<a class="next-prev-post" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"></a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-10 col-sm-offset-1 quote text-right">
				<p><?php the_field('quote'); ?></p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-10 col-sm-offset-1">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				echo '<time class="pub-date">';
				the_date();
				echo '</time>';
				the_content();
				endwhile;
				?>

				<ul class="post-end-links list-unstyled">
					<?php if(get_field('post_newsletter_url')): ?>
						<li>
							<a class="arrow arrow-up-gray" href="<?php the_field('post_newsletter_url'); ?>">Newsletter</a>
						</li>
					<?php endif; ?>
					<li>
						<a class="arrow arrow-left-gray" href="<?php _e('<!--:es-->/noticias/<!--:--><!--:en-->/news/?lang=en<!--:--><!--:fr-->/nouvelles/?lang=fr<!--:-->'); ?>">
							<?php _e('
								<!--:es-->Volver a Noticias<!--:-->
								<!--:en-->Back to News<!--:-->
								<!--:fr-->Retour aux Nouvelles<!--:-->'); ?>
						</a>
					</li>

				</ul>

			</div>
		</div>

			<?php if(get_field('related_links')): ?>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 related-links">
						<h3>Links Relacionados</h3>

						<ul class="list-unstyled">

							<?php while(has_sub_field('related_links')): ?>

								<li>
									<a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
									<p><time><?php the_sub_field('link_date'); ?></time></p>
								</li>

							<?php endwhile; ?>

						</ul>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</article>
	<?php get_footer(); ?>
