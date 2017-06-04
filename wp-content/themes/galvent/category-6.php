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

<div class="container container_padding_top beltconveyors__txt content-part">
	<div class="row">
		<div class="col-md-12">
		<?php
		$parent_id = 6;
	# получаем дочерние рубрики
		$sub_cats = get_categories( array(
			'child_of' => $parent_id,
			'hide_empty' => 0
			) );

		if( $sub_cats ){
			foreach( $sub_cats as $cat ){
				?>
				<h2 class="h2 h2_dark beltconveyors__caption"><?php echo $cat->name; ?></h2>
				<p class="beltconveyors__text"><?php echo $cat->description; ?></p>	
				<div class="beltconveyors__img_box beltconveyors__img_box_marginbot">
				<?php	
				$args = array(
					'cat' => $cat->term_id,
					);
	$query = new WP_Query($args);
	while ( $query->have_posts() ) {
					$query->the_post();
				?>
				<a href="<?php the_permalink(); ?>" class="beltconveyors__link" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?><span><?php the_title(); ?></span></a>
				<?php
					}
					?>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>

<?php get_template_part( 'content', 'order' ); ?>

<?php get_footer(); ?>