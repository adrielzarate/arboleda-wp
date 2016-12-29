<?php

/**
 *
 * Wordpress Functions File
 *
 */

/**
*
* STYLES
*
*/
function styles_load() {
	wp_enqueue_style( 'bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontAwesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'swiper',get_template_directory_uri() . '/vendors/swiper/css/swiper.min.css' );
	wp_enqueue_style( 'unslider',get_template_directory_uri() . '/vendors/unslider/css/unslider.css' );
	wp_enqueue_style( 'unslider-dots',get_template_directory_uri() . '/vendors/unslider/css/unslider-dots.css' );
	wp_enqueue_style( 'aos',get_template_directory_uri() . '/vendors/aos/css/aos.css' );
	wp_enqueue_style( 'aos',get_template_directory_uri() . '/vendors/aos/css/aos.css' );
	wp_enqueue_style( 'google_fonts','https://fonts.googleapis.com/css?family=Cinzel:400,700|PT+Serif:400,400i,700,700i' );
	wp_enqueue_style( 'styles',get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'styles_load' );

/**
*
* SCRIPTS
*
*/
function scripts_load() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4', true);
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false, '3.3.7', true);
	wp_register_script('swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.min.js', array(), '3.4.0', true);
	wp_register_script('unslider',get_template_directory_uri() . '/vendors/unslider/js/unslider-min.js', array('jquery'), null, true);
	wp_register_script('aos',get_template_directory_uri() . '/vendors/aos/js/aos.js', array(), null, true);
	wp_register_script('scrollmagic','//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), null, true);
	// wp_register_script('indicators','//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array(), null, true);
	wp_register_script('tweenMax',get_template_directory_uri() . '/vendors/scrollmagic/greensock/TweenMax.min.js', array('scrollmagic'), null, true);
	wp_register_script('gsap',get_template_directory_uri() . '/vendors/scrollmagic/animation.gsap.min.js', array('scrollmagic'), null, true);
	wp_register_script('iscroll',get_template_directory_uri() . '/vendors/scrollmagic/iscroll-probe.js', array('scrollmagic'), null, true);
	wp_register_script('visible',get_template_directory_uri() . '/vendors/jquery.visible/jquery.visible.min.js', array('jquery'), null, true);

	wp_enqueue_script('common_scripts',get_template_directory_uri() . '/js/scripts.js', array('jquery','bootstrap','swiper','unslider','aos','scrollmagic','tweenMax','gsap','iscroll','visible'), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'scripts_load' );

/**
*
* MENUS
*
*/
require_once('functions/wp_bootstrap_navwalker.php');

function register_custom_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ),
			'lang-menu' => __( 'Lang Menu' )
			)
		);
}
add_action( 'init', 'register_custom_menus' );

function my_language_class_names($classes) {
	$classes[] = 'currentLang-' . qtranxf_getLanguage();
	return $classes;
}
add_filter('body_class','my_language_class_names');

/**
*
* WIDGETS
*
*/
function add_widgets_area() {
	register_sidebar( array(
		'name'          => __( 'Not found area', 'arboleda' ),
		'id'            => 'not-found-area',
		'description'   => __( 'Area for 404 page', 'arboleda' ),
		'before_widget' => '<h1>',
		'after_widget' => '</h1>',
		'before_title' => '',
		'after_title' => ''
		) );
}
add_action( 'widgets_init', 'add_widgets_area' );

//NOT FOUND WIDGET
require_once(get_template_directory().'/functions/not_found_widget.php');
function register_custom_widgets() {
	register_widget('not_found_widget');
}
add_action('widgets_init', 'register_custom_widgets');


function custom_excerpt_length( $length ) {
	return 37;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_theme_support( 'post-thumbnails' );

?>