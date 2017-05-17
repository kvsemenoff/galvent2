<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php wp_head(); ?>
</head>
<body>

<div class="menu_xs">

	<div class="menu_xs__wrap">

		<div class="menu_xs__item menu_xs__item_top">
			<span class="menu_xs__item_tel">+7 (495) 790 7698 </span> <a class="menu_xs__item_link fancybox" href="#modal__form_call"> перезвоните</a>
		</div>

	</div>

	<div class="menu_xs__item menu_xs__item_middle">

		<div class="menu_xs__item_middle_box1">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/di-logo-m.png" alt="">
		</div>

		<div class="menu_xs__item_middle_box2">
			<div class="menu-wrap">
				<div class="menu-button">
					<i></i>
					<i></i>
					<i></i>
					<span>Меню</span>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="online__mess">
			<a class="fancybox" href="#modal__form_call">Онлайн заявка</a>
		</div>	
		<div class="clearfix"></div>

		<div class="toggle__menu">
			<ul>
				<li><a class="m_style" href="#">о компании</a></li>
				<li><a class="m_style" href="#">продукция</a></li>
				<li><a class="m_style" href="#">производство</a></li>
				<li><a class="m_style" href="#">гарантия</a></li>
				<li><a class="m_style" href="#">контакты</a></li>
			</ul>
		</div>

	</div>
</div>

<div class="menu_sm">
	
	<div class="container">
		<div class="row">

			<div class="col-xs-3 col-sm-3 col-md-3">
				<div class="menu_sm__item">
					<img src="img/di-logo-t.png" alt="">
				</div>	
			</div>

			<div class="col-xs-5 col-sm-5 col-md-5">

				<div class="menu_sm__item">
					<div class="address">
						<span class="address__info">111123 Москва, Шоссе Энтузиастов д.56 стр 47</span>
						<div class="address__mail">
							<span class="address__mail-title">C пометкой Конвейер</span>
							<a href="#" class="address__mail-link">galvent@galvent.su</a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-xs-4 col-sm-4 col-md-4">
				<div class="menu_sm__item menu_sm__item_tel">
					<span class="menu_xs__item_tel">+7 (495) 790 7698 </span> <a class="menu_xs__item_link fancybox" href="#modal__form_call">заказать обратный звонок</a>
				</div>
				<div class="search">
					<form action="#">
						<div class="search-wrap">
							<input type="text" placeholder="Поиск">
							<input type="submit">
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="menu-wrap">
				<nav class="menu">
					<ul class="main-menu">
						<li class="point-active">
							<a href="#">О компании</a>
						</li>
						<li>
							<a href="#">Продукция</a>
						</li>
						<li>
							<a href="#">Производство</a>
						</li>
						<li>
							<a href="#">Гарантия</a>
						</li>
						<li>
							<a href="#">Контакты</a>
						</li>
					</ul>
				</nav>
			</div>

		</div>
	</div>

</div>

<div class="menu_md">
	<div class="container">	
		<div class="menu_md__left">
			<img src="<?php echo get_template_directory_uri(); ?>/img/di-logo-d.png" alt="">
		</div>	

		<div class="menu_md__right">

			<div class="menu_md__right_item">
				<div class="menu_sm__item">
					<div class="address">
						<span class="address__info">111123 Москва, Шоссе Энтузиастов д.56 стр 47</span>
						<div class="address__mail">
							<span class="address__mail-title">C пометкой Конвейер</span>
							<a href="#" class="address__mail-link">galvent@galvent.su</a>
						</div>
					</div>
				</div>
			</div>

			<div class="menu_md__right_item2">
				<div class="menu_sm__item menu_sm__item_tel">
					<span class="menu_xs__item_tel">+7 (495) 790 7698 </span><br/> <a class="menu_xs__item_link fancybox" href="#modal__form_call">заказать обратный звонок</a>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="menu_md__right_item">
				<div class="menu-wrap">
					<nav class="menu">
						<ul class="main-menu">
							<li class="point-active">
								<a href="#">О компании</a>
							</li>
							<li>
								<a href="#">Продукция</a>
							</li>
							<li>
								<a href="#">Производство</a>
							</li>
							<li>
								<a href="#">Гарантия</a>
							</li>
							<li>
								<a href="#">Контакты</a>
							</li>
							<li>
								<div class="search">
									<form action="#">
										<div class="search-wrap">
											<input type="text" placeholder="Поиск">
											<input type="submit">
										</div>
									</form>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>	
		<div class="clearfix"></div>
	</div>
</div>
