<?php
/*
Template Name: thanks
*/
?>

<?php get_header(); ?>

<article id="thanks">
	<!-- Intro -->
	<div class="intro">
		<div>
			<h1><?php the_title(); ?></h1>
			<p><em><?php the_field('intro_subtitle'); ?></em></p>
			<p><a href="<?php echo get_home_url(); ?>"><?php the_field('return_message'); ?></a></p>
		</div>
	</div>
</article>

<?php get_footer(); ?>