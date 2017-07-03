var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	autoplay: 2500,
	loop: true,
	autoplayDisableOnInteraction: false
});

$('.slider-references li:first-child').addClass('active');

swiper.on('slideChangeStart', function () {
	$('.slider-references li.active').removeClass('active');
});

swiper.on('slideChangeEnd', function () {
	var currentSlide = $('.swiper-slide-active').data("swiper-slide-index");
	$('.slider-references li:eq(' + currentSlide + ')').addClass('active');
});