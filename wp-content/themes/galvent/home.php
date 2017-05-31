<?php 
/*
Template name: Главная
*/
?>

<?php get_header(); ?>

<?php 
$dop1 = get_field('дополнительная_услуга_1');
$dop2 = get_field('дополнительная_услуга_2');
$dop3 = get_field('дополнительная_услуга_3');
$dop4 = get_field('дополнительная_услуга_4');
$dop5 = get_field('дополнительная_услуга_5');
$dop6 = get_field('дополнительная_услуга_6');

?>
<div class="equipment">
	<div class="container">
		<h1 class="h1"><?php the_field('шапка_заголовок'); ?></h1>
		<span class="equipment__descr"><?php the_field('шапка_подзаголовок'); ?></span>
		<div class="equipment__button">
			<a href="/category/produktsiya/" class="button button__view"><span class="button__view_ico"></span><span class="button__view_txt">перейти в каталог</span></a>
		</div>
		<div class="equipment_order">
			<a href="#modal__form_order" class="fancybox order_curcle">
				<span class="order_curcle__text toppadding">On-line</span>
				<span class="order_curcle__text">заявка</span>
			</a>
		</div>
	</div>
</div>
<div class="product">
	<div class="container">
		<h2 class="h2 h2_dark">Продукция</h2>
		<div class="product__items clearfix">
			<div class="product__items-wrap">
				<div class="product__item product__item_first">
					<a href="http://galvent2.loc/category/produktsiya/lentochnye-konvejery/" class="item__inner">
						<span class="item__title item__title_first">Ленточные конвейеры</span>
						<div class="item__image item__image_first">
							<img class="item__img item__img-des" src="<?php echo get_template_directory_uri(); ?>/img/item__img-1.png" alt="">
							<img class="item__img item__img-mob" src="<?php echo get_template_directory_uri(); ?>/img/item__img-1-mob.png" alt="">
						</div>
						<img class="item__bg" src="<?php echo get_template_directory_uri(); ?>/img/product__item-1.jpg" alt="">
					</a>
				</div>
				<div class="product__item product__item_second">
					<a href="#" class="item__inner">
						<span class="item__title item__title_second">Комплектующие</span>
						<div class="item__image item__image_second">
							<img class="item__img item__img-des" src="<?php echo get_template_directory_uri(); ?>/img/item__img-2.png" alt="">
							<img class="item__img item__img-mob" src="<?php echo get_template_directory_uri(); ?>/img/item__img-2-mob.png" alt="">
						</div>
						<img class="item__bg" src="<?php echo get_template_directory_uri(); ?>/img/product__item-2.jpg" alt="">
					</a>
				</div>
			</div>
			<div class="product__items-wrap">
				<div class="product__item product__item_third product__item_big">
					<a href="http://galvent2.loc/category/produktsiya/rolgangi/" class="item__inner">
						<span class="item__title item__title_third">Роликовые конвейеры — рольганги</span>
						<div class="item__image item__image_third">
							<img class="item__img item__img-des" src="<?php echo get_template_directory_uri(); ?>/img/item__img-3.png" alt="">
							<img class="item__img item__img-mob" src="<?php echo get_template_directory_uri(); ?>/img/item__img-3-mob.png" alt="">
						</div>
						<img class="item__bg" src="<?php echo get_template_directory_uri(); ?>/img/product__item-3.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div class="about__wrap">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h2 class="h2 h2_dark">О нашей компании</h2>
			</div>	
			<div class="clearfix"></div>

			<div class="col-sm-6 col-md-6 ">
				<div class="dd-about about__view about__view_1">
					<span><?php the_field('заголовок_1'); ?></span>
					<p><?php the_field('текст_1'); ?></p>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 ">
				<div class="dd-about about__view about__view_2">
					<span><?php the_field('заголовок_2'); ?></span>
					<p><?php the_field('текст_2'); ?></p>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="col-sm-6 col-md-6  hidden-xs">
				<div class="dd-about about__view about__view_3">
					<div class="about__view_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/m3.png" alt="">
					</div>
					<p><?php the_field('текст_3'); ?></p>
					<a href="/category/produktsiya/" class="button button__view"><span class="button__view_ico"></span><span class="button__view_txt">перейти в каталог</span></a>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 ">
				<div class="dd-about about__view about__view_4">
					<div class="str"><img src="<?php echo get_template_directory_uri(); ?>/img/strm.jpg" alt=""></div>
					<div class="str str2"><img src="<?php echo get_template_directory_uri(); ?>/img/bn2.png" alt=""></div>
					<p class="about__view_p"><?php the_field('заголовок_4'); ?></p>
					<p class="about__view_txt">
						<?php the_field('текст_4'); ?>
					</p>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
<div class="last__wrap">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5">
				<h2 class="h2 h2_light">Последние новости</h2>
				<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args = array(
					'cat' => 2,
					'paged' => $paged
					);

				$query = new WP_Query($args);
				$i=0;
				while ( $query->have_posts() ) {
				$query->the_post();
				if ($i>=2) {
					break;
				}
				
				?>

				<div class="news-box news-box__view">
					<span><?php the_time('d.m.Y'); ?></span>
					<div class="news-box__link">
						<a class="news-box__link_1"	href="<?php the_permalink(); ?>"><?php  do_excerpt(get_the_excerpt(), 7); ?></a>
					</div>
					<div class="news-box__link">
						<a class="news-box__link_2"	href="<?php the_permalink(); ?>">читать далее >> </a>
					</div>
				</div>
				<?php
				 $i++; 
				}
				wp_reset_query();
				?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<div class="news-box news-box__play">
					<span>Для наглядности предлагаем ознакомится с видеороликами </span>
					<p>(наведите курсор для проигрывания анимации)</p>

					<div class="news-box__play_wrap">
						<div class="news-box__play_item it1">
							<div class="news-box__play_ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico.png" alt="">
							</div>
							<div class="news-box__play_ico news-box__play_ico_2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico-m.png" alt="">
							</div>
							<div class="news-box__play_img">
								<img class="img_1" src="<?php echo get_template_directory_uri(); ?>/img/im1.png" alt="">
								<img class="gif_1" src="<?php echo get_template_directory_uri(); ?>/img/gif1.gif" alt="">
							</div>
						</div>

						<div class="news-box__play_item it2">
							<div class="news-box__play_ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico.png" alt="">
							</div>
							<div class="news-box__play_ico news-box__play_ico_2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico-m.png" alt="">
							</div>
							<div class="news-box__play_img">
								<img class="img_2" src="<?php echo get_template_directory_uri(); ?>/img/im2.png" alt="">
								<img class="gif_2" src="<?php echo get_template_directory_uri(); ?>/img/gif2.gif" alt="">
							</div>
						</div>

						<div class="news-box__play_item it3">
							<div class="news-box__play_ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico.png" alt="">
							</div>
							<div class="news-box__play_ico news-box__play_ico_2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico-m.png" alt="">
							</div>
							<div class="news-box__play_img">
								<img class="img_3" src="<?php echo get_template_directory_uri(); ?>/img/im3.png" alt="">
								<img class="gif_3" src="<?php echo get_template_directory_uri(); ?>/img/gif3.gif" alt="">
							</div>
						</div>

						<div class="news-box__play_item it4">
							<div class="news-box__play_ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico.png" alt="">
							</div>
							<div class="news-box__play_ico news-box__play_ico_2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico-m.png" alt="">
							</div>
							<div class="news-box__play_img">
								<img class="img_4" src="<?php echo get_template_directory_uri(); ?>/img/im4.png" alt="">
								<img class="gif_4" src="<?php echo get_template_directory_uri(); ?>/img/gif4.gif" alt="">
							</div>
						</div>

						<div class="news-box__play_item news-box__play_item_last it5">
							<div class="news-box__play_ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico.png" alt="">
							</div>
							<div class="news-box__play_ico news-box__play_ico_2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico-m.png" alt="">
							</div>
							<div class="news-box__play_img">
								<img class="img_5" src="<?php echo get_template_directory_uri(); ?>/img/im5.png" alt="">
								<img class="gif_5" src="<?php echo get_template_directory_uri(); ?>/img/gif5.gif" alt="">
							</div>
						</div>

						<div class="news-box__play_item news-box__play_item_last it6">
							<div class="news-box__play_ico">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico.png" alt="">
							</div>
							<div class="news-box__play_ico news-box__play_ico_2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/play-ico-m.png" alt="">
							</div>
							<div class="news-box__play_img">
								<img class="img_6" src="<?php echo get_template_directory_uri(); ?>/img/im6.png" alt="">
								<img class="gif_6" src="<?php echo get_template_directory_uri(); ?>/img/gif1.gif" alt="">
							</div>
						</div>
						
					</div>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
	
<div class="services__wrap">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12">
			<h2 class="h2 h2_white h2_white_pb">Дополнительные услуги</h2>
			</div>
			<div class="clearfix"></div>		

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view services__view_first">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="">
					</div>
					<div class="services__item">
						<p><?php echo $dop1; ?></p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view services__view_first">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2.png" alt="">
					</div>
					<div class="services__item">
						<p><?php echo $dop2; ?></p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view services__view_first">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3.png" alt="">
					</div>
					<div class="services__item">
						<p><?php echo $dop3; ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>


			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p4.png" alt="">
					</div>
					<div class="services__item">
						<p><?php echo $dop4; ?></p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p5.png" alt="">
					</div>
					<div class="services__item">
						<p><?php echo $dop5; ?></p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p6.png" alt="">
					</div>
					<div class="services__item">
						<p><?php echo $dop6; ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
<div class="fast">
	<div class="container">
		<h2 class="h2 h2_light"><span>Быстрый заказ</span></h2>
		<div class="row">
			<div class="fast__inner clearfix">
				<div class="col-md-5">
					<div class="fast__content-wrap">
						<div class="fast__content">
							<i class="fast__triangle"></i>
							<p class="fast__text">Вы можете запросить информацию о компании, получить консультацию о выпускаемой продукции и ценах, отправить заявку на расчет оборудования по телефону <strong>+7(495)790 76 98</strong> или заполнить  данную форму.</p>
							<p class="fast__text">Заявка на консультацию  ни к чему не обязывает Вас. </p>
							<p class="fast__text">Ваши данные, оставленные в форме обратной связи, не будут переданы третьим лицам.</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="form_for_main_page">
						<form action="#" method="post" class="js-submit">		
							<div class="form_for_main_page__left">
								<span class="for_input">Ваше ФИО:<i>*</i></span>
								<span class="input input_theme_main"><input type="text" class="input__control" name="uname" placeholder="Василий" required></span> 

								<span class="for_input">Телефон:<i>*</i></span>
								<span class="input input_theme_main"><input type="tel" class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>
							</div>
							<div class="form_for_main_page__right">
								<span class="for_input">E-mail:<i>*</i></span>
								<span class="input input_theme_main"><input type="email" class="input__control" name="email" placeholder="vasiliy@mail.ru" required></span> 

								<span class="for_input">Тема сообщения:<i>*</i></span>
								<span class="input input_theme_main"><input type="text" class="input__control" name="thememessage" placeholder="Заказ"></span>
							</div>
							<div class="clear"></div>
							<span class="for_input">Комментарий:<i>*</i></span>
							<textarea name="message" class="message message_theme_rosa" placeholder="Текст комментария"></textarea>
							<div class="fast__button">
								<button class="button button__view"><span class="button__view_ico button__view_ico2"></span><span class="button__view_txt button__view_txt3">отправить</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

