  
$(document).ready(function() {
	app.init();
});

var app = {
	init: function() {
		var setup = this.setup;

		setup.menu();
		setup.frontpage();
		setup.aboutpage();
		setup.productpage();
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

			/**
			* Header
			*/


			// $(document).ready(function() {
			// 	setTimeout(function(){
			// 		$('.loader').fadeOut();
			// 	}, 3000);
			// }); 

			$(document).ready(function(){
				$('#nav-icon1').click(function(){
					$(this).toggleClass('open');
					$('.m-menu-hldr').toggleClass('open');
				});
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

			$('.product-cntnr .featured-slick').slick({
				dots: true,
				infinite: false,
				speed: 300,
				mobileFirst: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 1025,
						settings: 'unslick'
					}
				]
			});


			$('.image-hldr .ig-slick').slick({
				dots: true,
				infinite: false,
				speed: 300,
				mobileFirst: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 1025,
						settings: 'unslick'
					}
				]
			});

			
		},

		aboutpage: function() {

			$('.abt_slider').slick({
				infinite: true,
				slidesToShow: 5,
				slidesToScroll: 1,
				autoplay: true,
  				autoplaySpeed: 5000,
  				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
					}
				]
			});

		},

		productpage: function() {
			new Vue({
			    el: '#tabs',
			    data: { activetab: 1 },
			});
		}
	}
}