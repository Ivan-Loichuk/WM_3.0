$(function() {
// Custom JS

//owl-carousel
$('.works').owlCarousel({
loop: true, //smooth and circular paging of pictures
nav: true, //navigation
smartSpeed: 700,
navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
responsiveClass: true,
autoplay:true, //autostart slider
smartSpeed:1000, //time of slide move
autoplayTimeout:5000, //time of slide change
responsive: {
	0: {
		items: 1
	},
	400: {
		items: 2
	},
	768: {
		items: 3
	},
	992: {
		items: 4
	}
}
});

//bootstrap-carousel
$('.carousel').carousel({
  interval: 5000
});
});

(function ($) {
    $(document).ready(function () {
        var $nav = $('.navscroll');
        var lastScrollTop = 0;
        var direction;
        $(function () {
            $(window).scroll(function () {
                var scrollTop = $(this).scrollTop();

                if (lastScrollTop < scrollTop && scrollTop > $nav.outerHeight() && direction != 'down') {
                    //Scroll down
                    $nav.stop().fadeOut();
                    direction = 'down';
                } else if (lastScrollTop > scrollTop  && direction != 'up') {
                    // Scroll up
                    $nav.stop().fadeIn();
                    direction = 'up';
                }
                lastScrollTop = scrollTop;
            });
        });
    });
}(jQuery));