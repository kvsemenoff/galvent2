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
	<div class="container content-part">
		<h1>Наши контакты</h1>
		<div class="contacts__inner">
			<div class="contacts__items clearfix">
				<div itemscope="" itemtype="http://schema.org/Organization">
					<span itemprop="name" class="hidden">Галвент</span>
					<div class="contacts__item">
						<div class="item item_mape">
							<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
								<?php the_field('контакты_ардес'); ?>
							</div>
						</div>
					</div>
					<div class="contacts__item">
						<div class="item item_massage">
							<?php the_field('контакты_элекстронная_почта'); ?>
							
						</div>
					</div>
					<div class="contacts__item">
						<div class="item item_time">
							<?php the_field('контакты_режим_работы'); ?>
							
						</div>
					</div>
					<div class="contacts__item">
						<div class="item item_number">
							<?php the_field('контакты_телефоны'); ?>
							<a class="item__link fancybox" href="#modal__form_call">заказть обратный звонок</a>
						</div>
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
<script>
$(document).ready(function(){
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
	}
  );
	myMap.behaviors.disable('scrollZoom');
	myMap.geoObjects.add(myPlacemark);
}
});
</script>