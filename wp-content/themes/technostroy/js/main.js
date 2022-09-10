jQuery(function() {
	// Главный слайдер
	jQuery('.slider').slick({
		infinite: true,
		speed: 1000,
		fade: true,
		cssEase: 'linear',
	  	autoplay: true,
  		autoplaySpeed: 3000,
	});
	// Слайдер сотрудников
	jQuery('.staff-slider').slick({
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
	    {
	      breakpoint: 991,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
  	]
	});
	// Раскрытие/закрытие бургер меню

	jQuery('.burger-btn').on('click', function(){
		jQuery('.mobile-menu').toggleClass('hidden');
		jQuery('.burger-btn').toggleClass('burger-toggle');
		jQuery('body').toggleClass('overlay');
	});

	// Меню при скроле
	// var header = jQuery('header'),
	// 		scrollPrev = 0;

	// jQuery(window).scroll(function() {
	// 	var scrolled = jQuery(window).scrollTop();
	 
	// 	if ( scrolled > 85) {
	// 		header.addClass('out');
	// 	} else {
	// 		header.removeClass('out');
	// 	}
	// 	scrollPrev = scrolled;
	// });

	// Бургер меню

	jQuery('.burger-item').on("click", function(){
		jQuery('#menu').toggleClass('show');
	});

	// Плавный переход по ссылкам из шапки
    // jQuery("#menu").on("click","a", function (event) {
    //     event.preventDefault();
    //     var id  = jQuery(this).attr('href'),
    //         top = jQuery(id).offset().top;
    //     jQuery('body,html').animate({scrollTop: top}, 1500);
    // });

    var show = true;

    jQuery(window).on("scroll", function(){

    	if(!show) return false;

    	var w_top = jQuery(window).scrollTop();
    	var e_top = jQuery(".info-wrapper").offset().top - 600;

    	if(w_top >= e_top){
    		jQuery(".number-count").spincrement({
    			thousandSeparator: "",
    			duration: 2000
    		});

    		show = false;
    	}
    });
    jQuery(".tel").inputmask({"mask": "+7 (999) 999-9999"}); 
 	jQuery(".email").inputmask("email"); 

 	jQuery(".make-order").on("click", function(event){
 		event.preventDefault();
		jQuery('#modal').toggleClass('show');
		jQuery('body').toggleClass('overlay');
	});

 	jQuery(".close-btn").on("click", function(){
		var parentNode = jQuery(this).parent();
		parentNode.toggleClass('show');
		jQuery('body').toggleClass('overlay');
	});

	

});
