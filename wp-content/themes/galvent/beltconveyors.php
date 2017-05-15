<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header-top.php'); ?>

<div class="bread_menu bread_menu_bg_img conveyors_page">	
	<div class="container pos-relative">
		<ul class="bread_menu__menu">
			<li class="bread_menu__link "><a href="/" class="bread_menu__link_bg">Главная</a></li>
			<li class="bread_menu__link"><span>Продукция</span></li>
		</ul>
		<a href="#modal__form_order" class="fancybox order_curcle_innerpage conveyors_page_circle">
			<span class="order_curcle__text toppadding">On-line</span>
			<span class="order_curcle__text">заявка</span>
		</a>
	</div>
</div>


<div class="container container_padding_top">
	<h2 class="h2 h2_dark beltconveyors__caption">Ленточные конвейеры</h2>

	<p class="beltconveyors__text">Прямые ленточные конвейеры являются самым распространенным и наиболее рентабельным оборудованием для перемещения продукции на производстве или складе в любой отрасли.</p>	
	<div class="beltconveyors__img_box beltconveyors__img_box_marginbot">
		<a href="#" class="beltconveyors__link"><img src="img/conv1.jpg" alt=""><span>Горизонтальные ленточные конвейеры</span></a>
		<a href="#" class="beltconveyors__link"><img src="img/conv2.jpg" alt=""><span>Наклонные ленточные конвейеры</span></a>
		<a href="#" class="beltconveyors__link"><img src="img/conv3.jpg" alt=""><span>Z-образные ленточные конвейеры</span></a>
		<a href="#" class="beltconveyors__link lastmarginoff"><img src="img/conv4.jpg" alt=""><span>Г- образные ленточные конвейеры</span></a>
	</div>
	
	<h2 class="h2 h2_dark beltconveyors__caption">Рольганги</h2>
	<p class="beltconveyors__text">Рольганг – оборудование для транспортировки штучных грузов разной тяжести на небольшие расстояния. Его используют для перемещения продукции внутри складского помещения, между цехами, а также для упрощения процесса погрузо-разгрузочных работ.</p>	
	<div class="beltconveyors__img_box">
		<a href="#" class="beltconveyors__link"><img src="img/conv5.jpg" alt=""><span>Прямые неприводные рольганги</span></a>
		<a href="#" class="beltconveyors__link"><img src="img/conv6.jpg" alt=""><span>Прямые приводные рольганги</span></a>
		<a href="#" class="beltconveyors__link"><img src="img/conv7.jpg" alt=""><span>Поворотный неприводной рольганг</span></a>
		<a href="#" class="beltconveyors__link lastmarginoff"><img src="img/conv8.jpg" alt=""><span>Поворотный приводной рольганг </span></a>
	</div>

	
</div>


<div class="container">
	<h2 class="h2 h2_dark beltconveyors__caption_form">Хотите сделать заказ?</h2>
	<span class="conveyors__subtext_form">Оставьте заявку через форму обратной связи</span>
	<div class="form_for_inner_page conveyors__marginbottom">
		<form action="#" method="post" class="js-submit">
			<div class="form_for_inner_page_box">
				<span class="for_input">Ваше ФИО:<i>*</i></span>
				<span class="input input_theme_rosa"><input type="text" class="input__control" name="uname" placeholder="Василий" required></span> 
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