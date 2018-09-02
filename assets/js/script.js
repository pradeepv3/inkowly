/*
	1. Multiple Carousel
	2. Counter
*/
var IOY = (typeof IOY !== 'undefined' && typeof IOY === "object") ? IOY : {};

(function ($) {
	// Element View port check
	$.fn.IsInViewport = function () {
		var elemTop = $(this).offset().top;
		var elemBottom = elemTop + $(this).outerHeight();
		var vpTop = $(window).scrollTop();
		var vpBottom = vpTop + $(window).height();
		return elemBottom > vpTop && elemTop < vpBottom;
	};

	// Multiple Carousel
	IOY.MultiCarousel = function () {
		var $scrollItem = $('.carousel[data-type="multi"] .carousel-item');
		$scrollItem.each(function () {
			var next = $(this).next();
			if (!next.length) {
				next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));

			for (var i = 0; i < 4; i++) {
				next = next.next();
				if (!next.length) {
					next = $(this).siblings(':first');
				}
				next.children(':first-child').clone().appendTo($(this));
			}
		});
	};

	// Scroll Counter
	IOY.Counter = function () {
		var a = 0;
		$(window).scroll(function () {
			var oTop = $('#counter').offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$('.sec-countdown_count').each(function () {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					}, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.floor(this.countNum));
						},
						complete: function () {
							$this.text(this.countNum);
						}
					});
				});
				a = 1;
			}
		});
	};

	// Progress Bar
	IOY.progressBar = function () {
		$(window).scroll(function () {
			if ($('#progress_bar').IsInViewport()) {
				//console.log('visisble');
				$('.progress-bar').css("width", function () {
					return $(this).attr('aria-valuenow') + "%";
				});
			}


		});
	};

	$(function () {

		var $multiItem = $('.carousel[data-type="multi"] .carousel-item');
		$multiItem.length && IOY.MultiCarousel();

		// Mobile menu toggle
		var $navbarToggle = $('.navbar-toggler');
		$navbarToggle.click(function () {
			if ($('body').hasClass('menu-open')) {
				$('body').removeClass('menu-open');
				$('.page-overlay').remove();
			} else {
				$('body').prepend('<div class="page-overlay"></div>');
				$('body').addClass('menu-open');
			}
		});

		// Mobile menu drop menu
		$('.nav-level-1 > a').click(function () {
			$('.nav-level-1').removeClass('parent-open')
		});

		$('.dropdown-item').click(function () {
			$(this).closest('.dropdown-menu').addClass('parent-open');
			$(this).closest('.nav-item').addClass('parent-open');
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

		$(".sec-ourwork-overlay").click(function () {
			$(this).parent().parent().find('.grouped_elements').trigger("click");
		});

		$('.fixed-top').length && $(window).scroll(function () {
			if ($(window).scrollTop() >= 250) {
				$('.fixed-top').addClass('bg-dark');
			} else {
				$('.fixed-top').removeClass('bg-dark');
			}
		});

		$('#move-top').length && $(window).scroll(function () {
			if ($(window).scrollTop() >= 250) {
				$('#move-top').show();
			} else {
				$('#move-top').hide();
			}
		});

		$('#move-top').click(function () {
			//$(window).scrollTop(0);
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
		});


		// FAQ Question scroll
		$('#faq_questions a').click(function (e) {
			console.log("sdfsfdsdfsf");
			e.preventDefault();
			var target = $($(this).attr('href'));
			if (target.length) {
				var scrollTo = target.offset().top;
				$('body, html').animate({
					scrollTop: scrollTo + 'px'
				}, 800);
			}
		});

		$(window).scroll(function () {
			if ($('.two-col-promo').length && $('.two-col-promo h3').IsInViewport()) {
				$('.two-col-promo h3').addClass($('.two-col-promo h3').attr('data-animate'));
			}
		});

		$('.sec-countdown_count').length && IOY.Counter();
		$('#progress_bar').length && IOY.progressBar();
	});
})(jQuery);