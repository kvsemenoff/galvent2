<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header-top.php'); ?>

<div class="bread_menu bread_menu_bg_img conveyors_page">	
	<div class="container pos-relative">
		<ul class="bread_menu__menu">
			<li class="bread_menu__link "><a href="/" class="bread_menu__link_bg">Главная</a></li>
			<li class="bread_menu__link"><span>О компании</span></li>
		</ul>
		<a href="#modal__form_order" class="fancybox order_curcle_innerpage conveyors_page_circle">
			<span class="order_curcle__text toppadding">On-line</span>
			<span class="order_curcle__text">заявка</span>
		</a>
	</div>
</div>

<div class="about">
	<div class="container">
		<h2 class="h2 h2_dark">О компании</h2>
		<span class="about__descr">Почему стоит покупать оборудование у ПТО Галвент?</span>
		<ul class="ul">
			<li class="ul__point">наша компания имеет в своем составе собственное конструкторское бюро с профессиональными инженерами-конструкторами, поэтому мы различные типы конвейеров, которые точно соответствуют всем требованиям определенного производства, а также высоким нормам и стандартам качества и безопасности;</li>
			<li class="ul__point">стоимость конвейера от нашей компании будет приемлемой, ведь мы являемся производителем, а значит – избегаем дополнительных наценок;</li>
			<li class="ul__point">оборудование изготавливается из собственных деталей и узлов, качественные характеристики которых проверены, подтверждены и обеспечивают надежность конвейера, а также его длительный рабочий ресурс;</li>
			<li class="ul__point">у нас вы можете заказать конвейер, дополнительно укомплектованный всем необходимым для вашего производства оборудованием;</li>
			<li class="ul__point">при необходимости, мы также осуществляем монтаж транспортера прямо на производстве;</li>
			<li class="ul__point">наш коллектив состоит из высококвалифицированных опытных специалистов, всегда готовых предоставить вам профессиональную консультацию;</li>
			<li class="ul__point">опыт, профессионализм, а также оптимизация производства и грамотное распределение ресурсов позволяют нам изготавливать конвейеры в максимально сжатые сроки по минимальной цене.</li>
		</ul>
		<p class="q q_grey">Приглашаем к сотрудничеству потенциальных заказчиков. Мы поставляем  оборудование своим заказчикам со всей России. Наши специалисты готовы оказать необходимую высококвалифицированную консультацию по решению Ваших задач!</p>
		<span class="about__descr">Фото с нашего производства:</span>
		<div class="about__photos-block clearfix">
			<div class="about__photo">
				<a class="fancybox photo" href="img/about__photo-1.jpg" data-fancybox-group="gallery">
					<img src="img/about__photo-1.jpg" alt="" />
				</a>
			</div>
			<div class="about__photo">
				<a class="fancybox photo" href="img/about__photo-2.jpg" data-fancybox-group="gallery">
					<img src="img/about__photo-2.jpg" alt="" />
				</a>
			</div>
			<div class="about__photo">
				<a class="fancybox photo" href="img/about__photo-3.jpg" data-fancybox-group="gallery">
					<img src="img/about__photo-3.jpg" alt="" />
				</a>
			</div>
		</div>
		<p class="about__text">Чтобы купить  конвейер, рассчитать его стоимость или получить консультацию специалиста, просто свяжитесь с нами по телефону, указанному на сайте или используйте форму обратной связи.</p>
		<span class="about__order-title">Желаете сделать заказ?</span>
		<span class="about__order-descr">Свяжитесь с нами через форму обратной связи</span>
		<div class="form_for_inner_page">
			<form action="#" method="post" class="form1">
				<div class="form_for_inner_page_box">
					<label for="uname" class="for_input">Ваше ФИО:<i>*</i></label>
					<span class="input input_theme_rosa"><input type="text" class="input__control" id="uname" name="uname" placeholder="Василий" required></span> 
				</div>
				<div class="form_for_inner_page_box">
					<label for="phone" class="for_input">Телефон:<i>*</i></label>
					<span class="input input_theme_rosa"><input type="tel" id="phone" class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>
				</div>
				<div class="form_for_inner_page_box last_box">
					<label for="email" class="for_input">E-mail:<i>*</i></label>
					<span class="input input_theme_rosa"><input type="email" id="email" class="input__control" name="email" placeholder="vasiliy@mail.ru" required></span> 
				</div>
				<div class="clear"></div>
				<label for="textmessage" class="for_input for_input_margintop">Комментарий:<i>*</i></label>
				<textarea name="message" id="textmessage" class="message message_theme_rosa" placeholder="Текст комментария"></textarea>
				<div class="fast__button">
					<button class="button button__view"><span class="button__view_ico button__view_ico2"></span><span class="button__view_txt button__view_txt3">отправить</span></button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php require_once('includes/popup.php'); ?>
<?php require_once('includes/footer.php'); ?>

	
</body>
</html>