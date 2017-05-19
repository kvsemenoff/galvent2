<?php 
/*
Template name: Примеры работ
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


<div class="container center container_margin">	
	<div class="examples__height">
		<h2 class="h2 h2_dark examples__caption">Примеры наших рaбот</h2>
		
			<?php $args = array(
				'post_type' => 'job'
			);


			$query = new WP_Query($args);

			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				<div class="examples__block">
			<h4 class="examples__block_caption"><?php the_title(); ?></h4>
			<div class="examples__slider">
				<?php if( class_exists('Dynamic_Featured_Image') ) { ?>
				<?php global $dynamic_featured_image; ?>
				<?php $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() ); ?>
				<?php foreach( $featured_images as $image ) { ?>
				
				<div class="item">
					<div class="examples__img">
						<a href="<?php echo $image['full'] ?>" data-fancybox-group="group" ><img src="<?php echo $image['full'] ?>" alt=""></a>
					</div>
				</div>
				<?php } ?>

				<?php } ?>
				
			</div>
			<p class="examples__block_text"><?php the_content(); ?></p>
		</div>	

				<?php }?>
		
	<!-- 	<div class="examples__block">
			<h4 class="examples__block_caption">Установка конвейеров для ООО ХлебоПром</h4>
			<div class="examples__slider">
				<div class="item">
					<div class="examples__img">
						<a href="img/examples2.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples2.jpg" alt=""></a>
					</div>
				</div>
				<div class="item">
					<div class="examples__img">
						<a href="img/examples1.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples1.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<p class="examples__block_text">Основная сфера деятельности нашего предприятия – выпуск конвейеров и рольгангов. Наличие высококвалифицированных специалистов  позволяет спроектировать и изготовить оборудование, которое будет максимально соответствовать Вашим требованиям. Мы специализируемся на изготовлении и продаже конвейерных систем различных видов, подходящих практически для всех отраслей промышленности.</p>
		</div>
		<div class="examples__block">
			<h4 class="examples__block_caption">Установка конвейеров для ООО ХлебоПром</h4>
			<div class="examples__slider">
				<div class="item">
					<div class="examples__img">
						<a href="img/examples3.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples3.jpg" alt=""></a>
					</div>
				</div>
				<div class="item">
					<div class="examples__img">
						<a href="img/examples1.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples1.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<p class="examples__block_text">Основная сфера деятельности нашего предприятия – выпуск конвейеров и рольгангов. Наличие высококвалифицированных специалистов  позволяет спроектировать и изготовить оборудование, которое будет максимально соответствовать Вашим требованиям. Мы специализируемся на изготовлении и продаже конвейерных систем различных видов, подходящих практически для всех отраслей промышленности.</p>
		</div>

		<div class="examples__block">
			<h4 class="examples__block_caption">Установка конвейеров для ООО ХлебоПром</h4>
			<div class="examples__slider">
				<div class="item">
					<div class="examples__img">
						<a href="img/examples3.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples3.jpg" alt=""></a>
					</div>
				</div>
				<div class="item">
					<div class="examples__img">
						<a href="img/examples1.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples1.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<p class="examples__block_text">Основная сфера деятельности нашего предприятия – выпуск конвейеров и рольгангов. Наличие высококвалифицированных специалистов  позволяет спроектировать и изготовить оборудование, которое будет максимально соответствовать Вашим требованиям. Мы специализируемся на изготовлении и продаже конвейерных систем различных видов, подходящих практически для всех отраслей промышленности.</p>
		</div>
		<div class="examples__block">
			<h4 class="examples__block_caption">Установка конвейеров для ООО ХлебоПром</h4>
			<div class="examples__slider">
				<div class="item">
					<div class="examples__img">
						<a href="img/examples3.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples3.jpg" alt=""></a>
					</div>
				</div>
				<div class="item">
					<div class="examples__img">
						<a href="img/examples1.jpg" data-fancybox-group="group"><img src="<?php echo get_template_directory_uri(); ?>/img/examples1.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<p class="examples__block_text">Основная сфера деятельности нашего предприятия – выпуск конвейеров и рольгангов. Наличие высококвалифицированных специалистов  позволяет спроектировать и изготовить оборудование, которое будет максимально соответствовать Вашим требованиям. Мы специализируемся на изготовлении и продаже конвейерных систем различных видов, подходящих практически для всех отраслей промышленности.</p>
		</div> -->
	</div>
	<span class="examples__look_more">смотреть еще работы</span>
</div>

<?php get_footer(); ?>	