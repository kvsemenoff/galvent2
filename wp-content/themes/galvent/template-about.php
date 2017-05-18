<?php 
/*
Template name: О компании
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

<div class="about">
	<div class="container">		
		<h1 class="h2 h2_dark"><?php the_title(); ?></h1>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>	
			
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?> 	

		<span class="about__descr">Фото с нашего производства:</span>
		<div class="about__photos-block clearfix">
			<div class="about__photo">
				<a class="fancybox photo" href="img/about__photo-1.jpg" data-fancybox-group="gallery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/about__photo-1.jpg" alt="" />
				</a>
			</div>
			<div class="about__photo">
				<a class="fancybox photo" href="img/about__photo-2.jpg" data-fancybox-group="gallery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/about__photo-2.jpg" alt="" />
				</a>
			</div>
			<div class="about__photo">
				<a class="fancybox photo" href="img/about__photo-3.jpg" data-fancybox-group="gallery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/about__photo-3.jpg" alt="" />
				</a>
			</div>
		</div>
		<p class="about__text">Чтобы купить  конвейер, рассчитать его стоимость или получить консультацию специалиста, просто свяжитесь с нами по телефону, указанному на сайте или используйте форму обратной связи.</p>
		<span class="about__order-title">Желаете сделать заказ?</span>
		<span class="about__order-descr">Свяжитесь с нами через форму обратной связи</span>
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

<?php get_footer(); ?>	