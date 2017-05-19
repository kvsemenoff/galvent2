<?php 
/*
Template name: Наше производство
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


<div class="container container_padding_top">
	<h1 class="h2 h2_dark ourindustry__caption"><?php the_title(); ?></h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>	

	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>

	<div class="ourindustry__img_box">
		<?php if( class_exists('Dynamic_Featured_Image') ) { ?>
     	<?php global $dynamic_featured_image; ?>
     	<?php $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID()); ?>
			<?php foreach( $featured_images as $image ) { ?>			
				<a href="<?php echo $image['full'] ?>" class="ourindustry__link" data-fancybox-group="group"><img src="<?php echo $image['full'] ?>" alt=""></a>
			<?php } ?>
		<?php } ?>			
	</div>

	
</div>


<div class="container">
	<h2 class="h2 h2_dark beltconveyors__caption_form">Желаете сделать заказ?</h2>
	<span class="conveyors__subtext_form">Свяжитесь с нами через форму обратной связи</span>
	<div class="form_for_inner_page conveyors__marginbottom">
		<form action="#" method="post" class="js-submit">
			<div class="form_for_inner_page_box">
				<span class="for_input">Ваше ФИО:<i>*</i></span>
				<span class="input input_theme_rosa"><input type="text" class="input__control"  name="uname" placeholder="Василий" required></span> 
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

			
			<span class="conveyors__submit"><input type="submit"></span>
		</form>
	</div>
</div>


<?php get_footer(); ?>	