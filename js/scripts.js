var windowHeight;
var windowWidth;
var windoScrollTop;
var windoScrollUp;
var windoScrollDown;
var inHome;
var isMobile;
var awardsSlidesNmbr;
var scene1;
var scene2;
var scrollmagicHeight;
var introTitleInit;
var introTitleEnd;
var arbolEnd;
var parrasInit;
var parrasEnd;
var hojaInit;
var hojaEnd;
var tierraInit;
var tierraEnd;
var endingInit;
var endingEnd;
var aboutHeight;
var scrollDistance;
var selectedCheckbox;

/**
*
* common scripts
*
*/

// if element is visible on screen
function detectVisibility() {

	if ( $('#philosophy').visible() ) {
		$(".submenu a").removeClass('active');
		$(".philosophy-lnk a").addClass('active');
	} else if ( $('#founder').visible() ) {
		$(".submenu a").removeClass('active');
		$(".founder-lnk a").addClass('active');
	} else if ( $('#team').visible() ) {
		$(".submenu a").removeClass('active');
		$(".team-lnk a").addClass('active');
	} else if ( $('#aconcagua-valley').visible() ) {
		$(".submenu a").removeClass('active');
		$(".aconcagua-valley-lnk a").addClass('active');
	} else if ( $('#chilhue-vineyard').visible() ) {
		$(".submenu a").removeClass('active');
		$(".chilhue-vineyard-lnk a").addClass('active');
	} else if ( $('#las-vertientes').visible() ) {
		$(".submenu a").removeClass('active');
		$(".las-vertientes-lnk a").addClass('active');
	} else if ( $('#sustainability').visible() ) {
		$(".submenu a").removeClass('active');
		$(".sustainability-lnk a").addClass('active');
	} else if ( $('#viticulture').visible() ) {
		$(".submenu a").removeClass('active');
		$(".viticulture-lnk a").addClass('active');
	} else if ( $('#chardonnay').visible() ) {
		$(".submenu a").removeClass('active');
		$(".chardonnay-lnk a").addClass('active');
	} else if ( $('#sauvignon-blanc').visible() ) {
		$(".submenu a").removeClass('active');
		$(".sauvignon-blanc-lnk a").addClass('active');
	} else if ( $('#pinot-noir').visible() ) {
		$(".submenu a").removeClass('active');
		$(".pinot-noir-lnk a").addClass('active');
	} else if ( $('#carmenere').visible() ) {
		$(".submenu a").removeClass('active');
		$(".carmenere-lnk a").addClass('active');
	} else if ( $('#cabernet-sauvignon').visible() ) {
		$(".submenu a").removeClass('active');
		$(".cabernet-sauvignon-lnk a").addClass('active');
	} else if ( $('#syrah').visible() ) {
		$(".submenu a").removeClass('active');
		$(".syrah-lnk a").addClass('active');
	} else if ( $('#chardonnay-awards').visible() ) {
		$(".submenu a").removeClass('active');
		$(".chardonnay-awards-lnk a").addClass('active');
	} else if ( $('#sauvignon-blanc-awards').visible() ) {
		$(".submenu a").removeClass('active');
		$(".sauvignon-blanc-awards-lnk a").addClass('active');
	} else if ( $('#pinot-noir-awards').visible() ) {
		$(".submenu a").removeClass('active');
		$(".pinot-noir-awards-lnk a").addClass('active');
	} else if ( $('#carmenere-awards').visible() ) {
		$(".submenu a").removeClass('active');
		$(".carmenere-awards-lnk a").addClass('active');
	} else if ( $('#cabernet-sauvignon-awards').visible() ) {
		$(".submenu a").removeClass('active');
		$(".cabernet-sauvignon-awards-lnk a").addClass('active');
	} else if ( $('#syrah-awards').visible() ) {
		$(".submenu a").removeClass('active');
		$(".syrah-awards-lnk a").addClass('active');
	} else {
		$(".submenu a").removeClass('active');
	}
}

// get max height value
var getMaxHeightEl = function (element) {

	var heights = $(element).map( function () {
		return $(this).height();
	}).get();

	return Math.max.apply(null, heights);
}

// scroll to specific point
function scrollTo(dest, fromNav) {

	scrollDistance = $(dest).offset().top;
	$('.submenu a').removeClass('active');
	$(dest + '-lnk a').addClass('active');

	if(!fromNav) {
		$('.submenu a').removeClass('active');
	}

	if(fromNav == 'firstLook') {
		clickFromIntro = true;
		$('html, body').animate({ scrollTop: scrollDistance }, 2000 );
		return;
	}

	$('html, body').animate({ scrollTop: scrollDistance }, 1000);
}

// detect when user stops scrolling
$.fn.scrollEnd = function(callback, timeout) {

  $(this).scroll(function(){
    var $this = $(this);
    if ($this.data('scrollTimeout')) {
      clearTimeout($this.data('scrollTimeout'));
    }
    $this.data('scrollTimeout', setTimeout(callback,timeout));
  });
};

function killParallax() {

	scene1.destroy();
	scene2.destroy();
	scene1 = null;
	scene2 = null;
	controller = null;
	tween = null;
	introAnimationFlag = false;

	if(clickFromIntro) {
		// else if im scrolling from the same intro page
		$(window).bind('scroll');
		setTimeout(function(){
			$('.intro-parallax').remove();
			window.scroll(0, 0);
			$('.black-wall').fadeOut(250, function() {
				$(this).remove();
			});
			AOS.init();
		}, 500);
	} else {
		// else if i am coming from other different to intro page
		var goingTo = windoScrollTop - scrollmagicHeight;
		if( goingTo > windowHeight ) {
			goingTo += 70;
		}
		$('.intro-parallax').remove();
		window.scroll(0, goingTo );
		setTimeout(function(){
			$('.black-wall').fadeOut(250, function() {
				$(this).remove();
			});
			AOS.init();
		}, 800);
	}
}

function init() {

	windowHeight = $(window).height();
	windowWidth = $(window).width();
	$('.intro').height(windowHeight);
	$('#home-start').height(windowHeight);
	windoScrollTop = $(window).scrollTop();
	aboutHeight = $('#about').height();

	inHome = $( "body" ).hasClass( "home" ) ? true : false;

	isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|android|ipad|playbook|silk|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

	if (isMobile) {
		$('body').addClass('isMobile');
	} else {
		$('body').addClass('isDesktop');
	}

	if ( windowWidth > 991 ) {

		var inHeader = false;

		//main site navigation
		$('.main-nav > li > a').mouseenter(function() {
			$('.submenu').addClass('hidden');
			$(this).next('.submenu').removeClass('hidden');
		});

		$('body > header').mouseenter(function() {
			inHeader = true;
		});

		$('body > header').mouseleave(function() {
			inHeader = false;
			setTimeout(function() {
				if( !inHeader ) $('.submenu').addClass('hidden');
			}, 1000);
		});

		awardsSlidesNmbr = 2;
	} else if ( windowWidth <= 991 &&  windowWidth > 480 ) {
		awardsSlidesNmbr = 2;
	} else if ( windowWidth <= 480 ) {
		awardsSlidesNmbr = 1;
	}

	if ( inHome && $( 'body' ).hasClass( 'isDesktop' ) ) {

		introTitleInit = windowHeight * 0;
		introTitleEnd = windowHeight * (-.6);
		arbolInit = windowHeight * (-.15);
		arbolEnd = windowHeight * (-.6);
		parrasInit = windowHeight * .3;
		parrasEnd = windowHeight * (-1);
		hojaInit = windowHeight * 1.2;
		hojaEnd = windowHeight * (-.6);
		tierraInit = windowHeight * 3;
		tierraEnd = windowHeight * (-.1);

		var controller = new ScrollMagic.Controller();

		// home parallax
		var tween = new TimelineMax ()
		.add([

			TweenMax.fromTo("#intro-title", 1,
				{backgroundPosition: "0 " + introTitleInit + "px" },
				{backgroundPosition: "0 " + introTitleEnd + "px"}),

			TweenMax.fromTo("#arbol", 1,
				{backgroundPosition: "0 " + arbolInit + "px" },
				{backgroundPosition: "0 " + arbolEnd + "px"}),

			TweenMax.fromTo("#parras", 1,
				{backgroundPosition: "0 " + parrasInit + "px" },
				{backgroundPosition: "0 " + parrasEnd + "px"}),

			TweenMax.fromTo("#hoja", 1,
				{backgroundPosition: "0 " + hojaInit + "px" },
				{backgroundPosition: "0 " + hojaEnd + "px"}),

			TweenMax.fromTo("#tierra", 1,
				{backgroundPosition: "0 " + tierraInit + "px" },
				{backgroundPosition: "0 " + tierraEnd + "px"}),

		]);

		scene1 = new ScrollMagic.Scene({
			triggerElement: "#trigger-start",
			triggerHook: "onLeave",
			duration: '600%',
			offset: 0})
		.setTween(tween)
		.setPin("#home-start")
		// .addIndicators({name: "1"})
		.addTo(controller);

		/* . */

		var endingTween = new TimelineMax ()
		.add([
			TweenMax.fromTo("#ending", 1,
				{opacity: 0 },
				{opacity: 1 }),
		]);

		scene2 = new ScrollMagic.Scene({
			triggerElement: "#trigger-ending",
			triggerHook: "onLeave",
			duration: '80%',
			offset: (windowHeight * 5.5) })
		.setTween(endingTween)
		// .addIndicators({name: "2"})
		.addTo(controller)
		.on("end", function (event) {
			killParallax();
		});
	}

	if ( $( 'body' ).hasClass( 'isMobile' ) ) {
		var homeStartH = (windowWidth * 1622 ) / 1400;
		$('#home-start').css( 'min-height', homeStartH );
	}

	$('.hover-show .phrase').each(function() {
		var thisHeight = $( this ).outerHeight(),
		thisWidth = $( this ).outerWidth();
		$( this ).css({
			marginTop: -(thisHeight/2),
			marginLeft: -(thisWidth/2)
		});
	});

	detectVisibility();
}

init();

$(window).resize(function() {
	init();
});

// events at scroll
var lastScrollTop = 0;
if( inHome ) {
	scrollmagicHeight = $('#about').offset().top;
}

$(window).scroll( function() {

	detectVisibility();
	windoScrollTop = $(this).scrollTop();

	var $this = $(this);
	$('#top').addClass('hidden');

	if ($this.scrollTop() > 120) {
		$('body > footer').css({
			bottom: -70,
		});
	} else {
		$('body > footer').css({
			bottom: 0,
		});
	}

	if( windoScrollTop + windowHeight >= $(document).height() - 120 ) {
		$('body > footer').css({
			bottom: 0,
		});
		$('#top').removeClass('hidden');
	}

	if (windoScrollTop > lastScrollTop){
		windoScrollUp = false;
		windoScrollDown = true;
	} else {
		windoScrollUp = true;
		windoScrollDown = false;
	}
	lastScrollTop = windoScrollTop;

    if ( windoScrollTop > 50 ){
    	$('#intro-title').removeClass('visible');
    } else {
    	$('#intro-title').addClass('visible');
    }
});

var introAnimationFlag = true;
var clickFromIntro = false;

$(window).scrollEnd(function(){
    // if( windoScrollDown && inHome && introAnimationFlag && windoScrollTop < windowHeight && !isMobile ) {
    if( windoScrollDown && inHome && introAnimationFlag && !isMobile ) {
    	scrollTo( '#about', 'firstLook' );
    	$(window).unbind('scroll');
    }
}, 100);

// scrollTo triggers
//ABOUT
$(".philosophy-lnk a").click( function(){scrollTo('#philosophy', true )} );
$(".founder-lnk a").click( function(){scrollTo( '#founder', true )} );
$(".team-lnk a").click( function(){scrollTo( '#team', true )} );

//VINEYARDS
$(".aconcagua-valley-lnk a").click( function(){scrollTo( '#aconcagua-valley', true )} );
$(".chilhue-vineyard-lnk a").click( function(){scrollTo( '#chilhue-vineyard', true )} );
$(".las-vertientes-lnk a").click( function(){scrollTo( '#las-vertientes', true )} );

//WORK
$(".sustainability-lnk a").click( function(){scrollTo( '#sustainability', true )} );
$(".viticulture-lnk a").click( function(){scrollTo( '#viticulture', true )} );

//WINES
$(".chardonnay-lnk a").click( function(){scrollTo( '#chardonnay', true )} );
$(".sauvignon-blanc-lnk a").click( function(){scrollTo( '#sauvignon-blanc', true )} );
$(".pinot-noir-lnk a").click( function(){scrollTo( '#pinot-noir', true )} );
$(".carmenere-lnk a").click( function(){scrollTo( '#carmenere', true )} );
$(".cabernet-sauvignon-lnk a").click( function(){scrollTo( '#cabernet-sauvignon', true )} );
$(".syrah-lnk a").click( function(){scrollTo( '#syrah', true )} );

//AWARDS
$(".chardonnay-awards-lnk a").click( function(){scrollTo( '#chardonnay-awards', true )} );
$(".sauvignon-blanc-awards-lnk a").click( function(){scrollTo( '#sauvignon-blanc-awards', true )} );
$(".pinot-noir-awards-lnk a").click( function(){scrollTo( '#pinot-noir-awards', true )} );
$(".carmenere-awards-lnk a").click( function(){scrollTo( '#carmenere-awards', true )} );
$(".cabernet-sauvignon-awards-lnk a").click( function(){scrollTo( '#cabernet-sauvignon-awards', true )} );
$(".syrah-awards-lnk a").click( function(){scrollTo( '#syrah-awards', true )} );

$("#top").click( function(){scrollTo( 'body', false )} );
$("#down").click( function(){scrollTo( '.intro + div', false )} );

$("#startDown").click( function(){
	scrollTo( '#about', 'firstLook' );
} );

/**
*
* splash page scripts
*
*/

$(document).ready(function() {
	$('#splash-page .qts-lang-menu li').removeClass('current-menu-item');
	$('#splash-page .qts-lang-menu li:first-child a').attr("href", "http://adrielzarate.com.ar/");
	$('#splash-page .qts-lang-menu li:first-child a').attr("id", "wpsp-continue");
	$('#splash-page .qts-lang-menu li:first-child').addClass('current-menu-item');
	currentUrl = window.location.href;
	if (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0) {
		console.log('ie');
	}
});

$('#splash-page .qts-lang-menu li:first-child a').click(function(event) {
	event.preventDefault();
	if( currentUrl == 'http://adrielzarate.com.ar/es/' || currentUrl == 'http://adrielzarate.com.ar/es' || currentUrl == 'http://adrielzarate.com.ar/' || currentUrl == 'http://adrielzarate.com.ar' ) {
		location.reload();
	} else {
		window.location.href = 'http://adrielzarate.com.ar/es/';
	}
});

/**
*
* vineyards page scripts
*
*/

// Lots selector
$('.radio-lots input').on('change', function() {
	selectedCheckbox = $(this).val();
	$(this).parents().eq(2).next('.lots-maps').find('li').removeClass('active');
	$(this).parents().eq(2).next('.lots-maps').find('li.' + selectedCheckbox).addClass('active');
});

/**
*
* awards page scripts
*
*/
$(".awards-container").each(function(){
	var $this = $(this);
	var swiper = new Swiper(this, {
		nextButton: $this.siblings('.next-prev-menu').find(".swiper-button-next"),
		prevButton: $this.siblings('.next-prev-menu').find(".swiper-button-prev"),
		slidesPerView: awardsSlidesNmbr,
		paginationClickable: true,
		spaceBetween: 30
	});
});

$('.years-awards-container').unslider({
	arrows: false
});

var yearsArray = [];
$('.years-awards-container > ul > .swiper-slide').each(function() {
	yearsArray.push( $( this ).data('year') );
});

$('.unslider-nav').find('li').html('');
$('.unslider-nav li').each(function(index) {
	$( this ).html( '<div class="year">' + yearsArray[index] + '</div>' );
});

/**
*
* plugins
*
*/

// show elements at enter in viewport
AOS.init();

// image slide gallery
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