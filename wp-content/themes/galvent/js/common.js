
ymaps.ready(init);
var myMap, 
myPlacemark;

function init(){ 
	myMap = new ymaps.Map("map", {
		center: [55.75430171942093,37.762623379623356],
		zoom: 16,
		controls: []
	},
	{suppressMapOpenBlock: true}); 
	
	myPlacemark = new ymaps.Placemark([55.75430171942093,37.762623379623356], {
		hintContent: '',
		balloonContent: ''
	}, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      iconImageHref: 'img/map-ic.png',
      // Размеры метки.
      iconImageSize: [30, 35],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-5, -38]
  }
  );
	myMap.behaviors.disable('scrollZoom');
	myMap.geoObjects.add(myPlacemark);
}


$(document).ready(function(){

	$(".menu-button").click(function(){
		$(".toggle__menu").slideToggle(500);
	});
	
	$('.main-menu a[href^="#"]').click(function(){ 
		var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
		if($element.length == 1) { 
			$('html, body').animate({ scrollTop: $element.offset().top }, 500); 
		}     
		return false;
	});


	$(".menu-ico").click(function(){
		$('.main-menu').slideToggle(0);

	});
	$(".main-menu li a").click(function(){
        //$('.main-menu').slideToggle(0);
        
    });

	$('.js-phone').mask("+7(999)999-99-99?");

	$('a[data-name=modal]').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('href');
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		$('#mask').fadeTo("slow",0.8); 
		var winH = $(window).height();
		var winW = $(window).width();
		posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
		$(id).css('top',  posTop+50);
		$(id).css('left', winW/2-$(id).width()/2);
		$(id).fadeIn(500); 
	});
	$('.window .dd-close').click(function (e) {
		e.preventDefault();
		$('#mask, .window').hide();
		$('.window').hide();
	}); 

	$('#mask, .an-exit__krest').click(function () {
		$('#mask').hide();
		$('.window').hide();
	}); 

	



	/*MODAL SUBMIT*/
	$('.js-submit').submit(function(){
		var phone = $(this).find('input[name="phone"]');
		
		if(phone.val() == ""){
			phone.focus();
			return false;
		}

		else{
			var form_data = $(this).serialize(); 
			$.ajax({
				type: "POST", 
				url: "sendmessage.php", 
				data: form_data,
				success: function(form) {
					$('.js-window').hide();
					$("input[type=text]").val("");
					$("input[type=tel]").val("");
					$("textarea").val("");
					$('a[href=#modal__thanks]').trigger('click');
				// location = "thanks.php";
			}
		});
		}
		return false;
	});

	$('.callback-form').submit(function(){
		
		var phone = $(this).find('input[name="phone"]');
		
		if(phone.val() == ""){
			phone.focus();
			return false;
		}

		else{
			
			var form_data = $(this).serialize(); 
			alert(form_data);
			$.ajax({
				type: "POST", 
				url: "/sendmessage.php", 
				data: form_data,
				success: function(form) {
					$('.js-window').hide();
					$("input[type=text]").val("");
					$("input[type=tel]").val("");
					$("textarea").val("");
					$('a[href=#modal__thanks]').trigger('click');
				// location = "thanks.php";
			}
		});
		}
		return false;
	});


	function cleanTnanks(form){
		$('.js-window').hide();
		$("input[type=text]").val("");
		$("input[type=tel]").val("");
		$("textarea").val("");
		$('a[href=#modal__thanks]').trigger('click');
				// location = "thanks.php";
			};

	





			var owl2 = $(".examples__slider");
			owl2.owlCarousel({
				loop:true,
				nav:true, 
				autoplay:false,
				smartSpeed:1000,
				margin:0,
				mouseDrag:false,
				touchDrag: false,
        center:false,     //если нужны обрезаные края
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
        	0:{
        		items:1
        	},      
        	990:{
        		items:1
        	},  
        	1248:{
        		items:1
        	}
        }
    });


			$('#reviewStars-input label').on('click', function(){
				var x = $(this).attr('for');		
				x = parseInt(x.match( /\d/g))+1;
				$('.rate_block__nums i').text(x);		
			});



			$('.menu-button').click(function(){
				if (!$(this).hasClass('menu-active')){
					$(this).addClass('menu-active');
					$('.main-menu').slideDown(300)
				} else {
					$(this).removeClass('menu-active');
					$('.main-menu').slideUp(300)
				}
			});

			$(".fancybox").fancybox({
				fitToView	: false,
				closeClick	: false,
				openEffect	: 'true',
				closeEffect	: 'true'
			});

			$("a[data-fancybox-group=group]").fancybox({
				'transitionIn' : 'none',
				'transitionOut' : 'none',
				'titlePosition' : 'over',
				'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			$('.examples__look_more').on('click', function(){				
				if ($(this).text() == 'скрыть') {
					$(this).text('смотреть еще работы');
					$('.examples__height').css('max-height', '1950px');
				}else{
					$(this).text('скрыть');
					$('.examples__height').css('max-height', 'unset');
				}
			});
		});



$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	});
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});
});



 		$(document).ready(function() {
 			// $("head").append('<link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic" rel="stylesheet">');
 			$("head").append("<link href='//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css' rel='stylesheet'>");
 		}); 
 		