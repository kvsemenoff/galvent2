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
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;
			?>
			<h1><?php echo $category_id = $categories[0]->name; ?></h1>
			
			<p class="beltconveyors__text">
				<?php echo $category_id = $categories[0]->description; ?>		
			</p>	
			
			<div class="beltconveyors__img_box beltconveyors__img_box_marginbot">

				<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args = array(
					'cat' => 8,
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
	</div>
</div>

<?php get_template_part( 'content', 'order' ); ?>

<?php get_footer(); ?>