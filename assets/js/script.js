jQuery(function ($) {

    'use strict';


	// Mean Menu

	$('.mean-menu').meanmenu({

		meanScreenWidth: "991"

	});

	

	// Others Option For Responsive JS

	$(".others-option-for-responsive .dot-menu").on("click", function(){

		$(".others-option-for-responsive .container .container").toggleClass("active");

	});

	

	$('.home-slider-4').slick({

        dots: true,

        infinite: true,

		autoplay: true,

		autoplaySpeed: 8000,

		fade: true,

        speed: 500,

        arrows: false,

        slidesToShow: 1,

        asNavFor: '.home-nav',

        slidesToScroll: 1,

        responsive: [

            {

                breakpoint: 576,

                settings: {

                    arrows: false,

                }

            },

        ]

    }).slickAnimation();



    $('.home-nav').slick({

        slidesToShow: 3,

        slidesToScroll: 1,

        asNavFor: '.home-slider-4',

        arrows: false,

        dots: false,

        focusOnSelect: true

    });

	





	// Portfolio Slider

	$('.portfolio-slider').owlCarousel({

		loop: true,

		margin: 20,

		nav: true,

		dots: false,

		autoplay: true,

		smartSpeed: 1000,

		autoplayHoverPause: true,

		navText: [

			"<i class='bx bx-chevron-left'></i>" ,

            "<i class='bx bx-chevron-right'></i>" ,

        ],  

		responsivee:{

			0:{ 

				items:1

			},

			570:{

				items:2

			},

			768:{

				items:2

			},

			992:{

				items:3

			},

			1200:{

				items:4

			}

		}

	});

	

	// Portfolio Slider

	$('.award-slider').owlCarousel({

		loop: true,

		margin: 20,

		nav: true,

		dots: true,

		autoplay: true,

		smartSpeed: 1000,

		autoplayHoverPause: true,

		navText: [

			"<i class='bx bx-chevron-left'></i>" ,

            "<i class='bx bx-chevron-right'></i>" ,

        ],  

		responsivee:{

			0:{ 

				items:1

			},

			570:{

				items:2

			},

			768:{

				items:2

			},

			992:{

				items:3

			},

			1200:{

				items:4

			}

		}

	});

	

	

	// Portfolio Slider

	$('.product-slider').owlCarousel({

		loop: true,

		margin: 20,

		nav: true,

		dots: true,

		autoplay: true,

		smartSpeed: 1000,

		autoplayHoverPause: true,

		navText: [

			"<i class='bx bx-chevron-left'></i>" ,

            "<i class='bx bx-chevron-right'></i>" ,

        ],  

		responsivee:{

			0:{ 

				items:1

			},

			570:{

				items:1

			},

			768:{

				items:2

			},

			992:{

				items:3

			},

			1200:{

				items:3

			}

		}

	});





	// Testimonials Slider

	$('.corporate-slider').owlCarousel({

		loop: true,

		margin: 20,

		nav: false,

		dots: true,

		autoplay: true,

		smartSpeed: 1000,

		autoplayHoverPause: true,

		responsivee:{

			0:{ 

				items:1

			},

			570:{

				items:1

			},

			768:{

				items:1

			},

			992:{

				items:1

			},

			1200:{

				items:1

			}

		}

	});

	

	//LightBox / Fancybox

	if($('.lightbox-image').length) {

		$('.lightbox-image').fancybox({

			openEffect  : 'fade',

			closeEffect : 'fade',

			helpers : {

				media : {}

			}

		});

	}

	

	// Go to Top

	$(function(){

		// Scroll Event

		$(window).on('scroll', function(){

			var scrolled = $(window).scrollTop();

			if (scrolled > 100) $('.go-top').addClass('active');

			if (scrolled < 100) $('.go-top').removeClass('active'); 

		});  

		// Click Event

		$('.go-top').on('click', function() {

			$("html, body").animate({ scrollTop: "0" },  100);

		});

	});

	// Preloader

	jQuery(window).on('load', function() {

		$('.loader-wrapper').addClass('preloader-deactivate');

	}) 

	

	

	// Odometer JS 

	$('.odometer').appear(function(e) {

		var odo = $(".odometer");

		odo.each(function() {

			var countNumber = $(this).attr("data-count");

			$(this).html(countNumber);

		});

	}); 

	$(document).ready(function() {

		$(".dropdown-toggle").dropdown();

	});

	new WOW().init();

	

}(jQuery));

