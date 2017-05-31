<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
</head>
<body>
<?php 
$query = new WP_Query('page_id=281');
while ( $query->have_posts() ) {
	$query->the_post();
	$phone = get_field('телефон');
	$email = get_field('email');
	$address = get_field('адрес');
	$soc = get_field('блок_соцсетей');
}
wp_reset_query();
?>
<div class="menu_xs">

	<div class="menu_xs__wrap">

		<div class="menu_xs__item menu_xs__item_top">
			<span class="menu_xs__item_tel"><?php echo $phone; ?></span> <a class="menu_xs__item_link fancybox" href="#modal__form_call"> перезвоните</a>
		</div>

	</div>

	<div class="menu_xs__item menu_xs__item_middle">

		<div class="menu_xs__item_middle_box1">
			<a href="/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/di-logo-m.png" alt="Галвент"></a>
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
			<?php 
			wp_nav_menu( array(
				'theme_location'  => 'Main menu',
				'menu'            => 'Главное меню', 
				'container'       => 'div', 
				'container_class' => '', 
				'container_id'    => '',
				'menu_class'      => 'toggle__menu', 
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',						
				) );	
			?>
		</div>

	</div>
</div>

<div class="menu_sm">
	
	<div class="container">
		<div class="row">

			<div class="col-xs-3 col-sm-3 col-md-3">
				<div class="menu_sm__item">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/di-logo-t.png" alt="Галвент"></a>
				</div>	
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5">
				<div class="menu_sm__item">
					<div class="address">
						<span class="address__info"><?php echo $address; ?></span>
						<div class="address__mail">
							<span class="address__mail-title">C пометкой Конвейер</span>
							<a href="mailto:<?php echo $email; ?>" class="address__mail-link"><?php echo $email; ?></a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-xs-4 col-sm-4 col-md-4">
				<div class="menu_sm__item menu_sm__item_tel">
					<span class="menu_xs__item_tel"><?php echo $phone; ?> </span> <a class="menu_xs__item_link fancybox" href="#modal__form_call">заказать обратный звонок</a>
				</div>
				<div class="search">
					<form action="<?php bloginfo( 'url' ); ?>" method="get">
						<div class="search-wrap">
							<input type="text" name="s" placeholder="Поиск" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>">
							<input type="submit">
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
	
			<div class="menu-wrap">
				<nav class="menu">

					<?php 
					wp_nav_menu( array(
						'theme_location'  => 'Main menu',
						'menu'            => 'Главное меню', 
						'container'       => 'div', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => 'main-menu', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						) );	
					 ?>				
				</nav>
			</div>

		</div>
	</div>

</div>

<div class="menu_md">
	<div class="container">	
		<div class="menu_md__left">
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/di-logo-d.png" alt="Галвент"></a>
		</div>	

		<div class="menu_md__right">

			<div class="menu_md__right_item">
				<div class="menu_sm__item">
					<div class="address">
						<span class="address__info"><?php echo $address; ?></span>
						<div class="address__mail">
							<span class="address__mail-title">C пометкой Конвейер</span>
							<a href="mailto:<?php echo $email; ?>" class="address__mail-link"><?php echo $email; ?></a>
						</div>
					</div>
				</div>
			</div>

			<div class="menu_md__right_item2">
				<div class="menu_sm__item menu_sm__item_tel">
					<span class="menu_xs__item_tel"><?php echo $phone; ?> </span><br/> <a class="menu_xs__item_link fancybox" href="#modal__form_call">заказать обратный звонок</a>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="menu_md__right_item">
				<div class="menu-wrap">
					<nav class="menu desktopmenu">				
						<?php 
						wp_nav_menu( array(
							'theme_location'  => 'Main menu',
							'menu'            => 'Главное меню', 
							'container'       => '', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'main-menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
							) );	
							?>
						
					</nav>

					<div class="search desktopsearch">
						<form action="<?php bloginfo( 'url' ); ?>" method="get">
							<div class="search-wrap">
								<input  type="text" name="s" placeholder="Поиск" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>">
								<input type="submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
		<div class="clearfix"></div>
	</div>
</div>
