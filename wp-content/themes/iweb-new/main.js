var $ = jQuery;

$(function() {

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/iweb-moscow/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Мы свяжемся с вами в ближайшее время!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	
});


$(document).ready(function(){
    $(function(){
      $('a[href^="#"]').on('click', function(event) {
        // отменяем стандартное действие
        event.preventDefault();
        
        var sc = $(this).attr("href"),
            dn = $(sc).offset().top;
        /*
        * sc - в переменную заносим информацию о том, к какому блоку надо перейти
        * dn - определяем положение блока на странице
        */
        
        $('html, body').animate({scrollTop: dn}, 1000);
        
        /*
        * 1000 скорость перехода в миллисекундах
        */
      });
    });
    
    $('.counter').each(function() {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 2500,
        easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
    
    $('.slider-projects').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 2,
      arrows: true,
      prevArrow: '<i class="fa fa-chevron-left slider-arrow slider-arrow__left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-chevron-right slider-arrow slider-arrow__right" aria-hidden="true"></i>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    
    $('.slider-permission').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      arrows: true,
      prevArrow: '<i class="fa fa-chevron-left slider-arrow slider-arrow__left" aria-hidden="true"></i>',
      nextArrow: '<i class="fa fa-chevron-right slider-arrow slider-arrow__right" aria-hidden="true"></i>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
});