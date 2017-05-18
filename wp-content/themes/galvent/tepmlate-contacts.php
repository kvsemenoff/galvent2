<?php 
/*
Template name: Наши контакты
*/
?>
<?php get_header(); ?>

<div class="bread_menu bread_menu_bg_img conveyors_page">	
	<div class="container pos-relative">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' '); ?>		
		<a href="#modal__form_order" class="fancybox order_curcle_innerpage conveyors_page_circle">
			<span class="order_curcle__text toppadding">On-line</span>
			<span class="order_curcle__text">заявка</span>
		</a>
	</div>
</div>


<div class="contacts">
	<div class="container">
		<h2 class="h2 h2_dark">Наши контакты</h2>
		<div class="contacts__inner">
			<div class="contacts__items clearfix">
				<div class="contacts__item">
					<div class="item item_mape">
						<span class="item__text">111123 Москва, Шоссе</span>
						<span class="item__text">Энтузиастов д.56 стр 47 </span>
						<a class="item__link" href="#">показать на карте</a>
					</div>
				</div>
				<div class="contacts__item">
					<div class="item item_massage">
						<span class="item__text">galvent@galvent.su</span>
						<span class="item__text">snab@galvent.su</span>
						<a class="item__link" href="#">написать нам</a>
					</div>
				</div>
				<div class="contacts__item">
					<div class="item item_time">
						<span class="item__title">Режим работы </span>
						<span class="item__text">Пн.– Пт.: с 9:00 до 18:00</span>
						<span class="item__text">Cб.-Вс. - выходные</span>
					</div>
				</div>
				<div class="contacts__item">
					<div class="item item_number">
						<span class="item__number">+7 (495) 790 7698</span>
						<span class="item__number">+7 (495) 229 2647</span>
						<a class="item__link" href="#">заказть обратный звонок</a>
					</div>
				</div>
			</div>
			<div class="mape">
				<div class="map-img" id="map">
				</div>
			</div>
			<div class="form__title-block">
				<span class="form__title">Есть вопросы?</span>
				<span class="form__descr">Свяжитесь с нами через форму обратной связи</span>
			</div>
			<div class="form_for_inner_page">
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
					<div class="fast__button">
						<button class="button button__view"><span class="button__view_ico button__view_ico2"></span><span class="button__view_txt button__view_txt3">отправить</span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>	