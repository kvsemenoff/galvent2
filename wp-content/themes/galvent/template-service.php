<?php 
/*
Template name: Сервис
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


<div class="service-wrap">
	<div class="container relative">	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h2 class="h2 h2_dark">Сервис</h2>
			</div>
			<div class="clearfix"></div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="service-box service-box__view">

					<span class="service-box__view_span"><?php the_field('подзаголовок'); ?></span>
					<div class="service-box__inner">
						<p class="service-box__view_p"><?php the_content(); ?>	</p>


						<div class="service__item service__item_1"><img src="<?php echo get_template_directory_uri(); ?>/img/ts.png" alt="" /></div>
						<div class="service__item service__item_2">
							<p class="q q_white">
								<?php the_field('цитата'); ?>
							</p>

						</div>
					</div>
					<div class="clearfix"></div>
				</div>


<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?> 

			</div>
			<div class="clearfix"></div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form__title">
					<h2 class="h2 h2_dark">Закончилась гарантия?</h2>
					<span>Оставьте заявку на бесплатный рассчет стоиомтсти обслуживания</span>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form__wrap">
					<div class="form_for_inner_page">
						<form action="#" method="post" class="js-submit">
							<div class="form_for_inner_page_box">
								<span class="for_input">Ваше ФИО:<i>*</i></span>
								<span class="input input_theme_rosa"><input type="text" class="input__control" name="uname" placeholder="Василий" required></span> 
							</div>
							<div class="form_for_inner_page_box">
								<span class="for_input">Телефон:<i>*</i></span>
								<span class="input input_theme_rosa"><input type="tel"  class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>
							</div>
							<div class="form_for_inner_page_box last_box">
								<span class="for_input">E-mail:<i>*</i></span>
								<span class="input input_theme_rosa"><input type="email"  class="input__control" name="email" placeholder="vasiliy@mail.ru" required></span> 
							</div>
							<div class="clear"></div>
							<span class="for_input for_input_margintop">Комментарий:<i>*</i></span>
							<textarea name="message" class="message message_theme_rosa" placeholder="Текст комментария"></textarea>
							<div class="but__wrap">
								<a href="#" class="button button__view"><span class="button__view_ico button__view_ico2"></span><span class="button__view_txt button__view_txt3">отправить</span></a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
<?php get_footer(); ?>