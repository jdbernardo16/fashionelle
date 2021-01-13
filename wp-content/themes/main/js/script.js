  
$(document).ready(function() {
	app.init();
});

var app = {
	init: function() {
		var setup = this.setup;

		setup.menu();
		setup.frontpage();
		setup.aboutpage();
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


			$('.comments-hldr').slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
  				autoplaySpeed: 3000,
  				speed: 1000,
  				arrow: true
			});

			
		},

		aboutpage: function() {

			$('.abt_slider').slick({
				infinite: true,
				slidesToShow: 5,
				slidesToScroll: 1,
				autoplay: true,
  				autoplaySpeed: 5000,
			});

		}
	}
}