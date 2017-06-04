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
		<h1>Последние статьи</h1>
		<div class="row">

			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'cat' => 2,
				'paged' => $paged
			);

			$query = new WP_Query($args);
			while ( $query->have_posts() ) {
				$query->the_post();
			?>
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<?php the_post_thumbnail(); ?>
						<a href="<?php the_permalink(); ?>"><span class="article__img-descr"><?php the_title(); ?></span></a>
					</div>
					<div class="article__content">
						<p class="article__txt"><?php  do_excerpt(get_the_excerpt(), 7); ?></p>
						<div class="article__info clearfix">
							<div class="article__date"><?php the_time('d.m.Y'); ?></div>
							<div class="article__button">
								<a href="<?php the_permalink(); ?>" class="button button__view" title="<?php the_title(); ?>">
									<span class="button__view_txt button__view_txt2">читать подробнее</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php }?>
		
	</div>
</div>
</div>

<div class="wppagination">
	<div class="container">
		<?php 
		$nav = get_the_posts_pagination();
		$nav = preg_replace('~<h2.*?h2>~', '', $nav);
		echo $nav;	
		?>	
	</div>
</div>
<?php get_footer(); ?>