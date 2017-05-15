<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>
	
	<link rel="shortcut icon" href="favicon.png" />

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />	

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="block/h1/h1.css">
	<link rel="stylesheet" href="block/h2/h2.css">
	<link rel="stylesheet" href="block/main-menu/main-menu.css">
	<link rel="stylesheet" href="block/link/link.css">
	<link rel="stylesheet" href="block/telefone/telefone.css">
	<link rel="stylesheet" href="block/address/address.css">
	<link rel="stylesheet" href="block/button/style.css">
	<link rel="stylesheet" href="block/inputtext/style.css">
	<link rel="stylesheet" href="block/order/style.css">
	<link rel="stylesheet" href="block/textarea/style.css">
	<link rel="stylesheet" href="block/forms/style.css">
	<link rel="stylesheet" href="block/socials/socials.css">
	<link rel="stylesheet" href="block/q/q.css">
	<link rel="stylesheet" href="block/ul/ul.css">
	<link rel="stylesheet" href="block/rateandshare/style.css">
	<link rel="stylesheet" href="block/mape/mape.css">
	<link rel="stylesheet" href="block/mape/search.css">


	<link rel="stylesheet" href="css/style-db.css">
	<link rel="stylesheet" href="css/style-dc.css">
	<link rel="stylesheet" href="css/style-dd.css">
	<link rel="stylesheet" href="css/style-de.css">
	<link rel="stylesheet" href="css/style-df.css">
	<link rel="stylesheet" href="css/style-dg.css">
	<link rel="stylesheet" href="css/style-dh.css">
	<link rel="stylesheet" href="css/style-di.css">
	<link rel="stylesheet" href="css/style-dj.css">
	
	<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR" type="text/javascript"></script>
	<script type="text/javascript">
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
	</script>
	
	

</head>
<body>