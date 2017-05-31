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
	<?php 
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
	?>
	<h2 class="h2 h2_dark beltconveyors__caption">
		<?php echo $category_id = $categories[0]->name; ?>			
	</h2>
	
	<p class="beltconveyors__text">
		<?php echo $category_id = $categories[0]->description; ?>		
	</p>	

	<div class="beltconveyors__img_box beltconveyors__img_box_marginbot">
		


		<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		$args = array(
			'cat' => 13,
			'paged' => $paged
			);

		$query = new WP_Query($args);

		while ( $query->have_posts() ) {
			$query->the_post();
			?>	

			<a href="<?php the_permalink(); ?>" class="beltconveyors__link" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?><span><?php the_title(); ?></span></a>

			<?php }?>
	</div>
</div>
		<div class="container">
			<h2 class="h2 h2_dark beltconveyors__caption_form">Хотите сделать заказ?</h2>
			<span class="conveyors__subtext_form">Оставьте заявку через форму обратной связи</span>
			<div class="form_for_inner_page conveyors__marginbottom">
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


					<span class="conveyors__submit"><input type="submit"></span>
				</form>
			</div>
		</div>



		<?php get_footer(); ?>