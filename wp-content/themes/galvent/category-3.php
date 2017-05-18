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

<div class="last-article">
	<div class="container">
		<h2 class="h2 h2_dark">Последние новости</h2>
		<div class="row">
			<?php 
			$query = new WP_Query('cat=3');
			while ( $query->have_posts() ) {
				$query->the_post();
				?>
				<div class="news-box news-box__view">
					<span>28.03.17</span>
					<div class="news-box__link">
						<a class="news-box__link_1"	href="#"><?php the_title(); ?></a>
					</div>
					<div class="news-box__link">
						<a class="news-box__link_2"	href="#">читать далее >> </a>
					</div>
				</div>
				<?php }?>

			</div>
		</div>
	</div>
	<?php get_footer(); ?>