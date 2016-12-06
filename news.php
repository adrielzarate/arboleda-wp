<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>

<article id="news">

	<!-- Intro -->
	<div class="intro">
		<div>
			<h1><?php the_title(); ?></h1>
			<p>- <?php the_field('intro_subtitle'); ?> -</p>

			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">

		<div class="row">

			<?php
				$args = array('post_type'=>'post');
				$the_query = new WP_Query( $args );
				if( $the_query->have_posts() ):
			?>
				<?php
					while( $the_query->have_posts() ):
					$the_query->the_post();
				?>
					<article class="col-sm-6 col-md-4 text-center">
						<a href="<?php echo get_permalink(); ?>">
							<?php echo get_the_post_thumbnail(); ?>
							<h2><?php echo get_the_title(); ?></h2>
							<p><time class="italic-highlighted"><?php echo get_the_date('F j, Y'); ?></time></p>
							<p><?php echo get_the_excerpt(); ?></p>
							<p><em class="arrow arrow-up-gray">
					          <?php _e('
					          <!--:es-->Leer mas<!--:-->
					          <!--:en-->Read more<!--:-->
					          <!--:fr-->Lire la suite<!--:-->'); ?>
							</em></p>
						</a>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<h2>
		          <?php _e('
		          <!--:es-->No hay contenido cargado<!--:-->
		          <!--:en-->Not content<!--:-->
		          <!--:fr-->Pas de contenu<!--:-->'); ?>
				</h2>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

		</div>

	</div>
</article>

<?php get_footer(); ?>