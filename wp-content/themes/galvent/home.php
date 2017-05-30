<?php 
/*
Template name: Главная
*/
?>

<?php get_header(); ?>


<div class="equipment">
	<div class="container">
		<h1 class="h1">Конвейерное оборудование</h1>
		<span class="equipment__descr">Качественное конвейерное оборудование от производителя </span>
		<div class="equipment__button">
			<a href="#" class="button button__view"><span class="button__view_ico"></span><span class="button__view_txt">перейти в каталог</span></a>
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
					<a href="#" class="item__inner">
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
					<a href="#" class="item__inner">
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
					<span>Широкий перечень услуг</span>
					<p>Помимо производства и продажи конвейеров, мы предлагаем разработку готового решения внутренней транспортировки</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 ">
				<div class="dd-about about__view about__view_2">
					<span>Качество продукции</span>
					<p>Опыт и квалификация наших сотрудников позволяет реализовывать сложные проекты в достаточно короткие сроки, и при этом гарантировать качество предоставляемой продукции.</p>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="col-sm-6 col-md-6  hidden-xs">
				<div class="dd-about about__view about__view_3">
					<div class="about__view_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/m3.png" alt="">
					</div>
					<p>Лучшие цены на конвейеры и комплектующие к ним среди конкурентов.</p>
					<a href="#" class="button button__view"><span class="button__view_ico"></span><span class="button__view_txt">перейти в каталог</span></a>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 ">
				<div class="dd-about about__view about__view_4">
					<div class="str"><img src="<?php echo get_template_directory_uri(); ?>/img/strm.jpg" alt=""></div>
					<div class="str str2"><img src="<?php echo get_template_directory_uri(); ?>/img/bn2.png" alt=""></div>
					<p class="about__view_p">ПТО Галвент — структурное подразделение "Фабрики Вентиляции ГалВент".</p>
					<p class="about__view_txt">
						Основная сфера деятельности нашего предприятия – выпуск конвейеров и рольгангов. Наличие высококвалифицированных специалистов  позволяет спроектировать и изготовить оборудование, которое будет максимально соответствовать Вашим требованиям. Мы специализируемся на изготовлении и продаже конвейерных систем различных видов, подходящих практически для всех отраслей промышленности.
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
				<div class="news-box news-box__view">
					<span>28.03.17</span>
					<div class="news-box__link">
						<a class="news-box__link_1"	href="#">Закончено оборудование одного из цехов роликовыми транспортерами</a>
					</div>
					<div class="news-box__link">
						<a class="news-box__link_2"	href="#">читать далее >> </a>
					</div>
				</div>
				<div class="news-box news-box__view">
					<span>23.03.17</span>
					<div class="news-box__link">
						<a class="news-box__link_1"	href="#">Закончена сборка ленточного транспортера для собственного производства</a>
					</div>
					<div class="news-box__link">
						<a class="news-box__link_2"	href="#">читать далее >> </a>
					</div>
				</div>
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
						<p>Консультирование клиентов по<br class="br"/> выбору конвейера с выездом<br class="br"/> специалиста на территорию<br class="br"/> заказчика
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view services__view_first">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2.png" alt="">
					</div>
					<div class="services__item">
						<p>Составление технического задания <br/>и произведение необходимых замеров</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view services__view_first">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3.png" alt="">
					</div>
					<div class="services__item">
						<p>Проведение всех необходимых подготовительных работ по установке транспортера
						</p>
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
						<p>Планирование и проектирование будущего оборудования</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p5.png" alt="">
					</div>
					<div class="services__item">
						<p>Гарантийное и постгарантийное обслуживание</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 ">
				<div class="services services__view">
					<div class="services__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p6.png" alt="">
					</div>
					<div class="services__item">
						<p>Установка и ввод в эксплуатацию</p>
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

