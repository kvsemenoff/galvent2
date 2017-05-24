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


	$parent_id = 6;


# получаем дочерние рубрики
	$sub_cats = get_categories( array(
		'child_of' => $parent_id,
		'hide_empty' => 0
		) );

	if( $sub_cats ){
		foreach( $sub_cats as $cat ){

		// Данные в объекте $cat

		// $cat->term_id
		// $cat->name (Рубрика 1)
		// $cat->slug (rubrika-1)
		// $cat->term_group (0)
		// $cat->term_taxonomy_id (4)
		// $cat->taxonomy (category)
		// $cat->description ()
		// $cat->parent (0)
		// $cat->count (14)
		// $cat->object_id (2743)
		// $cat->cat_ID (4)
		// $cat->category_count (14)
		// $cat->category_description ()
		// $cat->cat_name (Рубрика 1)
		// $cat->category_nicename (rubrika-1)
		// $cat->category_parent (0)
				?>
				<h2 class="h2 h2_dark beltconveyors__caption"><?php echo $cat->name; ?></h2>
				<p class="beltconveyors__text"><?php echo $cat->description; ?></p>	
				<?php	

		# получаем записи из рубрики
			$myposts = get_posts( array(
				'numberposts' => -1,
				'category'    => $cat->cat_ID,
				'orderby'     => 'post_date',
				'order'       => 'DESC',
				) );
				?>
				<div class="beltconveyors__img_box beltconveyors__img_box_marginbot">
				<?php
			foreach( $myposts as $cat2 ){
				?>
				<a href="<?php the_permalink(); ?>" class="beltconveyors__link"><?php the_post_thumbnail() ?><span><?php echo $cat2->post_title; ?></span></a>
				
				<?php
			}
			?>
			</div>
			<?php
			// echo "<pre>";
			// 	print_r($cat2);
			// 	echo "</pre>";
		}
	}
	?>

</div>


	<!-- 
		
			<a href="#" class="beltconveyors__link"><img src="img/conv1.jpg" alt=""><span>Горизонтальные ленточные конвейеры</span></a>
			<a href="#" class="beltconveyors__link"><img src="img/conv2.jpg" alt=""><span>Наклонные ленточные конвейеры</span></a>
			<a href="#" class="beltconveyors__link"><img src="img/conv3.jpg" alt=""><span>Z-образные ленточные конвейеры</span></a>
			<a href="#" class="beltconveyors__link lastmarginoff"><img src="img/conv4.jpg" alt=""><span>Г- образные ленточные конвейеры</span></a>
		
		
		
		<div class="beltconveyors__img_box">
			<a href="#" class="beltconveyors__link"><img src="img/conv5.jpg" alt=""><span>Прямые неприводные рольганги</span></a>
			<a href="#" class="beltconveyors__link"><img src="img/conv6.jpg" alt=""><span>Прямые приводные рольганги</span></a>
			<a href="#" class="beltconveyors__link"><img src="img/conv7.jpg" alt=""><span>Поворотный неприводной рольганг</span></a>
			<a href="#" class="beltconveyors__link lastmarginoff"><img src="img/conv8.jpg" alt=""><span>Поворотный приводной рольганг </span></a>
		</div> -->





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