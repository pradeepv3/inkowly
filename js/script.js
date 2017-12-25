/*
	1. Multiple Carousel
	2. Counter 
*/
var IOY = (typeof IOY !== 'undefined' && typeof IOY  === "object") ? IOY : {};
(function($){

	// Element View port check
	$.fn.IsInViewport = function() {
		var elemTop = $(this).offset().top;
		var elemBottom = elemTop + $(this).outerHeight();
		var vpTop = $(window).scrollTop();
		var vpBottom = vpTop + $(window).height();

		return elemBottom > vpTop && elemTop < vpBottom;
	};

	// Multiple Carousel
	IOY.MultiCarousel = function(){
		var $scrollItem = $('.carousel[data-type="multi"] .item');
		$scrollItem.each(function(){
			var next = $(this).next();
			if (!next.length) {
				next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));

			for (var i=0;i<4;i++) {
				next=next.next();
				if (!next.length) {
					next = $(this).siblings(':first');
				}
				next.children(':first-child').clone().appendTo($(this));
			}
		});
	};
	
	IOY.Counter = function(){
		var a = 0;
		$(window).scroll(function() {
			var oTop = $('#counter').offset().top - window.innerHeight;
			if(a == 0 && $(window).scrollTop() > oTop ) {
				$('.sec-countdown_count').each(function(){
					var $this = $(this),
					countTo = $this.attr('data-count');
					$({countNum: $this.text()}).animate(
						{countNum: countTo},
						{
							duration: 2000,
							easing: 'swing',
							step: function() {
								$this.text(Math.floor(this.countNum));
							},
							complete: function() {
								$this.text(this.countNum);
							}
						}
						);
				});
				a= 1;
			}
		});
	};

	IOY.progressBar = function(){
		$(window).scroll(function() {
			if($('#progress_bar').IsInViewport()){
				console.log('visisble');
				$('.progress-bar').css("width",function(){
				return $(this).attr('aria-valuenow') +"%";
			});
			}
			
			
		});
	};

	// Progress Bar
	// Counter 
	$(function(){
		var $multiItem = $('.carousel[data-type="multi"] .item');
		$multiItem.length && IOY.MultiCarousel();

		var $navbarToggle = $('.navbar-toggle');
		$navbarToggle.click(function(){
		  if($('body').hasClass('menu-open')){$('body').removeClass('menu-open');}else{
		    $('body').addClass('menu-open');
		  }
		});

		var $mixUp = $('#work_filter');
		$mixUp.length && $mixUp.mixItUp({
		    load: {
		      filter: 'all'
		    }
		});


		$("a.grouped_elements").fancybox({
			padding: '0'
		});

		$(".sec-ourwork-overlay").click(function(){
			$(this).parent().parent().find('.grouped_elements').trigger("click");
		});

		$('.navbar-fixed-top').length && $(window).scroll(function() {
			if( $(window).scrollTop() >= 100 ) {
				$('.navbar-fixed-top').addClass('nav-dark');
			}
			else {
				$('.navbar-fixed-top').removeClass('nav-dark');
			}
		});

		$('.sec-countdown_count').length && IOY.Counter();
		$('#progress_bar').length && IOY.progressBar();
	});
})(jQuery);