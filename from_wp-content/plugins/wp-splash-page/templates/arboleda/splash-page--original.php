<?php get_header(); ?>
	<section id="splash-page">
		<!-- Intro -->
		<div class="intro">
			<div>
				<img src="<?php bloginfo('template_url'); ?>/img/arboleda-logo-mobile.png" alt="Arboleda">
				<div class="age-msg">
					<p>Soy mayor de 18 años</p>
					<p>I am over 18 years old</p>
					<p>Soy maire de 18 ans</p>
				</div>
				<div>
					<small> Seleccione su idioma | Select your language | Choisissez votre langue </small>
					<?php if (function_exists('qts_language_menu') ) qts_language_menu('text'); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>