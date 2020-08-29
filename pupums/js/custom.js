


$(document).ready(function(){
    
        $('.clients-logo-slider').slick({
	    speed: 5000,
		autoplay: true,
		autoplaySpeed: 0,
		cssEase: 'linear',
    slidesToShow: 6,
  	slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
  	centerMode: true,
    focusOnSelect: true,
	pauseOnHover: true,
		arrows: false,
        dots: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }

        },{
            breakpoint: 420,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }

        }]
    });
    
});

/* Back to top */

