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

	<div class="container" id="all">

		<div class="row">

			<?php
				$args = array('post_type'=>'post');
				$the_query = new WP_Query( $args );

				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$the_query = new WP_Query( 'cat=1&paged=' . $paged );

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

				<nav class="col-sm-12 blog-pagination">
					<?php

					$old_posts_lang = '';
					$new_posts_lang = '';

					if (qtranxf_getLanguage() == 'es'){
						$old_posts_lang = 'Entradas anteriores';
						$new_posts_lang = 'Entradas recientes';
					}
					elseif (qtranxf_getLanguage() == 'en'){
						$old_posts_lang = 'Older Entries';
						$new_posts_lang = 'Newer Entries';
					}
					elseif (qtranxf_getLanguage() == 'fr'){
						$old_posts_lang = 'Entrées plus anciennes';
						$new_posts_lang = 'Entrées plus récentes';
					}
					elseif (qtranxf_getLanguage() == 'zh'){
						$old_posts_lang = '稍早消息';
						$new_posts_lang = '';
					}

					next_posts_link( $old_posts_lang, $the_query->max_num_pages );
					previous_posts_link( $new_posts_lang );
					?>
				</nav>

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