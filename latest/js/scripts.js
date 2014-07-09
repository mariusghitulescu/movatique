/*
** Limit menu number of lists
*/
var full_width = 0;
 
jQuery("nav ul:first > li").each(function( index ) {    
	if((jQuery(this).width() + full_width) > 430) {
		jQuery(this).remove();
	}
	full_width = full_width + jQuery(this).width(); 
});

/*
** Testimonials
*/
jQuery(document).ready(function($) {
	$('#foo4').carouFredSel({
		responsive: true,
		width: '100%',
		scroll: 2,
		prev: '.testimonials-navigation-prev',
		next: '.testimonials-navigation-next',
		items: {
			width: 800,
			visible: {
				min: 1,
				max: 6
			}
		}
	});
});

/*
** Similar Articles
*/
jQuery(document).ready(function($) {
	$('#foo5').carouFredSel({
		responsive: true,
		auto: true,
		width: '100%',
		scroll: 2,
		prev: '.similar-articles-navigation-prev',
		next: '.similar-articles-navigation-next',
		items: {
			width: 800,
			visible: {
				min: 1,
				max: 6
			}
		}


	});
});

/*
** Responsive Menu
*/
jQuery(document).ready(function($) {
	$('.openresponsivemenu').click(function() {
		$('nav').toggleClass("responsivemenu");
	});
});

/*
** carouFredSel
*/
jQuery(document).ready(function($) {

	$('#foo2').carouFredSel({
		auto: true,
		prev: '#prev2',
		next: '#next2',
		responsive: true,
		mousewheel: true,
		swipe: {
			onMouse: true,
			onTouch: true
		}
	});
});

/*
** FancyBox
*/
jQuery(document).ready(function($) {
	$(".fancybox").fancybox();
});

/*
** Masonry
*/
jQuery(document).ready(function($) {

	var $container = $('.gallery');
	  
	$container.imagesLoaded( function(){
		$container.masonry({
			itemSelector : 'dl.gallery-item'
		});
	});
  
});

/*
** Add "margin-top" at Pricing Column
*/
jQuery(document).ready(function($) {
	$(".pricing-column").last().css("margin-right","30px");
});