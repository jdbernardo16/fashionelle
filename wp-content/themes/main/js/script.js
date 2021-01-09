  
$(document).ready(function() {
	app.init();
});

var app = {
	init: function() {
		var setup = this.setup;

		setup.menu();
		setup.frontpage();
	},


	setup: {

		menu: function() {
			$(window).on("scroll", function() {
			    if($(window).scrollTop() > 100 ) {
			          $('#header').addClass('scroll');
			    }
			    else {
			          $('#header').removeClass('scroll');
			    }
			});
		},

		frontpage: function() {


			$('.f1-slider').slick({
				infinite: true,
				slidesToShow: 2,
				slidesToScroll: 1,
				autoplay: true,
  				autoplaySpeed: 2000,
  				speed: 1000,
  				arrow: false
			});

			$('.product_slider-hldr').slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
  				autoplaySpeed: 5000,
			});
		}
	}
}