<?php 
$query = new WP_Query('page_id=281');
while ( $query->have_posts() ) {
	$query->the_post();
	$phone = get_field('телефон');
	$email = get_field('email');
	$address = get_field('адрес');
	$pometka = get_field('пометка');
	$soc = get_field('блок_соцсетей');
}
wp_reset_query();
?>
<div class="footer-top footer-top_view footer-top_padding">
	<div class="container">
		<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="footer-social footer-social_float footer-social_center">
				<span class="wearesocials">Мы в соц.сетях:</span>
				<div class="socials-inner">
					<?php echo $soc; ?>
				</div>	
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="footer-menu footer-menu_view">
				
				 <div class="footer-menu__one">
				 	<?php 
				 	wp_nav_menu( array(
				 		'theme_location'  => 'Main menu',
				 		'menu'            => 'Меню футера', 
				 		'container'       => 'div', 
				 		'container_class' => '', 
				 		'container_id'    => '',
				 		'menu_class'      => 'menu_footer', 
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


				<div class="footer-menu__two">
					<?php 
					wp_nav_menu( array(
						'theme_location'  => 'Main menu',
						'menu'            => 'Меню футера2', 
						'container'       => 'div', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => 'menu_footer', 
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
			
				<div class="clearfix"></div>
			</div>
		</div>				
		<div class="up">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="address address__footer address_padding">
					<span class="address__info"><?php echo $address; ?></span>
					<div class="address__mail">
						<span class="address__mail-title address_footer"><?php echo $pometka; ?></span>
						<a href="mailto:<?php echo $email; ?>" class="address__mail-link"><?php echo $email; ?></a>
					</div>
				</div>	
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="footer-phone footer-phone_center">
					<span class="telefone telefone_footer telefone_padding"><?php echo $phone; ?></span>
					<a href="#modal__form_call" class="link link_footer link_float fancybox"><span>заказать обратный звонок</span></a>
				</div>
			</div>
		</div>
		<div class="down">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="footer-phone footer-phone_center footer-phone-bottom">
					<span class="telefone telefone_footer telefone_padding"><?php echo $phone; ?></span>
					<a href="#modal__form_call" class="link link_footer link_float fancybox"><span>заказать обратный звонок</span></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="address address__footer address_padding">
					<span class="address__info"><?php echo $address; ?></span>
					<div class="address__mail">
						<span class="address__mail-title address_footer"><?php echo $pometka; ?></span>
						<a href="mailti:<?php echo $email; ?>" class="address__mail-link"><?php echo $email; ?></a>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<div class="footer-bottom footer-bottom_view footer-bottom_padding">
	<div class="container">	
		<div class="col-md-6 col-sm-12 col-xs-12">
			<p class="footer-bottom__copyright">&copy;2017 ГАЛВЕНТ - Все права защищены</p>
		</div>				
		<div class="col-md-6 col-sm-12 col-xs-12">
			<?php $post_id = get_the_ID(); ?>

			

			<p class="footer-bottom__site">
				<?php if ($post_id == 68){ ?>
					<a href="http://www.utex.ru/" target="_blank" class="footer-bottom__link">
						<span>Разработка сайта "ЮТЕКС Проект"</span>
					</a>
					<a href="http://www.utex.ru/" target="_blank" >
						<img src="<?php echo get_template_directory_uri(); ?>/img/db-ex.png" alt="ЮТЕКС Проект">
					</a>
				<?php } else { ?>
					<span class="footer-bottom__link">
						<span>Разработка сайта "ЮТЕКС Проект"</span>
					</span>
					<span>
						<img src="<?php echo get_template_directory_uri(); ?>/img/db-ex.png" alt="ЮТЕКС Проект">
					</span>
				
				<?php } ?>
			</p>
		</div>
	</div>
</div>

<div id="toTop" >
	<img src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt="">
</div>

<div class="modal modal__form" id="modal__form">
  <div class="modal__inner clearfix">
		<div class="modal__in modal__in_left">
			<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Получите КП и смету</h2>
			<div class="form-wrap">
				<form action="#" method="post" class="form1 theme__rosa__form-block">
					<span class="input input_theme_rosa theme__rosa__form-input">
						<input type="text" class="input__control" name="uname" placeholder="Ваше имя">
					</span> 
					<span class="input input_theme_rosa theme__rosa__form-input">
						<input type="tel" class="input__control js-phone" name="phone" placeholder="Номер телефона" required>
					</span>
					<span class="input input_theme_rosa theme__rosa__form-input">
						<textarea name="message" placeholder="Сообщите краткую информацию"></textarea>
					</span>
					<a href="#modal__thanks" class="fancybox button button_theme_rosa ">Отправить заявку</a>
				</form>
			</div>
		</div>
		<div class="modal__in modal__in_right">
			<span class="modal__in-descr">Так же вы можете сами нам позвонить</span>
			<span class="modal__in-descr modal__in-descr_last">или написать на электронную почту</span>
			<div class="modal__in-info">
				<span class="info__title">Телефон</span>
				<span class="info__number">+7 (921) 000-12-05</span>
			</div>
			<div class="modal__in-info">
				<span class="info__title">E-mail</span>
				<span class="info__number">info@droadcast-team.ru</span>
			</div>
		</div>
  </div>
</div>


<div class="modal modal__thanks" id="modal__thanks">
  <div class="modal__inner">
		<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Ваше сообщение отправлено!</h2>
    <div class="modal__descr-block">
    	<span class="modal__descr">Спасибо за вашу заявку.</span>
			<span class="modal__descr"><i>В скором времени</i> <i>мы напишем вам на почту.</i></span>
		</div>
  </div>
</div>

<!-- ////////////////////popups///////////////////////// -->

<div class="modal modal__form" id="modal__form_order">
	<div class="form_for_popup">
		<h4 class="form_popup__caption">Онлайн заявка</h4>
		<form action="#" method="post" class="js-submit">	
				<span class="for_input">Ваше ФИО:<i>*</i></span>
				<span class="input input_theme_popup"><input type="text" class="input__control" name="uname" placeholder="Василий" required></span> 	
				<span class="for_input">Телефон:<i>*</i></span>
				<span class="input input_theme_popup"><input type="tel"  class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>	
				<span class="for_input">E-mail:<i>*</i></span>
				<span class="input input_theme_popup"><input type="email" class="input__control" name="email" placeholder="vasiliy@mail.ru" required></span>	
			<span class="for_input">Комментарий:<i>*</i></span>
			<textarea name="message" class="message message_theme_rosa" placeholder="Текст комментария"></textarea>
			<div class="button-wrap">
				<button class="button button__view"><span class="button__view_ico button__view_ico2"></span><span class="button__view_txt button__view_txt3">отправить</span></button>
			</div>
		</form>
	</div>
</div>

<div class="modal modal__form" id="modal__form_call">
	<div class="form_for_popup">
		<h4 class="form_popup__caption">заказать обратный звонок</h4>
		<form action="#" method="post" class="callback-form">	
			<span class="for_input">Ваше ФИО:<i>*</i></span>
			<span class="input input_theme_popup"><input type="text" class="input__control"  name="uname" placeholder="Василий" required></span> 	
			<span class="for_input">Телефон:<i>*</i></span>
			<span class="input input_theme_popup"><input type="tel" id="phone" class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>
			<div class="button-wrap">
				<button class="button button__view"><span class="button__view_ico button__view_ico2"></span><span class="button__view_txt button__view_txt3">отправить</span></button>
			</div>		
		</form>
	</div>
</div>
<a href="#modal__thanks" class="fancybox"></a>

<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script>
	$(document).ready(function(){
		var star=$('.rw-rating-table').html();
		$('.rw-rating-table').remove();

		$('.reviewStars-input').append(star);
		$('.rw-report-link').css('display', 'none !important');
		$('.rw-ui-info-container').css('display', 'none !important');
		
	});
</script>
<?php wp_footer(); ?>

</body>
</html>