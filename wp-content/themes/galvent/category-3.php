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

<div class="last__wrap">
	<div class="container">
		<h2 class="h2 h2_dark">Последние новости</h2>
		<div class="row">
			<?php 
			$query = new WP_Query('cat=3');
			while ( $query->have_posts() ) {
				$query->the_post();
				?>
				<div class="col-md-4">
					<div class="article">
						<div class="article__img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
							<a href="#" class="article__img-descr"><?php the_title(); ?></a>
						</div>
						<div class="article__content">
						<p class="article__txt"><?php  do_excerpt(get_the_excerpt(), 7); ?></p>
							<div class="article__info clearfix">
								<div class="article__date"><?php the_time('d.m.Y'); ?></div>
								<div class="article__button">
									<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }?>

			</div>
		</div>
	</div>
	<?php get_footer(); ?>