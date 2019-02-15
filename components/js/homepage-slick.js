$(document).ready(function(){
	$('.carousel').slick({
		dots: true,
		infinite: true,
		slidesToShow: 1,
		slideToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000
	});
	$('.partner-slider').slick({
		infinite: true,
		slidesToShow: 5,
		slideToScroll: 1
	});
	$('.comment-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slideToScroll: 1
	});
	$('.vantagem-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slideToScroll: 1
	});
});