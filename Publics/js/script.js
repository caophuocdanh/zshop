$(document).ready(function(){
	// smoothwheel
	$("body").niceScroll();

	// auto hide
	$(window).scroll(function(){
		// scrolltop
		if ($(this).scrollTop() > $(window).height()/2) {
			$('#scrolltop').fadeIn();
		} else {
			$('#scrolltop').fadeOut();
		}
		// fixed sliderbar
		// var header = $('header').height();
		// var headerfix = $('header #fixed').height();
		// if ($(this).scrollTop() > 36) {
		// 	$('.slidebar #fixed').css({
		// 		'top':headerfix+20+'px'
		// 	});
		// 	$('.slidebar #fixed').addClass('fixed row');
		// } else {
		// 	$('.slidebar #fixed').css({
		// 		'top':'auto'
		// 	});
		// 	$('.slidebar #fixed').removeClass('fixed row');
		// }
		// // fixed header
		// if ($(this).scrollTop() > 36) {
		// 	$('header #fixed').css({
		// 		'top':'0',
		// 		'z-index':'99999'
		// 	});
		// 	$('header #fixed').addClass('fixed row');
		// } else {
		// 	$('.header #fixed').css({
		// 		'top':'auto'
		// 	});
		// 	$('header #fixed').removeClass('fixed row');
		// }
	});
	$('#scrolltop').click(function(){
		$('html, body').animate({scrollTop : 0}, 500);
		return false;
	});

	// 
	$('.bxslidermen').bxSlider({
		auto: true,
		mode: 'vertical',
		pause: 5000,
		speed: 2000,
		slideMargin: 0,
		startSlide:1,
	});
	$('.bxsliderwomen').bxSlider({
		auto: true,
		mode: 'horizontal',
		pause: 5000,
		speed: 2000,
		slideMargin: 0,
	});
	$('.hotbrand').bxSlider({
		auto: true,
		slideWidth: 150,
		minSlides: 2,
		maxSlides: 10,
		moveSlides: 1,
		slideMargin: 15,
		pause: 4000,
		speed: 1000
	});
	$('.sliderbrand').bxSlider({
		auto: true,
		slideWidth: 147,
		minSlides: 2,
		maxSlides: 10,
		moveSlides: 1,
		slideMargin: 5,
		pause: 4000,
		speed: 500,

	});
	$('.sliderthumb').bxSlider({
		mode: 'vertical',
		minSlides: 5,
		slideMargin: 5,
		moveSlides: 5,
		infiniteLoop:false,
		hideControlOnEnd:false
	});

	// 
	$('.media .sliderthumb img').mouseover(function() {
		$(this).each(
			function(){
				$('.media .image img').attr('src',$(this).prop('src'));
				//$('.media .image img').fadeOut(0).attr('src',$(this).prop('src')).fadeIn(100);
			}
		);
	});
});