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
			<p>- <?php the_field('subtitle'); ?> -</p>
			<button class="arrow arrow-down-white" id="down"></button>
		</div>
	</div>

	<div class="container">

		<div class="row horizontal-center equal-heights">
			<div class="col-md-3 contact">
				<h3>Contacto</h3>
				<p>Av. Nueva tajamar 481</p>
				<p>Oficina 503, Torre Sur</p>
				<p>Telefono (56-2) 2339 9100</p>
			</div>
			<div class="col-md-3 contact">
				<h3>Francisco Bañados</h3>
				<p>Commercial Director</p>
				<p>fbanados@chadwickwines.cl</p>
			</div>
			<div class="col-md-3 contact">
				<h3>Cinthia Morabito</h3>
				<p>Marketing Manager</p>
				<p>cmorabito@chadwickwines.cl</p>
			</div>
		</div>

	</div>
</article>

<?php get_footer(); ?>