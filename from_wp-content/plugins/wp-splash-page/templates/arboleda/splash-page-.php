<?php get_header(); ?>
	<section id="splash-page">
		<!-- Intro -->
		<div class="intro">
			<div>
				<div class="language-select-box">
					<img src="<?php bloginfo('template_url'); ?>/img/arboleda-logo-mobile.png" alt="Arboleda">
					<div class="age-msg">
						<p><a id="es" href="#">Soy mayor de 18 años</a></p>
						<p><a id="en" href="#">I am over 18 years old</a></p>
						<p><a id="fr" href="#">J' ai plus de 18 ans</a></p>
						<!-- <p><a id="ch" href="#">Soy mayor de 18 años (chino)</a></p> -->
					</div>
					<div>
						<!-- <small> Seleccione su idioma | Select your language | Choisissez votre langue </small> -->
						<?php if (function_exists('qts_language_menu') ) qts_language_menu('text'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?ver=3.3.7'></script>
<script>
	/**
	*
	* splash page scripts
	*
	*/

	// var url = 'http://www.arboledawines.com';
	var url = 'http://adrielzarate.com.ar';
	var langAttr;

	$(document).ready(function() {
		langAttr = $('#qts-lang-menu li a[hreflang="es"]').attr('href');
		$('#es').attr('href', langAttr);
		langAttr = $('#qts-lang-menu li a[hreflang="en"]').attr('href');
		$('#en').attr('href', langAttr);
		langAttr = $('#qts-lang-menu li a[hreflang="fr"]').attr('href');
		$('#fr').attr('href', langAttr);
		// langAttr = $('#qts-lang-menu li a[hreflang="ch"]').attr('href');
		// $('#ch').attr('href', langAttr);

		$('#splash-page .qts-lang-menu li').removeClass('current-menu-item');
		$('#splash-page .qts-lang-menu li:first-child a').attr("href", url);
		$('#splash-page .qts-lang-menu li:first-child a').attr("id", "wpsp-continue");
		$('#splash-page .qts-lang-menu li:first-child').addClass('current-menu-item');
		currentUrl = window.location.href;
		if (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0) {
			console.log('ie');
		}
	});

	$('#splash-page .qts-lang-menu li:first-child a').click(function(event) {
		event.preventDefault();
		if( currentUrl == url + '/es/' || currentUrl == url + '/es' || currentUrl == url + '/' || currentUrl == url ) {
			location.reload();
		} else {
			window.location.href = url + '/es/';
		}
	});
</script>
</body>
</html>