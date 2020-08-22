// var owl = $('.owl-carousel');
// owl.owlCarousel({
//
// 	center: true,
// 	items: 6,
// 	loop: true,
// 	margin: 10,
// 	autoplay: true,
// 	responsive: {
// 		0: {
// 			items: 1
// 		},
// 		600: {
// 			items: 2
// 		},
// 		1000: {
// 			items: 3
// 		}
// 	},
//
// 	autoplayTimeout: 3000,
//
//
//
// 	autoplayHoverPause: true
// });
// $('.play').on('click', function () {
// 	owl.trigger('play.owl.autoplay', [1000])
// });
// $('.stop').on('click', function () {
// 	owl.trigger('stop.owl.autoplay')
// });

// ***********


$(window).scroll(function (e) {
	// $("#nav").addClass('bg-red-700');

	let offsetRange = $(window).height() / 3,
		offsetTop = $(window).scrollTop() + offsetRange + $("#header").outerHeight(true),
		offsetBottom = offsetTop + offsetRange;

	$("#exporevideo").each(function () {
		let y1 = $(this).offset().top;
		let y2 = offsetTop;
		if (y1 + $(this).outerHeight(true) < y2 || y1 > offsetBottom) {
			this.pause();

		} else {
			this.play();

		}

	});
});
