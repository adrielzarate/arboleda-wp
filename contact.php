<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<article id="contact">

	<!-- Intro -->
	<div class="intro">
		<div>
			<h1><?php the_title(); ?></h1>
			<p>- <?php the_field('intro_subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">

		<div class="row horizontal-center equal-heights">
			<div class="col-md-3 contact">
				<h3><?php _e('
			            <!--:es-->Contacto<!--:-->
			            <!--:en-->Contact<!--:-->
			            <!--:fr-->Contact<!--:-->');
			          ?></h3>
				<p>Av. Nueva Tajamar 481</p>
				<p>Oficina 503, Torre Sur</p>
				<p><?php _e('
			            <!--:es-->Teléfono<!--:-->
			            <!--:en-->Phone<!--:-->
			            <!--:fr-->Téléphone<!--:-->');
			          ?> (56-2) 2339 9100</p>
			</div>
			<div class="col-md-3 contact">
				<h3>Francisco Bañados</h3>
				<p>Commercial Director</p>
				<p><a href="mailto:fbanados@chadwickwines.cl">fbanados@chadwickwines.cl</a></p>
			</div>
			<div class="col-md-3 contact">
				<h3>Cinthia Morabito</h3>
				<p>Marketing Manager</p>
				<p><a href="mailto:cmorabito@chadwickwines.cl">cmorabito@chadwickwines.cl</a></p>
			</div>
		</div>

	</div>
</article>

<?php get_footer(); ?>