<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header-top.php'); ?>

<div class="bread_menu bread_menu_bg_img conveyors_page">	
	<div class="container pos-relative">
		<ul class="bread_menu__menu">
			<li class="bread_menu__link "><a href="/" class="bread_menu__link_bg">Главная</a></li>
			<li class="bread_menu__link"><span>Наше производство</span></li>
		</ul>
		<a href="#modal__form_order" class="fancybox order_curcle_innerpage conveyors_page_circle">
			<span class="order_curcle__text toppadding">On-line</span>
			<span class="order_curcle__text">заявка</span>
		</a>
	</div>
</div>


<div class="container container_padding_top">
	<h2 class="h2 h2_dark ourindustry__caption">Наше производство</h2>

	<p class="beltconveyors__text ourindustry__padding">Компания <strong>ПТО Галвент</strong> специализируется на проектировании, производстве и монтаже конвейерного оборудования любой сложности и для любых отраслей промышленности. На заводе компании <strong>«ПТО Галвент»</strong> производство конвейеров и конвейерных систем максимально отработано и автоматизировано, что позволяет держать невысокую стоимость конвейера. </p>
	<p class="beltconveyors__text ourindustry__padding">Мы используем в производстве установку лазерного раскроя материалов, гибочные прессы и <strong>токарные станки с ЧПУ</strong>. Завод гарантирует качество выпускаемой продукции, благодаря обязательному техническому контролю выпуска как составных частей, так и готового оборудования. Результатом нашей работы является надежная в эксплуатации техника, в процессе монтажа которой не возникает сложностей. 
	</p>	

	<div class="ourindustry__img_box">
		<a href="img/ourindustry1.jpg" class="ourindustry__link" data-fancybox-group="group"><img src="img/ourindustry1.jpg" alt=""></a>
		<a href="img/ourindustry2.jpg" class="ourindustry__link" data-fancybox-group="group"><img src="img/ourindustry2.jpg" alt=""></a>
		<a href="img/ourindustry3.jpg" class="ourindustry__link" data-fancybox-group="group"><img src="img/ourindustry3.jpg" alt=""></a>
		<a href="img/ourindustry4.jpg" class="ourindustry__link" data-fancybox-group="group"><img src="img/ourindustry4.jpg" alt=""></a>
		<a href="img/ourindustry5.jpg" class="ourindustry__link" data-fancybox-group="group"><img src="img/ourindustry5.jpg" alt=""></a>
		<a href="img/ourindustry6.jpg" class="ourindustry__link" data-fancybox-group="group"><img src="img/ourindustry6.jpg" alt=""></a>
	</div>

	
</div>


<div class="container">
	<h2 class="h2 h2_dark beltconveyors__caption_form">Желаете сделать заказ?</h2>
	<span class="conveyors__subtext_form">Свяжитесь с нами через форму обратной связи</span>
	<div class="form_for_inner_page conveyors__marginbottom">
		<form action="#" method="post" class="js-submit">
			<div class="form_for_inner_page_box">
				<span class="for_input">Ваше ФИО:<i>*</i></span>
				<span class="input input_theme_rosa"><input type="text" class="input__control"  name="uname" placeholder="Василий" required></span> 
			</div>
			<div class="form_for_inner_page_box">
				<span class="for_input">Телефон:<i>*</i></span>
				<span class="input input_theme_rosa"><input type="tel" class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>
			</div>
			<div class="form_for_inner_page_box last_box">
				<span class="for_input">E-mail:<i>*</i></span>
				<span class="input input_theme_rosa"><input type="email" class="input__control" name="email" placeholder="vasiliy@mail.ru" required></span> 
			</div>
			<div class="clear"></div>
			<span class="for_input for_input_margintop">Комментарий:<i>*</i></span>
			<textarea name="message" class="message message_theme_rosa" placeholder="Текст комментария"></textarea>

			
			<span class="conveyors__submit"><input type="submit"></span>
		</form>
	</div>
</div>



<?php require_once('includes/footer.php'); ?>

	
</body>
</html>